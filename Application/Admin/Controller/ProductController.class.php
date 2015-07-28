<?php

namespace Admin\Controller;
use Admin\Logic\UserinfoLogic;
use Think\Controller;
use Admin\Logic\ProductinfoLogic;

class ProductController extends Controller {
	// 发布产品
	public function product_launch() {
		$pro = new ProductinfoLogic ();
		$data='aasdasdsa';
		$result=$pro->pro_launch($data);
		dump($data);
		echo ($data);
		
		$this->display ( 'Product/product_launch' );
	}
}

?>