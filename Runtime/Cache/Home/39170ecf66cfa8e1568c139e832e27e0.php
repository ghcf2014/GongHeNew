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
	
			<!--轮播图	banner start-->
		<div class="banOut">
			<!--banner start-->
			<ul class="ban">
				<li style="background: url(/gonghenew/Public/Home/images/ban01.png) no-repeat center top; z-index: 1;"></li>
				<li style="background: url(/gonghenew/Public/Home/images/ban02.png) no-repeat center top;"></li>
			</ul>
			<!--banner end-->
			
			<!--网站公告		notice start-->
			<div class="noticeOut">
				<div class="noticeIn">
					<ul class="noticeCon">
						<li><a href="javascript:;">尊敬的用户您好！为提供更稳定、便捷、高效的服务，我司将于6月30日23:00-06:00进行系统全面升级维护，期间建议您暂停本网站的任何操作，由此给您带来的不便，敬请谅解!</a></li>
						<li><a href="javascript:;">尊敬的用户您好！为提供更稳定、便捷、高效的服务，我司将于6月30日23:00-06:00进行系统全面升级维护，期间建议您暂停本网站的任何操作...</a></li>
						<li><a href="javascript:;">尊敬的用户您好！为提供更稳定、便捷、高效的服务，我司将于6月30日23:00-06:00进行系统全面升级维护，期间建议您暂停本网站的任何操作，由此给您带来的不便</a></li>
				</ul>
				</div>
			</div>
			<!--网站公告		notice end-->
			
			<!--按钮	开始-->
			<div class="banBtnL"><img src="/gonghenew/Public/Home/images/left.png"/></div>
			<div class="banBtnR"><img src="/gonghenew/Public/Home/images/right.png"/></div>
			<!--按钮	结束-->
		</div>
		<!--轮播图	banner end-->
		
		<!--ghcfData start-->
		<div class="dataOut">
			<div class="dataIn">
				<!--dataL start-->
				<div class="dataL">
					<p>平台用户<br />累计超过</p>
					<strong>500,000</strong>
					<span>人</span>
				</div>
				<!--dataL end-->
				<!--dataC start-->
				<div class="dataC">
					<p>&nbsp;累计为用户带来收益超过</p>
					<strong>7&nbsp;5&nbsp;6&nbsp;4</strong>
					<span>万元</span>
				</div>
				<!--dataC end-->
				<!--dataR start-->
				<ul class="dataR">
					<li class="li01"><a href="javascript:;">理财产品</a></li>
					<li class="li02"><a href="javascript:;">官方微信</a></li>
					<li class="li03"><a href="javascript:;">定向产品</a></li>
					<li class="li04"><a href="http://weibo.com/u/5385565766?topnav=1&wvr=6&topsug=1" target="_blank">官方微博</a></li>
				</ul>
				<!--dataR end-->
				<!--鼠标滑过官方微信效果	start-->
				<div class="wxCode2"><img src="/gonghenew/Public/Home/images/wxCode2.png"/></div>
				<!--鼠标滑过官方微信效果	end-->
			</div>
		</div>
		<!--ghcfData end-->
		
		<!--content start-->
		<div class="con">
			<!--conL start-->
			<div class="conL">
				<!--新手专享	newHand start-->
				<div class="newHand">
					<!--top start-->
					<div class="top">
						<div class="tit">
							<h2>新手体验标</h2>
							<p>新手专享，项目金额无上限。</p>
						</div>
						<div class="button">
							<a href="javascript:;" class="details">详 情</a>
							<a href="javascript:;" class="bid">立即投标</a>
						</div>
					</div>
					<!--top end-->
					<!--bot start-->
					<div class="bot">
						<div class="botL">
							<p>年利率:&nbsp;&nbsp;<b>13.8</b>%</p>
							<p>售价：<span>50.00</span>元/块</p>
						</div>
						<div class="botC">
							<p>期限:&nbsp;&nbsp;<b>3</b>天</p>
							<p>发布时间：<span>2015-06-10</span></p>
						</div>
						<div class="botR">
							<p><b>已投：100块</b><strong>可投：456块</strong></p>
							<div class="out"><div class="in"></div></div>
						</div>
					</div>
					<!--bot end-->
				</div>
				<!--新手专享	newHand end-->
				<!--产品列表	proList start-->
				<div class="proList">
					<!--分类标题	proListTit start-->
					<ul class="proListTit">
						<li class="cur">最新投资项目</li>
						<li>产品转让</li>
					</ul>
					<!--分类标题	proListTit end-->
					<!--产品列表内容	proListCon start-->
					<div class="proListCon">
						<!--tab start-->
						<div class="tab">
						    <?php if(is_array($pro)): foreach($pro as $key=>$po): ?><div class="list">
									<h3>
										<strong><a href="javascript:;"><?php echo ($po["pname"]); ?></a></strong>
										<span>发布时间：<b><?php echo ($po["add_time"]); ?></b></span>
									</h3>
									<ul>
										<li><p><?php echo ($po["year_rate"]); ?></p>年化收益率( % )</li>
										<li><p><?php echo ($po["complete"]); ?></p>锁定期限（天）</li>
										<li><p><?php echo ($po["price"]); ?></p>发售价格( 元/块 )</li> 
										<li>
											<div class="num"><b>已投：245块</b><strong>可投：673块</strong></div>
											<div class="out"><div class="in"></div></div>
											<div class="perc">( 26.7% )</div>
										</li> 
										<li class="last"><a href="<?php echo U('Products/chanpinxiangqing');?>" class="btn">查看详情</a></li>
									</ul>
								</div><?php endforeach; endif; ?>
							<!--01-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 1 号</a></strong>
									<span>发布时间：<b> 2015-06-10</b></span>
								</h3>
								<ul>
									<li><p>10.60</p>年化收益率( % )</li>
									<li><p>1080</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已投：245块</b><strong>可投：673块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 26.7% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">查看详情</a></li>
								</ul>
							</div>
							<!--02-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 1 号</a></strong>
									<span>发布时间：<b> 2015-06-10</b></span>
								</h3>
								<ul>
									<li><p>10.60</p>年化收益率( % )</li>
									<li><p>1080</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已投：245块</b><strong>可投：673块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 26.7% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">查看详情</a></li>
								</ul>
							</div>
							<!--03-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 1 号</a></strong>
									<span>发布时间：<b> 2015-06-10</b></span>
								</h3>
								<ul>
									<li><p>10.60</p>年化收益率( % )</li>
									<li><p>1080</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已投：245块</b><strong>可投：673块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 26.7% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">查看详情</a></li>
								</ul>
							</div>
							<!--04-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 1 号</a></strong>
									<span>发布时间：<b> 2015-06-10</b></span>
								</h3>
								<ul>
									<li><p>10.60</p>年化收益率( % )</li>
									<li><p>1080</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已投：245块</b><strong>可投：673块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 26.7% )</div>
									</li>
									<li class="last"><a href="javascript:;" class="btn">查看详情</a></li>
								</ul>
							</div>
							<!--05-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 1 号</a></strong>
									<span>发布时间：<b> 2015-06-10</b></span>
								</h3>
								<ul>
									<li><p>10.60</p>年化收益率( % )</li>
									<li><p>1080</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已投：245块</b><strong>可投：673块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 26.7% )</div>
									</li>
									<li class="last"><a href="javascript:;" class="btn">查看详情</a></li>
								</ul>
							</div>
							<!--06-->
							<div class="list" style="border-bottom: none;">
								<h3>
									<strong><a href="javascript:;">美 桔 1 号</a></strong>
									<span>发布时间：<b> 2015-06-10</b></span>
								</h3>
								<ul>
									<li><p>10.60</p>年化收益率( % )</li>
									<li><p>1080</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已投：245块</b><strong>可投：673块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 26.7% )</div>
									</li>
									<li class="last"><a href="javascript:;" class="btn">查看详情</a></li>
								</ul>
							</div>
						</div>
						<!--tab end-->
						
						<!--tab start-->
						<div class="tab" style="display: none;">
							<!--01-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 7 号</a></strong>
									<span>发布时间：<b> 2015-06-18</b></span>
								</h3>
								<ul>
									<li><p>9.60</p>年化收益率( % )</li>
									<li><p>93</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已转：145块</b><strong>可转：635块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 18.6% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">立即购买</a></li>
								</ul>
							</div>
							<!--02-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 7 号</a></strong>
									<span>发布时间：<b> 2015-06-18</b></span>
								</h3>
								<ul>
									<li><p>9.60</p>年化收益率( % )</li>
									<li><p>93</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已转：145块</b><strong>可转：635块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 18.6% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">立即购买</a></li>
								</ul>
							</div>
							<!--03-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 7 号</a></strong>
									<span>发布时间：<b> 2015-06-18</b></span>
								</h3>
								<ul>
									<li><p>9.60</p>年化收益率( % )</li>
									<li><p>93</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已转：145块</b><strong>可转：635块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 18.6% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">立即购买</a></li>
								</ul>
							</div>
							<!--04-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 7 号</a></strong>
									<span>发布时间：<b> 2015-06-18</b></span>
								</h3>
								<ul>
									<li><p>9.60</p>年化收益率( % )</li>
									<li><p>93</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已转：145块</b><strong>可转：635块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 18.6% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">立即购买</a></li>
								</ul>
							</div>
							<!--05-->
							<div class="list">
								<h3>
									<strong><a href="javascript:;">美 桔 7 号</a></strong>
									<span>发布时间：<b> 2015-06-18</b></span>
								</h3>
								<ul>
									<li><p>9.60</p>年化收益率( % )</li>
									<li><p>93</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已转：145块</b><strong>可转：635块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 18.6% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">立即购买</a></li>
								</ul>
							</div>
							<!--06-->
							<div class="list" style="border-bottom: none;">
								<h3>
									<strong><a href="javascript:;">美 桔 7 号</a></strong>
									<span>发布时间：<b> 2015-06-18</b></span>
								</h3>
								<ul>
									<li><p>9.60</p>年化收益率( % )</li>
									<li><p>93</p>锁定期限（天）</li>
									<li><p>1000.00</p>发售价格( 元/块 )</li> 
									<li>
										<div class="num"><b>已转：145块</b><strong>可转：635块</strong></div>
										<div class="out"><div class="in"></div></div>
										<div class="perc">( 18.6% )</div>
									</li> 
									<li class="last"><a href="javascript:;" class="btn">立即购买</a></li>
								</ul>
							</div>
						</div>
						<!--tab end-->
					</div>
					<!--产品列表内容	proListCon end-->
				</div>	
				<!--产品列表	proList end-->
			</div>
			<!--conL end-->
			<!--conR start-->
			<div class="conR">
				<!--网站公告	开始-->
				<div class="news">
					<p><img src="/gonghenew/Public/Home/images/conRNewsPic01.gif"/></p>
					<div class="newsCon">
						<h2><strong>网站公告</strong><a href="<?php echo U('Index/newlist');?>">more</a></h2>
						<ul>
						<?php if(is_array($art)): foreach($art as $key=>$vo): ?><li><a href="<?php echo U('Index/newdetail?id='.$vo['id']);?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<!--网站公告	结束-->
				<!--行业新闻	开始-->
				<div class="news">
					<p><img src="/gonghenew/Public/Home/images/conRNewsPic02.gif"/></p>
					<div class="newsCon">
						<h2><strong>行业新闻</strong><a href="<?php echo U('Index/newlist');?>">more</a></h2>
						<ul>
						<?php if(is_array($art)): foreach($art as $key=>$vo): ?><li><a href="<?php echo U('Index/newdetail?id='.$vo['id']);?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<!--行业新闻	结束-->
			</div>
			<!--conR end-->
		</div>
		<!--content end-->
		
		<!--广告	ad start-->
		<div class="ad"></div>
		<!--广告	ad end-->
		
		<!--fModular	四模块	start-->
		<div class="fModular">
			<ul>
				<li>
					<p>工合财富是一个实名认证平台，会保证用户信息隐私的绝对安全，用户在平台上交流的过程中，也要时刻注意保护个人隐私，截图注意要覆盖个人信息，不要透露真丝姓名与住址等，以防个人信息被盗取造成损失。</p>
					<a href="javascript:;" class="btn">了 解 详 情</a>
				</li>
				<li class="two">
					<p>新手指引可以帮助用户更深入了解平台的相管规则，更好的指引用户使用平台，解决用户在投资购买过程与遇到的问题。不作为任何投资建议与依据。</p>
					<a href="javascript:;" class="btn">了 解 详 情</a>
				</li>
				<li class="three">
					<p>常见问题可以帮助用户更详细的了解平台的一些操作方法，更好的帮助用户使用平台，解决用户在投资购买过程与遇到的问题。不作为任何投资建议与依据。</p>
					<a href="javascript:;" class="btn">了 解 详 情</a>
				</li>
				<li class="four">
					<p>企业文化：融通四海、助推发展<br />投资策略：两会互动、双优并举 <br />核心团队：顾问团队、管理团队、法律团队、专业团队<br /></p>
					<a href="javascript:;" class="btn">了 解 详 情</a>
				</li>
			</ul>
		</div>
		<!--fModular	四模块	end-->
				<!--合作伙伴	partner start-->
		<div class="partO">
			<div class="part">
				<h3>合作伙伴</h3>
				<ul>
					<li><img src="/gonghenew/Public/Home/images/jsbank.gif"/></li>
					<li><img src="/gonghenew/Public/Home/images/nybank.gif"/></li>
					<li><img src="/gonghenew/Public/Home/images/zsbank.gif"/></li>
					<li><img src="/gonghenew/Public/Home/images/gdbank.gif"/></li>
					<li class="last"><img src="/gonghenew/Public/Home/images/guofubao.gif"/></li>
				</ul>
			</div>
		</div>
		<!--合作伙伴	partner end-->
		
		<!--立即体验	taste start-->
		<div class="taste">
			<a href="javascript:;"></a>
		</div>
		<!--立即体验	taste end-->
		

		
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