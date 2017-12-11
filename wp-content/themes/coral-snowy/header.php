<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package coral-snowy
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'coral-snowy' ); ?></a>
  <div id="gcontainer-header">
  
  <header id="masthead" style="padding-top: 20px;padding-bottom: 20px; display: flex; justify-content: space-around; flex-wrap:wrap" role="banner">
		<div class="" style="">
			<div style="display: flex;justify-content: center;">
				<!--logo-->
				<div style="border-right: 2px solid; padding-right: 5px !important;">
					<a href="http://www.ou.edu.vn" target="_blank" rel="ou.edu.vn">
					<img style="height:80px; width:140px" src="<?php echo get_site_url();?>/wp-content/uploads/2017/12/OU-1.png">
					</a>
					<div class="logo-text">
						<div>HO CHI MINH CITY</div>
						<div>OPEN UNIVERSITY</div>
					</div>
				</div>
				<div style="padding-left: 5px; align-self: flex-end">
					<a href="http://www.ou.edu.vn" target="_blank" rel="ou.edu.vn">
						<img style="max-height: 50px;" src="<?php echo get_site_url();?>/wp-content/uploads/2017/12/BERG-1.png">
					</a>
				</div>
			</div>
		</div><!-- .site-branding -->
		
		<div class="">
			<div style="display: flex;justify-content: center;">
				<!--logo-->
				<div>
					<a href="http://www.ou.edu.vn" target="_blank" rel="ou.edu.vn">
					<img style="height: 104px;width: 500px;" src="<?php echo get_site_url();?>/wp-content/uploads/2017/12/VBER-1.png">
					</a>
				</div>
				<div style="padding-left: 20px;">
					<div style="color: #FD5F00;font-size: 150%;font-weight: bold;">VIETNAM'S</div>
					<div style="color: #FD5F00;font-size: 120%;font-weight: bold; line-height: 15px;">BUSINESS AND ECONOMICS</div>
					<div style="color: #FD5F00;font-size: 120%;font-weight: bold;">RESEARCH CONFERENCE</div>
					<div style="color: #00305E;font-size: 95%;font-weight: bold;">Renaissance Riverside Hotel saigon</div>
					<div style="color: #00305E;font-size: 95%;font-weight: bold;">10th August 2018</div>
				</div>
			</div>
			
		</div><!-- .site-branding -->
		
		
		<div class="grid-parent egrid grid-100 tablet-grid-100 mobile-grid-100" 
			style="text-align: center; padding-top: 50px; color: #FD5F00;font-size: 180%;font-weight: bold;flex-grow:3">
			Renaissance Riverside Hotel saigon Renaissance Riverside Hotel saigon<br>Hotel Riverside Hotel saigon
		</div><!-- .site-branding -->
		
		
	</header><!-- #masthead -->
	
	<header id="masthead222" class="site-header grid-parent grid-100 tablet-grid-100 mobile-grid-100" style="padding-top: 20px;padding-bottom: 20px;padding-left: 70px;" role="banner">
		<div class="site-branding egrid grid-30 tablet-grid-30 mobile-grid-100" style="position: relative">
			<!--logo-->
			<div class="logo" style="border-right: 2px solid; width: 40%; padding-right: 5px !important;">
				<a href="http://www.ou.edu.vn" target="_blank" rel="ou.edu.vn">
				<img style="height:80px; width:140px" src="<?php echo get_site_url();?>/wp-content/uploads/2017/12/OU-1.png">
				</a>
				<div class="logo-text">
					<div>HO CHI MINH CITY</div>
					<div>OPEN UNIVERSITY</div>
				</div>
			</div>
			<div class="logo" style="padding-left: 5px;">
				<a href="http://www.ou.edu.vn" target="_blank" rel="ou.edu.vn">
					<img style="max-height: 50px; position: absolute; bottom: 0;" src="<?php echo get_site_url();?>/wp-content/uploads/2017/12/BERG-1.png">
				</a>
			</div>
		</div><!-- .site-branding -->
		
		<div class="grid-parent egrid grid-65 tablet-grid-65 mobile-grid-100" style="padding-left: 30px; position: relative">
			<!--logo-->
			<div class="logo" style="width: 60%">
				<a href="http://www.ou.edu.vn" target="_blank" rel="ou.edu.vn">
				<img style="height: 104px;width: 750px;" src="<?php echo get_site_url();?>/wp-content/uploads/2017/12/VBER-1.png">
				</a>
			</div>
			<div class="logo" style="padding-left: 20px">
				<div style="color: #FD5F00;font-size: 150%;font-weight: bold;">VIETNAM'S</div>
				<div style="color: #FD5F00;font-size: 120%;font-weight: bold; line-height: 15px;">BUSINESS AND ECONOMICS</div>
				<div style="color: #FD5F00;font-size: 120%;font-weight: bold;">RESEARCH CONFERENCE</div>
				<div style="color: #00305E;font-size: 95%;font-weight: bold;">Renaissance Riverside Hotel saigon</div>
				<div style="color: #00305E;font-size: 95%;font-weight: bold;">10th August 2018</div>
			</div>
		</div><!-- .site-branding -->
		
		<div class="grid-parent egrid grid-100 tablet-grid-100 mobile-grid-100" 
			style="text-align: center; padding-top: 50px; color: #FD5F00;font-size: 180%;font-weight: bold;">
			Renaissance Riverside Hotel saigon Renaissance Riverside Hotel saigon<br>Hotel Riverside Hotel saigon
		</div><!-- .site-branding -->
		
		
	</header><!-- #masthead -->
	
	<div id="navi" class="grid-parent grid-100 tablet-grid-100 mobile-grid-100">
		<nav id="site-navigation" class="main-navigation egrid" role="navigation">
			<i id="menu-button" class="fa fa-bars collapsed"><span><?php _e( '  Menu', 'coral-snowy' ); ?></span></i>
			<?php 
			if (!is_rtl()) {
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-menu', 'menu_class' => 'sm sm-clean collapsed' ) );
				} else {
					wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb'  => 'coral_snowy_wp_page_menu_mine' ) ); 
				}
			} else {
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-menu', 'menu_class' => 'sm sm-rtl sm-clean collapsed' ) );
				} else {
					wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb'  => 'coral_snowy_wp_page_menu_mine' ) );
				}	
			}
			?>
		</nav><!-- #site-navigation -->
	</div><!-- #navi -->	


	<?php do_action( 'coral_snowy_slider' ); ?>	
  </div>
  
  <div id="gcontainer" class="grid-container">
	<!-- breadcrumbs from Yoast or NavXT plugins -->
	<?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
	<div id="breadcrumbs" class="grid-parent grid-100 tablet-grid-100 mobile-grid-100">
		<div class="breadcrumbs grid-100 tablet-grid-100 mobile-grid-100">
			<?php yoast_breadcrumb(); ?>
		</div>
	</div>
	<?php elseif (function_exists('bcn_display')) : ?>
	<div id="breadcrumbs" class="grid-parent grid-100 tablet-grid-100 mobile-grid-100">
		<div class="breadcrumbs grid-100 tablet-grid-100 mobile-grid-100" xmlns:v="http://rdf.data-vocabulary.org/#">
			<?php bcn_display(); ?>
		</div>
	</div>
	<?php endif; ?>
	
	<div id="content" class="site-content grid-parent grid-100 tablet-grid-100 mobile-grid-100">
