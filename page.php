
		<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme1
 */

get_header(); ?>

		<div <?php if ( is_home() ) {
			if(!get_theme_mod('hide-home-sidebar-setting'))	 {
				?> class="primary-container"<?php
			}else{
				?>class="only-post-container"<?php
			}
		}
		else{ ?>class="primary-container"<?php }?>><!-- posts container -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
			?> <div class="the-post"> <?php

				get_template_part( 'template-parts/content', 'page' );

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
		if(!get_theme_mod('hide-home-sidebar-setting')){
			get_sidebar();
		}

		?>
		</div><!-- #content -->
		</div>
		</div><!-- post-content-area -->
		<?php


		get_footer();
