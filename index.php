


<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme1
 */


get_header();

if(get_theme_mod('slider-settings-enable')){
	?>

	<!-- Slider-Container -->
	<div class="slider-container"><?php
		get_template_part( 'inc/custom-slider', get_post_format() );
		?> </div>
<!--<div class="has-slider-container">-->
	<?php
}
?>
<!-- Slider-Container -->

<!-- Primary-Container -->
<div <?php if ( is_home() ) {
	if(!get_theme_mod('hide-home-sidebar-setting'))	 {
		?> class="primary-container"<?php
	}else{
		?>class="only-post-container"<?php
	}
}
else{ ?>class="primary-container"<?php }?>><!-- posts container -->
	<div id="primary" class="content-area ">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>


					<?php
				endif;


				/* Start the Loop */
				while ( have_posts() ) : the_post();


					/*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
					?> <div class="the-post"> <?php
					get_template_part( 'template-parts/content', get_post_format() ); ?>
				</div><br> <?php

				endwhile; ?>
			<!-- Add the pagination functions here. -->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts >>' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( '<< Newer posts' ); ?></div>


		<?php	else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- Primary-Container -->





<?php
if(!get_theme_mod('hide-home-sidebar-setting')){
	get_sidebar();
}

?>
<!--	--><?php
//	if(get_theme_mod('slider-settings-enable')){
//		?><!--</div>--><?php
//	}
//	?>
</div><!-- #content -->
</div>
</div><!-- post-content-area -->
<?php


get_footer();
