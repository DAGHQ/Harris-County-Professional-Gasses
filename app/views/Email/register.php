<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register Email</title>
</head>
<body style="background-color: #f3f3f3; margin:0; padding:0;">
	<div style=" margin: 0 0 30px 0; padding: 0;">
		<div style="background-color: #fff; padding: 10px; color: #32a852; font-weight: 800; border-bottom: 2px solid #32a852; box-shadow: 4px 4px 4px #32a852;">
			<div style="display: grid; grid-column: 6;">
				<div>
					<h1 style="margin: 0; padding:0;">Harris County</h1>
					<h1 style="margin: 0; padding:0;">Professional</h1>
					<h1 style="margin: 0; padding:0;">Gases</h1>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color: #32a852; padding: 10px; margin-bottom: 30px; color: #222; font-weight: bold; box-shadow: 4px 4px 4px black;">
		<p>Hello ' . $username . ', thanks for registering for Harris County Porfessional Gases. If you did not register for our site please disregard this email. Your credintials to login have been provided below. Please ensure to click the button below to activate your account.</p>
		<hr>
		<br>
		<p>Username: ' . $username . '</p>
		<p>Email: ' . $email . '</p>
		<p>Password: <span style="color: darkred;"> ' . *********** . ' </span>  (Blocked for Security)</p>
		<hr>
		<br>
		<a style="background: #222; color: #32a852;float: center; text-align: center; padding: 10px; text-decoration: none; border-radius: 10px;" href="'. SSL . '://' . SITE_URL . '/activate/user/' . $username . '/' . $code . '">Activate Account</a>
		<br>
		<br>
		<hr>
		<p>If the button above does not work copy this link! ' . SSL . '://' . SITE_URL . '/activate/user/' . $username . '/' . $code . '</p>
	</div>

	<div style="background: #fff; padding: 10px;">
		<p style="text-align: center;"><small>Copyright &copy; ' . APP_NAME . ' 2019. Allrights reserved! Developed By <a style="color: #32a852; text-decoration: none;" href="#">Fallout Solutions</a>.</small></p>
	</div>
</body>
</html>