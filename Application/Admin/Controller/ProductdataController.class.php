<?php

namespace Admin\Controller;
use Think\Controller;
class ProductdataController extends  Controller {
	public function data_add(){
		$this->display('Productdata/data_add');
	}
	public function data_type(){
		$this->display('Productdata/data_type');
	}
	public function data_list(){
		$this->display('Productdata/data_list');
	}
}

?>