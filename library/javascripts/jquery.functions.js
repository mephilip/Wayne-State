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
	
	
	
	$( "#search-input" ).keyup(function(e) {
		if (e.keyCode === 13) {
			$( "#quick-search-form" ).submit();
			$( "#search-input" ).autocomplete( "close" );
			return true;
		} else {
			var search_query = $('#search-input').val();
			delay(function(){
				$( '#search-form' ).addClass( "active" );
				$('#search-results-inner').hide();
				$('html, body').animate({
	       	 	scrollTop: $('#container').offset().top
				}, 200);
				if(search_query !== ''){
					$('#search-term').html('Showing results for ... <strong>' + search_query + '</strong>');
					delay(function(){
					}, 1500);
				} else {
					$('#search-term').html('');
					$('#search-ajax-loader').hide();
					$('#search-results-inner').hide();
				}
				
	    	}, 200 );
    	}
	});
	
	$( "#quick-search-form" ).on( "submit" , function(e) {
		e.preventDefault();
		var search_query = $('#search-input').val();
		$( '#search-form' ).addClass( "active" );
		$('#search-results-inner').hide();
		$('#search-ajax-loader').show();
		$( "#search-input" ).autocomplete( "close" );
		$('html, body').animate({
       	 	scrollTop: $('#container').offset().top
		}, 200);
		if(search_query !== ''){
			$('#search-term').html('Showing results for ... <strong>' + search_query + '</strong>');
			$('#search-results').show();
			delay(function(){
				$('#search-ajax-loader').hide();
				$('#search-results-inner').fadeIn();
			}, 1500);
		} else {
			$('#search-term').html('');
			$('#search-results').hide();
			$('#search-ajax-loader').hide();
			$('#search-results-inner').hide();
		}
	});
	
	$( "#search-close" ).click(function() {
		$( '#search-form' ).removeClass( "active" );
		$('#search-input').val('');
		$('#search-results').hide();
		$('#search-ajax-loader').hide();
		$('#search-results-inner').hide();
		return false;
	});
	
	
	$( ".mobile-button" ).click(function() {
		$( '.mobile-button' ).removeClass( "active" );
		var current_button = $(this);
		current_button.addClass('active');
		if(current_button.hasClass('home')){
			$('#mobile-swipe').fadeOut();
			$('body').removeClass('no-scroll');
		} else {
			$('.tab-close').hide();
			$('#mobile-swipe').fadeIn();
			$('body').addClass('no-scroll');
			$( "body" ).scrollTop( 0 );
			if(current_button.hasClass('hours')){
				$('.hours-open').fadeIn();
			} else if(current_button.hasClass('phone')){
				$('.phone-open').fadeIn();
			} else if(current_button.hasClass('map')){
				$('.map-open').fadeIn();
			}
			// then do some ajax to get the content
		}
		return false;
	});
	
	$( ".list-type-item" ).click(function() {
		$('.list-type-item').removeClass('active');
		$(this).addClass('active');
		
		return false;
		
		
	});	
	
});