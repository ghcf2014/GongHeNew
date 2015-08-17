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
		
				
		<!--产品详情		Product Details	  start-->
		<div class="prodDet">
			<!--top start-->
			<ul class="top">
				<li><a href="<?php echo U('Index/newguide');?>"><img src="/gonghenew/Public/Home/images/newhandimg.gif" title="新手指南" alt="新手指南"/></a></li>
				<li><a href="<?php echo U('User/register');?>"><img src="/gonghenew/Public/Home/images/newhandZCimg.gif" title="新手注册" alt="新手注册"/></a></li>
				<li class="last">
					<h3>理财攻略</h3>
					<ul>
						<li><a href="javascript:;">对理财不懂，想体验投资怎么办？</a></li>
						<li><a href="javascript:;">在工合想赚钱也想省钱，如何操作？</a></li>
						<li><a href="javascript:;">投资后未到期，急要用钱怎么办？</a></li>
						<li><a href="javascript:;">没时间投资但又想赚钱，如何操作？</a></li>
					</ul>
				</li>
			</ul>
			<!--top end-->
			
			<!--prodDetConT start-->
			<div class="prodDetConT">
				<div class="prodDetConTL">
					<h2>美橙1号</h2>
					<ul class="ul01">
						<li>
							<span>7.20%</span>
							<p>年化收益</p>
						</li>
						<li>
							<span>600天</span>
							<p>锁定期</p>
						</li>
						<li>
							<span>100.00元</span>
							<p>产品单价</p>
						</li>
					</ul>
					<ul class="ul02">
						<li>总投数量：<b>800</b>块</li>
						<li>可投数量：<b>500</b>块</li>
						<li>项目位置：<b>江西抚州</b></li>
						<li>最小购买数量：<b>10</b>块</li>
						<li>预计产生炭豆数量：<b>200</b>粒/年</li>
					</ul>
				</div>
				<div class="prodDetConTR">
					<h3>账户可用余额：¥<span>10000.00</span></h3>
					<dl>
						<dt>我要认购:</dt>
						<dd>	
							<input type="button" id="minus" value="-" />
							<input type="text" value="0" id="txt" onblur="myMoney();"/>		
							<input type="button" id="plus" value="+" />
							<b>块</b>
						</dd>
					</dl>
					<dl>
						<dt>共需投资:</dt>
						<dd>
							<span>0</span>
							<b>元</b>
						</dd>
					</dl>
					<dl>
						<dt>年化收益:</dt>
						<dd>
							<span>0</span>
							<b>元</b>
						</dd>
					</dl>
					<p style="margin-top: 10px;">我已查看并同意按照：</p>
					<p>
						<input type="checkbox" name="" id="" checked="checked"/>
						<a href="javascript:;">《委托融资租赁合同（自然人）》</a>
					</p>
					<p>约定将认购的租赁物出租给承租人</p>
					<input type="button" id="" value="我要认购" class="btn"/>
				</div>
			</div>
			<!--下部-->
			<div class="prodDetConB">
				<!--头部-->
				<ul class="prodDetConBTitle">
					<li class="cur">产品详情</li>
					<li>相关资质</li>
					<li>收益说明</li>
				</ul>
				
				<div class="prodDetConBTab">
					<!--产品详情-->
					<div class="tab">
						<p>在金融业日趋市场化的今天，人们的金融意识也随之增强，人们普遍开始了对资金增值的追求，理财成为人们经济生活中必不可少的组成部分。<br />
想理财选择什么理财产品至关重要，绿能宝联合阳光动力推出了一款基于委托融资租赁项目的绿色、低碳新型“理财”产品美桔F32号，投资者购买美桔F32号，拥有发电板实物所有权，实物理财、中国人保的产品质量险、中节能的央企信誉担保、百亿元的银行授信等保证了每一位投资者的资金安全；在保证资金安全的同时，投资人还可享受高达7.2%的稳定年化收益率及额外的收益奖励-碳豆，一次性购买，赠送5KW户用系统一套。锁定期过后第一时间100%转出，无后顾之忧。<br />
美桔F32号是绿色能源产品，投资清洁能源太阳能，支持节能减排，为自己积累财富，为蓝天做出贡献。<br />
项目详情：<br />
项目名称：美桔F32号<br />
发售数量：800块<br />
发售价格：1000元／块<br />
年化收益：7.2%<br />
最长持有年限：2年，到期平台自动赎回，本金全额返还，不收取任何手续费用<br />
付租方式：每月15日付租（不含15日租金），当月15号之前购买，15号返还购买次日至14号的租金；当月15号之后购买，次月15号返还购买次日至次月14号的租金。<br />
锁定期限：730天后平台自动赎回，提现申请后，3个工作日本金到账<br />
产品质量险：25年<br />
限购数量：每位注册用户限购800块<br />
客户特殊福利：一次性购买，赠送5KW户用系统一套<br />
预计产生碳豆数量：255粒/年<br />
预计并网产生碳豆时间：2015年第三季度<br />
转让时间：锁定期后，随时转让（资金三个工作日后到账）<br />
提前回购条款：无<br />
提前回购日：无<br />
正常回购日：2017年7月19日<br />
合同到期日：2017年7月19日<br />
融资租赁服务提供商：江苏绿能宝融资租赁有限公司<br />
承租人：抚州美橙电力有限公司                  <br />
产品销售期：2015年7月20日开售，售完为止<br />
起租日：产品购买次日起租<br />
项目位置：江西抚州<br />
什么是碳豆：<br />
美桔发电宝系列产品每发一度电都会产生对应的碳豆，碳豆是基于国际碳排放交易准则（即把二氧化碳排放权作为一种商品，由此形成的二氧化碳排放权的交易，简称碳交易）将减排量通过相应公式转化而成的计量单位。用户可将自己的碳豆存入碳豆银行获取收益，或支付一定利息从碳豆银行借取碳豆完成交易；碳豆同样可在我们的生态家园游戏平台中兑换各种模拟道具，还可在美桔商城中享受购买产品等优惠。</p>
					</div>
					<!--相关资质-->
					<div class="tab" style="text-align: center;display: none;">
						<img src="/gonghenew/Public/Home/images/20150722085538-47339.jpg"/>
						<img src="/gonghenew/Public/Home/images/20150722085538-50879.jpg"/>
						<img src="/gonghenew/Public/Home/images/20150722085538-92368.jpg"/>
						<img src="/gonghenew/Public/Home/images/20150722085538-94210.jpg"/>
						<img src="/gonghenew/Public/Home/images/20150722085539-28254.jpg"/>
						<img src="/gonghenew/Public/Home/images/20150722085539-42380.jpg"/>
						<img src="/gonghenew/Public/Home/images/20150722085539-76070.jpg"/>
					</div>
					<!--收益说明-->
					<div class="tab" style="display: none;">
						<p> 1、如按投资1000元计算，年化收益9.0%，明细如下<br />
日收益：0.25元<br />
周收益：1.73元<br />
平均月收益：7.5元<br />
年收益：90元<br />
预计产生碳豆：265粒/年<br />
2、锁定期90天，锁定期后随时转让<br />
如您锁定期过后立即转让，扣除手续费0.5%，您将获得：1017.19元<br />
（1000元本金 - 0.5%手续费+90天收益= 1017.19元）</p>
					</div>
				</div>
			</div>
			<!--prodDetConT end---->
			
			<!--产品支付时支付密码弹出框	start-->
			<div class="payOut">
				<div class="pay">
					<p>请输入您的交易密码</p>
					<dl>
						<dt><input type="password" name="" id="" value="" class="payPassw"/></dt>
						<dd><a href="javascript:;">忘记交易密码？</a></dd>
					</dl>
					<div class="btn">
						<input type="button" name="" id="" value="确  定" class="sure"/>
						<input type="button" name="" id="" value="取  消" class="close"/>
					</div>
				</div>
			</div>
			<!--产品支付时支付密码弹出框	end-->
		</div>
		<!--产品详情		Product Details	  end---->		
		


		
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