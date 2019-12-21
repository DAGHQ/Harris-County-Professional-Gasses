<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=APP_NAME?> | About</title>
	<!--  
		You dont need to get bootstrap its being pulled in by View::inc("header") Look at app/views/inc for more info
	-->
	<?php View::inc("header"); ?>
</head>
<body>
	<?php View::inc("navbar-top"); ?>

	<?php View::inc("top-body"); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 jumbotron">
				<h3>About</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam enim distinctio voluptas harum, ut vero odit ipsum. Voluptatum excepturi, quam nulla, ratione architecto deleniti magni neque exercitationem natus laborum est.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam enim distinctio voluptas harum, ut vero odit ipsum. Voluptatum excepturi, quam nulla, ratione architecto deleniti magni neque exercitationem natus laborum est.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam enim distinctio voluptas harum, ut vero odit ipsum. Voluptatum excepturi, quam nulla, ratione architecto deleniti magni neque exercitationem natus laborum est.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam enim distinctio voluptas harum, ut vero odit ipsum. Voluptatum excepturi, quam nulla, ratione architecto deleniti magni neque exercitationem natus laborum est.</p>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-3 card" id="Img_Card">
				<h2>Insert Image</h2>
				<img src="" alt="">
			</div>
		</div>
	</div>
<?php View::inc("footer"); ?>
</body>
</html>