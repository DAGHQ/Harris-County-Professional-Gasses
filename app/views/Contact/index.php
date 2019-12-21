<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=APP_NAME?> | Contact</title>

	<?php View::inc("header"); ?>
</head>
<body>
	<?php View::inc("navbar-top"); ?>
	<br>
	<?php View::inc("top-body"); ?>
	
	<?php View::page("Contact", "Contact-body"); ?>
</body>
</html>