<?php
session_start();
$config = include_once('config.php');
?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>文件管理</title>
<link rel="stylesheet" type="text/css" href="webuploader/webuploader.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
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
			<div id="uploader">
				<div class="statusBar" style="display:none;">
					<div class="progress">
						<span class="text">0%</span>
						<span class="percentage"></span>
					</div><div class="info"></div>
					<div class="btns">
						<div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
					</div>
				</div>
				<div class="queueList">
					<div id="dndArea" class="placeholder">
						<div id="filePicker"></div>
						<p>或将文件拖到这里，单次最多可选300个</p>
					</div>
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
					<!--<li class="checked">
						<div class="img">
							<img src="" />
							<span class="icon"></span>
						</div>
						<div class="desc">sfsdfsdf.png</div>
					</li>-->
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
					<!--<li>
						<div class="img">
							<img src="" />
							<span class="icon"></span>
						</div>
						<div class="desc">sfsdfsdf.png</div>
					</li>-->
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="webuploader/webuploader.min.js"></script>
<script type="text/javascript" src="js/upload.min.js"></script>
<script>
$(function(){
/*
如果您除了服务端配置外，可能还要添加其它相关配置(比如事件修改)，您可以像下面配置
var config = <\?php echo json_encode($config['client']);\?>;(把右斜线去除)
Manager.upload($.extend(config, {
//您的配置
auto : true
}));
或
Manager.upload(<?php echo json_encode($config['client']);?>);
*/
var config = <?php echo json_encode($config['client']);?>;

Manager.upload($.extend(config, {

	type : "<?php echo $_GET['type'];?>"

}));

});
</script>
</body>
</html>