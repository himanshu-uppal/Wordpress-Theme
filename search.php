<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package theme1
 */

get_header(); ?>
	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'theme1' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->
<div <?php if ( is_home() ) {
	if(!get_theme_mod('hide-home-sidebar-setting'))	 {
		?> class="primary-container"<?php
	}else{
		?>class="only-post-container"<?php
	}
}
else{ ?>class="primary-container"<?php }?>><!-- posts container -->

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>



			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
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
	</section><!-- #primary -->
	</div> <!--Primary container -->

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
