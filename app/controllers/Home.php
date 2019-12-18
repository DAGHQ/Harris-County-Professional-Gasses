<?php  
class Home {
	public function indexAction() {
		View::render("Home" . DS . "index");
	}
}