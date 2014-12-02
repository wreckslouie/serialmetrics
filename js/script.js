$(function(){
	var sliding=false;
	$('nav').hover(function(){
		if(sliding==false){
			sliding=true;
			$('nav ul').slideDown(300,function(){
				sliding=false;
				$('nav ul').addClass('hover');
			});
		}

	},function(){
		$('nav ul ').slideUp(300);
	});

	$('nav ul').mouseleave(function(){
		if($('nav ul').hasClass('hover')){
			$('nav ul').slideUp(300);
			$('nav ul').removeClass('hover');
		}
	});

	//Drop-down menu function for tablet/mobile devices
	$('nav .drop-down').click(function(){
		if(sliding==false){
			if($('nav ul').css('display')=='none'){
				sliding=true;
				$('nav ul').slideDown(300,function(){
					sliding=false;
				});
			}else if($('nav ul').css('display')=='block'){
				sliding=true;
				$('nav ul').slideUp(300,function(){
					sliding=false;
				});
			}
		}
	});

	$('nav a').click(function(e){
		e.stopPropagation();
	});

	$('#layer-container').hover(function(){
		$('#fifth-layer').animate({'top':'-=20px'},200);
		$('#fourth-layer').animate({'top':'-=12px'},200);
		$('#third-layer').animate({'top':'-=4px'},200);
		$('#second-layer').animate({'top':'+=4px'},200);
		$('#first-layer').animate({'top':'+=12px'},200);
	},function(){
		$('#fifth-layer').animate({'top':'+=20px'},200);
		$('#fourth-layer').animate({'top':'+=12px'},200);
		$('#third-layer').animate({'top':'+=4px'},200);
		$('#second-layer').animate({'top':'-=4px'},200);
		$('#first-layer').animate({'top':'-=12px'},200);
	});

	$('#fifth-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/layers/api.png") no-repeat')
			.css('background-size', '924px')
			.css('background-position', 'center')
			.css('margin-left', '137px');

	},function(){
		$(this).css('background','url("images/home_page/data_stack/transparent/layer5.png") no-repeat')
			.css('background-size', '650px')
			.css('background-position', 'center')
			.css('margin-left', '0px');
	});
	$('#fourth-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/layers/machine_learning.png") no-repeat')
			.css('background-size', '924px')
			.css('background-position', 'center')
			.css('margin-left', '137px');

	},function(){
		$(this).css('background','url("images/home_page/data_stack/transparent/layer4.png") no-repeat')
			.css('background-size', '650px')
			.css('background-position', 'center')
			.css('margin-left', '0px');

	});
	$('#third-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/layers/access.png") no-repeat')
			.css('background-size', '924px')
			.css('background-position', 'center')
			.css('margin-left', '137px');

	},function(){
		$(this).css('background','url("images/home_page/data_stack/transparent/layer3.png") no-repeat')
			.css('background-size', '650px')
			.css('background-position', 'center')
			.css('margin-left', '0px');

	});
	$('#second-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/layers/etl.png") no-repeat')
			.css('background-size', '924px')
			.css('background-position', 'center')
			.css('margin-left', '137px');

	},function(){
		$(this).css('background','url("images/home_page/data_stack/transparent/layer2.png") no-repeat')
			.css('background-size', '650px')
			.css('background-position', 'center')
			.css('margin-left', '0px');

	});
	$('#first-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/layers/infrastructure.png") no-repeat')
			.css('background-size', '924px')
			.css('background-position', 'center')
			.css('margin-left', '137px');

	},function(){
		$(this).css('background','url("images/home_page/data_stack/transparent/layer1.png") no-repeat')
			.css('background-size', '650px')
			.css('background-position', 'center')
			.css('margin-left', '0px');

	});

});