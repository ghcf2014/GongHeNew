<?php

$config = include_once('config.php');

$session_id = $_REQUEST['s'];

if($session_id && $session_id != session_id()){

    session_destroy();

    session_id($session_id);

    @session_start();    

}

$token = md5($_SESSION['salt'] . $_POST['RAND']);

if(!empty($_FILES) && $_POST['TOKEN'] == $token){

	$fileKey = $config['client']['fileObjName'];

	$targetPath = $_SERVER[DOCUMENT_ROOT] . $config['server']['uploadDir'];
	
	$tempFile = $_FILES[$fileKey]['tmp_name'];

	$targetFile = rtrim($targetPath, '/') . '/' . date('Y') . '/' . date('m') . '/' . date('d');

	mkdirs($targetFile);

	$fileTypes = $config['client']['fileTypeExts'];
	
	$fileParts = pathinfo($_FILES[$fileKey]['name']);

	$extension = $fileParts['extension'];

	$targetFile .= '/' . md5($_FILES[$fileKey]['name'] . time()) . '.' . $extension;

	if(preg_match("/\.\*/", $fileTypes) || preg_match("/\." . $extension . "/i", $fileTypes)){

		move_uploaded_file($tempFile, $targetFile);
		
		echo 1;

	}else{
		
		echo 0;
	
	}

}else{

	echo 0;

}

function mkdirs($dir){
	
	if(!is_dir($dir)){
	
		if(!mkdirs(dirname($dir))){
		
			return false;
		
		}
	
		if(!mkdir($dir, 0777)){
		
			return false;
		
		}

	}

	return true;

}