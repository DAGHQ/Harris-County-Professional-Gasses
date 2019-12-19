<?php  

class View {
	public static function render($view_name, $ext=".php") {
		require_once "app" . DS . "views" . DS . $view_name . $ext;
	}	

	public static function inc($file) {
		self::render("inc" . DS . $file);
	}

	public static function page($page, $view) {
		self::render($page . DS . $view);
	}
}