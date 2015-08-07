<?php

return array(

	//服务端配置
	'server' => array(

		'uploadDir' => '/webuploader/uploads',//上传文件存放目录,须以根目录'/'开头

		'uploadDirTemp' => './uploads_temp'//上传文件存放目录

	),

	//客户端配置
	'client' => array(

		'swf' => './webuploader/Uploader.swf',//引用swf地址

		'server' => './fileupload.php',//处理上传的地址

		'filelistPah' => './action.php?m=list',//获取文件列表的地址

		'delPath' => './action.php?m=del',//删除文件的地址

		'chunked' => false,//是否对文件块大小进行检测
		
		'chunkSize' => 512 * 1024,//文件块大小限制

		'fileNumLimit' => 300,//同时上传的文件个数限制
		
		'fileSizeLimit' => 200 * 1024 * 1024,//总文件大小限制，单位是Byte(200M)
		
		'fileSingleSizeLimit' => 2 * 1024 * 1024,//单个文件大小限制，单位是Byte(2M)

		/*
		
		'runtimeOrder' => 'flash', //统一使用flash上传
		
		'accept' => array(上传的文件类型限制
		     
			'title' => 'Images',    //上传的文件类型说明
		     
			'extensions' => 'gif,jpg,jpeg,bmp,png',   //上传的文件类型,你也可以填你需要的文件类型，如果有多个类型的话，中间加上","即可，如extensions => 'gif,jpg,jpeg,bmp,png'
		     
			'mimeTypes' => 'image/*'   //mime类型说明

		),

		*/

		'fileVal' => 'file',//服务端接收文件的键值，相当于<input type="file" name="file" />中name="file"，默认file

		'auto' => false,//是否选择完后自动上传

		'formData' => array(//传给服务端的额外数据
			
			's' => session_id()//用于浏览器的session丢失
		
		),

		'pick' => array(

			'id' => '#filePicker',

			'label' => '点击选择文件',

			'name' => 'file'
		
		),

		/*thumb => array(

			'width' => 110,

            'height' => 110,

            // 图片质量，只有type为`image/jpeg`的时候才有效。
            'quality' => 70,

            // 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
            'allowMagnify' => true,

            // 是否允许裁剪。
            'crop' => true,

            // 是否保留头部meta信息。
            'preserveHeaders' => false,

            // 为空的话则保留原有图片格式。
            // 否则强制转换成指定的类型。
            'type' => 'image/jpeg'

		)*/
	
	)

);