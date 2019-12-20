<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=APP_NAME?> | Home</title>
	<!--  
		You dont need to get bootstrap its being pulled in by View::inc("header") Look at app/views/inc for more info
	-->
	<?php View::inc("header"); ?>
</head>
<body>
	<?php View::inc("navbar-top"); ?>
	<br>
	<?php View::inc("top-body"); ?>
	
	<?php View::page('Home', "mid-body"); ?>

	<?php View::page('Home', "lower-body"); ?>
	<?php View::inc("footer"); ?>
</body>
</html>