<!--header-->
<div class="header-w3l" style="margin-top: -32px;">
	<h1>Login </h1>
</div>
<!--main-->
<div class="main-agileinfo">
	<!--form-stars-here-->
	<div class="wthree-form">
		<h2>HR - The Key to Business Success.</h2>
		<form action="#" method="post">
			<div class="form-sub-w3">
				<input type="text" name="Username" placeholder="Username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
			</div>
			<div class="form-sub-w3">
				<input type="password" name="Password" id="password" placeholder="Password" required="" />
				<div class="showPass">
					<i class="far fa-eye fa-regular" id="eye1"></i>
				</div>
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
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
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-google"></i>
			</div>
			<footer style="font-size: clamp(10px,3vw,15px);">
				<span>Do not have an account?</span>
				<span><a href="<?php echo _WEB_ROOT; ?>/signup" style="text-decoration: none;color:rgb(53, 215, 215)">Register now!</a></span>
			</footer>
		</form>
	</div>
</div>

<script>
	// Password 
	const password = document.querySelector("#password");
	const eyeIcon1 = document.querySelector("#eye1");

	eyeIcon1.addEventListener("click", function() {
		// eyeIcon.classList.toggle('fa-eye-slash')
		const type2 = password.getAttribute("type") === "password" ? "text" : "password";
		password.setAttribute("type", type2);
		if (type2 === "text") {
			this.classList.remove('fa-eye')
			this.classList.add('fa-eye-slash');
		} else {
			this.classList.remove('fa-eye-slash');
			this.classList.add('fa-eye')
		}
	})
</script>