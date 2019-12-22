<?php 
class Login {
	public function indexAction() {
		View::render("Login" . DS . "index");
	}

	public function submitAction() {
		if(isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$username = Helper::clean(DB::getInstance()->escape($username));
			$password = Helper::clean(DB::getInstance()->escape($password));

			$errors = [];

			if(empty($username) || empty($password)) {
				$errors[] = "Both the username and password field are required.";
			} 

			$query = DB::getInstance()->query("SELECT * FROM users WHERE user_username = '$username' OR user_email = '$email'");
			if(DB::getInstance()->query_worked($query)) {
				while($row = DB::getInstance()->assoc($query)) {
					$username = $row['user_username'];
					$email = $row['user_email'];
					$code = $row['user_code'];
					$active = $row['user_valid'];
					$rank = $row['user_group'];
					$db_password = $row['user_password'];
					$user_id = $row['user_id'];
				}
				if($active != 1) {
					$errors[] = "Your account has not been activated yet.";
				} else if(password_verify($password, $db_password)) {
					if(isset($_SESSION['remember'])) {
						Session::create('user_logged_in', $username);
						Session::create('user', $user_info);
						Cookie::create('user_logged_in', $username, 7);
					} else {
						Session::create('user_logged_in', $username);
						Session::create('user', $user_info);
					}
				} else {
					$errors[] = "Your login credintials are inccorect.";
				}
			} else {
				$errors[] = "Your login credintials are inccorect.";
			}

			if(!empty($errors)) {
				Session::create('errors', $errors);
				Helper::redirect('/login');
			} else {
				$user_info = [$username, $email, $code, $active, $rank];

				$d2 = new Datetime("now");


				DB::getInstance()->update('users', $user_id, 'user_id', 'user_lastlogin',$d2->format('U'));

				Helper::redirect("/dashboard");
			}
		}
	}
}
