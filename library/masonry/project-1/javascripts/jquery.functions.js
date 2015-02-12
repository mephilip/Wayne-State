jQuery(document).ready(function($) {
	
	var delay = (function(){
	  var timer = 0;
	  return function(callback, ms){
	    clearTimeout (timer);
	    timer = setTimeout(callback, ms);
	  };
	})();
	
	delay(function(){
        	$("#logo").addClass('top-change');
        	$("#links").addClass('margin-return');
    }, 300 );
	
	$('.flex-btn').click(function(){
		if($(this).hasClass('flex-active')){
			$(this).removeClass('flex-active');
			$('.flex-nav').removeClass('flex-expand');
			$('#container').removeClass('container-expand');
			$('body').removeClass('no-scroll');
		} else {
			$(this).addClass('flex-active');
			$('.flex-nav').addClass('flex-expand');
			$('#container').addClass('container-expand');
			$('body').addClass('no-scroll');
		}
		$( ".flex-nav" ).scrollTop( 0 );
	});
	
	$( "#nav-toggle" ).click(function() {
		$( this ).toggleClass( "active" );
	});
	
	$(".arrow-anchor").click(function() {
		var data_target = $(this).attr('data-target');
    	$('html, body').animate({
       	 	scrollTop: $(data_target).offset().top
		}, 700);
	});
	
});