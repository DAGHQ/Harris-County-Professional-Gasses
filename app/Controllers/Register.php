<?php 
class Register {
	public function indexAction() {
		View::render("Register" . DS . "index");
	}

	public function submitAction() {
		if(isset($_POST['register'])) {
			$errors = [];

			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			$username = Helper::clean(DB::getInstance()->escape($username));
			$email = Helper::clean(DB::getInstance()->escape($email));
			$password = Helper::clean(DB::getInstance()->escape($password));
			$cpassword = Helper::clean(DB::getInstance()->escape($cpassword));

			$fields = [
				'username' => $username,
				'email' => $email
			];

			if(!isset($_POST['tos'])) {
				$errors[] = "You must agree to our Terms of Service to create an account.";
			}

			if(empty($username) || empty($email) || empty($password) || empty($cpassword)) {
				$errors[] = "All fields for registration are required.";
			} else {
				if(strlen($username) < 6) {
					$errors[] = "Your username must be at least 6 characters long.";
				}

				if(strlen($username) > 30) {
					$errors[] = "Your username can not be less than 30 characters";
				}

				if(strlen($password) < 8) {
					$errors[] = "Your password must be at least 8 characters.";
				}

				if(strlen($password) > 25) {
					$errors[] = "Your password can not be longer than 25 characters.";
				}

				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$errors[] = "You must use a valid email.";
				}

				$query = DB::getInstance()->select("users",['user_username' => $username]);

				if(DB::getInstance()->query_worked($query)) {
					$errors[] = "The username you used to register already exists.";
				}

				$query = DB::getInstance()->select("users",['user_email' => $email]);

				if(DB::getInstance()->query_worked($query)) {
					$errors[] = "The email you used to register already exists.";
				}

				if($password !== $cpassword) {
					$errors[] = "Your password and confirm password do not match.";
				}
			}

			if(!empty($errors)) {
				Session::create('errors', $errors);
				Session::create('fields', $fields);
				Helper::redirect("/register");
			} else {
				$code = md5($username . $password . $email);
				$password = password_hash($password, PASSWORD_BCRYPT);

				DB::getInstance()->insert(
					'users',
					['user_username' => $username,
					'user_email' => $email,
					'user_password' => $password,
					'user_code' => $code]
				);

				$body = '
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
									<p>Password: <span style="color: darkred;"> ***********  </span>  (Blocked for Security)</p>
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

						';

						SendMail::register([$email => $username], APP_NAME . " | Registration", $body);

						Session::message('You have successfuly registered your account. We sent an email to ' . $email . ' please confirm your email.');
						Helper::redirect("/login");

			}
		}
	}
}
