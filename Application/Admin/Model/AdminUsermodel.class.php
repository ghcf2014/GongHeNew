<?php
namespace Admin\Model;
use Think\Model;
class AdminUserModel extends Model{

	private $username;
	private $password;
	private $verify;
	/**
	 * @return $username
	 */
	private function __get($username) {

		echo $this->$username;
	}

	/**
	 * @param !CodeTemplates.settercomment.paramtagcontent!
	 */
	public function __set($username,$value) {
		$this->$username = $value;
	}


}



























































