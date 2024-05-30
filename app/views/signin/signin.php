<!--main-->
<?php
$errorsMsg = isset($errors['errors']) ? $errors['errors'] : null;

$oldData = isset($oldData['oldData']) ? $oldData['oldData'] : null;

$logoutMsg = isset($logout_success['logout_success']) ? $logout_success['logout_success'] : null;

?>
<div class="h-100 position-relative">
	<?php 
		if ($logoutMsg != null) {
			echo '<div class="container">
				<div style="transform: translateY(20px)">
					<div class="alert alert-success" role="alert">'.
					$logoutMsg
					.'</div>
				</div>
			</div>';
		}
	?>
	<div class="main-agileinfo">
		<div class="text-center text-white">
			<h2 class="text-48">Login</h2>
		</div>
		<!--form-stars-here-->
		<div class="wthree-form">
			<h3 class="text-white font-300 text-center mb-3">HR - The Key to Business Success.</h3>
			<form action="<?php echo _WEB_ROOT; ?>/auth/handle_sign_in" method="post">
				<div class="px-5">
					<div class="mt-4">
						<div>
							<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo (!empty($oldData['username']) ? $oldData['username'] : false) ?>"/>
						</div>
						<?php 
							if (!empty($errorsMsg) && array_key_exists('username', $errorsMsg)) {
								echo '<p style="color: red">'.$errorsMsg["username"].'</p>';
							}
						?>
					</div>
					<div class="mt-4">
						<div>
							<input type="password" name="password" class="form-control" id="password" placeholder="Password" />
						</div>
						<p style="color: red"><?php echo (!empty($errorsMsg) && array_key_exists('password', $errorsMsg) ? $errorsMsg['password'] : '') ?></p>
					</div>
				</div>
				<div class="submit-agileits text-center px-5 mt-4">
					<input type="submit" class="btn btn-primary" value="Login" style="width: 100%">
				</div>
			</form>
		</div>
	</div>
</div>