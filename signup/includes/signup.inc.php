<?php

session_start();

require '../../assets/includes/auth_functions.php';
require '../../assets/includes/security_functions.php'; 
require '../../assets/includes/datacheck.php';

$DATA_RAW = file_get_contents("php://input");
$DATA_OBJ = json_decode($DATA_RAW);
$info = (object)array();


if(!isset($DATA_OBJ->data_type)) die;

$input_fields = json_decode($DATA_OBJ->data, true);

foreach ($input_fields as $key => $value) 
$input_fields[$key] = _cleaninjections(trim($value));

/*
* -------------------------------------------------------------------------------
*   Verifying CSRF token
* -------------------------------------------------------------------------------
*/

if(!verify_csrf_token($input_fields['csrf_token'])){
    $_SESSION['status']['signupstatus'] = 'Request could not be validated';

    header("Location: ../");
    exit();
};

require '../../assets/setup/dbh.inc.php';

function input_filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function send_feedback($type, $content, $exit = false){
    echo json_encode(["type" => $type, "content" => $content]);
    exit;
}

$username = input_filter($input_fields['username']);
$email = input_filter($input_fields['email']);
$pwd = input_filter($input_fields['pwd']);
$pwd_repeat = input_filter($input_fields['pwd_repeat']);

if(empty($username) || empty($email) || empty($pwd) || empty($pwd_repeat))
   send_feedback('error','All fields are mandatory!');
     
elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username))
    send_feedback('error','Invalid username!');

elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    send_feedback('error','Invalid email!');

elseif($pwd !== $pwd_repeat)
    send_feedback('error','passwords do not match!');

else{
   
    $level = 1;
    if(isAvailableUsername($username))
        send_feedback("error" ,"username already taken");

    elseif(isAvailableEmail($email))
        send_feedback("error" ,"email already taken");
 
}


$sql = "INSERT INTO members(username, email, password, created_at) VALUES (?,?,?, NOW())";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) 
    send_feedback('script_error', 'SQL ERROR');

else {

$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

/*
* -------------------------------------------------------------------------------
*   Sending Verification Email for Account Activation
* -------------------------------------------------------------------------------
*/

mysqli_stmt_close($stmt);
mysqli_close($conn);

// require 'sendverificationemail.inc.php';
send_feedback('success','Account Created Successfully');

}


    
   










