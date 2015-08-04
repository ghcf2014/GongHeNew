	
//快捷通道 	bar	qq和微信的鼠标划上效果
$(function(){
	//qq滑上效果
	$('.bar .qq').hover(function(){
		$('.bar .qqCode').show();
	},function(){
		$('.bar .qqCode').hide();
	});
	//wx滑上效果
	$('.bar .wx').hover(function(){
		$('.bar .wxCode').show();
	},function(){
		$('.bar .wxCode').hide();
	});
})



//轮播图效果
$(function(){
	var num = 0;
	var timer =null;
	var myFn = function()
	{
		num++;
		if(num > $('.ban li').length -1)
		{  
			num = 0;
		}
		$('.ban li').eq(num).stop().fadeIn().siblings().fadeOut();
	}
	timer =setInterval(myFn,3000);
	
	//鼠标滑过或离开轮播图，动画的停止与播放
	$('.ban').mouseover(function(e) {
        clearInterval(timer);
		timer =null;
    }).mouseout(function(e) {
		clearInterval(timer);
        timer = setInterval(myFn,3000);
    });
    
    //左边的按钮轮播图效果
    $('.banOut .banBtnL').click(function(){
    	num--;
    	if(num < 0){
    		num = $('.ban li').length - 1;
    		$('.ban li').eq(num).stop().fadeIn().siblings().fadeOut();
    	}
    	else{
    		$('.ban li').eq(num).stop().fadeIn().siblings().fadeOut();
    	}
    });
    //右边的按钮轮播图效果
    $('.banOut .banBtnR').click(function(){
    	num++;
    	if(num > $('.ban li').length - 1){
    		num = 0;
    		$('.ban li').eq(num).stop().fadeIn().siblings().fadeOut();
    	}
    	else{
    		$('.ban li').eq(num).stop().fadeIn().siblings().fadeOut();
    	}
    });
})



//轮播图上网站公告切换效果
$(function(){
	var moveT = 0;
	var timer = null;
	var noticeFn = function(){
		var heiMin = $('.banOut .noticeOut .noticeIn .noticeCon li').height();
		var heiMax = $('.banOut .noticeOut .noticeIn .noticeCon li').length * heiMin - heiMin;
		moveT -= heiMin;
		if(moveT < -heiMax){
			moveT = 0;
			$('.banOut .noticeOut .noticeIn .noticeCon').css({'top':''+moveT+'px'});
		}
		$('.banOut .noticeOut .noticeIn .noticeCon').css({'top':''+moveT+'px'});
	}
	timer =setInterval(noticeFn,2000);
	
	//鼠标滑过或离开轮播图，动画的停止与播放
	$('.banOut .noticeOut .noticeIn').mouseover(function(e) {
        clearInterval(timer);
		timer =null;
    }).mouseout(function(e) {
		clearInterval(timer);
        timer = setInterval(noticeFn,2000);
    });
})



//首页-平台用户累计-dataR-微信鼠标滑过效果
$(function(){
	$('.dataIn .dataR .li02').hover(function(){
		$('.dataIn .wxCode2').show();
	},function(){
		$('.dataIn .wxCode2').hide();
	});
})



//底部-联系方式-滑过微信&QQ，显示二维码
$(function(){
	$('.footer .topR ul li').eq(0).hover(function(){
		$('.footer .qqCode').show();
	},function(){
		$('.footer .qqCode').hide();
	});
	
	$('.footer .topR ul li').eq(2).hover(function(){
		$('.footer .wxCode').show();
	},function(){
		$('.footer .wxCode').hide();
	});
})



//首页-最新投资项目 与  转让产品切换效果
$(function(){
	$('.con .conL .proList .proListTit li').each(function(index,element){
		$(element).click(function(){
			$(element).addClass('cur').siblings().removeClass('cur')
			$('.con .conL .proList .proListCon .tab').eq($(element).index()).show().siblings().hide();
		});
	});
})



//弹窗-登录
$(function(){
	$('.bar .barLeft .DL').click(function(){
		$('.loginO').show();
		$('.loginIn .loginT p').click(function(){
			$('.loginO').hide();
		});
	});
})



//注册
//$(function(){
//      $('.register .registerBot .registerBotL p .registerChe').bind("change",function() {
//         if($(this).is(':checked')){
//              $('.register .registerBot .registerBotL .registerBtn').prop( "disabled", false);
//         }else{
//              $('.register .registerBot .registerBotL .registerBtn').prop( "disabled", true);
//         }
//      });          
//})



//登录页
$(function(){

	var num = 0;
	var timer =null;
	var myFn = function()
	{
		num++;
		if(num > $('.logR ul li').length -1){  num = 0;}
		$('.logR ul li').eq(num).stop().fadeIn().siblings().fadeOut();
	}
	timer =setInterval(myFn,3000);		
	$('.logR ul li').mouseover(function(e) {
        clearInterval(timer);
		timer =null;
    }).mouseout(function(e) {
		clearInterval(timer);
        timer = setInterval(myFn,3000);
    });
	
})



//个人中心--资产详情--更换头像弹出框
$(function(){
	$('.pc .pcR .assDet01 dl dt').dblclick(function(){
		$('.pc .assDet01TC').css('display','block');
		$(".pc .assDet01TC .assDet01TCIn .inp input[type=file]").change(function(){
					$(this).parents(".inp").find("input[type=text]").val($(this).val());
		});
		$('.pc .assDet01TC .assDet01TCIn .btn .closeBtn').click(function(){
			$('.pc .assDet01TC').css('display','none');
		});		
	});	
})




//新手指南
$(function(){
	//tab	切换 
	$('.guideTop li').each(function(index,element){
		$(element).click(function(){
			$('.guideCon .tab').eq($(element).index()).show().siblings().hide();
			$(element).addClass('cur').siblings().removeClass('cur')
		});
	});
	//内部问题切换
	$('.guideCon .security li').each(function(index,element){
		$(element).click(function(){
			$(element).children('p').toggle();
		});
	});
	
	$('.guideCon .question li').each(function(index,element){
		$(element).click(function(){
			$(element).children('p').toggle();
		});
	});
})



//个人中心-充值提现页-充值与提现切换
$(function(){
	$('.pc .pcR .pcRTit .cztxTit li').each(function(index,element){
		$(element).click(function(){
			$('.pc .pcR .pcCzTx .tab').eq($(element).index()).show().siblings().hide();
			$(element).addClass('cur').siblings().removeClass('cur');
		});
	});
})



//日期选择
$(function() {
//	alert(1);
	$( "#datepicker" ).datepicker();
	$( "#datepicker2" ).datepicker();
});



//个人中心-认证管理
$(function() {
//	alert(1);
	var Dd = $('.pc .pcR .auth .dd02');
	//实名认证
	if( Dd.eq(0).prev('dd').html() == '未认证'){
		Dd.eq(0).children('a').click(function(){
			$('.pc .pcR .auth .realN').toggle();
		});				
	}	
	
	//绑定邮箱
	if( Dd.eq(1).prev('dd').html() == '未设置'){
		Dd.eq(1).children('a').click(function(){
			$('.pc .pcR .auth .bindingM').toggle();
		});	
	}
	else{
		//更换邮箱
		Dd.eq(1).children('a').html('更换绑定邮箱');
		Dd.eq(1).children('a').click(function(){
			$('.pc .pcR .auth .replaceM').toggle();
		});	
	}
	
	//绑定银行卡
	if( Dd.eq(2).prev('dd').html() == '未设置'){
		Dd.eq(2).children('a').click(function(){
			$('.pc .pcR .auth .boundBc').toggle();
		});	
	}
	else{
		
		Dd.eq(2).children('a').html(' ');
	}
	
	//更换绑定手机
	
	Dd.eq(3).children('a').click(function(){
		$('.pc .pcR .auth .changePn').toggle();
	});	
	
});



//个人中心-密码管理
$(function() {
//	alert(1);
	var Dd = $('.pc .pcR .password .dd02');
	//修改登录密码
	Dd.eq(0).children('a').click(function(){
		$('.pc .pcR .password .loginP').toggle();
	});					
	
	//设置交易密码
	if( Dd.eq(1).prev('dd').html() == '未设置'){
		Dd.eq(1).children('a').click(function(){
			$('.pc .pcR .password .setTranPass').toggle();
		});	
	}
	else{
		//修改交易密码
		Dd.eq(1).html('<a href="javascript:;" class="xg">修改</a> | <a href="javascript:;" class="zh">找回</a>');
		$('.pc .pcR .password .dd02 .xg').click(function(){
			$('.pc .pcR .password .modTranPass').toggle();
			$('.pc .pcR .password .reTranPass').hide();
			$('.pc .pcR .password .reTranPass2').hide();
		});	
		//找回交易密码
		$('.pc .pcR .password .dd02 .zh').click(function(){
			$('.pc .pcR .password .reTranPass').toggle();
			$('.pc .pcR .password .modTranPass').hide();
			$('.pc .pcR .password .reTranPass .btn').click(function(){
				$('.pc .pcR .password .reTranPass').hide();
				$('.pc .pcR .password .reTranPass2').toggle();
			});
		});	
	}
	
});



//个人中心-消息中心-全选-效果
$(function(){
	//	消息通知
	$('#chkall').click(function () {
        $('.pc .pcR .messNoti table input[type=checkbox]').prop('checked', $(this).is(':checked'));
    });
    var $subBox = $(".pc .pcR .messNoti table input[name='subBox']");
    $subBox.click(function(){
        $("#chkall").prop("checked",$subBox.length == $(".pc .pcR .messNoti table input[name='subBox']:checked").length ? true : false);
    });
   
   //通知设置
   $('#chkall2').click(function () {
        $('.pc .pcR .notiWay .notiWay01 ul li input[type=checkbox]').prop('checked', $(this).is(':checked'));
   });
   var $subBox2 = $(".pc .pcR .notiWay .notiWay01 ul li input[name='subBox2']");
    $subBox2.click(function(){
        $("#chkall2").prop("checked",$subBox2.length == $(".pc .pcR .notiWay .notiWay01 ul li input[name='subBox2']:checked").length ? true : false);
    });
    
   //通知方式
   $('#chkall3').click(function () {
        $('.pc .pcR .notiWay .notiWay02 ul li input[type=checkbox]').prop('checked', $(this).is(':checked'));
   });
   var $subBox3 = $(".pc .pcR .notiWay .notiWay02 ul li input[name='subBox3']");
    $subBox3.click(function(){
        $("#chkall3").prop("checked",$subBox3.length == $(".pc .pcR .notiWay .notiWay02 ul li  input[name='subBox3']:checked").length ? true : false);
    });
});




//产品详情
$(function(){
	//底部tab切换
	$('.prodDet .prodDetConB ul li').each(function(index,element){
		$(element).click(function(){
			$('.prodDet .prodDetConB .prodDetConBTab .tab').eq($(element).index()).show().siblings().hide();
			$(element).addClass('cur').siblings().removeClass('cur');
		});
	});
	
	
		
	var max = parseInt($('.prodDet .prodDetConT .prodDetConTL .ul02 li').eq(1).children('b').html());
//	alert(max);
	//点击"+"
	$('#plus').click(function(){
		if( isNaN($('#txt').val()) ){
			alert('请输入整数');
		}
		else if($('#txt').val() >= max){
			alert('您好！您最多只能购买'+max+'块');
			$('#txt').val(max);
		}
		else if($('#txt').val() <0){
				alert('请输入大于0的整数');
				$('#txt').val(0);
		}
		else{
			$('#txt').val(parseInt($('#txt').val())+1);
		}
		myMoney();
	});
	//点击"-"
	$('#minus').click(function(){
		if( isNaN($('#txt').val()) ){
			alert('请输入整数');
		}
		else if($('#txt').val() > max){
			alert('您好！您最多只能购买'+max+'块');
			$('#txt').val(max);
		}
		else if($('#txt').val() <=0){
				alert('请输入大于0的整数');
				$('#txt').val(0);
		}
		else{
			$('#txt').val(parseInt($('#txt').val())-1);
		}
		myMoney();
	});	
	
	
	//选中选购合同，否则不可购买
	$('.prodDet .prodDetConT .prodDetConTR p input[type=checkbox]').bind("change",function() {
           if($(this).is(':checked')){
                $('.prodDet .prodDetConT .prodDetConTR .btn').prop( "disabled", false);
                $('.prodDet .prodDetConT .prodDetConTR .btn').css('cursor','pointer');
           }else{
                $('.prodDet .prodDetConT .prodDetConTR .btn').prop( "disabled", true);
                $('.prodDet .prodDetConT .prodDetConTR .btn').css('cursor','not-allowed');
           }
        });	
})
//共需投资
function myMoney(){
	var max = parseInt($('.prodDet .prodDetConT .prodDetConTL .ul02 li').eq(1).children('b').html());  //最大购买数量
	var num = parseInt($('#txt').val());//购买数量
	var price = parseInt($('.prodDet .prodDetConT .prodDetConTL .ul01 li').eq(2).find('span').html());  //Unit price购买单价
	var IMoney = parseInt($('.prodDet .prodDetConT .prodDetConTR dl').eq(1).find('span').html()); //InvestMoney,共需投资的钱
//	alert(IMoney);
	var rate = parseFloat($('.prodDet .prodDetConT .prodDetConTL .ul01 li').eq(0).find('span').html());  //年华收益率
//	alert(rate);
	var AMoney = parseInt($('.prodDet .prodDetConT .prodDetConTR dl').eq(2).find('span').html());  //年化收益
						
	if (num > max) {
		alert('请输入小于等于'+max+'的整数');
		$('#txt').val(max);
		num = max;
		IMoney = num * price;
		AMoney = num * rate;
		$('.prodDet .prodDetConT .prodDetConTR dl').eq(1).find('span').html(''+IMoney);
		$('.prodDet .prodDetConT .prodDetConTR dl').eq(2).find('span').html(''+AMoney);
	} 
	else if(num <= 0){
		alert('请输入大于0的整数');
		$('#txt').val(0);
		$('.prodDet .prodDetConT .prodDetConTR dl').eq(1).find('span').html(0);
		$('.prodDet .prodDetConT .prodDetConTR dl').eq(2).find('span').html(0);
	}
	else{
		IMoney = num * price;
		AMoney = num * rate;
		$('.prodDet .prodDetConT .prodDetConTR dl').eq(1).find('span').html(''+IMoney);
		$('.prodDet .prodDetConT .prodDetConTR dl').eq(2).find('span').html(''+AMoney);
	}
}





//关于公司的--网站公告-新闻动态-行业动态-关于我们-公司简介
$(function(){
	//tab切换
	$('.about .aboutL li').each(function(index,element){
		$(element).click(function(){
			$('.about .aboutR .tab').eq($(element).index()).show().siblings().hide();
			$(element).addClass('cur').siblings().removeClass('cur');
		});
	});
})




//找回密码
$(function(){
	$('.forgPass .forgPassWay .byPhone').click(function(){
		$('.forgPass .forgPassForPhone').show();
		$('.forgPass .forgPassWay').hide();
	});
	$('.forgPass .forgPassWay .byEmail').click(function(){
		$('.forgPass .forgPassForEmail').show();
		$('.forgPass .forgPassWay').hide();
	});
})



//当前导航栏
$(document).ready(function(){  
//	alert($(".navR li a").length);
    $(".navR li a").each(function(){  
        $this = $(this);  
        if($this[0].pathname == String(window.location.pathname)){  
            $this.parent().addClass("cur");  
            $this.parent().siblings().removeClass("cur");
        }  
    });       
});  

























































