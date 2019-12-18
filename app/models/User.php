<?php  
class User extends Model {
	public $_id, $_username, $_email, $_user, $_code;

	public function __construct() {
		parrent::__construct('users');
	}

	

}