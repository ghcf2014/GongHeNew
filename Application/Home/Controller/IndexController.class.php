<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $this->display('Index/index');
    }
    public function newguide(){
    	$this->display('Index/newguide');
    }
}