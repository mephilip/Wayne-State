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
	$(window).on('scroll', function() {
	    var y_scroll_pos = window.pageYOffset;
	    var scroll_pos_test = 150;             // set to whatever you want it to be
	
	    if(y_scroll_pos > scroll_pos_test) {
		    $('#logo').addClass('active');
	    }
	    
	    if(y_scroll_pos < scroll_pos_test) {
		    $('#logo').removeClass('active');
	    }
	});
	$('.flex-btn').click(function(){
		if($(this).hasClass('flex-active')){
			$(this).removeClass('flex-active');
			$('.flex-nav').removeClass('flex-expand');
			$('#container').removeClass('container-expand');
			$('body').removeClass('no-scroll');
			$('#flex-overlay').hide();
		} else {
			$(this).addClass('flex-active');
			$('.flex-nav').addClass('flex-expand');
			$('#container').addClass('container-expand');
			$('body').addClass('no-scroll');
			$('#flex-overlay').fadeIn();
		}
		$( ".flex-nav" ).scrollTop( 0 );
	});
	$('#flex-overlay').click(function(){
		if($('.flex-btn').hasClass('flex-active')){
			$('.flex-btn').removeClass('flex-active');
			$('.flex-nav').removeClass('flex-expand');
			$('#container').removeClass('container-expand');
			$('body').removeClass('no-scroll');
			$('#nav-toggle').removeClass( "active" );
			$('#flex-overlay').hide();
		} else {
			$(this).addClass('flex-active');
			$('.flex-nav').addClass('flex-expand');
			$('#container').addClass('container-expand');
			$('body').addClass('no-scroll');
			$('#flex-overlay').fadeIn();
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
	
	$(".nav-item", this).hoverIntent(function () { 
		$(this).addClass('nav-active');
		$(".sub-nav", this).slideDown(250);
	}, function() {
		$(".sub-nav", this).hide(250); 
		$(this).removeClass('nav-active');
	});
	
	$( "#ajax-search" ).click(function() {
		var search_query = $('#search-input').val();
		$( '#search-form' ).addClass( "active" );
		$('html, body').animate({
       	 	scrollTop: $('#container').offset().top
		}, 200);
		if(search_query !== ''){
			$('#search-term').html('Showing results for ... <strong>' + search_query + '</strong>');
		} else {
			$('#search-term').html('');
		}
		return false;
	});
	
	$( "#search-input" ).keyup(function( event ) {
		event.preventDefault();
		var search_query = $('#search-input').val();
		delay(function(){
			$( '#search-form' ).addClass( "active" );
			$('html, body').animate({
       	 	scrollTop: $('#container').offset().top
			}, 200);
			if(search_query !== ''){
				$('#search-term').html('Showing results for ... <strong>' + search_query + '</strong>');
			} else {
				$('#search-term').html('');
			}
			return false;
    	}, 500 );
	});
	$( "#search-close" ).click(function() {
		$( '#search-form' ).removeClass( "active" );
		$('#search-input').val('');
		return false;
	});
	
	
	
});