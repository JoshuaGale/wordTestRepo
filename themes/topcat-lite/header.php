<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package topcat-lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php

	?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site topcat_lite_page">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'topcat-lite' ); ?></a>
	<header id="masthead" class="site-header  clear" role="banner">
		<div class="site-description">
			<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) { ?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				    <?php echo '<img src="'. esc_url( $logo[0] ) .'" width="200" height="79" />'; ?>
				</a>
					<?php }
					else
					{
						echo( '<div class="my_bloginfo">'. get_bloginfo( 'name' ) .' -  ' . get_bloginfo( 'description' ) . '</div>' );
					}
					?>

		</div>
		<?php topcat_lite_social_menu(); ?>

		<nav id="site-navigation" class="clear" role="navigation">
			<div class="menu-toggle clear">
				<div class="menu_blogname"><?php bloginfo( 'name' ); ?></div>
				<div class="menu_htmlchar"><?php _e( '<a href="#menu">&#9776;</a>', 'topcat-lite' ); ?></div>
			</div>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'topcat-lite' ); ?></a>
		</nav>
		<div class="main-navigation">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location'  => 'primary',
					'menu_class'      => 'nav-menu',
					'container_class' => 'nav-container',
					'container'       => 'div'
				) );
			} else {
				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-container' ) );
			}
			?>
		</div>
	</header>
	<div id="content" class="site-content">