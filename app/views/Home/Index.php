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
	<br>
	<div class="container">
		<div class="row">
			<h1 class="col-md-4 text-left">Harris County Professional &nbsp; Gases</h1>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<ul>
					<p>Some Listed Sample Items</p>
					<li>Item 1</li>
					<li>Item 2</li>
					<li>Item 3</li>
					<li>Item 4</li>
				</ul>
			</div>
		</div>
	</div>
	<br>
	<h5 class= "text-center">Sample text for creating your account below</h5>
	
	<div class="container">
		<div class="row">
			<div class="jumbotron col-md-12 ">
				<form action="">
					<div class="form-group">
						<div class="row">
							<input type="text" class="form-control col-md-2">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="form-control col-md-2">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="form-control col-md-2">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="form-control col-md-2">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="form-control col-md-2">
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="row">
							<input type="text" class="form-control col-md-2">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="form-control col-md-2">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="form-control col-md-2">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="form-control col-md-2">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="form-control col-md-2">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="card col-md-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi soluta perferendis officia labore odio minus, unde totam, delectus corporis itaque tenetur ipsa optio officiis culpa debitis dolore molestiae minima eius.</p>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="card col-md-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptatem, vero unde quaerat nobis, ab excepturi tenetur harum architecto debitis voluptates porro? Nihil maiores et eos, soluta odit, inventore excepturi.</p>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="card col-md-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatem at architecto quidem iure inventore nobis officiis illum totam adipisci laudantium porro nesciunt fugit doloremque culpa, quod praesentium, quisquam debitis.</p>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<?php View::inc("footer"); ?>
</body>
</html>