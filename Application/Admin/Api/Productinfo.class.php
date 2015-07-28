<?php
namespace Admin\Api;
interface Productinfo {
	
	//产品发布
	public function pro_launch($data);
	//产品查询
	public function pro_serach($data,$id="");
	//产品修改
	public function pro_change($data,$id="");
	//产品删除
	public function pro_delete($data,$id="");
	
	
}

?>