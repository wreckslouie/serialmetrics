$(function(){
	var sliding=false;
	$('nav').hover(function(){
		if(sliding==false){
			sliding=true;
			$('nav ul').slideDown(300,function(){
				sliding=false;
			});
		}
		
	},function(){
		if(sliding==false){
			sliding=true;
			$('nav ul').slideUp(300,function(){
				sliding=false;
			});
		}
	});

	$('#data-stack').hover(function(){
		$('#sixth-layer').animate({'top':'-=40px'},200);
		$('#fifth-layer').animate({'top':'-=24px'},200);
		$('#fourth-layer').animate({'top':'-=8px'},200);
		$('#third-layer').animate({'top':'+=8px'},200);
		$('#second-layer').animate({'top':'+=24px'},200);
		$('#first-layer').animate({'top':'+=40px'},200);
	},function(){
		$('#sixth-layer').animate({'top':'+=40px'},200);
		$('#fifth-layer').animate({'top':'+=24px'},200);
		$('#fourth-layer').animate({'top':'+=8px'},200);
		$('#third-layer').animate({'top':'-=8px'},200);
		$('#second-layer').animate({'top':'-=24px'},200);
		$('#first-layer').animate({'top':'-=40px'},200);
	});

	$('#sixth-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/sixth-layer-highlighted.png")');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/sixth-layer.png")');
	});
	$('#fifth-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/fifth-layer-highlighted.png")');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/fifth-layer.png")');
	});
	$('#fourth-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/fourth-layer-highlighted.png")');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/fourth-layer.png")');
	});
	$('#third-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/third-layer-highlighted.png")');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/third-layer.png")');
	});
	$('#second-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/second-layer-highlighted.png")');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/second-layer.png")');
	});
	$('#first-layer').hover(function(){
		$(this).css('background','url("images/home_page/data_stack/first-layer-highlighted.png")');
	},function(){
		$(this).css('background','url("images/home_page/data_stack/first-layer.png")');
	});

	
});