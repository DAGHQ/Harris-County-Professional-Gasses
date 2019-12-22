<?php  
class Email {
	public function viewAction($template) {
		View::render("Email" . DS . $template);
	}
}