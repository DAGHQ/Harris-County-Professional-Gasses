<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6 user-form">
		<form action="/login/submit" method="post" class="">
			<?php  
				if(isset($_SESSION['errors'])) {
					$errors = $_SESSION['errors'];
					echo "<div class='alert alert-danger'>";
					foreach($errors as $error) {
						echo $error . "<br>";
					}
					echo "</div>";

					unset($_SESSION['errors']);
				}

				if(isset($_SESSION['Flash_Message'])) {
					echo "<div class='alert alert-success'>";
					Session::flash('Flash_Message');
					echo "</div>";
				}
			?>
			<div class="form-group">
				<label for="username">Username Or Email: </label>
				<input type="text" class="form-control" placeholder="Username or Email" name="username" autocomplete="off" id="username">
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" id="password">
			</div>
			 <div class="form-group">
		     <div class="form-check">
		       <input class="form-check-input" type="checkbox" id="remember" name="remember">
		       <label class="form-check-label" for="remember">
		         Remember Me
		       </label>
		    </div>
		  </div>
		  <div class="form-group">
		  	<input type="submit" value="Login" name="login" class="btn btn-block btn-success">
		  </div>
		</form>
	</div>
	<div class="col-md-3"></div>
</div>