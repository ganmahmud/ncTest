<?php
/**
 * NewsCredTest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NewsCredTest
 */
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version meta tag
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10); // remove the next and previous post links
remove_action('wp_head', 'wp_shortlink_wp_head', 10); // remove wp shortlink 
// REMOVE EMOJIS:
remove_action('wp_head', 'print_emoji_detection_script', 7); // Emoji Scripts and Styles
remove_action('admin_print_scripts', 'print_emoji_detection_script'); // Emoji Scripts and Styles
remove_action('wp_print_styles', 'print_emoji_styles'); // Emoji Scripts and Styles
remove_action('admin_print_styles', 'print_emoji_styles'); // Emoji Scripts and Styles
add_filter('emoji_svg_url', '__return_false'); // Removes the dns-prefetch meta for Emoji (s.w.org)
// REMOVE REST API:
remove_action('wp_head', 'rest_output_link_wp_head', 10); // Remove the REST API lines from the HTML Header (api.w.org)
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10); // Remove the REST API lines from the HTML Header (api.w.org)
remove_action('rest_api_init', 'wp_oembed_register_route'); // Remove the REST API endpoint.
add_filter( 'embed_oembed_discover', '__return_false'); // Turn off oEmbed auto discovery.
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10); // Don't filter oEmbed results.
remove_action('wp_head', 'wp_oembed_add_discovery_links'); // Remove oEmbed discovery links.
remove_action('wp_head', 'wp_oembed_add_host_js'); // Remove oEmbed-specific JavaScript from the front-end and back-end.

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'newscredtest_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function newscredtest_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on NewsCredTest, use a find and replace
		 * to change 'newscredtest' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'newscredtest', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		

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
				'menu-1' => esc_html__( 'Primary', 'newscredtest' ),
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
				'newscredtest_custom_background_args',
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
add_action( 'after_setup_theme', 'newscredtest_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newscredtest_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newscredtest_content_width', 640 );
}
add_action( 'after_setup_theme', 'newscredtest_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newscredtest_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'newscredtest' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'newscredtest' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'newscredtest_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function newscredtest_scripts() {
	wp_deregister_script('jquery');
	wp_enqueue_style( 'newscredtest-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'newscredtest-style', 'rtl', 'replace' );

	wp_enqueue_script( 'newscredtest-navigation', get_template_directory_uri() . '/js/bundle.js', array(), _S_VERSION, true );

	// wp_enqueue_script( 'newscredtest-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	
	wp_enqueue_script( 'newscredtest-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'newscredtest_scripts' );


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
