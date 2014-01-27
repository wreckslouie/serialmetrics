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

	
});