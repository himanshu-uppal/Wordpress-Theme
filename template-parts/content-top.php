<header class="entry-header">
	<?php
	if(!get_theme_mod('post-header-date-time-meta')){?>

	<div class="post-meta-time"><?php the_time('F j, Y '); ?></div><?php  }?>


		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}


		
	?>

		<div class="entry-meta">
			<div class="post-info">
			


			<?php if(!get_theme_mod('post-header-author-meta')){?>
					<div class="post-author">
						<div class="icon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="post-meta-text">by &nbsp;
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
								<?php  the_author(); ?></a>
						</div>
					</div>
			<?php  }?>

				<?php if(!get_theme_mod('post-header-category-meta')) { ?>
				<div class="post-category">
					<div class="icon">
						<i class="fa fa-tag" aria-hidden="true"></i>
					</div>
					<div class="post-meta-text">

					<?php
					$categories = get_the_category();
					$separator = ", ";
					$output = '';

					if ($categories) {
						foreach (array_slice($categories,0,1) as $category) {
							$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
						}

						echo trim($output, $separator);
					}
					?>
					</div>
				</div>
				<?php } ?>
				<div class="post-top-comments">
					<div class="icon">
						<i class="fa fa-comment-o"></i>
					</div>
					<div class="post-meta-text">
						<a href="<?php echo get_comments_link() ?>">&nbsp; Comments </a>
					</div>



				</div>


			</div>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->