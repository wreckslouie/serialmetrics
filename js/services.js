$(function(){
	$('.step-summary').click(function(e){
		var sibling_content=$(this).siblings('.step-details');
		if(sibling_content.css('display')=='none'){
			$(sibling_content).slideDown(300);
			$(this).children('.more').fadeOut(300,function(){
				$(this).siblings('.less').fadeIn(300);
			});
			e.stopPropagation();
		}else{
			$(sibling_content).slideUp(300);
			$(this).children('.less').fadeOut(300,function(){
				$(this).siblings('.more').fadeIn(300);
			});
			e.stopPropagation();
		}
	});

	$('.more').click(function(){
		$(this).fadeOut(300,function(){
			$(this).siblings('.less').fadeIn(300);
		});
	});
	$('.less').click(function(){
		$(this).fadeOut(300,function(){
			$(this).siblings('.more').fadeIn(300);
		});
	});
});