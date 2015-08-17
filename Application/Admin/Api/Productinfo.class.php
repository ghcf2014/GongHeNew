<?php

namespace Admin\Api;

interface Productinfo {
	
	// 产品发布
	public function pro_launch($data);
	// 产品查询
	public function pro_search($map);
	// 产品修改
	public function pro_change($datas,$pid);
	// 产品删除
	public function pro_delete($arrs,$pid);
	
	//产品详情
	public function pro_detail($id);
}
?>