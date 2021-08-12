<?php

function check_logged_in(){
    if(isset($_SESSION['auth'])) return true;
    else{
        header("Location: ../login");
        exit;
    }
}