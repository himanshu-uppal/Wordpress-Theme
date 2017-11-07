<?php
function dynamic_script(){
    ?>
    <script>


        <?php if(get_theme_mod('custom-js-setting')){
        echo get_theme_mod('custom-js-setting');

    } ?>

    </script>


    <?php

}
add_action('wp_footer','dynamic_script');
?>