

<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme1
 */

get_header(); ?>
<div <?php
	if(!get_theme_mod('hide-single-sidebar-setting'))	 {
		?> class="primary-container"<?php
	}else{
		?>class="only-post-container"<?php
	}?>

><!-- posts container -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

		?> <div class="the-post"> <?php

			get_template_part( 'template-parts/content', get_post_format() );


//			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
				?></div><br> <?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- posts container -->

<?php
if(!get_theme_mod('hide-single-sidebar-setting')){
	get_sidebar();
}

?>
</div><!-- #content -->
</div>
</div><!-- post-content-area -->
<?php


get_footer();
