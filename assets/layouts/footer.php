<footer>
    <div class="container">
        <h1 class="logo">
          <a href=""><span>lone</span>Forum.Co</a>
        </h1>
        <div class="social">
            <a href="#"><img src="images/facebook.svg"></a>
            <a href="#"><img src="images/twitter.svg"></a>
            <a href="#"><img src="images/instagram.svg"></a> 
            <a href="#"><img src="images/linkedin.svg"></a>
            <a href="#"><img src="images/pinterest.svg"></a>             
        </div>
    </div>
    <div class="container">
        <p>&copy; 2021 copyright all rights reserved</p>
    </div>
</footer>

<?php 
    if(TITLE == 'Signup' || TITLE == 'Login')
    echo '<script src="../assets/js/signup_login.js"></script>';
?>

<script src="../assets/js/app.js"></script>
</body>
</html>