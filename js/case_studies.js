$(function(){
	$('.case-study-intro').click(function(e){
		var sibling_content=$(this).siblings('.case-study-content');
		if(sibling_content.css('display')=='none'){
			$(sibling_content).slideDown(900);
			$(this).siblings('.more').fadeOut(300,function(){
				$(this).siblings('.less').fadeIn(300);
			});
			e.stopPropagation();
		}else{
			$(sibling_content).slideUp(500);
			$(this).siblings('.less').fadeOut(300,function(){
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

	$('html, body').click(function(){
		$('.case-study-content').slideUp(500);
	});
});