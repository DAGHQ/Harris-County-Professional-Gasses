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
	<div class="container">
		<div class="row">
			<h1 class="col-md-6">Harris County Professional Gasses</h1>
			<ul>
				<h4>These are some ammenadies</h4>
				<br>
				<li>Item 1</li>
				<li>Item 2</li>
				<li>Item 3</li>
			</ul>
		</div>
	</div>

	<h2 class= "Text Center">Sample text for creating your account below</h2>
	
	<div class="container">
		<div class="row">
			<div class="jumbotron"></div>
		</div>
	</div>
	
	<?php View::inc("footer"); ?>
</body>
</html>