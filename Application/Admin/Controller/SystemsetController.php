<?php

namespace Admin\Controller;

use Think\Controller;

/**
 *
 * @author shuangshuang
 *         create 2015/07/30
 *         系统设置
 */
class SystemsetController extends Controller {
	/**
	 * 数据中心
	 */
	public function datacenter() {
		$this->display ( 'Systemset/datacenter' );
	}
	/**
	 * 参数设置
	 */
	public function paramterset() {
		$this->display ( 'Systemset/paramterset' );
	}
	/**
	 * 权限设置
	 */
	public function permissionset() {
		$this->display ( 'Systemset/permission' );
	}
	/**
	 * 接口设置
	 */
	public function portset() {
		$this->display ( 'Systemset/portset' );
	}
}

?>