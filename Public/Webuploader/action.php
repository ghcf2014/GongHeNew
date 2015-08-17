<?php

$config = include_once('config.php');

$action = $_GET['m'];

//删除
if($action == 'del'){

	$result = 0;

	$url = $_SERVER[DOCUMENT_ROOT] . $_GET['url'];

	$name = $_GET['name'];

	$mtime = $_GET['mtime'];

	if(file_exists($url)){
	
		if(unlink($url)) $result = 1;
	
	}

	echo $result;

	exit;

}

//文件列表
else if($action == 'list'){

	/* 判断类型 */
	switch ($_GET['type']){

		/* 列出图片 */
		case 'Images' : $allowFiles = 'png|jpg|jpeg|gif|bmp';break;
		
		case 'Flash' : $allowFiles = 'flash|swf';break;

		/* 列出文件 */
		default : $allowFiles = '.+';

	}

	$path = $_SERVER[DOCUMENT_ROOT] . $config['server']['uploadDir'];
//echo file_exists($path);echo $path;echo '--';echo $allowFiles;echo '--';echo $key;exit;
	$listSize = 100000;

	$key = $_GET['key'];

	$key = empty($key) ? '' : $key;

	/* 获取参数 */
	$size = isset($_GET['size']) ? htmlspecialchars($_GET['size']) : $listSize;
	$start = isset($_GET['start']) ? htmlspecialchars($_GET['start']) : 0;
	$end = $start + $size;

	/* 获取文件列表 */
	//$path = $_SERVER['DOCUMENT_ROOT'] . (substr($path, 0, 1) == "/" ? "":"/") . $path;
	$files = getfiles($path, $allowFiles, $key);
	if (!count($files)) {
		echo json_encode(array(
			"state" => "没有相关文件",
			"list" => array(),
			"start" => $start,
			"total" => count($files)
		));
		exit;
	}

	/* 获取指定范围的列表 */
	$len = count($files);
	for ($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
		$list[] = $files[$i];
	}

	/* 返回数据 */
	$result = json_encode(array(
		"state" => "SUCCESS",
		"list" => $list,
		"start" => $start,
		"total" => count($files)
	));

	echo $result;

}

/**
 * 遍历获取目录下的指定类型的文件
 * @param $path
 * @param array $files
 * @return array
 */
function getfiles($path, $allowFiles, $key, &$files = array()){
    if (!is_dir($path)) return null;
    if(substr($path, strlen($path) - 1) != '/') $path .= '/';
    $handle = opendir($path);
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..') {
            $path2 = $path . $file;
            if (is_dir($path2)) {
                getfiles($path2, $allowFiles, $key, $files);
            } else {
                if (preg_match("/\.(".$allowFiles.")$/i", $file) && preg_match("/.*". $key .".*/i", $file)) {
                    $files[] = array(
                        'url'=> substr($path2, strlen($_SERVER['DOCUMENT_ROOT'])),
						'name'=> $file,
                        'mtime'=> filemtime($path2)
                    );
                }
            }
        }
    }
    return $files;
}