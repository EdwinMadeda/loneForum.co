<?php 
	$action_URL = array();

	if(TITLE == 'Signup'){
		$action_URL = [
			"signup" => "./includes/signup.inc.php",
			"login" => "../login/includes/login.inc.php"
		];
	}
	elseif(TITLE == 'Login'){
		$action_URL = [
			"signup" => "../signup/includes/signup.inc.php",
			"login" => "./includes/login.inc.php"
		];
	}
	
?>

<section class="container top">
        <h1 class="logo">
            <a href="../landing/"><span>lone</span>Forum.Co</a>
			
        </h1>
    </section> 

    <section class="users">
	
		<div class="container  <?php echo (TITLE == 'Signup')? 'right-panel-active': '';?>" 
			 id="container">
		<div class="form-container sign-up-container">
			<form action="<?php echo $action_URL['signup']; ?>" onsubmit="return false;" id="sign-up-form" novalidate>
				<h1>Create account</h1>
				<p class="msg"></p>

				<?php insert_csrf_token(); ?>
				<input type="text" name="username" placeholder="username" maxlength="10" minlength="3" required>
				<input type="email" name="email" placeholder="email" required>
				<input type="password" name="password" placeholder="password" minlength="4" required>
				<input type="password" name="password_repeat" placeholder="confirm password" minlength="4" required>
				<button name="submit_sign_up" type="submit">sign up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="<?php echo $action_URL['login']; ?>" onsubmit="return false;" id="sign-in-form" novalidate>
				<h1>Sign in</h1>
				<p class="msg"></p>

				<?php insert_csrf_token(); ?>
				<input type="text" name="username" placeholder="username/email"  maxlength="10" minlength="3" required>
				<input type="password" name="password" placeholder="password" minlength="4" required>
				<div class="checkbox">
					<input type="checkbox" name="rememberme" id="rememberme">
					<label for="rememberme"></label><span>Remember me</span>
				</div>
				<button name="submit_login" type="submit">sign in</button>
			</form>
		</div>

		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel left">
					<h1>Hello, friend!</h1>
					<p>Fill in your credentials to start your journey with us</p>
					<button class="ghost" id="sign-in">Sign in</button>
				</div>
				<div class="overlay-panel right">
					<h1>Welcome back!</h1>
					<p>To keep connected please do log in your personal details</p>
					<button class="ghost" id="sign-up">Sign up</button>
				</div>
			</div>	
		</div>
	</div>
	</section>

</header>