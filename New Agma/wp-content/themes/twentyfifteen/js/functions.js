/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

( function( $ ) {
	var $body, $window, $sidebar, adminbarOffset, top = false,
	    bottom = false, windowWidth, windowHeight, lastWindowPos = 0,
	    topOffset = 0, bodyHeight, sidebarHeight, resizeTimer;

	// Add dropdown toggle that display child menu items.
	$( '.main-navigation .page_item_has_children > a, .main-navigation .menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );

	$( '.dropdown-toggle' ).click( function( e ) {
		var _this = $( this );
		e.preventDefault();
		_this.toggleClass( 'toggle-on' );
		_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
		_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		_this.html( _this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
	} );

	// Enable menu toggle for small screens.
	( function() {
		var secondary = $( '#secondary' ), button, menu, widgets, social;
		if ( ! secondary ) {
			return;
		}

		button = $( '.site-branding' ).find( '.secondary-toggle' );
		if ( ! button ) {
			return;
		}

		// Hide button if there are no widgets and the menus are missing or empty.
		menu    = secondary.find( '.nav-menu' );
		widgets = secondary.find( '#widget-area' );
		social  = secondary.find( '#social-navigation' );
		if ( ! widgets.length && ! social.length && ( ! menu || ! menu.children().length ) ) {
			button.hide();
			return;
		}

		button.on( 'click.twentyfifteen', function() {
			secondary.toggleClass( 'toggled-on' );
			secondary.trigger( 'resize' );
			$( this ).toggleClass( 'toggled-on' );
		} );
	} )();

	// Sidebar scrolling.
	function resize() {
		windowWidth   = $window.width();
		windowHeight  = $window.height();
		bodyHeight    = $body.height();
		sidebarHeight = $sidebar.height();

		if ( 955 > windowWidth ) {
			top = bottom = false;
			$sidebar.removeAttr( 'style' );
		}
	}

	function scroll() {
		var windowPos = $window.scrollTop();

		if ( 955 > windowWidth ) {
			return;
		}

		if ( sidebarHeight + adminbarOffset > windowHeight ) {
			if ( windowPos > lastWindowPos ) {
				if ( top ) {
					top = false;
					topOffset = ( $sidebar.offset().top > 0 ) ? $sidebar.offset().top - adminbarOffset : 0;
					$sidebar.attr( 'style', 'top: ' + topOffset + 'px;' );
				} else if ( ! bottom && windowPos + windowHeight > sidebarHeight + $sidebar.offset().top && sidebarHeight + adminbarOffset < bodyHeight ) {
					bottom = true;
					$sidebar.attr( 'style', 'position: fixed; bottom: 0;' );
				}
			} else if ( windowPos < lastWindowPos ) {
				if ( bottom ) {
					bottom = false;
					topOffset = ( $sidebar.offset().top > 0 ) ? $sidebar.offset().top - adminbarOffset : 0;
					$sidebar.attr( 'style', 'top: ' + topOffset + 'px;' );
				} else if ( ! top && windowPos + adminbarOffset < $sidebar.offset().top ) {
					top = true;
					$sidebar.attr( 'style', 'position: fixed;' );
				}
			} else {
				top = bottom = false;
				topOffset = ( $sidebar.offset().top > 0 ) ? $sidebar.offset().top - adminbarOffset : 0;
				$sidebar.attr( 'style', 'top: ' + topOffset + 'px;' );
			}
		} else if ( ! top ) {
			top = true;
			$sidebar.attr( 'style', 'position: fixed;' );
		}

		lastWindowPos = windowPos;
	}

	function resizeAndScroll() {
		resize();
		scroll();
	}
	
	
	 $(document).click( function(event){
      if( $(event.target).closest(".order_form").length || $(event.target).closest(".button_right").length || $(event.target).closest(".sweet-alert").length) 
        return;
      $(".order_form").css("display","none");
		 $(".button_right").fadeIn();
		 
      event.stopPropagation();
    });

	$(document).ready( function() {
		
		
		
		$(".button_right").click(function(){
			$(this).css("display","none");
			$(".order_form").fadeIn();
		});
		
		$("input").focus(function(){
	$(this).parent().find(".wpcf7-not-valid-tip").remove();
});
		
		  $("a[href*=#]").click(function(){
      		var selected = $(this).attr('href');	
      		$.scrollTo(selected, 500);		
      		return false;
   		 });	
		
		
		$body          = $( document.body );
		$window        = $( window );
		$sidebar       = $( '#sidebar' ).first();
		adminbarOffset = $body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0;

		$window
			.on( 'scroll.twentyfifteen', scroll )
			.on( 'resize.twentyfifteen', function() {
				clearTimeout( resizeTimer );
				resizeTimer = setTimeout( resizeAndScroll, 500 );
			} );
		$sidebar.on( 'click keydown', 'button', resizeAndScroll );

		resizeAndScroll();

		for ( var i = 1; i < 6; i++ ) {
			setTimeout( resizeAndScroll, 100 * i );
		}
	} );

} )( jQuery );

var zvezd = 4;

$(".form_exit").click(function(){
	$(".site_hidden").css("display","none");
	$(".result_left").text("");
	$(".site_show").fadeIn();
	zvezd = "";
});

$(".form_4").click(function(){
	$(".site_hidden").fadeIn();
	$(".result_left").text("");
	$(".site_show").css("display","none");
	zvezd = "4";
});

$(".form_5").click(function(){
	$(".site_hidden").fadeIn();
	$(".site_show").css("display","none");
	zvezd = "5";
});

$(".slider_button_left").click(function(){
	$("#slider").slider("value", 0);
	$(".slider_button").removeClass("active");
	$(".slider_button_left").addClass("active");
	
});

$(".slider_button_right").click(function(){
	$("#slider").slider("value", 1);
	$(".slider_button").removeClass("active");
	$(".slider_button_right").addClass("active");
});



