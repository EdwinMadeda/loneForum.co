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
    $_SESSION['status']['loginstatus'] = 'Request could not be validated';

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
$pwd = input_filter($input_fields['pwd']);
$remember_me = $input_fields['remember_me'];

if(empty($username) || empty($pwd))
   send_feedback('error','All fields are mandatory!');

else{

    // if($input_fields["remember_me"])
   


    /*
    * -------------------------------------------------------------------------------
    *  Creating SESSION Variables
    * -------------------------------------------------------------------------------
    */

    $sql = "SELECT * FROM members WHERE username=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {

        $_SESSION['ERRORS']['scripterror'] = 'SQL ERROR';
        exit();
    } 
    else {

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (!$row = mysqli_fetch_assoc($result)) 
        send_feedback('error','No such user');
        
        else{

            $pwdCheck = password_verify($pwd, $row['password']);

            if ($pwdCheck == false) 
                send_feedback('error','Wrong password');

            else if ($pwdCheck == true) {

                session_start();

                if($row['verified_at'] != NULL)
                    $_SESSION['auth'] = 'verified'; 
                
                else
                    $_SESSION['auth'] = 'loggedin';

                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['profile_image'] = $row['avatar'];
                    $_SESSION['user_level'] = $row['user_level'];
                    $_SESSION['created_at'] = $row['created_at'];
                    $_SESSION['updated_at'] = $row['updated_at'];
                    $_SESSION['last_login_at'] = $row['last_login_at'];

                 /*
        * -------------------------------------------------------------------------------
        *   Updating last_login_at
        * -------------------------------------------------------------------------------
        */

        $sql = "UPDATE members SET last_login_at=NOW() WHERE username=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {

            $_SESSION['ERRORS']['sqlerror'] = 'SQL ERROR';
            exit();
        }
        else {

            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
        }

        /*
        * -------------------------------------------------------------------------------
        *   Setting rememberme cookie
        * -------------------------------------------------------------------------------
        */

        if($remember_me){

            $selector = bin2hex(random_bytes(8));
            $token = random_bytes(32);

            $sql = "DELETE FROM auth_tokens WHERE user_email=? AND auth_type='remember_me';";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {

                $_SESSION['ERRORS']['scripterror'] = 'SQL ERROR';
                exit();
            }
            else {

                mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
                mysqli_stmt_execute($stmt);
            }

            setcookie(
                'rememberme',
                $selector.':'.bin2hex($token),
                time() + 864000,
                '/',
                NULL,
                false, // TLS-only
                true  // http-only
            );

            $sql = "INSERT INTO auth_tokens (user_email, auth_type, selector, token, expires_at) 
                    VALUES (?, 'remember_me', ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {

                $_SESSION['ERRORS']['scripterror'] = 'SQL ERROR';
                exit();
            }
            else {
                
                $hashedToken = password_hash($token, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ssss", $_SESSION['email'], $selector, $hashedToken, date('Y-m-d\TH:i:s', time() + 864000));
                mysqli_stmt_execute($stmt);
            }
        }

        // header("Location: ../../home/");
        send_feedback('success','Login Successful');
            }
        }
    }

}