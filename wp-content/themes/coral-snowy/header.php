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
	<header id="masthead" class="site-header grid-parent grid-100 tablet-grid-100 mobile-grid-100" role="banner">
		<div class="site-branding egrid  grid-80 tablet-grid-80 mobile-grid-100" style="padding-left: 10px;">
			<!--logo-->
			<div class="logo ou-logo">
				<a href="http://www.ou.edu.vn" target="_blank" rel="ou.edu.vn">
				<img style="min-height: 75px" src="<?php echo get_site_url();?>/wp-content/uploads/2016/12/ou-logo.png">
				</a>
			</div>
			<!--tetx-->
			<div id="site-name-section" class="">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php echo get_bloginfo( 'name', 'display' ); ?>
					</a>
				</h1>
				<h2 class="site-description" style="padding-top:6px;margin-bottom:0;font-weight:bold;">
					<a href="http://www.ou.edu.vn" target="_blank" rel="ou.edu.vn">
					HO CHI MINH CITY OPEN UNIVERSITY</a>
				</h2>
				<div class="site-description">16-18 NOVEMBER 2017</div>
			</div>
			<div class="logo vber-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img style="min-height: 90px; min-width:192px; margin-left:-15px" src="<?php echo get_site_url();?>/wp-content/uploads/2017/01/vber-logo.png">
				</a>
			</div>
		</div><!-- .site-branding -->
		<?php $userDisplayName = um_user('display_name'); ?>
		<div id="headerright" class="grid-parent egrid  grid-20 tablet-grid-20 mobile-grid-100">
			<div class="<?php echo empty($userDisplayName) ? "login-section" : "logged-section"; ?>">
				<?php if(empty($userDisplayName)) { ?>
				<div class="login-title"><a href="<?php echo get_site_url(); ?>/sign-in">
					<i class="fa fa-sign-in"></i> SIGN IN
				</a></div>
				<div style="padding-left: 52px"><b>OR</b></div>
				<div class="login-title"><a href="<?php echo get_site_url(); ?>/register">
					<i class="fa fa-user-plus"></i> REGISTER
				</a></div>
				<?php } else { ?>
				<div class="user-display-name">Hi, <?php echo $userDisplayName; ?></div>
				<a href="<?php echo get_site_url(); ?>/logout" class="logged-title">
					SIGN OUT <i class="fa fa-sign-out"></i>
				</a>
				<?php } ?>
			</div>
		</div>
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
