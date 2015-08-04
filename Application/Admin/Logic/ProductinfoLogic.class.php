<?php

namespace Admin\Logic;

use Admin\Api\Productinfo;

class ProductinfoLogic implements Productinfo {
	
	// 产品查询
	public function pro_search($map) {
		$list = M ( 'product_info' );
		$lists = $list->field ( $map )->select ();
		return $lists;
	}
	// 产品修改
	public function pro_change($data, $id) {
		return "产品修改";
	}
	// 产品删除
	public function pro_delete($data, $id) {
		return "产品删除";
	}
	/*
	 * !CodeTemplates.overridecomment.nonjd! @see \Admin\Api\Productinfo::pro_launch() 产品发布
	 */
	public function pro_launch($data) {
		// TODO 自动生成的方法存根
		$pro = M ( 'product_info' );
		$result = $pro->add ( $data );
		return $result;
	}
	public function pro_type_add($data) {
		$type = M ( 'product_type' );
		$result = $type->add ( $data );
		return $result;
	}
	public function pro_type_list($map) {
		$type = M ( 'product_type' );
		$result = $type->where ( $map )->select ();
		return $result;
	}

}

