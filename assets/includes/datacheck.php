<?php

function isAvailableUsername($username){
    require '../../assets/setup/dbh.inc.php';

    $sql = "SELECT id FROM members WHERE username=?;";
    $stmt = mysqli_stmt_init($conn);


    if (!mysqli_stmt_prepare($stmt, $sql)){
        exit;
    }  
    else {

    
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        return ($resultCheck > 0);
    }
}

function isAvailableEmail($email){
    require '../../assets/setup/dbh.inc.php';

    $sql = "SELECT id FROM members WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        exit;
    }
     
    else {

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        return ($resultCheck > 0);
    }
}