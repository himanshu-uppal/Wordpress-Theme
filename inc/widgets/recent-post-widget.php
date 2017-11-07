<?php
/* plugin name*/

class Recent_Post_Widget extends WP_Widget {

    function __construct() {
        // Instantiate the parent object
        $widget_ops = array(
            'classname' => 'Recent_Post_Widget',
            'description' => 'Recent Post on the basis of time',
        );
        parent::__construct( 'recent_post_widget', 'Recent Post Widget', $widget_ops );

    }

    function widget( $args, $instance ) {
        // Widget output
        extract($args);
        $title=apply_filters('widget_title',$instance['title']);
        $post_count=$instance['post_count'];

        echo $before_widget; ?>
        <div class="recent-post-widget">
        <?php
        if( !empty( $instance['title'] ) ) echo $before_title . $instance['title'] . $after_title;

        $loop_args = array(
            'posts_per_page' => (int) $instance['post_count'],
            'order'=> 'DESC',
            'orderby' => 'title'
        );



        $loop = new WP_Query( $loop_args );





            if( $loop->have_posts() ){ while( $loop->have_posts() ) {
                $loop->the_post();
                global $post;




                ?>
                <div class="recent-post-sidebar-content clear">
                    <div class="recent-post-sidebar-title">
                        <div><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></div>
                      <div class="recent-post-time-content">  <div class="recent-post-time"><?php the_time('F j, Y '); ?></div></div>
                    </div>


                    <div class="recent-post-sidebar-image">
                        <a href="<?php the_permalink() ?>">
                            <image src=" <?php
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'recent-post-image');

                            if (!$image) {
                                //echo get_template_directory_uri().'/default-image.jpg';
                                $image_url = get_theme_mod('default-image-setting');
                                $image_id = pippin_get_image_id($image_url);
                                $image2 = wp_get_attachment_image_src($image_id, 'recent-post-image');
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


                </div>
                <?php

            } } wp_reset_query();







            ?>


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
        $defaults= array('title'=>'Recent Posts','post_count'=>4);
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


add_action( 'widgets_init', 'recent_post_register_widgets' );
function recent_post_register_widgets() {
    register_widget( 'Recent_Post_Widget' );
}?>