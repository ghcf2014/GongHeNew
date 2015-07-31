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
    public function me(){
      $this->display('Index/me');
    }
    public function newdetail($id=0){
      $art = M('article');
      $map['id']=$id;
      $date_art = $art->where($map)->order('id DESC')->find($id);
      $this->assign('art', $date_art);

      $this->display('Index/newdetail');
    }
    public function newlist($id=0){
      $art = M('article');
      $date_art = $art->order('id DESC')->select();
      $this->assign('art', $date_art);

      $this->display('Index/newlist');
    }
}