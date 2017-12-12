/* global nivoSliderParams */
/**
 * Theme functions file.
 *
 * Contains handler for navigation.
 */

( function( $ ) {
	$( document ).ready( function() {
		// Sticky Header
		$(window).scroll(function() {
		  var headerHeight = $('header#masthead').innerHeight();
		  
		  var wpadminbarHeight = 0;
		  if($('#wpadminbar').length > 0)
			wpadminbarHeight = $('#wpadminbar').innerHeight();
		  //console.log('headerHeight: ' + headerHeight);
		  if ($(this).scrollTop() > headerHeight){
			$('#navi').addClass("sticky-nav");
			$('#navi.sticky-nav').css('top', wpadminbarHeight);
		  }
		  else{
			$('#navi').removeClass("sticky-nav");
		  }
		});
		
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -6,
			markCurrentItem: true,
			markCurrentTree: false
		});
		$('#menu-button').click(function() {
			var $this = $(this),
				$menu = $('#main-menu');
			if ($menu.is(':animated')) {
				return false;
			}
			if (!$this.hasClass('collapsed')) {
				$menu.slideUp(250, function() { $(this).addClass('collapsed').css('display', ''); });
				$this.addClass('collapsed');
			} else {
				$menu.slideDown(250, function() { $(this).removeClass('collapsed'); });
				$this.removeClass('collapsed');
			}
			return false;
		});
	});
	$( window ).load( function() {
		$('#slider').nivoSlider({
			effect: nivoSliderParams.effect,
			animSpeed: nivoSliderParams.animspeed,
			pauseTime: nivoSliderParams.pausetime,
			controlNav: true,
			pauseOnHover: true
		});
	});
} )( jQuery );