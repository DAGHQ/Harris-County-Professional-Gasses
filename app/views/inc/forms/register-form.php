<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6 user-form">
		<form action="/register/submit" method="post" class="">
			<?php  
				if(isset($_SESSION['errors'])) {
					$errors = Session::get('errors');
					echo "<div class='alert alert-danger'>";
					foreach($errors as $error) {
						echo $error . "<br>";
					}
					echo "</div>";
					$user = Session::get('fields');

					$username = $user['username'];
					$email = $user['email'];
					unset($_SESSION['errors']);
					unset($_SESSION['fields']);
				} else {
					$username = '';
					$email = '';
				}
			?>
			<div class="form-group">
				<label for="username">Username: </label>
				<input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" id="username" value="<?php echo $username ?>">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off" id="email" value="<?php echo $email ?>">
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" id="password">
			</div>
			<div class="form-group">
				<label for="cpassword">Confirm Password: </label>
				<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" autocomplete="off" id="cpassword">
			</div>
			<div class="form-group">
		     <div class="form-check">
		       <input class="form-check-input" type="checkbox" id="tos" name="tos">
		       <label class="form-check-label" for="tos">
		         Do you agree with our <a href="#">Terms of Service</a>?
		       </label>
		    </div>
		  </div>
		  <div class="form-group">
		  	<input type="submit" name="register" value="Register" class="btn btn-block btn-success">
		  </div>
		</form>
	</div>
	</div>
	<div class="col-md-3"></div>
</div>