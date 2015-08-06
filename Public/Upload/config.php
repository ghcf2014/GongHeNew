<?php
error_reporting(0);
session_start();

$_SESSION['salt'] = 'gonghe';

$rand = mt_rand();

return array(

	//服务端配置
	'server' => array(

		'uploadDir' => '/upload/uploads/'//上传文件存放目录,须以根目录'/'开头

	),

	//客户端配置
	'client' => array(

		'swf' => './js/upload.swf',//引用swf地址

		'uploader' => './upload.php',//处理上传的地址

		'filelistPah' => './action.php?m=list',//获取文件列表的地址

		'delPath' => './action.php?m=del',//删除文件的地址

		'checkExisting' => false,//检测文件名是否相同的的地址，由于处理文件会自动生成文件名，所有检测不需要，如果您有特殊需求的话，可以设置相应地址，并在处理上传时作相应修改

		'fileTypeExts' => '*.*',//上传的文件类型,你也可以填你需要的文件类型，如果有多个类型的话，中间加上";"即可，如fileTypeExts : '*.gif;*.zip;*.swf'

		'fileSizeLimit' => '2MB',//单个文件大小限制，可以填写数字或字符串，默认是2MB,如果是数字，其默认单位是KB,如果是字符串，其末尾带的单位须是B、KB、MB、GB，如fileSizeLimit : '2MB'

		'auto' => false,//选择文件后是否自动上传
		
		'fileTypeDesc' => '所有文件',//上传的文件类型说明，与上面的fileTypeExts相响应，如fileTypeDesc : '*.gif;*.png;*.jpg;*.bmp'，那么最好设置'fileTypeDesc' => '图片'
		
		'fileObjName' => 'files',//服务端接收文件的键值，相当于<input type="file" name="files" />中name="files"，默认files
		
		'formData' => array(

			's' => session_id(),//用于浏览器的session丢失

			'RAND' => $rand,//随机数
			
			'TOKEN' => md5($_SESSION['salt'] . $rand)//上传验证字符串

		)
	
	)

);
