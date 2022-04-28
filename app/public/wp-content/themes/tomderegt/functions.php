<?php
/**
 * tomderegt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tomderegt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tomderegt_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tomderegt_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tomderegt, use a find and replace
		 * to change 'tomderegt' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tomderegt', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'tomderegt' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'tomderegt_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'tomderegt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tomderegt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tomderegt_content_width', 640 );
}
add_action( 'after_setup_theme', 'tomderegt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tomderegt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tomderegt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tomderegt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tomderegt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tomderegt_scripts() {

	wp_enqueue_style( 'tomderegt-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'tomderegt-fonts', get_template_directory_uri() . '/css/fonts.css');

	wp_enqueue_style( 'tomderegt-tachyons', get_template_directory_uri() . '/css/atachyons.css');

	wp_enqueue_style( 'tomderegt-flickitystyle', get_template_directory_uri() . '/css/flickity.css');

	wp_enqueue_style( 'tomderegt-plyrstyle', get_template_directory_uri() . '/css/plyr.css');

	wp_enqueue_style( 'tomderegt-custom', get_template_directory_uri() . '/css/custom.css');

	wp_style_add_data( 'tomderegt-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tomderegt-plyrmin', get_template_directory_uri() . '/js/plyr.min.js' );

	wp_enqueue_script( 'tomderegt-gsap', get_template_directory_uri() . '/js/gsap.min.js' );

	wp_enqueue_script( 'tomderegt-gsap-scroll', get_template_directory_uri() . '/js/gsap-scroll.min.js' );

	wp_enqueue_script( 'tomderegt-flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js' );

	// wp_enqueue_script( 'tomderegt-plyr', get_template_directory_uri() . '/js/plyr.min.js', array(), false, true );

	wp_enqueue_script( 'tomderegt-customscript', get_template_directory_uri() . '/js/customscript.js' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tomderegt_scripts' );

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

function nice_background($image_field) {
    echo 'background-image: url(' . get_field($image_field) . ')';
}



add_action('get_header', 'my_filter_head');

function my_filter_head() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}

// GENERATE & REGISTER Custom Post Type for Featured Section

function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Features', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Feature', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
	);
	register_post_type( 'feature', $args );
}
add_action( 'init', 'custom_post_type', 0 );

// GENERATE & REGISTER Custom Post Type for Client Items

function custom_post_type_client() {

	$labels = array(
		'name'                  => _x( 'Clients', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Client', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
	);
	register_post_type( 'client', $args );
}
add_action( 'init', 'custom_post_type_client', 0 );