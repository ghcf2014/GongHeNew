<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _before_index(){
		$this->redirect('User/login');
	}
    public function index(){
        $this->display('Index/index');
    }
    public function index_left(){
        $this->display('Index/index_left');
    }
}