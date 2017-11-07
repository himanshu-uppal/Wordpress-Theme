<?php if(get_theme_mod('slider-settings-enable')){

?>
<div class="slick-slider-container" ><?php
    $slides=get_theme_mod('slider-slides');
    $category=get_theme_mod('slider-category');

    $args = array( 'cat' => $category,'showposts'=>$slides ) ;



?>
<?php $my_query=new WP_Query($args) ?>
<?php
if( $my_query->have_posts() ) {
   ?>


    <?php while( $my_query->have_posts() ) {
        $my_query->the_post(); ?>

            <div class="slider-image" style="background-image: url(

            <?php
            $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slider-image');

            if(!$image)
            {
                //echo get_template_directory_uri().'/default-image.jpg';
                $image_url=get_theme_mod('default-image-setting');
                $image_id=pippin_get_image_id($image_url);
                $image2=wp_get_attachment_image_src($image_id,'slider-image');
                if($image2)
                {
                    echo $image2[0];

               }else{
                    echo get_template_directory_uri().'/default-image.jpg';

                }
            }

            else
            {
                echo $image[0];
            }
            ?>


                )">


                <div class="slider-content-container">
                    <div class="slider-post-content"><?php the_title( '<h2 ><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?><p><?php the_excerpt(); ?></p>
                    <div class="read-more-slider"><a href="<?php echo get_permalink(); ?>"><?php _e( 'Read More.', 'theme1' ); ?></a></div>
                    </div>

                </div>
            </div>







    <?php } ?>
<?php } ?>
</div>


<?php } ?>




