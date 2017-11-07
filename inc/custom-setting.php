<?php

function dynamic_setting($wp_customize){
	$wp_customize->add_setting('my_logo');  //for the logo
	$wp_customize->add_setting('my_favicon');
	$wp_customize->add_setting('custom-css-setting');
	$wp_customize->add_setting('custom-js-setting');
	$wp_customize->add_setting('default-image-setting');
	$wp_customize->add_setting('background-image-setting');
	$wp_customize->add_setting('footer-text-setting');
	$wp_customize->add_setting('nav-area-color-setting',array(
		'default'=>'#ffffff'
	));
	$wp_customize->add_setting('nav-area-text-color-setting',array(
		'default'=>'#000000'
	));
	$wp_customize->add_setting('nav-area-link-hover-color-setting');
	$wp_customize->add_setting('header-text-color-setting',array(
		'default'=>'#000000'
	));
	$wp_customize->add_setting('footer-area-color-setting',array(
		'default'=>'#000000'
	));
	$wp_customize->add_setting('footer-area-text-color-setting',array(
		'default'=>'#ffffff'
	));

	$wp_customize->add_setting('footer-area-link-color-setting',array(
		'default'=>'#999999'
	));
	$wp_customize->add_setting('footer-area-meta-text-color-setting',array(
		'default'=>'#999999'
	));
	$wp_customize->add_setting('footer-area-link-hover-color-setting',array(
		'default'=>'#ffffff'
	));
	$wp_customize->add_setting('header-padding-top');
	$wp_customize->add_setting('header-padding-bottom');//for the logo
	$wp_customize->add_setting('general-settings-excerpt',array(
		'default'=>'excerpt',

	));
	$wp_customize->add_setting('header-search-option-setting',array(
		'default'=>false,

	));

	$wp_customize->add_setting('social-option-setting',array(
		'default'=>false,

	));
	$wp_customize->add_setting('social-option-footer-setting',array(
		'default'=>false,

	));
	$wp_customize->add_setting('hide-home-sidebar-setting',array(
		'default'=>false,

	));
	$wp_customize->add_setting('theme-color-setting',array(
		'default'=>'#FF8A65',

	));
	$wp_customize->add_setting('hide-single-sidebar-setting',array(
		'default'=>false,

	));
	$wp_customize->add_setting('related-post-setting',array(
		'default'=>false,

	));

	$wp_customize->add_setting('responsive-setting',array(
		'default'=>false,

	));
	$wp_customize->add_setting('post-header-date-time-meta', array(
		'default'=>false,

	));

	$wp_customize->add_setting('post-header-author-meta', array(
		'default'=>false,

	));

	$wp_customize->add_setting('post-header-category-meta', array(
		'default'=>false,

	));

	$wp_customize->add_setting('post-header-social-sharable-icons-meta', array(
		'default'=>false,

	));
	$wp_customize->add_setting('slider-slides', array(
		'default'=>5,

	));
	$wp_customize->add_setting('slider-category');

	$wp_customize->add_setting('slider-settings-enable', array(
		'default'=>false,

	));

	$wp_customize->add_setting('social-facebook-setting');
	$wp_customize->add_setting('social-twitter-setting');
	$wp_customize->add_setting('social-pinterest-setting');
	$wp_customize->add_setting('social-googleplus-setting');
//	$wp_customize->add_setting('social-instagram-setting');
	$wp_customize->add_setting('social-linkedin-setting');
	$wp_customize->add_setting('social-youtube-setting');
	$wp_customize->add_setting('social-gmail-setting');



	$wp_customize->remove_section('colors');  //colors
	$wp_customize->remove_section('title_tagline'); //site identity
	$wp_customize->remove_section('background_image'); //background image
	$wp_customize->remove_section('header_image'); //background image



	$wp_customize->add_section('Header' , array(
		'title'      => __( 'Logo and Header', 'theme1' ),
		'description'=>'For Showing the Logo ',
		'priority'   => 30,
	) );

	$wp_customize->add_section('Image Settings' , array(
		'title'      => __( 'Image Settings', 'theme1' ),
		'description'=>'Image settings ',
		'priority'   => 40,
	) );

	$wp_customize->add_section('Social Settings' , array(
		'title'      => __( 'Social Settings', 'theme1' ),
		'description'=>'Social settings ',
		'priority'   => 40,
	) );

	$wp_customize->add_section('Custom Settings' , array(
		'title'      => __( 'Custom Settings', 'theme1' ),
		'description'=>'Custom CSS and JS settings ',
		'priority'   => 40,
	) );

	$wp_customize->add_section('General Settings' , array(
		'title'      => __( 'General Settings', 'theme1' ),
		'description'=>'General Settings ',
		'priority'   => 35,
	) );

	$wp_customize->add_section('Sidebar Settings' , array(
		'title'      => __( 'Sidebar Settings', 'theme1' ),
		'description'=>'Sidebar Settings ',
		'priority'   => 35,
	) );

	$wp_customize->add_section('Footer Settings' , array(
		'title'      => __( 'Footer Settings', 'theme1' ),
		'description'=>'Footer Settings ',
		'priority'   => 35,
	) );

	$wp_customize->add_section('Post Settings' , array(
		'title'      => __( 'Post Settings', 'theme1' ),
		'description'=>'Post Settings ',
		'priority'   => 35,
	) );

	$wp_customize->add_section('Slider Settings' , array(
		'title'      => __( 'Slider Settings', 'theme1' ),
		'description'=>'Slider Settings ',
		'priority'   => 35,
	) );
	$wp_customize->add_section('Top Bar Settings' , array(
		'title'      => __( 'Top Bar Settings', 'theme1' ),
		'description'=>'Top Bar Settings ',
		'priority'   => 31,
	) );





	$wp_customize->add_panel( 'Customize-Colors-Settings', array(
		'title'      => __( 'Customize Colors', 'theme1' ),
		'description'=>'Customize Colors Settings ',
		'priority'   => 35,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',


	) );

	$wp_customize->add_section( 'nav-bar-color', array(
		'title'      => __( 'Nav Bar Color Settings', 'theme1' ),
		'description'=>'Nav Bar Color Settings ',
		'priority'   => 35,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'panel' => 'Customize-Colors-Settings',


	) );

	$wp_customize->add_section( 'header_settings', array(
		'title'      => __( 'Navigation Bar Colors', 'theme1' ),
		'description'=>'Header Colors Settings ',
		'priority'   => 35,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'panel'  => 'Customize-Colors-Settings',
	) );

	$wp_customize->add_section( 'header_text_settings', array(
		'title'      => __( 'Header Colors', 'theme1' ),
		'description'=>'Header Colors Settings ',
		'priority'   => 35,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'panel'  => 'Customize-Colors-Settings',

	) );

	$wp_customize->add_section( 'footer_settings', array(
		'title'      => __( 'Footer Colors', 'theme1' ),
		'description'=>'Footer Colors Settings ',
		'priority'   => 35,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'panel'  => 'Customize-Colors-Settings',

	) );





	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'Logo',
			array(
				'label'      => 'Upload a logo',
				'section'    => 'Header',
				'settings'   => 'my_logo',
				'context'    => 'your_setting_context'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'Favicon',
			array(
				'label'      => 'Upload a favicon',
				'section'    => 'Header',
				'settings'   => 'my_favicon',
				'context'    => 'your_setting_context'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Top-Padding',
			array(
				'label'      => 'Top Header padding',
				'section'    => 'Header',
				'settings'   => 'header-padding-top',
				'type'		 =>	'number',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Bottom-Padding',
			array(
				'label'      => 'Bottom Header padding',
				'section'    => 'Header',
				'settings'   => 'header-padding-bottom',
				'type'		 =>	'number',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			)
		)
	);


	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
				'label'      => 'Select the theme Color',
				'section'    => 'General Settings',
				'settings'   => 'theme-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'Background Image',
			array(
				'label'      => 'Background Image',
				'section'    => 'Image Settings',
				'settings'   => 'background-image-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav-area-color',
			array(
				'label'      => 'Select the Navigation bar Color',
				'section'    => 'header_settings',
				'settings'   => 'nav-area-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav-area-text-color',
			array(
				'label'      => 'Select the Color of Navigation bar Text',
				'section'    => 'header_settings',
				'settings'   => 'nav-area-text-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);



	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav-area-link-hover-color',
			array(
				'label'      => 'Select the Color of Navigation bar Links when hovered',
				'section'    => 'header_settings',
				'settings'   => 'nav-area-link-hover-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header-text-color',
			array(
				'label'      => 'Select the Color of Header Text',
				'section'    => 'header_text_settings',
				'settings'   => 'header-text-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer-area-color',
			array(
				'label'      => 'Select the Footer Color',
				'section'    => 'footer_settings',
				'settings'   => 'footer-area-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer-area-text-color',
			array(
				'label'      => 'Select the Color of Footer Text',
				'section'    => 'footer_settings',
				'settings'   => 'footer-area-text-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer-area-link-color',
			array(
				'label'      => 'Select the Footer Link Color',
				'section'    => 'footer_settings',
				'settings'   => 'footer-area-link-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer-area-link-hover-color',
			array(
				'label'      => 'Select the Color of footer Links when hovered',
				'section'    => 'footer_settings',
				'settings'   => 'footer-area-link-hover-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);



	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer-area-meta-text-link-color',
			array(
				'label'      => 'Select the Footer Secondary/Descriptive Text Color',
				'section'    => 'footer_settings',
				'settings'   => 'footer-area-meta-text-color-setting',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			) )
	);


	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'custom css',
			array(
				'label'      => 'Enter the CSS you want to include',
				'section'    => 'Custom Settings',
				'settings'   => 'custom-css-setting',
				'type'		 =>	'textarea',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'custom js',
			array(
				'label'      => 'Enter the JS you want to include',
				'section'    => 'Custom Settings',
				'settings'   => 'custom-js-setting',
				'type'		 =>	'textarea',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			)
		)
	);



	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer-text',
			array(
				'label'      => 'Enter the text to display in footer-> ',
				'section'    => 'Footer Settings',
				'settings'   => 'footer-text-setting',
				'type'		 =>	'textarea',
				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Responsive Settings',
			array(
				'label'      => 'No Responsiveness',
				'section'    => 'General Settings',
				'settings'   => 'responsive-setting',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',


			)
		)
	);



	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Excerpt-Settings',
			array(
				'label'      => 'Post Content Settings',
				'section'    => 'General Settings',
				'settings'   => 'general-settings-excerpt',
				'type'		 =>	'radio',
				'transport' => 'refresh',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',
				'choices'    => array(
					'excerpt' => 'Show Excerpt',
					'full' => 'Show Full Content',
				)
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Hide Sidebar Settings',
			array(
				'label'      => 'Hide Sidebar at Home Page',
				'section'    => 'Sidebar Settings',
				'settings'   => 'hide-home-sidebar-setting',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',


			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Hide Single Sidebar Settings',
			array(
				'label'      => 'Hide Sidebar at Individual Post page',
				'section'    => 'Sidebar Settings',
				'settings'   => 'hide-single-sidebar-setting',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',


			)
		)
	);





	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Post-Date-Time-Meta-Settings',
			array(
				'label'      => 'Hide Date and Time',
				'section'    => 'Post Settings',
				'settings'   => 'post-header-date-time-meta',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Related Post Settings',
			array(
				'label'      => 'Hide Related Posts',
				'section'    => 'Post Settings',
				'settings'   => 'related-post-setting',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Post Author Meta Settings',
			array(
				'label'      => 'Hide Author',
				'section'    => 'Post Settings',
				'settings'   => 'post-header-author-meta',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Post Category Meta Settings',
			array(
				'label'      => 'Hide Category',
				'section'    => 'Post Settings',
				'settings'   => 'post-header-category-meta',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Post Share Icons Meta Settings',
			array(
				'label'      => 'Hide Social Share Icons',
				'section'    => 'Post Settings',
				'settings'   => 'post-header-social-sharable-icons-meta',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'Slider Enable',
//			array(
//				'label'      => 'Enable Changes',
//				'section'    => 'Slider Settings',
//				'settings'   => 'slider-settings-enable',
//				'type'		 =>	'checkbox',
//				'priority'	 =>	2,
//				'context'    => 'your_setting_context',
//
//			)
//		)
//	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Slider Enable',
			array(
				'label'      => 'Enable Slider',
				'section'    => 'Slider Settings',
				'settings'   => 'slider-settings-enable',
				'type'		 =>	'checkbox',
				'priority'	 =>	2,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Slider Settings 1',
			array(
				'label'      => 'No. of Slides',
				'section'    => 'Slider Settings',
				'settings'   => 'slider-slides',
				'type'		 =>	'number',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Category_Control(
			$wp_customize,
			'Slider Settings 2',
			array(
				'label'    => 'Category',
				'settings' => 'slider-category',
				'section'  => 'Slider Settings'
			)
		)
	);


	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Header Search Settings',
			array(
				'label'      => 'Disable Search Option',
				'section'    => 'Top Bar Settings',
				'settings'   => 'header-search-option-setting',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',


			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'icons Social Settings',
			array(
				'label'      => 'Disable Social Icons',
				'section'    => 'Top Bar Settings',
				'settings'   => 'social-option-setting',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',


			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer icons Social Settings',
			array(
				'label'      => 'Disable Social Icons',
				'section'    => 'Footer Settings',
				'settings'   => 'social-option-footer-setting',
				'type'		 =>	'checkbox',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',


			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Share Icons Facebook Settings',
			array(
				'label'      => 'Facebook Share Link',
				'section'    => 'Social Settings',
				'settings'   => 'social-facebook-setting',
				'type'		 =>	'text',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Share Icons Twitter Settings',
			array(
				'label'      => 'Twitter Share Link',
				'section'    => 'Social Settings',
				'settings'   => 'social-twitter-setting',
				'type'		 =>	'text',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Share Icons Google+ Settings',
			array(
				'label'      => 'Google+ Share Link',
				'section'    => 'Social Settings',
				'settings'   => 'social-googleplus-setting',
				'type'		 =>	'text',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Share Icons Pinterest Settings',
			array(
				'label'      => 'Pinterest Share Link',
				'section'    => 'Social Settings',
				'settings'   => 'social-pinterest-setting',
				'type'		 =>	'text',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'Share Icons Instagram Settings',
//			array(
//				'label'      => 'Instagram Share Link',
//				'section'    => 'Social Settings',
//				'settings'   => 'social-instagram-setting',
//				'type'		 =>	'text',
//				'priority'	 =>	35,
//				'context'    => 'your_setting_context',
//
//			)
//		)
//	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Share Icons Youtube Settings',
			array(
				'label'      => 'Youtube Share Link',
				'section'    => 'Social Settings',
				'settings'   => 'social-youtube-setting',
				'type'		 =>	'text',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Share Icons LinkedIn Settings',
			array(
				'label'      => 'LinkedIn Share Link',
				'section'    => 'Social Settings',
				'settings'   => 'social-linkedin-setting',
				'type'		 =>	'text',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'Share Icons Gmail Settings',
			array(
				'label'      => 'Gmail Share Link',
				'section'    => 'Social Settings',
				'settings'   => 'social-gmail-setting',
				'type'		 =>	'text',
				'priority'	 =>	35,
				'context'    => 'your_setting_context',

			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'Default Image',
			array(
				'label'      => 'Default Image',
				'section'    => 'Image Settings',
				'settings'   => 'default-image-setting',

				'priority'	 =>	35,
				'context'    => 'your_setting_context'
			)
		)
	);


}
add_action('customize_register','dynamic_setting');


?>
