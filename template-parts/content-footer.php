<footer class="entry-footer ">


	<br>
	<?php if(!get_theme_mod('post-header-social-sharable-icons-meta')){ ?>
	<div class="post-share-area ">
		<div class="post-share-footer "">
		<a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook-square "  aria-hidden="true"> </i></a>
		<a href="https://twitter.com/intent/tweet?url=<?php the_permalink()?>" target="_blank"><i class="fa fa-twitter "  aria-hidden="true"> </i></a>

		<a href="https://plus.google.com/share?url=<?php the_permalink()?>" target="_blank"><i class="fa fa-google-plus "  aria-hidden="true"> </i></a>

		<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<a data-hint="Pinterest" data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"  aria-hidden="true"> </i></a>

	</div>
		</div>
	<?php


	}?>




	<?php if(is_single()){
		if(!get_theme_mod('related-post-setting')){

			$orig_post = $post;
			global $post;
			$categories = get_the_category($post->ID);
			if ($categories) {
				$category_ids = array();
				foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				$args=array(
					'category__in' => $category_ids,
					'post__not_in' => array($post->ID),
					'posts_per_page'=> 5, // Number of related posts that will be shown.
					'caller_get_posts'=>1
				);
				$my_query = new wp_query( $args );
				if( $my_query->have_posts() ) {
					echo '<div class="related-posts"><h3>Related Posts</h3>';
					while( $my_query->have_posts() ) {
						$my_query->the_post(); global $post;?><div class="related_post-content"><div class="relatedthumb"><a href="<?php the_permalink() ?>">
									<image src=" <?php
									$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'related-post-image');

									if (!$image) {
										//echo get_template_directory_uri().'/default-image.jpg';
										$image_url = get_theme_mod('default-image-setting');
										$image_id = pippin_get_image_id($image_url);
										$image2 = wp_get_attachment_image_src($image_id, 'related-post-image');
										if($image2)
										{
											echo $image2[0];

										}else{
											echo get_template_directory_uri().'/default-image.jpg';

										}
									} else {
										echo $image[0];
									}
									?>">
								</a></div>
							<div class="relatedcontent">
								<div class="related-post-title"><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
								<div class="related-post-date"><?php the_time('M j, Y') ?></div>
							</div>
		</div>

						<?php
					}
					echo '</div>';
				}
			}
			$post = $orig_post;
			wp_reset_query();

		}



	 }?>

	</footer><!-- .entry-footer -->
