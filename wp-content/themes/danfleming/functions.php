<?php
/**
 * danFleming functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package danFleming
 */

if ( ! function_exists( 'danfleming_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function danfleming_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on danFleming, use a find and replace
		 * to change 'danfleming' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'danfleming', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'danfleming' ),
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
		add_theme_support( 'custom-background', apply_filters( 'danfleming_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'danfleming_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function danfleming_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'danfleming_content_width', 640 );
}
add_action( 'after_setup_theme', 'danfleming_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function danfleming_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'danfleming' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'danfleming' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'danfleming_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function danfleming_scripts() {
	wp_enqueue_style( 'danfleming-style', get_stylesheet_uri() );

	wp_enqueue_script( 'danfleming-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'danfleming-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'danfleming_scripts' );

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

function get_settings_json() {

	$path = get_template_directory() . '/settings.json';
	$json = file_get_contents($path);
	$json = preg_replace("/\/\*(?s).*?\*\//", "", $json);
	$json = json_decode($json);
	if(empty($json)) add_action( 'admin_notices', 'json_error' );
	return $json;
}

$json = get_settings_json();

/* Add theme options page by default */

if( (!isset($json->acf_options)) || ( $json->acf_options->init == true) ){
	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title'    => $json->acf_options->page_title,
			'menu_title'    => $json->acf_options->menu_title,
			'menu_slug'     => $json->acf_options->menu_slug
		));
		if( isset($json->acf_options->subpages) ){
			foreach( $json->acf_options->subpages as $subpage ){
				acf_add_options_sub_page(array(
					'page_title'    => $subpage->page_title,
					'menu_title'    => $subpage->menu_title,
					'parent_slug'   => $json->acf_options->menu_slug,
				));
			}
		}
	}
}

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

function filter_ptags_on_images($content){
    return preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');
