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
		$('#sixth-layer').animate({'top':'-=20px'},200);
		$('#fifth-layer').animate({'top':'-=12px'},200);
		$('#fourth-layer').animate({'top':'-=4px'},200);
		$('#third-layer').animate({'top':'+=4px'},200);
		$('#second-layer').animate({'top':'+=12px'},200);
		$('#first-layer').animate({'top':'+=20px'},200);
	},function(){
		$('#sixth-layer').animate({'top':'+=20px'},200);
		$('#fifth-layer').animate({'top':'+=12px'},200);
		$('#fourth-layer').animate({'top':'+=4px'},200);
		$('#third-layer').animate({'top':'-=4px'},200);
		$('#second-layer').animate({'top':'-=12px'},200);
		$('#first-layer').animate({'top':'-=20px'},200);
	});

	$('#sixth-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/sixth-layer-highlighted.png") no-repeat');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/sixth-layer.png") no-repeat');
	});
	$('#fifth-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/fifth-layer-highlighted.png") no-repeat');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/fifth-layer.png") no-repeat');
	});
	$('#fourth-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/fourth-layer-highlighted.png") no-repeat');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/fourth-layer.png") no-repeat');
	});
	$('#third-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/third-layer-highlighted.png") no-repeat');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/third-layer.png") no-repeat');
	});
	$('#second-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/second-layer-highlighted.png") no-repeat');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/second-layer.png") no-repeat');
	});
	$('#first-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/first-layer-highlighted.png") no-repeat');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/first-layer.png") no-repeat');
	});

	
});