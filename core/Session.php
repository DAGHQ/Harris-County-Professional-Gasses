<?php 
class Session {
	public static function create($name, $value) {
		return $_SESSION[$name] = $value;
	}

	public static function get($name, $echo = false) {
		if($echo) {
			echo $_SESSION[$name];
		} else {
			return $_SESSION[$name];
		}
	}

	public static function message($value) {
		self::create('Flash_Message', $value);
	}

	public static function delete($name) {
		unset($_SESSION[$name]);
	}

	public static function flash($name) {
		self::get($name, true);
		self::delete($name);
	}
}