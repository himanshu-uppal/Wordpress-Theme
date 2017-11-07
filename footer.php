
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme1
 */

?>

<div class="footer-area"><!-- footer area -->
	<div class="container"><!-- footer container -->


		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="footer-widget-area clear">


				<div class="footer-widget-content">
					<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
				</div>
				<div class="footer-widget-content">
					<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
				</div>
				<div class="footer-widget-content">
					<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
				</div>
				

				</div>




			<?php if(!get_theme_mod('social-option-footer-setting')){ ?>
			<div class="footer-share-menu">
				<?php
				if(get_theme_mod('social-facebook-setting')){ ?>

					<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-facebook-setting')); ?>">
						<i class="fa fa-facebook-square "  aria-hidden="true"> </i>
					</a>&nbsp;
				<?php } ?>
				<?php
				if(get_theme_mod('social-twitter-setting')){ ?>

					<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-twitter-setting')); ?>"><i class="fa fa-twitter "  aria-hidden="true"> </i></a>&nbsp;
				<?php } ?>
				<?php
				if(get_theme_mod('social-pinterest-setting')){ ?>

					<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-pinterest-setting')); ?>"><i class="fa fa-pinterest "  aria-hidden="true"> </i></a>&nbsp;
				<?php } ?>
				<?php
				if(get_theme_mod('social-googleplus-setting')){ ?>

					<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-googleplus-setting')); ?>"><i class="fa fa-google-plus "  aria-hidden="true"> </i></a>&nbsp;
				<?php } ?>
<!--				--><?php
//				if(get_theme_mod('social-instagram-setting')){ ?>
<!---->
<!--					<a target="_blank" href="--><?php //echo esc_url(get_theme_mod('social-instagram-setting')); ?><!--"><i class="fa fa-instagram "  aria-hidden="true"> </i></a>&nbsp;-->
<!--				--><?php //} ?>
				<?php
				if(get_theme_mod('social-youtube-setting')){ ?>

					<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-youtube-setting')); ?>"><i class="fa fa-youtube "  aria-hidden="true"> </i></a>&nbsp;
				<?php } ?>
				<?php
				if(get_theme_mod('social-linkedin-setting')){ ?>

					<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-linkedin-setting')); ?>"><i class="fa fa-linkedin "  aria-hidden="true"> </i></a>&nbsp;
				<?php } ?>
				<?php
				if(get_theme_mod('social-gmail-setting')){ ?>

					<a target="_blank" href="<?php echo esc_url(get_theme_mod('social-gmail-setting')); ?>"><i class="fa fa-inbox "  aria-hidden="true"> </i></a>&nbsp;
				<?php } ?>

			</div>
			<?php } ?>
			<hr style="color:#fff">
			<div class="footer-copyright-content">
				<?php
				if(get_theme_mod('footer-text-setting')){
				echo get_theme_mod('footer-text-setting');
				}
				else{ ?>

				Copyright &copy; 2016 , WDXtreme . All Rights Reserved .
				<?php
				} ?>
			</div>
			<div class="footer-back-top-container">
				<div class="footer-back-top">
					<a href="#page"><i class="fa fa-angle-double-up fa-2x"></i></a>
				</div>
			</div>
<!--			<div class="site-info">-->
<!--				<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'theme1' ) ); ?><!--">--><?php //printf( esc_html__( 'Proudly powered by %s', 'theme1' ), 'WordPress' ); ?><!--</a>-->
<!--				<span class="sep"> | </span>-->
<!--				--><?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'theme1' ), 'theme1', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
<!--			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- footer container -->
</div><!-- footer area -->






<?php wp_footer(); ?>
</div><!-- #page -->



</body>
</html>
