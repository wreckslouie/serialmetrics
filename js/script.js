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

	$('#sixth-layer').hover(function(){
		$('#data-stack').css('background-image','url("images/home_page/data-stack-sixth-lifted.png")');
	});
	$('#fifth-layer').hover(function(){
		$('#data-stack').css('background-image','url("images/home_page/data-stack-fifth-lifted.png")');
	});

	
});