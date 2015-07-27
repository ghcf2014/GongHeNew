<?php
namespace Admin\Controller;
use Admin\Logic\UserinfoLogic;
use Think\Controller;
use Think\Session\Driver;
use Think\Cache\Driver\Memcache;

class FundController extends Controller {
	/* 资金账户列表 */
	public function accountlist(){
		$this->display('Fund/accountlist');
	}
	/* 充值记录 */
	public function rechargelog(){
		$this->display('Fund/rechargelog');
	}
	/* 资金统计 */
	public function statistics(){
		$this->display('Fund/statistics');
	}
	/* 提现管理 */
	public function withdraw(){
		$this->display('Fund/withdraw');
	}

	
	
	
}

?>