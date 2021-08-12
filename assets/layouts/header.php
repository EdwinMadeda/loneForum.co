
<?php 
    session_start();

    require '../assets/setup/env.php';
    require '../assets/setup/dbh.inc.php';
    require '../assets/includes/auth_functions.php';
    require '../assets/includes/security_functions.php';

        generate_csrf_token();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo APP_DESCRIPTION; ?>">
    <meta name="author" content="<?php echo APP_OWNER;?>">

    <title><?php echo APP_NAME.' | '.TITLE;?></title>

    <!-- CSS styles -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="custom.css">

    <?php 
        if(TITLE == 'Signup' || TITLE == 'Login')
        echo '<link rel="stylesheet" href="../assets/css/signup_login.css">';
    ?>

    <style>
        header{
            /* background: url(<?php echo '../assets/images/4K\ No\ Logo\ G555.png'?>);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;  */
        }

        header .bg-overlay-img{
             background: url(<?php echo '../assets/images/4K\ No\ Logo\ G555.png'?>);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; 

            width: 100%;
            height: 100vh;
        
            position: fixed;
            z-index: -5;
        }


    </style>

</head>
<body>
    <header>
    <div class="bg-overlay-img"></div>
    <div class="bg-overlay"></div>
        

 