<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>工合投富宝认购平台--最好的认购投资平台</title>
	<link rel="stylesheet" type="text/css" href="/gonghenew/Public/Home/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="/gonghenew/Public/Home/css/jquery-ui.css"/>
	
	<script src="/gonghenew/Public/Home/js/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/gonghenew/Public/Home/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="/gonghenew/Public/Home/js/public.js" type="text/javascript" charset="utf-8"></script>
	<script src="/gonghenew/Public/Static/layer/layer.js" type="text/javascript" charset="utf-8"></script>
	<script src="/gonghenew/Public/Home/js/provincial-cities-linkage.js" type="text/javascript" charset="utf-8"></script>
	<script src="/gonghenew/Public/Home/js/jquery.zclip.js" type="text/javascript" charset="utf-8"></script>
	<script src="/gonghenew/Public/Home/js/jquery-ui.js" type="text/javascript" charset="utf-8"></script>
</head>

	<!--头部-->
		
		<!--快捷通道	bar 开始-->
		<div class="barOut">
			<div class="bar">
				<!--barLeft start-->
				<?php if(is_login()): ?><div class="barLeft">
					<p>欢迎来到工合财富！</p>
					<a href="<?php echo U('User/index');?>">Hi, <?php echo get_username();?></a>
					<a href="<?php echo U('User/logout');?>" class="ZC">|安全退出</a>
					<a href="<?php echo U('User/xxtz');?>" class="ZC">消息<?php echo is_msg();?></a>
				</div>
				<?php else: ?>
				<div class="barLeft">
					<p>欢迎来到工合财富！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请</p>
					<a href="javascript:;" class="DL">[ 登录 ]</a>
					<a href="<?php echo U('User/register');?>" class="ZC">[ 注册 ]</a>
				</div><?php endif; ?>
				<!--barLeft end-->
				
				<!--barRight start-->
				<div class="barRight">
					<p><img src="/gonghenew/Public/Home/images/hotline.png"/></p>
					<a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1" target="_blank" class="sina"> </a>
					<a href="tencent://message/?uin=3058467611" class="qq"> </a>
					<a href="javasvript:;" class="wx"> </a>
				</div>
				<!--barRight end-->
				
				<!--鼠标划上效果	开始-->
				<div class="sinaCode"><img src="/gonghenew/Public/Home/images/sinaCode.png"/></div>
				<div class="qqCode"><img src="/gonghenew/Public/Home/images/qqCode.jpg"/></div>
				<div class="wxCode"><img src="/gonghenew/Public/Home/images/wxCode.jpg" width="100" height="100"/></div>
				<!--鼠标划上效果 	结束-->
			</div>
		</div>
		<!--快捷通道	bar 结束-->
		
		<!--锚点-->
		<a name="returnTop" id="returnTop"> </a>
		
		<!--导航栏	nav 开始-->
		<div class="navOut">
			<div class="nav">
				<h1 class="navL"><a href="index.html"><img src="/gonghenew/Public/Home/images/logo.png"/></a></h1>
				<ul class="navR">
					<li class="cur"><a href="<?php echo U('Index/index');?>">首&nbsp;&nbsp;页</a></li>
					<li><a href="javascript:;">定向理财</a></li>
					<li><a href="<?php echo U('Products/index');?>">产品中心</a></li>
					<li><a href="<?php echo U('Transfer/index');?>">转让中心</a></li>
					<li><a href="<?php echo U('User/index');?>">个人中心</a></li>
					<li><a href="<?php echo U('Index/newguide');?>">新手指南</a></li>
				</ul>
			</div>
		</div>
		<!--导航栏	nav 结束-->
		
		<!--返回顶部-->
		<div class="returntop">
			<a href="#returnTop">&nbsp;</a>
		</div>
	
		<!--产品中心		prod start-->
		<!--分类		sort01	start-->
		<div class="sort01">
			<div class="sort01In">
				<ul class="sort01L">
					<li class="cur"><a href="javascript:;">最新产品</a></li>
					<li><a href="javascript:;">定向产品</a></li>
					<li><a href="javascript:;">新手产品</a></li>
				</ul>
				<div class="sort01R">
					<input type="button" id="" value="" class="sort01Btn"/>
					<input type="text" name="" id="" value="" class="sort01Txt" placeholder="请输入产品名称搜索"/>
				</div>
			</div>
		</div>
		<!--sort01	end-->
		
		<!--分类		sort02	start-->
		<div class="sort02">
			<dl class="sort02In">
				<dt>产品类型</dt>
				<dd class="cur">全部</dd>
				<dd data="1" onClick="queryGoods(this,3);"><a href="#" >美橙系列</a></dd>
				<dd>美桔系列</dd>
				<dd>美柚系列</dd>
				<dd>金桔系列</dd>
				<dd>充电桩系列</dd>
			</dl>
		</div>
		<!--sort02 end-->
		
		<!--分类		sort03	start-->
		<div class="sort03">
			<dl class="sort03In">
				<dt>产品期限</dt>
				<dd class="cur">全部</dd>
				<dd>1-93天</dd>
				<dd>94-186天</dd>
				<dd>187-366天</dd>
				<dd>367天以上</dd>
			</dl>
		</div>
		<!--sort03 end-->
		
		<!--分类		sort04	start-->
		<dl class="sort04">
			<dt>排序</dt>
			<dd class="cur">综合排序</dd>
			<dd>收益率&nbsp;<span><img src="/gonghenew/Public/Home/images/downArrow.png"/></span></dd>
			<dd>发布时间&nbsp;<span><img src="/gonghenew/Public/Home/images/downArrow.png"/></span></dd>
			<dd>产品期限&nbsp;<span><img src="/gonghenew/Public/Home/images/downArrow.png"/></span></dd>
		</dl>
		<!--sort04	end-->
		
		<!--prod	start-->
		<div class="prod">
			<!--01-->
			<div class="prodCon">
				<h3><a href="<?php echo U('Products/chanpinxiangqing');?>">美 桔 1 号</a></h3>
				<ul>
					<li><p>10.60</p>年化收益率( % )</li>
					<li><p>1080</p>锁定期限（天）</li>
					<li><p>1000.00</p>发售价格( 元/块 )</li>
					<li style="width: 250px;">
						<span><u>已投245块</u><b>可投673块</b></span>
						<div class="out"><div class="in"></div></div>
						<strong>（26.7%）</strong>
					</li>
					<li>发布时间：2015-06-10</li>
					<li><a href="<?php echo U('Products/chanpinxiangqing');?>"><input type="button" name="" id="" value="立即购买" class="prodConBtn"/></a></li>
				</ul>
			</div>
			
			<!--02-->
			<div class="prodCon">
				<h3><a href="javascript:;">美 桔 1 号</a></h3>
				<ul>
					<li><p>10.60</p>年化收益率( % )</li>
					<li><p>1080</p>锁定期限（天）</li>
					<li><p>1000.00</p>发售价格( 元/块 )</li>
					<li style="width: 250px;">
						<span><u>已投245块</u><b>可投673块</b></span>
						<div class="out"><div class="in"></div></div>
						<strong>（26.7%）</strong>
					</li>
					<li>发布时间：2015-06-10</li>
					<li><input type="button" name="" id="" value="立即购买" class="prodConBtn"/></li>
				</ul>
			</div>
			
			<!--03-->
			<div class="prodCon">
				<h3><a href="javascript:;">美 桔 1 号</a></h3>
				<ul>
					<li><p>10.60</p>年化收益率( % )</li>
					<li><p>1080</p>锁定期限（天）</li>
					<li><p>1000.00</p>发售价格( 元/块 )</li>
					<li style="width: 250px;">
						<span><u>已投245块</u><b>可投673块</b></span>
						<div class="out"><div class="in"></div></div>
						<strong>（26.7%）</strong>
					</li>
					<li>发布时间：2015-06-10</li>
					<li><input type="button" name="" id="" value="立即购买" class="prodConBtn"/></li>
				</ul>
			</div>
			
			<!--04-->
			<div class="prodCon">
				<h3><a href="javascript:;">美 桔 1 号</a></h3>
				<ul>
					<li><p>10.60</p>年化收益率( % )</li>
					<li><p>1080</p>锁定期限（天）</li>
					<li><p>1000.00</p>发售价格( 元/块 )</li>
					<li style="width: 250px;">
						<span><u>已投245块</u><b>可投673块</b></span>
						<div class="out"><div class="in"></div></div>
						<strong>（26.7%）</strong>
					</li>
					<li>发布时间：2015-06-10</li>
					<li><input type="button" name="" id="" value="立即购买" class="prodConBtn"/></li>
				</ul>
			</div>
			
			<!--05-->
			<div class="prodCon">
				<h3><a href="javascript:;">美 桔 1 号</a></h3>
				<ul>
					<li><p>10.60</p>年化收益率( % )</li>
					<li><p>1080</p>锁定期限（天）</li>
					<li><p>1000.00</p>发售价格( 元/块 )</li>
					<li style="width: 250px;">
						<span><u>已投245块</u><b>可投673块</b></span>
						<div class="out"><div class="in"></div></div>
						<strong>（26.7%）</strong>
					</li>
					<li>发布时间：2015-06-10</li>
					<li><input type="button" name="" id="" value="立即购买" class="prodConBtn"/></li>
				</ul>
			</div>
			
			<!--06-->
			<div class="prodCon">
				<h3><a href="javascript:;">美 桔 1 号</a></h3>
				<ul>
					<li><p>10.60</p>年化收益率( % )</li>
					<li><p>1080</p>锁定期限（天）</li>
					<li><p>1000.00</p>发售价格( 元/块 )</li>
					<li style="width: 250px;">
						<span><u>已投245块</u><b>可投673块</b></span>
						<div class="out"><div class="in"></div></div>
						<strong>（26.7%）</strong>
					</li>
					<li>发布时间：2015-06-10</li>
					<li><input type="button" name="" id="" value="立即购买" class="prodConBtn"/></li>
				</ul>
			</div>
			
			<!--07-->
			<div class="prodCon">
				<h3><a href="javascript:;">美 桔 1 号</a></h3>
				<ul>
					<li><p>10.60</p>年化收益率( % )</li>
					<li><p>1080</p>锁定期限（天）</li>
					<li><p>1000.00</p>发售价格( 元/块 )</li>
					<li style="width: 250px;">
						<span><u>已投245块</u><b>可投673块</b></span>
						<div class="out"><div class="in"></div></div>
						<strong>（26.7%）</strong>
					</li>
					<li>发布时间：2015-06-10</li>
					<li><input type="button" name="" id="" value="立即购买" class="prodConBtn"/></li>
				</ul>
			</div>
			
			<!--08-->
			<div class="prodCon">
				<h3><a href="javascript:;">美 桔 1 号</a></h3>
				<ul>
					<li><p>10.60</p>年化收益率( % )</li>
					<li><p>1080</p>锁定期限（天）</li>
					<li><p>1000.00</p>发售价格( 元/块 )</li>
					<li style="width: 250px;">
						<span><u>已投245块</u><b>可投673块</b></span>
						<div class="out"><div class="in"></div></div>
						<strong>（26.7%）</strong>
					</li>
					<li>发布时间：2015-06-10</li>
					<li><input type="button" name="" id="" value="立即购买" class="prodConBtn"/></li>
				</ul>
			</div>
		</div>
		<!--prod	end-->		
		<div class="page">
			<ul>
				<li>共10页</li>
				<li><a href="javascript:;">首页</a></li>
				<li><a href="javascript:;">1</a></li>
				<li><a href="javascript:;">2</a></li>
				<li><a href="javascript:;">3</a></li>
				<li><a href="javascript:;">4</a></li>
				<li><a href="javascript:;">5</a></li>
				<li><a href="javascript:;">尾页</a></li>
			</ul>
		</div>
					<script type="text/javascript">
			function queryGoods(obj,mark){
	var params = new Array();
	params.push("c1Id="+$("#c1Id").val());
	params.push("c2Id="+$("#c2Id").val());
	params.push("c3Id="+$("#c3Id").val());
	params.push("bs="+$("#bs").val());
	if(mark==8){
		var sj = $("#sj").val();
		if(sj==2){
			$("#sj").val(1);
			$("#msort").val(8);
		}else{
			$("#sj").val(2);
			$("#msort").val(9);
		}		
	}else{
		$("#sj").val(0);
		$("#msort").val(mark);
	}	
	params.push("msort=" + $("#msort").val());
	params.push("sj=" + $("#sj").val());	
	if(mark==1){
		var areaId3 = $(obj).attr("data");
		params.push("areaId3="+areaId3);
	}else if(mark==2){
		var areaId3 = $("#wst-areas").find(".searched").attr("data");
		var communityId = $(obj).attr("data");
		communityId = communityId?communityId:'';
		params.push("areaId3="+areaId3);
		params.push("communityId="+communityId);
	}else if(mark==3){
		var areaId3 = $("#wst-areas").find(".searched").attr("data");
		var communityId = $("#wst-communitys").find(".searched").attr("data");
		var brandId = $(obj).attr("data");
		communityId = communityId?communityId:'';
		params.push("areaId3="+areaId3);
		params.push("communityId="+communityId);
		params.push("brandId="+brandId);
	}else if(mark==4){
		var areaId3 = $("#wst-areas").find(".searched").attr("data");
		var communityId = $("#wst-communitys").find(".searched").attr("data");
		var brandId = $("#wst-brand").find(".searched").attr("data");
		var prices = $(obj).attr("data");
		params.push("areaId3="+areaId3);
		params.push("communityId="+communityId);
		params.push("brandId="+brandId);
		params.push("prices="+prices);
	}else if(mark==5){
		var areaId3 = $("#wst-areas").find(".searched").attr("data");
		var communityId = $("#wst-communitys").find(".searched").attr("data");
		var brandId = $("#wst-brand").find(".searched").attr("data");
		var prices = $("#wst-price").find(".searched").attr("data");
		var shopId = $(obj).attr("data");
		communityId = communityId?communityId:'';
		params.push("areaId3="+areaId3);
		params.push("communityId="+communityId);
		params.push("brandId="+brandId);
		params.push("prices="+prices);
	}else{
		var areaId3 = $("#wst-areas").find(".searched").attr("data");
		var communityId = $("#wst-communitys").find(".searched").attr("data");
		var brandId = $("#wst-brand").find(".searched").attr("data");
		if(mark==12){
			var prices = $("#sprice").val()+"_"+$("#eprice").val();
			
		}else{
			var prices = $("#wst-price").find(".searched").attr("data");
		}
		
		var shopId = $("#wst-shop").attr("data");
		params.push("mark="+mark);
		communityId = communityId?communityId:'';
		params.push("areaId3="+areaId3);
		params.push("communityId="+communityId);
		params.push("brandId="+brandId);
		params.push("prices="+prices);
	}
	
	var keyword = $.trim($("#keyword").val());
	if(keyword!=""){
		params.push("keyWords="+keyword);
	}
	window.location = domainURL  + '/index.php/Home/goods/getGoodsList/?' + (params.join("&"));
}</script>
		<!--产品中心		prod end-->


		
		<!--footer	start-->
		<div class="footerO">
			<div class="footer">
				<div class="top">
					<ul>
						<li>
							<h4><a href="<?php echo U('Index/me');?>">关于我们</a></h4>
							<p><a href="javasvript:;">公司简介</a></p>
							<p><a href="javasvript:;">服务项目</a></p>
							<p><a href="javasvript:;">核心优势</a></p>
							<p><a href="javasvript:;">联系我们</a></p>
						</li>
						<li>
							<h4>协议与规则</h4>
							<p><a href="javasvript:;">交易服务协议</a></p>
							<p><a href="javasvript:;">平台交易规则</a></p>
							<p><a href="javasvript:;">信息发布规则</a></p>
							<p><a href="javasvript:;">买家委托规则</a></p>
						</li>
						<li>
							<h4>新手帮助</h4>
							<p><a href="javasvript:;">风险提示</a></p>
							<p><a href="javasvript:;">注册登录</a></p>
							<p><a href="javasvript:;">账户安全</a></p>
							<p><a href="javasvript:;">资费说明</a></p>
						</li>
					</ul>
					<div class="topR">
						<p><img src="/gonghenew/Public/Home/images/call.gif"/></p>
						<ul>
							<li><img src="/gonghenew/Public/Home/images/qq.gif"/></li>
							<li><a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1"><img src="/gonghenew/Public/Home/images/sina.gif"/></a></li>
							<li><img src="/gonghenew/Public/Home/images/weixin.gif"/></li>
						</ul>
					</div>
				</div>
				<div class="bot">
					<h4>友情链接</h4>
					<ul>
						<li><a href="javascript:;">经济参考报</a></li>
						<li><a href="javascript:;">国信证劵</a></li>
						<li><a href="javascript:;">中国企业家</a></li>
						<li><a href="javascript:;">中国新能源网</a></li>
						<li><a href="javascript:;">国际能源网</a></li>
						<li><a href="javascript:;">全球节能环保网</a></li>
						<li><a href="javascript:;">联合能源</a></li>
						<li><a href="javascript:;">财经大全</a></li>
						<li><a href="javascript:;">搜狐经济</a></li>
					</ul>
				</div>
				
				<!--鼠标滑过-->
				<div class="qqCode"><img src="/gonghenew/Public/Home/images/wxCode2.png"/></div>
				<div class="wxCode"><img src="/gonghenew/Public/Home/images/wxCode2.png"/></div>
			</div>
		</div>
		<!--footer	end-->
		
		<!--banquan	start-->
		<p class="bq">版权所有 © 2014 深圳市工合财富金融信息服务有限公司 www.ghcf.cn</p>
		<!--banquan end-->
		
		
		<!--登录	login start-->
		<div class="loginO">		
			<div class="login">
				<div class="loginIn">
					<div class="loginT">
						<h2>欢迎登录工合财富</h2>
						<p><img src="/gonghenew/Public/Home/images/close.png"/></p>
					</div>
					<div class="loginB">
						<!--用户名-->
						<form action="<?php echo U('User/login');?>" method="post" id="formlogin">
							<dl>
								<dt><img src="/gonghenew/Public/Home/images/loginHead.gif"/></dt>
								<dd><input type="text" name="username" id="name" value="" placeholder="请输入用户名"/></dd>
							</dl>
							<!--密码-->
							<dl>
								<dt><img src="/gonghenew/Public/Home/images/loginPassword.gif"/></dt>
								<dd><input type="password" name="password" id="pass" value="" placeholder="请输入密码"/></dd>
							</dl>
							<!--验证码-->
							<dl>
								<dt><img src="/gonghenew/Public/Home/images/loginYzm.gif"/></dt>
								<dd id="captcha-container_f">
									<input name="verify" width="50%" height="50" class="yzm" placeholder="验证码" type="text">
  									<img alt="验证码" src="<?php echo U('User/verify',array());?>" title="点击刷新" height="50" width="144">
								</dd>
							</dl>
							<input type="button" id="subbt" value="" class="loginBtn"/>
						</form>
						
						
						<p><a href="javascript:;" style="color: #E60000;">忘记密码？</a> | <a href="<?php echo U('User/register');?>">立即注册</a></p>
					</div>
				</div>
			</div>
		</div>	
		<!--登录	login end-->
<script type="text/javascript">
	$('#subbt').click(function(){
		$('#formlogin').submit();
	});
</script>

<script type="text/javascript">
	var captcha_img = $('#captcha-container_f').find('img')  
	var verifyimg = captcha_img.attr("src");  
	captcha_img.attr('title', '点击刷新');  
	captcha_img.click(function(){  
	    if( verifyimg.indexOf('?')>0){  
	        $(this).attr("src", verifyimg+'&random='+Math.random());  
	    }else{  
	        $(this).attr("src", verifyimg.replace(/?.*$/,'')+'?'+Math.random());  
	    }  
	});
</script>