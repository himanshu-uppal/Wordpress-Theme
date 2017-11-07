<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--	<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<meta content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1' name='viewport'/>
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" type="image" href="<?php echo esc_url(get_theme_mod('my_favicon')); ?>" sizes="16x16">





	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">




	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'theme1' ); ?></a>
	<div class="nav-area"> <!-- Nav Menu  area-->
		<div class="container clear"><!-- Nav Menu  Container-->
			<div class="site-menu">
				<nav id="site-navigation" class="primary_nav_wrap" role="navigation">

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="nav-social-search clear">
				<?php if(!get_theme_mod('social-option-setting')){ ?>
				<div class="social-search">
					<div class="menu-social">
						<?php
						if(get_theme_mod('social-facebook-setting')){ ?>

							<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-facebook-setting')); ?>">
								<i class="fa fa-facebook-square fa-2x"  aria-hidden="true"> </i>
							</a>&nbsp;
						<?php } ?>
						<?php
						if(get_theme_mod('social-twitter-setting')){ ?>

							<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-twitter-setting')); ?>"><i class="fa fa-twitter fa-2x"  aria-hidden="true"> </i></a>&nbsp;
						<?php } ?>
						<?php
						if(get_theme_mod('social-pinterest-setting')){ ?>

							<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-pinterest-setting')); ?>"><i class="fa fa-pinterest fa-2x"  aria-hidden="true"> </i></a>&nbsp;
						<?php } ?>
						<?php
						if(get_theme_mod('social-googleplus-setting')){ ?>

							<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-googleplus-setting')); ?>"><i class="fa fa-google-plus fa-2x"  aria-hidden="true"> </i></a>&nbsp;
						<?php } ?>
<!--						--><?php
//						if(get_theme_mod('social-instagram-setting')){ ?>
<!---->
<!--							<a target="_blank" href="--><?php //echo esc_url(get_theme_mod('social-instagram-setting')); ?><!--"><i class="fa fa-instagram fa-2x"  aria-hidden="true"> </i></a>&nbsp;-->
<!--						--><?php //} ?>
						<?php
						if(get_theme_mod('social-youtube-setting')){ ?>

							<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-youtube-setting')); ?>"><i class="fa fa-youtube fa-2x"  aria-hidden="true"> </i></a>&nbsp;
						<?php } ?>
						<?php
						if(get_theme_mod('social-linkedin-setting')){ ?>

							<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-linkedin-setting')); ?>"><i class="fa fa-linkedin fa-2x"  aria-hidden="true"> </i></a>&nbsp;
						<?php } ?>
						<?php
						if(get_theme_mod('social-gmail-setting')){ ?>

							<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-gmail-setting')); ?>"><i class="fa fa-inbox fa-2x"  aria-hidden="true"> </i></a>&nbsp;
						<?php } ?>

					</div> <!-- menu-social -->
					<div class="search-field">
						<?php get_search_form(); ?>

					</div>
				</div> <!--social-search -->
				<?php } ?>
				<?php if(!get_theme_mod('header-search-option-setting')){
					?>

					<div class="search-area">

						<i id="search-icon"  class="fa fa-search  "  >

						</i>


					</div>
				<?php


				}?>

			</div> <!-- nav social serach -->
		</div>

	</div><!-- Nav Menu container-->

<!--</div>  <!-- Nav Menu  area-->

<div class="header-area"> <!-- Header area-->
	<div class="container"><!-- Header Container-->

		<header id="masthead" class="site-header "  role="banner">
			<div class="site-branding">
				<?php
				if(get_theme_mod('my_logo'))
				{
					?> <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('my_logo')) ?>"/></a></h1> <?php

				}else{
					if ( is_front_page() && is_home() ) : ?>
						<h1 ><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<h2 ><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
						<?php
					endif;



				}

				?>
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description" ><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
				endif;

				?>

			</div><!-- .site-branding -->


		</header><!-- #masthead -->
	</div> <!--Header container-->


</div> <!-- Header area-->



<div class="post-content-area"><!-- post-content-area -->


	<div class="container">

		<div id="content" class="site-content">
