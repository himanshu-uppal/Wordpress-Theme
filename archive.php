
		<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme1
 */

get_header(); ?>
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
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
		if ( have_posts() ) : ?>



			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			?> <div class="the-post"> <?php
				get_template_part( 'template-parts/content', get_post_format() );
					?></div><br> <?php

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

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
