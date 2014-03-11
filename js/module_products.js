$(function(){
	$('.module-heading').click(function(e){
		var sibling_content=$(this).siblings('.module-content');
		if(sibling_content.css('display')=='none'){
			$(sibling_content).slideDown(300);
			e.stopPropagation();
		}else{
			$(sibling_content).slideUp(300);
			e.stopPropagation();
		}
	});

	$('html, body').click(function(){
		$('.module-content').slideUp(300);
	});

});