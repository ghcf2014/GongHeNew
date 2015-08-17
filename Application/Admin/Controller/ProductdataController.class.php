<?php

namespace Admin\Controller;
use Think\Controller;
use Admin\Logic\ProductinfoLogic;
class ProductdataController extends  Controller {
	public function data_add(){
		
		$this->display('Productdata/data_add');
	}
	public function data_type(){
		
		$this->display('Productdata/data_type');
	}
	/**
	 *@param 产品资料列表
	 *@authorshuangshuang
	 *@version2015/08/14
	 */
	public function data_list(){
		$data=new ProductinfoLogic();
		$result=$data->file_list($map);
		$result[0]['up_time']=date('Y-m-d H:i:s',$result[0]['up_time']);
		foreach($result as $key=>$val){
			$result[$key]['data_info']=unserialize($val['data_info']);
			$result[$key]['count']=count($result[$key]['data_info']);
			
		}
// 		echo json_encode($result);
		$this->assign('data',$result);
		$this->display('Productdata/data_list');
	}
}

?>