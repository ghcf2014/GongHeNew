<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //文章读取
       $art = M('article');
	   $date_art = $art->order('id DESC')->limit(6)->select();
	   $this->assign('art', $date_art);

	   //产品读取
       $pro = M('product_list');
	   $date_pro = $pro->order('id DESC')->limit(6)->select();
	   $this->assign('pro', $date_pro);

       $this->display('Index/index');
    }
    public function newguide(){
    	$this->display('Index/newguide');
    }
}