/* global nivoSliderParams */
/**
 * Theme functions file.
 *
 * Contains handler for navigation.
 */

( function( $ ) {
	$( document ).ready( function() {
		
		if($.trim($('#secondary').html()) == ''){
			$('#secondary').hide();
			$('#primary').removeClass('grid-70 tablet-grid-70');
			$('#primary').addClass('grid-100 tablet-grid-100');
		}
		
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
		// Speaker
		$('.speaker-item-clickable').live('click', function(e){
			var $cId = $(this).data('id');
			$('#speaker-content').html($('#' + $cId + '-content').html());
			$('.speaker-menu-a').removeClass('active');
			$('#' + $cId).addClass('active');
		});
		$('#all-speakers').trigger('click');
		
		// Staff
		$('.staff-clickable').live('click', function(e){
			var $cId = $(this).data('id');
			var $sectionId = $(this).data('section');
			var $sectionObj = $('#staff-content' + $sectionId);
			var $sectionStaffId = $sectionObj.data('staff-id');
			var $isShowing = $sectionObj.is(':visible');
			
			// Hide all section first
			$('.staff-section-content').slideUp();
			
			// Fill content first
			$sectionObj.html($('#' + $cId + '-content').html());
			
			// Click twice on same staff
			if($cId == $sectionStaffId) {
				if(!$isShowing){
					$sectionObj.show("slow");
				}
			} else {
				$sectionObj.show("slow");
			}
			
			$('#staff-content' + $sectionId).data('staff-id', $cId);
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