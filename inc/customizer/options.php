<?php

Kirki::add_config( 'bibliotheque_config', [
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
] );

add_filter( 'bibliotheque_config', '__return_false' );

//Section: Typography
Kirki::add_section( 'typography_options', [
    'priority'    => 30,
    'title'       => esc_html__( 'Global Typography', 'bibliotheque' ),
] );

Kirki::add_field( 'bibliotheque_config', [ 
	'type'        => 'typography',
	'settings'    => 'primary_typo',
	'label'       => esc_html__( 'Primary Font', 'bibliotheque' ),
	'description'       => esc_html__( 'Settings of the font used in header, footer, headings and archive pages.', 'bibliotheque' ),
	'section'     => 'typography_options',
	'default'     => [
		'font-family'    => 'Raleway',
		'variant'        => '300',
        'color'          => '#333'
	],
	'choices' => [
		'fonts' => [
			'google' => [ 'Archivo', 'Chivo', 'Exo', 'Exo 2', 'Istok Web', 'Lato', 'Libre Franklin', 'Montserrat', 'Raleway', 'Source Sans Pro', 'Work Sans' ],
			'standard' => [ 
				'Raleway, "Helvetica Neue", Ubuntu, Arial, sans-serif', 
			],
		],
	],
	'priority'    => 10,
	'transport'    => 'auto',
    'output'      => [
        [
            'element' => 'body, h1, h2, h3, h4, h5, h6',
        ],
    ],
] );

Kirki::add_field( 'bibliotheque_config', [ 
	'type'        => 'typography',
	'settings'    => 'secondary_typo',
	'label'       => esc_html__( 'Secondary Font', 'bibliotheque' ),
	'description'       => esc_html__( 'Settings of the font used in the body text.', 'bibliotheque' ),
	'section'     => 'typography_options',
	'default'     => [
		'font-family'    => 'Cormorant Garamond',
		'variant'        => '300',
		'font-size'      => '21px',
        'line-height'    => '1.4',
        'color'          => '#333'
	],
	'choices' => [
		'fonts' => [
			'google' => [ 'Bitter', 'Cormorant Garamond', 'Nanum Myeongjo', 'Noto Serif TC', 'Old Standard TT' ],
			'standard' => [ 
				'"Cormorant Garamond", Georgia, Times, "Times New Roman", serif', 
			],
		],
	],
	'priority'    => 10,
	'transport'    => 'auto',
    'output'      => [
        [
            'element' => '.site-main .entry-content',
        ],
    ],
] );


//Section: Colors
Kirki::add_section( 'color_options', [
    'priority'    => 30,
    'title'       => esc_html__( 'Global Colors', 'bibliotheque' ),
] );

Kirki::add_field( 'bibliotheque_config', [ 
	'type'        => 'color',
	'settings'    => 'primary_color',
	'label'       => esc_html__( 'Primary Color', 'bibliotheque' ),
	'description' => esc_html__( 'Global background color', 'bibliotheque' ),
	'section'     => 'color_options',
    'default'     => '#f9dc5c',
    'choices'     => [
		'alpha' => true,
	],
] );

Kirki::add_field( 'bibliotheque_config', [ 
	'type'        => 'color',
	'settings'    => 'secondary_color',
	'label'       => esc_html__( 'Secondary Color', 'bibliotheque' ),
	'description' => esc_html__( 'Background color of posts and pages content. Also used for the widgets zone and the main menu.', 'bibliotheque' ),
	'section'     => 'color_options',
    'default'     => '#fef5ef',
    'choices'     => [
		'alpha' => true,
	],
] );

// Section: Header
Kirki::add_section( 'header_options', [
	'priority' 	=> 30,
	'title'		=> esc_html__( 'Header Options', 'bibliotheque' ),
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'header_search',
	'label'		=>  esc_html__( 'Show search form', 'bibliotheque' ),
	'description' =>  esc_html__( 'The search form is located below the main menu when it is displayed.', 'bibliotheque' ),
	'section'  => 'header_options',
	'default'	=> '1',
	'priority'  => 10,
] );

Kirki::add_field( '', array(
    'type'        => 'custom',
    'settings'    => 'separator',
    'label'       => '',
    'section'     => 'header_options',
    'default'     => '<hr>',
    'priority'    => 10,
) );

Kirki::add_field( 'bibliotheque_config', [
	'type'        => 'slider',
	'settings'    => 'title-font-size',
	'label'		=>  esc_html__( 'Title size', 'bibliotheque' ),
	'description' =>  esc_html__( 'Fit your title to the template. Unit of measure: rem', 'bibliotheque' ),
	'section'     => 'header_options',
	'default'     => 2.2,
	'choices'     => [
		'min'  => 0,
		'max'  => 5,
		'step' => .1,
	],
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'title_break',
	'label'		=>  esc_html__( 'Break title?', 'bibliotheque' ),
	'description' =>  esc_html__( 'Title word break.', 'bibliotheque' ),
	'section'  => 'header_options',
	'default'	=> '1',
	'priority'  => 10,
] );

Kirki::add_field( '', array(
    'type'        => 'custom',
    'settings'    => 'separator2',
    'label'       => '',
    'section'     => 'header_options',
    'default'     => '<hr>',
    'priority'    => 10,
) );

Kirki::add_field( 'bibliotheque_config', [
	'type'        => 'slider',
	'settings'    => 'tagline-font-size',
	'label'		=>  esc_html__( 'Description Size', 'bibliotheque' ),
	'description' =>  esc_html__( 'Fit your description to the template. Unit of measure: rem', 'bibliotheque' ),
	'section'     => 'header_options',
	'default'     => 1.2,
	'choices'     => [
		'min'  => 0,
		'max'  => 4,
		'step' => .1,
	],
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'hide_description',
	'label'		=>  esc_html__( 'Hide Description?', 'bibliotheque' ),
	'section'  => 'header_options',
	'default'	=> '0',
	'priority'  => 10,
] );

//Section: Content
Kirki::add_section( 'content_options', [
    'priority'    => 30,
    'title'       => esc_html__( 'Content Options', 'bibliotheque' ),
] );

Kirki::add_field( 'bibliotheque_config', [
	'type'        => 'slider',
	'settings'    => 'heading-font-size',
	'label'		  =>  esc_html__( 'Headings size', 'bibliotheque' ),
	'section'     => 'content_options',
	'default'     => 2.2,
	'choices'     => [
		'min'  => 0,
		'max'  => 5,
		'step' => .1,
	],
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'heading-uppercase',
	'label'		=>  esc_html__( 'Headings in uppercase?', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'	=> '1',
	'priority'  => 10,
] );

Kirki::add_field( '', array(
    'type'        => 'custom',
    'settings'    => 'separator3',
    'label'       => '',
    'section'     => 'content_options',
    'default'     => '<hr>',
    'priority'    => 10,
) );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'disable_comments',
	'label'		=>  esc_html__( 'Disable comments?', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'	=> '0',
	'priority'  => 10,
] );

Kirki::add_field( '', array(
    'type'        => 'custom',
    'settings'    => 'separator4',
    'label'       => '',
    'section'     => 'content_options',
    'default'     => '<hr>',
    'priority'    => 10,
) );

Kirki::add_field( 'bibliotheque_config', [
	'type'        => 'sortable',
	'settings'    => 'posts_meta',
	'label'       => esc_html__( 'Posts meta', 'bibliotheque' ),
	'section'     => 'content_options',
	'default'     => [
		'date',
	],
	'choices'     => [
		'author' 	 => esc_html__( 'Author name', 'bibliotheque' ),
		'date' 		 => esc_html__( 'Date', 'bibliotheque' ),
		'comments' 	 => esc_html__( 'Comments counter', 'bibliotheque' ),
		'categories' => esc_html__( 'Categories', 'bibliotheque' ),
		'tags' 		 => esc_html__( 'Tags', 'bibliotheque' ),
	],
	'priority'    => 10,
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'display_icon_date',
	'label'		=>  esc_html__( 'Display icon before date?', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'	=> '0',
	'priority'  => 10,
] );

Kirki::add_field( 'theme_config_id', [
	'type'     => 'dashicons',
	'settings' => 'icon_date',
	'label'    => esc_html__( 'Date icon', 'bibliotheque' ),
	'description'    => esc_html__( 'Library: Dashicons', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'  => 'calendar',
	'priority' => 10,
	'active_callback' => [
		[
			'setting'	=> 'display_icon_date',
			'operator'	=> '===',
			'value'		=> true,
		]
	],
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'display_icon_author',
	'label'		=>  esc_html__( 'Display icon before author name?', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'	=> '0',
	'priority'  => 10,
] );

Kirki::add_field( 'theme_config_id', [
	'type'     => 'dashicons',
	'settings' => 'icon_author',
	'label'    => esc_html__( 'Author icon', 'bibliotheque' ),
	'description'    => esc_html__( 'Library: Dashicons', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'  => 'admin-users',
	'priority' => 10,
	'active_callback' => [
		[
			'setting'	=> 'display_icon_author',
			'operator'	=> '===',
			'value'		=> true,
		]
	],
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'display_icon_comments',
	'label'		=>  esc_html__( 'Display icon before comments counter?', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'	=> '0',
	'priority'  => 10,
	'active_callback' => [
		[
			'setting'	=> 'disable_comments',
			'operator'	=> '===',
			'value'		=> false,
		]
	],
] );

Kirki::add_field( 'theme_config_id', [
	'type'     => 'dashicons',
	'settings' => 'icon_comments',
	'label'    => esc_html__( 'Comments icon', 'bibliotheque' ),
	'description'    => esc_html__( 'Library: Dashicons', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'  => 'admin-comments',
	'priority' => 10,
	'active_callback' => [
		[
			'setting'	=> 'display_icon_comments',
			'operator'	=> '===',
			'value'		=> true,
		]
	],
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'display_icon_categories',
	'label'		=>  esc_html__( 'Display icon before categories list?', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'	=> '0',
	'priority'  => 10,
] );

Kirki::add_field( 'theme_config_id', [
	'type'     => 'dashicons',
	'settings' => 'icon_categories',
	'label'    => esc_html__( 'Categories icon', 'bibliotheque' ),
	'description'    => esc_html__( 'Library: Dashicons', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'  => 'category',
	'priority' => 10,
	'active_callback' => [
		[
			'setting'	=> 'display_icon_categories',
			'operator'	=> '===',
			'value'		=> true,
		]
	],
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => 'display_icon_tags',
	'label'		=>  esc_html__( 'Display icon before tags list?', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'	=> '0',
	'priority'  => 10,
] );

Kirki::add_field( 'theme_config_id', [
	'type'     => 'dashicons',
	'settings' => 'icon_tags',
	'label'    => esc_html__( 'Tags icon', 'bibliotheque' ),
	'description'    => esc_html__( 'Library: Dashicons', 'bibliotheque' ),
	'section'  => 'content_options',
	'default'  => 'tag',
	'priority' => 10,
	'active_callback' => [
		[
			'setting'	=> 'display_icon_tags',
			'operator'	=> '===',
			'value'		=> true,
		]
	],
] );

//Section: Footer
Kirki::add_section( 'footer_options', [
    'priority'    => 30,
    'title'       => esc_html__( 'Footer Content', 'bibliotheque' ),
] );

Kirki::add_field( 'bibliotheque_config', [ 
	'type'        => 'editor',
	'settings'    => 'footer_one',
	'label'       => esc_html__( 'Left content', 'bibliotheque' ),
	'section'     => 'footer_options',
	'default'     => 'Bibliothèque Theme',
] );

Kirki::add_field( 'bibliotheque_config', [ 
	'type'        => 'editor',
	'settings'    => 'footer_two',
	'label'       => esc_html__( 'Right content', 'bibliotheque' ),
	'section'     => 'footer_options',
	'default'     => 'Powered by WordPress',
] );

// Section: 404 page
Kirki::add_section( 'page_404_options', [
    'priority'    => 30,
    'title'       => esc_html__( '404 Page', 'bibliotheque' ),
] );

Kirki::add_field( 'bibliotheque_config', [ 
	'type'        => 'text',
	'settings'    => '404_title',
	'label'       => esc_html__( '404 Page Heading', 'bibliotheque' ),
	'section'     => 'page_404_options',
	'default'     => esc_html__( 'Oops! That page can’t be found.', 'kirki' ),
] );

Kirki::add_field( 'bibliotheque_config', [ 
	'type'        => 'editor',
	'settings'    => '404_text',
	'label'       => esc_html__( '404 Page Content', 'bibliotheque' ),
	'section'     => 'page_404_options',
	'default'     => 'It looks like nothing was found at this location. Maybe try a search?',
] );

Kirki::add_field( 'bibliotheque_config', [
	'type' 		=> 'toggle',
	'settings'  => '404_search',
	'label'		=>  esc_html__( 'Display search form in 404 Page?', 'bibliotheque' ),
	'section'  => 'page_404_options',
	'default'	=> '1',
	'priority'  => 10,
] );