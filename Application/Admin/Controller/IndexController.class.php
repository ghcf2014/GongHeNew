<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function _before_index(){
		// if(is_null($_SESSION['username'])){
		// 	$this->error('请重新登陆!',U('User/login'));
		// }else{
			dump($_SESSION);
		// }
	}
    public function index(){
        $this->display('Index/index');
    }
    public function index_left(){
        $this->display('Index/index_left');
    }
}