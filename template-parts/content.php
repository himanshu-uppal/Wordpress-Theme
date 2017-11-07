<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	get_template_part( 'template-parts/content', 'top' );
	?>

	<div class="entry-content">

		<?php

			if (has_post_format('gallery')) {

				$images = get_post_meta($post->ID, '_format_gallery_images', true);
				if ($images) { ?>
					<div class="post-gallery-image" >
						<?php
						foreach ($images as $image) {
							?>
							<div>
						<?php
								$thumbnail = wp_get_attachment_image_src($image, 'post-gallery-image');
								echo '<img src="' . esc_url($thumbnail[0]) . '" alt="" />';
								?>
							 </div><?php
						}
						?>
					</div>
					<?php

				}
			} else if (has_post_format('video')) {
				$video_url = get_post_meta($post->ID, '_format_video_embed', true);
				if (wp_oembed_get($video_url)) {
					echo wp_oembed_get($video_url);
				} else {
					echo $video_url;
				}
			} else if (has_post_format('audio')) {

				//removed for some reason

			}
			else{
				if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>




				<?php }
				else{

						if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						<?php  }





				}

			}


		if(is_single())
		{


			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'theme1' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'theme1' ),
				'after'  => '</div>',
			) );

		}

		else {

			if (get_theme_mod('general-settings-excerpt') == 'excerpt') {


				the_excerpt(); ?>
				<div class="read-more-area">
					<a
						href="<?php echo get_permalink(); ?>"><div class="read-more"><?php _e('Read More.', 'theme1'); ?></div></a>
				</div> <?php
			}
			else{
				the_content();
			}
		}




		?>
	</div><!-- .entry-content -->

	<?php
	get_template_part( 'template-parts/content', 'footer' );
	?>





</article><!-- #post-## -->
