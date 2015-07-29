<?php
namespace Admin\Controller;
use Admin\Logic\OrderinfoLogic;
use Think\Controller;

class OrderinfoController extends Controller {
	public function order_list() {
		$this->display ( 'Orderinfo/order_list' );
	}
	public function works_list() {
		$this->display ( 'Orderinfo/works_list' );
	}
	public function order_going() {
		$this->display ( 'Orderinfo/order_going' );
	}
}

