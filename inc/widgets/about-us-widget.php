<?php


add_action( 'widgets_init', 'abt_init' );

function abt_init() {
    register_widget( 'abt_widget' );
}

class abt_widget extends WP_Widget
{

    public function __construct()
    {
        $widget_details = array(
            'classname' => 'abt_widget',
            'description' => 'Creates an about us section in your widget area with image, description and social icons.'
        );

        parent::__construct( 'abt_widget', 'About Us Widget', $widget_details );

        add_action('admin_enqueue_scripts', array($this, 'abt_assets'));
    }


    public function abt_assets()
    {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('mfc-media-upload', get_template_directory_uri() . '/inc/widgets/abt-media-upload.js', array('jquery'));
        wp_enqueue_style('thickbox');
    }


    public function widget( $args, $instance )
    {

        echo $args['before_widget'];
        ?> <div class="about-us-area"> <?php
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }

        ?>

        <div class='abt-image'>
            <img src='<?php echo $instance['image'] ?>'>
        </div>
        <?php  if(! empty( $instance['name'] )){ ?>

            <div class='abt-name'>
                <?php echo wpautop( esc_html( $instance['name'] ) ) ?>
            </div>
        <?php } ?>

        <div class='abt-description'>
            <?php echo wpautop( esc_html( $instance['description'] ) ) ?>
            
        </div>


        </div>

        <?php

        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {
        return $new_instance;
    }

    public function form( $instance )
    {

        $title = '';
        if( !empty( $instance['title'] ) ) {
            $title = $instance['title'];
        }

        $description = '';
        if( !empty( $instance['description'] ) ) {
            $description = $instance['description'];
        }

        $name = '';
        if( !empty( $instance['name'] ) ) {
            $name = $instance['name'];
        }


        $image = '';
        if(isset($instance['image']))
        {
            $image = $instance['image'];
        }





        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'name' ); ?>"><?php _e( 'Name:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" ><?php echo esc_attr( $description ); ?></textarea>
        </p>


        <p>
            <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>



        <?php
    }
}