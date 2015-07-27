<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Logic\LoginLogic;
class IndexController extends Controller {


	public function _before_index(){
		$name=get_nickname();
		if(empty($name)){
			$this->redirect("User/login");
		}
	}
    public function index(){
        $this->display('Index/index');
    }
    public function index_left(){
        $this->display('Index/index_left');
    }
}