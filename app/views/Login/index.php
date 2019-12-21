<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=APP_NAME?> | Login</title>
	<!--  
		You dont need to get bootstrap its being pulled in by View::inc("header") Look at app/views/inc for more info
	-->
	<?php View::inc("header"); ?>
</head>
<body>
	<?php View::inc("navbar-top"); ?>

	<?php View::inc("top-body"); ?>
	<div class="container">
		<?php View::form("login-form"); ?>
	</div>
<?php View::inc("footer"); ?>
</body>
</html>