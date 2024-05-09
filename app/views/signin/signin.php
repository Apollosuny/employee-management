<!--main-->
<?php 
	$errorsMsg = $errors['errors'];
	$oldData = $oldData['oldData'];
?>
<div class="h-100 position-relative">
	<div class="main-agileinfo">
		<div class="text-center text-white">
			<h2 class="text-48">Login</h2>
		</div>
		<!--form-stars-here-->
		<div class="wthree-form">
			<h3>HR - The Key to Business Success.</h3>
			<form action="<?php echo _WEB_ROOT; ?>/auth/handle_sign_in" method="post">
				<div class="form-sub-w3">
					<div>
						<input type="text" name="username" placeholder="Username" value="<?php echo (!empty($oldData['username']) ? $oldData['username'] : false) ?>"/>
						<div class="icon-w3">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
					</div>
					<?php 
						if (!empty($errorsMsg) && array_key_exists('username', $errorsMsg)) {
							echo '<p style="color: red">'.$errorsMsg["username"].'</p>';
						}
					?>
				</div>
				<div class="form-sub-w3">
					<div>
						<input type="password" name="password" id="password" placeholder="Password" />
						<div class="icon-w3">
							<i class="fa fa-unlock-alt" aria-hidden="true"></i>
						</div>
					</div>
					<p style="color: red"><?php echo (!empty($errorsMsg) && array_key_exists('password', $errorsMsg) ? $errorsMsg['password'] : '') ?></p>
				</div>
				<label class="anim">
					<input type="checkbox" class="checkbox">
					<span>Remember Me</span>
					<a href="#">Forgot Password</a>
				</label>
				<div class="clear"></div>
				<div class="submit-agileits">
					<input type="submit" value="Login">
				</div>
				<div class="another-login">
					<p>Or login with</p>
					<div class="d-flex g-20 justify-content-center">
						<div class="wrapper-icon"><i class="fab fa-facebook-f text-30"></i></div>
						<div class="wrapper-icon"><i class="fab fa-google text-30"></i></div>
					</div>
				</div>
				<footer style="font-size: clamp(10px,3vw,15px);">
					<span>Do not have an account?</span>
					<span><a href="<?php echo _WEB_ROOT; ?>/signup" style="text-decoration: none;color:rgb(53, 215, 215)">Register now!</a></span>
				</footer>
			</form>
		</div>
	</div>
</div>