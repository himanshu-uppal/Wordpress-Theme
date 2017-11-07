<?php
/* plugin name*/

class Social_Widget extends WP_Widget {

    function __construct() {
        // Instantiate the parent object
        $widget_ops = array(
            'classname' => 'Social_Widget',
            'description' => 'My Widget is awesome',
        );
        parent::__construct( 'social_widget', 'Social Widget', $widget_ops );

    }

    function widget( $args, $instance ) {
        // Widget output
        extract($args);
        $title=apply_filters('widget_title',$instance['title']);

        echo $before_widget;
        if($title)
        {
            echo $before_title.$title.$after_title;
        }?>
        <div class="social-widget">
            <div class="social-widget-icons">
            <ul class="clear">
                <?php if($instance['facebook']):?>
                    <li> <a href="<?php echo esc_url($instance['facebook']); ?>" target="_blank" >
                       <i class="fa fa-facebook "  aria-hidden="true"> </i>

                   </a> </li>
                <?php endif;?>
                <?php if($instance['twitter']):?>
                    <li> <a href="<?php echo esc_url($instance['twitter']); ?>" target="_blank">
                       <i class="fa fa-twitter "  aria-hidden="true"> </i>

                    </a></li>
                <?php endif;?>
                <?php if($instance['pinterest']):?>
                    <li> <a href="<?php echo esc_url($instance['pinterest']); ?>" target="_blank">
                       <i class="fa fa-pinterest "  aria-hidden="true"> </i>

                   </a> </li>
                <?php endif;?>
                <?php if($instance['instagram']):?>
                    <li><a href="<?php echo esc_url($instance['instagram']); ?>" target="_blank">
                        <i class="fa fa-instagram "   aria-hidden="true"> </i>

                   </a> </li>
                <?php endif;?>
                <?php if($instance['youtube']):?>
                    <li><a href="<?php echo esc_url($instance['youtube']); ?>" target="_blank">
                        <i class="fa fa-youtube "  aria-hidden="true"> </i>

                    </a></li>
                <?php endif;?>



                <?php if($instance['blog-lovin']):?>
                    <li> <a href="<?php echo esc_url($instance['blog-lovin']); ?>" target="_blank">
                        <i class="fa fa-heart "   aria-hidden="true"> </i>

                    </a></li>
                <?php endif;?>
                <?php if($instance['linked-in']):?>
                    <li>  <a href="<?php echo esc_url($instance['linked-in']); ?>" target="_blank">
                       <i class="fa fa-linkedin "  aria-hidden="true"> </i>

                   </a> </li>
                <?php endif;?>
                <?php if($instance['google-plus']):?>
                    <li><a href="<?php echo esc_url($instance['google-plus']); ?>" target="_blank">
                      <i class="fa fa-google-plus "  aria-hidden="true"> </i>

                    </a></li>
                <?php endif;?>
            </ul>
            </div>
        </div>
        <?php	echo $after_widget;
    }

    function update( $new_instance, $old_instance ) {
        // Save widget options
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
        $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
        $instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';
        $instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';
        $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
        $instance['blog-lovin'] = ( ! empty( $new_instance['blog-lovin'] ) ) ? strip_tags( $new_instance['blog-lovin'] ) : '';
        $instance['linked-in'] = ( ! empty( $new_instance['linked-in'] ) ) ? strip_tags( $new_instance['linked-in'] ) : '';
        $instance['google-plus'] = ( ! empty( $new_instance['google-plus'] ) ) ? strip_tags( $new_instance['google-plus'] ) : '';



        return $instance;


    }

    function form( $instance ) {
        // Output admin widget options form
        $defaults= array('title'=>'Social Widget','facebook'=>'facebook');
        $instance= wp_parse_args( (array)$instance, $defaults );
        ?>
        <p>
            <label name="label" for="<?php echo $this->get_field_id('title');?>">Social Heading</label>
            <input name="<?php echo $this->get_field_name('title');?>" id="<?php echo $this->get_field_id('title');?>" value="<?php echo $instance['title'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('facebook');?>">Facebook link</label>
            <input name="<?php echo $this->get_field_name('facebook');?>" id="<?php echo $this->get_field_id('facebook');?>" value="<?php echo $instance['facebook'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('twitter');?>">Twitter link</label>
            <input name="<?php echo $this->get_field_name('twitter');?>" id="<?php echo $this->get_field_id('twitter');?>" value="<?php echo $instance['twitter'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('youtube');?>">Youtube link</label>
            <input name="<?php echo $this->get_field_name('youtube');?>" id="<?php echo $this->get_field_id('youtube');?>" value="<?php echo $instance['youtube'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('pinterest');?>">Pinterest link</label>
            <input name="<?php echo $this->get_field_name('pinterest');?>" id="<?php echo $this->get_field_id('pinterest');?>" value="<?php echo $instance['pinterest'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('instagram');?>">Instagram link</label>
            <input name="<?php echo $this->get_field_name('instagram');?>" id="<?php echo $this->get_field_id('instagram');?>" value="<?php echo $instance['instagram'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('blog-lovin');?>">Blog-lovin link</label>
            <input name="<?php echo $this->get_field_name('blog-lovin');?>" id="<?php echo $this->get_field_id('blog-lovin');?>" value="<?php echo $instance['blog-lovin'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('linked-in');?>">Linked-in</label>
            <input name="<?php echo $this->get_field_name('linked-in');?>" id="<?php echo $this->get_field_id('linked-in');?>" value="<?php echo $instance['linked-in'];?>" style="width:96%">

            <label name="label" for="<?php echo $this->get_field_id('google-plus');?>">Google-plus</label>
            <input name="<?php echo $this->get_field_name('google-plus');?>" id="<?php echo $this->get_field_id('google-plus');?>" value="<?php echo $instance['google-plus'];?>" style="width:96%">




        </p>
        <?php
    }
}


add_action( 'widgets_init', 'social_register_widgets' );
function social_register_widgets() {
    register_widget( 'Social_Widget' );
}?>