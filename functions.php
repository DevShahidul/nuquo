<?php
/**
 * nuquo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nuquo
 */

if ( ! function_exists( 'nuquo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nuquo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nuquo, use a find and replace
		 * to change 'nuquo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nuquo', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'Main-menu' => esc_html__( 'Primary', 'nuquo' ),
            'Quick-Links' => esc_html__( 'Quick Links', 'nuquo' )
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
        
        //content short 

        function read_more ($limit){
            $post_content = explode(' ', get_the_content());
            $less_content = array_slice($post_content, 0, $limit);
            echo implode(' ', $less_content);
        }

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'nuquo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
        
        /* Case Study post type */

        register_post_type('casestudy', array(
            'labels' => array(
                'name' => __('Case Studies', 'nuquo'),
                'add_new_item' => 'Add New Case Studies Items'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'title'),
            'menu_icon' => 'dashicons-image-filter'
        ));
        
        /* Work post type */

        register_post_type('work', array(
            'labels' => array(
                'name' => __('Work Items', 'nuquo'),
                'add_new_item' => 'Add New Work Items'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'title', 'editor'),
            'menu_icon' => 'dashicons-image-filter'
        ));
        
        /* client post type */

        register_post_type('client', array(
            'labels' => array(
                'name' => __('Client Items', 'nuquo'),
                'add_new_item' => 'Add New Client Items'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'title'),
            'menu_icon' => 'dashicons-image-filter'
        ));
        
        /* FAQ post type */

        register_post_type('faq', array(
            'labels' => array(
                'name' => __('FAQ Items', 'nuquo'),
                'add_new_item' => 'Add New FAQ Items'
            ),
            'public' => true,
            'supports' => array('title', 'editor'),
            'menu_icon' => 'dashicons-image-filter'
        ));
        
        /* FAQ Brand post type */

        register_post_type('faqbrand', array(
            'labels' => array(
                'name' => __('FAQ Brand Items', 'nuquo'),
                'add_new_item' => 'Add New FAQ Brand Items'
            ),
            'public' => true,
            'supports' => array('title', 'thumbnail'),
            'menu_icon' => 'dashicons-image-filter'
        ));
        
        /* Taxonomy Post type 
        
        register_taxonomy('post-category', 'post', array(
            'labels' => array(
                'name' => 'Categorys'
            ),
            'public' => true,
            'hierarchical' => true,
            'rewrite' => array('name' => 'post')
        ));*/
        
	}
endif;
add_action( 'after_setup_theme', 'nuquo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nuquo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nuquo_content_width', 640 );
}
add_action( 'after_setup_theme', 'nuquo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nuquo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nuquo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nuquo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widgets', 'nuquo' ),
        'id'            => 'footer-widgets',
        'description'   => esc_html__( 'Add widgets here.', 'nuquo' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ) );
}
add_action( 'widgets_init', 'nuquo_widgets_init' );



/**
* Enqueue scripts and styles.
*/

function nuquo_scripts() {

   

    // Load the Internet Explorer 9 specific stylesheet.
    wp_enqueue_style( 'nuquo-ie9', get_template_directory_uri() . '/css/ie9.css', array( 'nuquo-style' ), '1.0' );
    wp_style_add_data( 'webtricker-ie9', 'conditional', 'lt IE 9' );

    // Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_style( 'nuquo-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'nuquo-style' ), '1.0' );
    wp_style_add_data( 'nuquo-ie8', 'conditional', 'lt IE 8' );

    // Load the html5 shiv.
    wp_enqueue_script( 'html5', get_theme_file_uri( '/scripts/html5.js' ), array(), '3.7.3' );
    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );


    wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1', 'all');
    wp_register_style('selectric-css', get_template_directory_uri() . '/css/selectric.css', array(), '1', 'all');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), '1', 'all');
    //wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1', 'all');


    // Enqueue custom Styles:


    wp_enqueue_style('flexslider', get_stylesheet_uri(), array(), '1', 'all' );
    wp_enqueue_style('selectric-css', get_stylesheet_uri(), array(), '1', 'all' );
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1', 'all' );
    

    wp_enqueue_style( 'nuquo-style', get_stylesheet_uri() );	

    // Enqueue custom scripts:

    //wp_enqueue_script('jquerymin', get_template_directory_uri() . '/scripts/jquery-1.12.4.min.js', array(), '1.0', true );

    wp_enqueue_script('flexsliderjs', get_template_directory_uri() . '/scripts/jquery.flexslider.js', array(), '1.0', true );

    wp_enqueue_script('selectric-scripts', get_template_directory_uri() . '/scripts/jquery.selectric.js', array(), '1.0', true );
    
    wp_enqueue_script('ImageMaps-scripts', get_template_directory_uri() . '/scripts/jquery.rwdImageMaps.min.js', array(), '1.0', true );
    
    wp_enqueue_script('common-scripts', get_template_directory_uri() . '/scripts/common-scripts.js', array(), '1.0', true );

    wp_enqueue_script('jquery');

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'nuquo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*redux framework */

require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');