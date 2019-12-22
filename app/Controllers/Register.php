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

				
			}
		}
	}
}
