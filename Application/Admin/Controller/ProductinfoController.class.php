<?php

namespace Admin\Controller;

use Admin\Logic\ProductinfoLogic;
use Think\Controller;

class ProductinfoController extends Controller {
	// 发布产品
	public function product_launch() {
		$p = new ProductinfoLogic ();
		
		$result = $p->pro_launch ( $data );

		
		$this->display ( 'Productinfo/product_launch' );
	}
	public function peoduct_list(){
		
		$this->display('Productinfo/product_list');
	}
	public function peoduct_turnlist(){
		
		$this->display('Productinfo/product_turnlist');
	}
}

?>