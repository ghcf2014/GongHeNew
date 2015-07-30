<?php

namespace Admin\Controller;

use Think\Controller;

/**
 *
 * @author shuangshuang
 *         date 7/30
 *         统计数据
 */
class StatisticsController extends Controller {
	
	/**
	 * 平台收入资金统计
	 */
	public function income_money() {
		$this->display ( 'Statistics/income_money' );
	}
	/**
	 * 平台支出资金统计
	 */
	public function out_money() {
		$this->display ( 'Statistics/out_money' );
	}
	/**
	 * 产品统计
	 */
	public function products() {
		$this->display ( 'Statistics/products' );
	}
	/**
	 * 充值统计
	 */
	public function recharge() {
		$this->display ( 'Statistics/recharge' );
	}
	/**
	 * 用户统计
	 */
	public function users() {
		$this->display ( 'Statistics/users' );
	}
	/**
	 * 提现统计
	 */
	public function withdraw() {
		$this->display ( 'Statistics/withdraw' );
	}
}

?>