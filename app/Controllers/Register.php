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

			if(!isset($_POST['tos'])) {
				$errors[] = "You must agree to our Terms of Service to create an account.";
			}

			if(!empty($errors)) {
				$_SESSION['errors'] = $errors;
				Helper::redirect("/register");
			} else {

			}
		}
	}
}
