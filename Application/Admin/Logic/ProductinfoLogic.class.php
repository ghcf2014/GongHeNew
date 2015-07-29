<?php

namespace Admin\Logic;

use Admin\Api\Productinfo;
//use Admin\Model\ModelModel;

class ProductinfoLogic implements Productinfo {

	// 产品查询
	public function pro_serach($data,$id) {
		return "产品查询";
	}
	// 产品修改
	public function pro_change($data,$id) {
		
		return "产品修改";
	}
	// 产品删除
	public function pro_delete($data,$id) {
		return "产品删除";
		
		
	}
	/* !CodeTemplates.overridecomment.nonjd!
	 * @see \Admin\Api\Productinfo::pro_launch()
	 *  产品发布
	 */
	public function pro_launch($data) {
		// TODO 自动生成的方法存根
		return "产品发布";
	}

}

?>