<?php

namespace Admin\Controller;

use Admin\Logic\ProductinfoLogic;
use Think\Controller;

class ProductinfoController extends Controller {
	// 发布产品
	public function product_launch() {
		if ($_POST) {
			
			$arr = $_POST;
			$condition ['add_time'] = date("Y-m-d H:i:s",time ());
			$condition ['add_ip'] = get_client_ip ();
			$map = array_merge ( $condition, $arr );
			$p = new ProductinfoLogic ();
			
			$result = $p->pro_launch ( $map );
			if ($result > 0) {
				$this->redirect('Productinfo/product_list');
			} else {
				$this->error ( '添加失敗！' ,U('Productinfo/product_launch'));
			}
		} else {
			$tp=new ProductinfoLogic();
			$map="level=0";
			$map1="level=1";
			$map2="level=2";
			$list=$tp->pro_type_list($map);
			$list1=$tp->pro_type_list($map1);
			$list2=$tp->pro_type_list($map2);
			$this->assign('list',$list);
			$this->assign('list1',$list1);
			$this->assign('list2',$list2);
			$this->display ( 'Productinfo/product_launch' );
		}
	}
	public function product_list() {
		$list=new ProductinfoLogic();
		$map="pname,pro_label,pro_model,type,price,status,add_time,rate ,pro_num";
		$result=$list->pro_search($map);
		$this->assign("info",$result);
		$this->display ( 'Productinfo/product_list' );
	}
	public function product_turnlist() {
		$this->display ( 'Productinfo/product_turnlist' );
	}
	public function product_detail() {
		
		
		$this->display ( 'Productinfo/product_detail' );
	}
	public function product_type_add() {
		$tp=new ProductinfoLogic();
		if(IS_POST){
			
			$data=$_POST;
			$con['add_time']=time();
			$map=array_merge($data,$con);
			$result=$tp->pro_type_add($map);
			if ($result > 0) {
				$this->redirect('Productinfo/product_type_list');
			} else {
				$this->error ( '添加失敗！' ,U('Productinfo/product_type_add'));
			}
		}else{
			
			$this->display ( 'Productinfo/product_type_add' );
		}
		
	}
	public function product_type_list() {
		$tp=new ProductinfoLogic();
		$result=$tp->pro_type_list();
		$i=0;
		for($i<=5;$i++;){
			$result[$i]['add_time']=date("Y-m-d H:i:s",$result[$i]['add_time']);
		}
		$this->assign("list",$result);
		$this->display ( 'Productinfo/product_type_list' );
	}
}

