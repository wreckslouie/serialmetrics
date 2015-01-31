$(function(){
	//Check if arriving at anchor link, drop down text if so
	var query_string=$(location).attr('hash');
	switch(query_string){
		case '#matching-algorithms':
			$('#matching-algorithms .module-content').slideDown(300);
			break;
		case '#dynamic-pricing':
			$('#dynamic-pricing .module-content').slideDown(300);
			break;
		case '#recommendation-systems':
			$('#recommendation-systems .module-content').slideDown(300);
			break;
		case '#text-classification':
			$('#text-classification .module-content').slideDown(300);
			break;
		case '#intelligent-promotions':
			$('#intelligent-promotions .module-content').slideDown(300);
			break;
		case '#scoring-systems':
			$('#scoring-systems .module-content').slideDown(300);
			break;
		case '#geo-inference':
			$('#geo-inference .module-content').slideDown(300);
			break;
		default:
			break;
	}

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


	$('.how-intro').click(function(e){
		var sibling_content=$(this).siblings('.how-content');
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