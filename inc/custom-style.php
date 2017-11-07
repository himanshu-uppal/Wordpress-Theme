<?php
function dynamic_style(){
	?>
	<style>

		.site-branding{
			padding-top: <?php echo get_theme_mod('header-padding-top') ?>px;
			padding-bottom: <?php echo get_theme_mod('header-padding-bottom') ?>px;
		}


		<?php if(get_theme_mod('custom-css-setting')){
		echo esc_textarea(get_theme_mod('custom-css-setting'));

	} ?>
		.site-branding{
			color:<?php echo get_theme_mod('header-text-color-setting') ?>;
			text-align: center;
			font-weight: bold;
			font-size:18px;
		}
		<?php if(get_theme_mod('background-image-setting')){ ?>
		body{
			background-image: url(<?php echo esc_url(get_theme_mod('background-image-setting')) ?>);
		}
		<?php } ?>
		a:hover,
		a:focus,
		a:active {
			color:  <?php echo get_theme_mod('theme-color-setting') ?>;
			text-decoration: none;
		}


		
		.entry-header a:hover,
		.entry-header a:focus,
		.entry-header a:active{
			color: <?php echo get_theme_mod('theme-color-setting') ?>;


		}


		.footer-area a,.footer-area a:visited{
			color:<?php echo get_theme_mod('footer-area-link-color-setting') ?>;
			/*#a4a4a4;*/
			text-decoration: none;

		}
		.footer-area a:hover,
		.footer-area a:focus,
		.footer-area a:active{
			color:<?php echo get_theme_mod('footer-area-link-hover-color-setting') ?>;
			/*#fff;*/
			text-decoration: none;

		}
		.footer-area{
			width: 100%;
			background-color:<?php echo get_theme_mod('footer-area-color-setting') ?>;
			color: <?php echo get_theme_mod('footer-area-text-color-setting') ?>;
			height:10%;
			padding: 2% 2% 2% 2%;

		}
		.footer-area .recent-post-widget .recent-post-time{
			color: <?php echo get_theme_mod('footer-area-meta-text-color-setting') ?>;
		}
		.footer-area .abt-description {
			color: <?php echo get_theme_mod('footer-area-meta-text-color-setting') ?>;



		}




		.slick-slider-container:hover .fa-angle-right:before, .slick-slider-container:hover .fa-angle-left:before {
			color: <?php echo get_theme_mod('theme-color-setting') ?>;
		}





		.slider-tilte-container h2{
			color:  <?php echo get_theme_mod('theme-color-setting') ?>;
			font-weight: bold;
			font-size: xx-large;

		}




		.slider-content-container h2:hover{

			color: <?php echo get_theme_mod('theme-color-setting') ?>;
		}

		.read-more-slider{
			padding: 1.5% 1.5% 1.5% 1.5%;
			background-color: <?php echo get_theme_mod('theme-color-setting') ?>;
			width: 115px;
		}
		div.read-more-slider:hover{
			background-color: <?php echo get_theme_mod('theme-color-setting') ?>;

		}





		.primary-container h2{

			color: <?php echo get_theme_mod('theme-color-setting') ?>;
		}
		.primary_nav_wrap ul li.current-menu-item
		{

			border-bottom-width: 3px;
			border-bottom-style: solid;
			border-bottom-color:  <?php echo get_theme_mod('theme-color-setting') ?>;
		}

		.primary_nav_wrap ul li:hover
		{

			border-bottom-width: 3px;
			border-bottom-style: solid;
			border-bottom-color:  <?php echo get_theme_mod('theme-color-setting') ?>;
		}


		.primary_nav_wrap ul ul li
		{
			float:none;
			width:200px;
			border-bottom-width: 0.3px;
			border-bottom-style: solid;
			border-bottom-color:  <?php echo get_theme_mod('theme-color-setting') ?>;
		}



		.post-share-area a:hover,
		.post-share-area a:focus,
		.post-share-area a:active{
			color: <?php echo get_theme_mod('theme-color-setting') ?>;
			text-decoration: none;

		}



		.read-more{
			padding:2% 2% 2% 2%;

			text-align: center;
			width:200px;
			margin: 0 auto;
			border-width: 0.3px;
			border-style: solid;
			border-color: <?php echo get_theme_mod('theme-color-setting') ?>;

		}
		.read-more-area{
			width: 100%;
			text-align: center;
			padding: 1% 1% 1% 1%;
			color:  <?php echo get_theme_mod('theme-color-setting') ?>;

		}

		.read-more-area .read-more:before{
			border-color: <?php echo get_theme_mod('theme-color-setting') ?>;


			border-bottom-width:5px;

		}

		.post-meta-time:before,.post-meta-time:after {
			content: '';
			width: 30%;
			height: 1px;
			background-color:  <?php echo get_theme_mod('theme-color-setting') ?>;
			position: absolute;
			display: inline-block;
			top: 50%;

		}

		h2.widget-title:before,h2.widget-title:after {
			content: '';
			width: 19%;
			height: 1px;
			background-color:  <?php echo get_theme_mod('theme-color-setting') ?>;
			position: absolute;
			display: inline-block;
			top: 50%;
		}

		.menu-social i:hover{
			color: <?php echo get_theme_mod('theme-color-setting') ?>;
		}



		.widget  a:hover,
		.widget  a:focus,
		.widget  a:active {
			color:  <?php echo get_theme_mod('theme-color-setting') ?>;
			text-decoration: none;
		}
		.nav-previous  a:hover,.nav-previous  a:focus,.nav-previous  a:active,
		.nav-next  a:hover,.nav-next  a:focus,.nav-next  a:active {
			color:  <?php echo get_theme_mod('theme-color-setting') ?>;

		}
		.read-more:before{
			content:'';
			position: absolute;
			width: 100%;
			height: 3px;
			background-color:  <?php echo get_theme_mod('theme-color-setting') ?>;
			bottom: 0;
			opacity:0;
			left:0;
			-webkit-transition: .5s;
			-moz-transition: .5s;
			-ms-transition: .5s;
			-o-transition: .5s;
			transition: .5s;

		}
		.read-more-slider{

			background-color: <?php echo get_theme_mod('theme-color-setting') ?>;

		}

		.nav-area {

			background-color: <?php echo get_theme_mod('nav-area-color-setting') ?>;

		}

		.primary_nav_wrap ul li.current-menu-item
		{
			background:<?php echo get_theme_mod('nav-area-color-setting') ?>;

		}

		.primary_nav_wrap ul li:hover
		{
			background:<?php echo get_theme_mod('nav-area-color-setting') ?>;

		}

		.nav-area a,.nav-area a:visited{
			color: <?php echo get_theme_mod('nav-area-text-color-setting') ?>;
			text-decoration: none;

		}


		.menu-social,.search-area i{
			color:<?php echo get_theme_mod('nav-area-text-color-setting') ?>;
		}
		.primary_nav_wrap
		{
			/*margin-top:15px*/
		}


		.primary_nav_wrap ul a
		{
			display:block;
			color:<?php echo get_theme_mod('nav-area-text-color-setting') ?>;
			text-decoration:none;

			font-size:14px;
			line-height:55px;
			padding:0 15px;

		}

		.primary_nav_wrap ul li
		{
			position:relative;
			float:left;
			margin:0;
			padding:0;
			/*background-color: #fff;*/

		}


		.primary_nav_wrap ul ul
		{
			display: none;
			position: absolute;
			top: 105%;
			left: 0;
			background:<?php echo get_theme_mod('nav-area-color-setting') ?>;
			padding: 0;
			box-shadow: 0 0 8px rgba(0,0,0,.3);

		}
	</style>


	<?php

}
add_action('wp_head','dynamic_style');
?>