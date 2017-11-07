extract($args);
$title=apply_filter('widget-title',$instance['title']);
$facebook=$instance;
echo $before_widget; //important (by default )
if($title){
echo $before_title.$title.$after_title;
}
?>
<div class="social-widget">
    <ul>
        <?php if($facebook){ ?>
            <li>
                <a href="<?php echo esc_url($facebook); ?>" >Facebook</a>


            </li>
            <?php

        }?>


    </ul>

</div>

<?php
echo $after_title;