<?php
/**
 * theme1 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme1
 */

if ( ! function_exists( 'theme1_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme1_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on theme1, use a find and replace
	 * to change 'theme1' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'theme1', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('post-thumb',500,500,true);
	add_image_size('slider-image',850,500);
	add_image_size('popular-post-image',350,260,true);
	add_image_size('recent-post-image',70,70,true);
	add_image_size('related-post-image',200,200,true);
	add_image_size('popular-post-footer-image',90,90,true);
	add_image_size('post-gallery-image',1000,600,true);

//	Post Format Support

	add_theme_support( 'post-formats', array(  'gallery','video','image','audio' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'theme1' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'theme1_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'theme1_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme1_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme1_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme1_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme1_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme1' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );





}

function theme1_footer_widgets_init() {


	register_sidebar( array(
		'name' => esc_html__( 'Footer Widget Area-1', 'theme1' ),
		'id' => 'footer-sidebar-1',
		'description' =>esc_html__( 'Add widgets here.', 'theme1' ),
		'before_widget' => '<div id="%1$s" class="footer-widget-1 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => esc_html__( 'Footer Widget Area-2', 'theme1' ),
		'id' => 'footer-sidebar-2',
		'description' =>esc_html__( 'Add widgets here.', 'theme1' ),
		'before_widget' => '<div id="%1$s" class="footer-widget-2 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => esc_html__( 'Footer Widget Area-3', 'theme1' ),
		'id' => 'footer-sidebar-3',
		'description' =>esc_html__( 'Add widgets here.', 'theme1' ),
		'before_widget' => '<div id="%1$s" class="footer-widget-3 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	
}

add_action( 'widgets_init', 'theme1_widgets_init' );
add_action( 'widgets_init', 'theme1_footer_widgets_init' );





/**
 * Enqueue scripts and styles.
 */
function theme1_scripts() {

	/* Register Style */

	wp_register_style('font-awesome',get_stylesheet_directory_uri().'/css/font-awesome.min.css');  //For adding New CSS
	wp_register_style('slick',get_stylesheet_directory_uri().'/css/slick.css');  //For adding New CSS
	wp_register_style('slick-theme',get_stylesheet_directory_uri().'/css/slick-theme.css');  //For adding New CSS
	wp_register_style('slick-nav',get_stylesheet_directory_uri().'/css/slicknav.min.css');  //For adding New CSS
	wp_register_style('theme1-style',get_stylesheet_directory_uri().'/style.css');  //For adding New CSS
	wp_register_style('responsive-style',get_stylesheet_directory_uri().'/css/responsive.css');  //For adding New CSS



	/* Enqueue Style */

	wp_enqueue_style( 'theme1-style', get_stylesheet_uri() );
	//wp_enqueue_style( 'theme1-style_new', get_stylesheet_uri() ); //For adding new CSS
	wp_enqueue_style( 'font-awesome', get_stylesheet_uri() ); //For adding new CSS
	wp_enqueue_style( 'slick', get_stylesheet_uri() ); //For adding new CSS
	wp_enqueue_style( 'slick-theme', get_stylesheet_uri() ); //For adding new CSS
	wp_enqueue_style( 'slick-nav' ); //For adding new CSS
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Slabo+27px|Lora:400,400italic,700,700italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Candal|Josefin+Sans|Anton' ); //For adding new CSS
	wp_enqueue_style( 'google-fonts-heading', 'https://fonts.googleapis.com/css?family=Pacifico' ); //For adding new CSS
	if(get_theme_mod('responsive-setting')) {
	}else{
		wp_enqueue_style( 'responsive-style' ); //For adding new CSS
	}


	/* Register Scripts */

	wp_register_script('theme1-navigation_new',get_template_directory_uri().'/js/navigation_new.js');  //For adding New JS
	wp_register_script('slick.min',get_template_directory_uri().'/js/slick.min.js');  //For adding JS

	wp_register_script('slick-navJs',get_template_directory_uri().'/js/jquery.slicknav.min.js');
	wp_register_script('my',get_template_directory_uri().'/js/my.js'); //Always at Bottom

	/* Enqueue Scripts */

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'theme1-navigation_new', get_template_directory_uri() . '/js/navigation_new.js', array(), '20151678', true );
	wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/js/slick.min.js', array(), '20239078', true );
	wp_enqueue_script( 'theme1-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'slick-navJs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array(), '201587615', true );

	wp_enqueue_script( 'my', get_template_directory_uri() . '/js/my.js', array(), '201587615', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'theme1_scripts' );

function custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');



function excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'excerpt_more' );


function pippin_get_image_id($image_url) {
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url ));
	return $attachment[0];
}

function modify_read_more_link() {
	return '<div class="read-more"><a class="more-link" href="' . get_permalink() . '">Read More</a></div>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/custom-style.php'; //including the custom style file
require get_template_directory() . '/inc/custom-script.php'; //including the custom script file
require get_template_directory() . '/inc/custom-setting.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer Controller additions.
 */
require get_template_directory() . '/inc/customize-controller.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/widgets/recent-post-widget.php';

require get_template_directory() . '/inc/widgets/social-widget.php';

require get_template_directory() . '/inc/widgets/popular-post-widget.php';

require get_template_directory() . '/inc/widgets/footer-widget-1.php';

require get_template_directory() . '/inc/widgets/footer-widget-2.php';

require get_template_directory() . '/inc/widgets/footer-widget-3.php';

require get_template_directory() . '/inc/widgets/footer-widget-4.php';

require get_template_directory() . '/inc/widgets/about-us-widget.php';









/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package	   TGM-Plugin-Activation
 * @subpackage Example
 * @version	   2.4.1
 * @author	   Thomas Griffin <thomas@thomasgriffinmedia.com>
 * @author	   Gary Jones <gamajo@gamajo.com>
 * @copyright  Copyright (c) 2012, Thomas Griffin
 * @license	   http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a theme
		array(
			'name'     				=> 'Vafpress Post Formats UI', // The plugin name
			'slug'     				=> 'vafpress-post-formats-ui-develop', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/plugin/vafpress-post-formats-ui-develop.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'     				=> 'WP Instagram Widget', // The plugin name
			'slug'     				=> 'wp-instagram-widget', // The plugin slug (typically the folder name)
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		),



	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'tgmpa';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}


