<?php
session_start();
$config = include_once('config.php');
?> 
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/upload.css" />
<title>文件上传</title>
</head>
<body>
<div class="upload-box">
	<ul class="tabs">
		<li class="checked" id="upload_tab">本地上传</li>
		<li id="manage_tab">在线管理</li>
		<li id="search_tab">文件搜索</li>
	</ul>
	<div class="container">
		<div class="area upload-area area-checked" id="upload_area">
			<div class="choose-file">
				<div class="choose-btn">
					<div class="btn-txt" id="btn_swf">点击选择文件</div>
				</div>
				<div class="notice">您可以一次选择多张图片进行上传</div>
			</div>
			<div class="keep-area">
				<ul class="btns">
					<li class="upload-desc" id="file_notice"></li>
					<li class="btn checked" id="start_upload">开始上传</li>
					<li class="btn" id="keep_add">继续添加</li>
				</ul>
				<div class="list">
					<ul id="file_queue">
					</ul>
				</div>
			</div>
		</div>
		<div class="area manage-area" id="manage_area">
			<ul class="choose-btns">
				<li class="btn sure checked">确定</li>
				<li class="btn cancel">取消</li>
			</ul>
			<div class="file-list">
				<ul id="file_all_list">
				</ul>
			</div>
		</div>
		<div class="area search-area" id="search_area">
			<ul class="choose-btns">
				<li class="search">
					<div class="search-condition">
						<input class="key" type="text" />
						<input class="submit" type="button" hidefocus="true" value="搜索" />
					</div>
				</li>
				<li class="btn sure checked">确定</li>
				<li class="btn cancel">取消</li>
			</ul>
			<div class="file-list">
				<ul id="file_search_list">
				</ul>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/jquery.upload.min.js"></script>
<script>
$(function(){
/*
如果您除了服务端配置外，可能还要添加其它相关配置(比如事件修改)，您可以像下面配置
var config = <\?php echo json_encode($config['client']);\?>;(把右斜线去除)
Manager.file($.extend(config, {
//您的配置
auto : true
}));
或
Manager.file(<?php echo json_encode($config['client']);?>);
*/
var config = <?php echo json_encode($config['client']);?>;
Manager.file($.extend(config, {
	type : "<?php echo $_GET['type'];?>"
}));
});
</script>
</body>
</html>