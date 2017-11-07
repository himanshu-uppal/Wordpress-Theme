<?php
/* plugin name*/

class Popular_Post_Widget extends WP_Widget {

    function __construct() {
        // Instantiate the parent object
        $widget_ops = array(
            'classname' => 'Popular_Post_Widget',
            'description' => 'Popular Post on the basis of Comments',
        );
        parent::__construct( 'popular_post_widget', 'Popular Post Widget', $widget_ops );

    }

    function widget( $args, $instance ) {
        // Widget output
        extract($args);
        $title=apply_filters('widget_title',$instance['title']);
        $post_count=$instance['post_count'];

        echo $before_widget;
        if( !empty( $instance['title'] ) ) echo $before_title . $instance['title'] . $after_title;

        $loop_args = array(
            'posts_per_page' => (int) $instance['post_count'],
            'orderby' => 'comment_count'
        );



        $loop = new WP_Query( $loop_args ); ?>

        <div class="popular-post-widget">
            <div class="popular-post-sidebar-slider">
            
        <?php

        if( $loop->have_posts() ){ while( $loop->have_posts() ) {
            $loop->the_post();
            global $post;



            
            ?>
                <div class="popular-post-sidebar-content">

                
                <div class="popular-post-sidebar-image">
            <a href="<?php the_permalink() ?>">
                <image src=" <?php
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'popular-post-image');

                if (!$image) {
                    //echo get_template_directory_uri().'/default-image.jpg';
                    $image_url = get_theme_mod('default-image-setting');
                    $image_id = pippin_get_image_id($image_url);
                    $image2 = wp_get_attachment_image_src($image_id, 'popular-post-image');
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
            </a>
                </div>
                    <div class="popular-post-sidebar-category">
                        <?php
            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if ($categories) {
                foreach (array_slice($categories,0,2) as $category) {
                    $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                }

                echo trim($output, $separator);
            }
        
                        ?>
                    </div>
                    <div class="popular-post-sidebar-title">
                        <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a>
                    </div>
                </div>

                

            <?php

        } } wp_reset_query();







                ?>
            </div>


        </div>
        <?php	echo $after_widget;
    }

    function update( $new_instance, $old_instance ) {
        // Save widget options
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['post_count'] = ( ! empty( $new_instance['post_count'] ) ) ? strip_tags( $new_instance['post_count'] ) : '';




        return $instance;


    }

    function form( $instance ) {
        // Output admin widget options form
        $defaults= array('title'=>'Popular Posts','post_count'=>4);
        $instance= wp_parse_args( (array)$instance, $defaults );
        ?>
        <p>
            <label name="label" for="<?php echo $this->get_field_id('title');?>">Popular Post Heading Heading</label>
            <input name="<?php echo $this->get_field_name('title');?>" id="<?php echo $this->get_field_id('title');?>" value="<?php echo $instance['title'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('post_count');?>">No. of Popular Posts to be shown</label>
            <input name="<?php echo $this->get_field_name('post_count');?>" id="<?php echo $this->get_field_id('post_count');?>" value="<?php echo $instance['post_count'];?>" style="width:96%">





        </p>
        <?php
    }
}


add_action( 'widgets_init', 'popular_post_register_widgets' );
function popular_post_register_widgets() {
    register_widget( 'Popular_Post_Widget' );
}?>