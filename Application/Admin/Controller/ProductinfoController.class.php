<?php

namespace Admin\Controller;

use Admin\Logic\ProductinfoLogic;
use Think\Controller;

class ProductinfoController extends Controller {
	// 发布产品
	public function product_launch() {
		if ($_POST) {
			
			$arr = $_POST;
			$condition ['add_time'] = time ();
			$condition ['add_ip'] = get_client_ip ();
			$map = array_merge ( $condition, $arr );
			$p = new ProductinfoLogic ();
			
			$result = $p->pro_launch ( $map );
			if ($result > 0) {
				$this->success ( '添加成功！' );
			} else {
				$this->error ( '添加失敗！' );
			}
		} else {
			
			$this->display ( 'Productinfo/product_launch' );
		}
	}
	public function peoduct_list() {
		$this->display ( 'Productinfo/product_list' );
	}
	public function peoduct_turnlist() {
		$this->display ( 'Productinfo/product_turnlist' );
	}
}

