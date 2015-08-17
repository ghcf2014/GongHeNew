<?php

namespace Admin\Logic;

use Admin\Api\Productinfo;

use Think\Upload;
class ProductinfoLogic implements Productinfo {
	
	// 产品查询
	public function pro_search($map) {
		$list = M ( 'product_info' );
		$lists = $list->field ( $map )->select ();
		return $lists;
	}
	// 产品查询
	public function pro_detail($id) {
		$listdata=M();
		$sql="select * from gonghe_product_info left join gonghe_product_file on gonghe_product_info.fid=gonghe_product_file.id  where gonghe_product_info.id=$id";
		$result = $listdata->query($sql);
		return $result;
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
	/**
	 * @return 返回上传结果
	 * 失败返回false; 
	 * 成功返回储存结果集$info;
	 */
	public function upload(){
		$config=array(
				'maxSize'=>3145728,
				'exts'=>array('jpg', 'gif', 'png', 'jpeg'),
				'savePath'=>'./',
				'saveName'=>array('uniqid',''),//保存文件的方式
				'subName'    =>    array('date','Ymd'),
		);
		//执行上传
		$upload=new Upload($config);
		$info=$upload->upload();
		if(!$info){
			//错误信息
			return false;
				
		}else{
			return $info;
		}
	}
	public function addfile($info, $data) {
		$file = M( 'product_file' );
		foreach ( $info as $val ) {
			$path[]=__ROOT__."/Uploads/" . ltrim ( $val ['savepath'], './' ) . $val ['savename'];
				
		}
		$paths=serialize($path);
		// 得到完整的图片路径和名称，这样我们保存到数据库中去
		$info_data ['data_info'] =$paths;
		$info_data ['fname'] = $data ['pname'];
		$info_data ['add_ip'] = get_client_ip ();
		$info_data ['up_time'] = time ();
	
		if ($file->create ( $info_data )) {
			$file->startTrans ();
			$filedata = $file->add ( $info_data );
			if ($filedata > 0) {
				$file->commit ();
				return $filedata;
			} else {
				$file->rollback ();
				return false;
			}
		} else {
			exit ( $file->getError () );
		}
	}
	public function file_list($map){
		$file = M( 'product_file' );
		$result=$file->where($map)->select();
		return $result;
		
		
	}
	
	
}

