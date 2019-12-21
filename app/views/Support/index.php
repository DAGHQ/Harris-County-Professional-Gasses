<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=APP_NAME?> | Support</title>
	<?php View::inc("header"); ?>
</head>
<body>
	<?php View::inc("navbar-top"); ?>
	<?php View::inc("top-body"); ?>
	<?php View::page("Support", "Support-body"); ?>
	<?php View::inc("footer"); ?>
</body>
</html>