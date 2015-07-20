	
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
	$( "#datepicker" ).datepicker();
	$( "#datepicker2" ).datepicker();
});





























