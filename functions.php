<?php
/**
* Theme functions and definitions
*/

/**
* Sets up theme defaults and registers support for various WordPress features.
*/
if ( ! function_exists( 'tribe_theme_setup' ) ):
function tribe_theme_setup() {
	
	/**
	* Make theme available for translation
	* Translations can be filed in the /languages/ directory
	*/
	load_theme_textdomain( 'tribe', get_template_directory() . '/languages' );

	/**
	* Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );
	
	/**
	* Enable support for Post Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 60, 60 );
	add_image_size( 'tribe-post', 980, '', true );
	add_image_size( 'tribe-post-big', 650, 325, true );
	add_image_size( 'tribe-hpblog', 300, 200, true );
	add_image_size( 'tribe-post-sqaure', 980, 980, true );
	add_image_size( 'tribe-single', 1200, 600, true );
	add_image_size( 'tribe-post-mini', 230, 160, true );
	add_image_size( 'tribe-500', 500, 320, true );
	add_image_size( 'tribe-700', 700, '', true );
	
	/**
	* Register menu locations
	*/
	register_nav_menus( array(
			'nav-site-header' => esc_html__( 'Site Header Menu', 'tribe' ),
			'nav-site-footer' => esc_html__( 'Site Footer Menu', 'tribe' ),
	));
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css' ) );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  // Enable HTML5 markup
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ));

	// Add support for custom logo
	add_theme_support( 'custom-logo' );

	// Selective Refresh for Widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );	

	
}
endif;
add_action( 'after_setup_theme', 'tribe_theme_setup' );

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
function tribe_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tribe_content_width', 592 );
}
add_action( 'after_setup_theme', 'tribe_content_width', 0 );

/**
 * Enqueues styles for front-end.
 */
function tribe_theme_styles() {

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'at-theme-style', get_stylesheet_directory_uri() . '/css/style.css' );

}
add_action( 'wp_enqueue_scripts', 'tribe_theme_styles' );


/**
 * Enqueues scripts for front-end.
 */
 
function tribe_theme_scripts() {
	
	/*
	* Load our main theme JavaScript file
	*/
	wp_enqueue_script('tribe_theme_js', get_template_directory_uri() . '/js/js.js', array( 'jquery' ), false, true);
	
	/*
	* Adds JavaScript to pages with the comment form to support
	* sites with threaded comments (when in use).
	*/
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
	}	
	
}
add_action('wp_enqueue_scripts', 'tribe_theme_scripts');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function tribe_widgets_init() {
  // Post Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar -- Post', 'tribe' ),
		'id'            => 'sidebar-post',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="widget__title"><span>',
		'after_title'   => '</span></h1>',
	) );
	

 // First footer widget area, located in the footer. Empty by default.
  register_sidebar( array(
      'name' => esc_html__( 'First Footer Widget Area', 'tribe' ),
      'id' => 'first-footer-widget-area',
      'description' => esc_html__( 'The first footer widget area', 'tribe' ),
      'before_widget' => '<div id="%1$s" class="tribe_widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="tribe_footer_title"> <span>',
      'after_title'   => '</span></h5>',
  ) );

  // Second Footer Widget Area, located in the footer. Empty by default.
  register_sidebar( array(
      'name' => esc_html__( 'Second Footer Widget Area', 'tribe' ),
      'id' => 'second-footer-widget-area',
      'description' => esc_html__( 'The second footer widget area', 'tribe' ),
      'before_widget' => '<div id="%1$s" class="tribe_widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="tribe_footer_title"> <span>',
      'after_title'   => '</span></h5>',
  ) );

  // Third Footer Widget Area, located in the footer. Empty by default.
  register_sidebar( array(
      'name' => esc_html__( 'Third Footer Widget Area', 'tribe' ),
      'id' => 'third-footer-widget-area',
      'description' => esc_html__( 'The third footer widget area', 'tribe' ),
      'before_widget' => '<div id="%1$s" class="tribe_widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="tribe_footer_title"> <span>',
      'after_title'   => '</span></h5>',
  ) );

  // Fourth Footer Widget Area, located in the footer. Empty by default.
  register_sidebar( array(
      'name' => esc_html__( 'Fourth Footer Widget Area', 'tribe' ),
      'id' => 'fourth-footer-widget-area',
      'description' => esc_html__( 'The fourth footer widget area', 'tribe' ),
      'before_widget' => '<div id="%1$s" class="tribe_widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="tribe_footer_title"> <span>',
      'after_title'   => '</span></h5>',
  ) );
}
add_action( 'widgets_init', 'tribe_widgets_init' );

/**
* Commpat Functions
*/
require get_parent_theme_file_path("inc/compat.php");


/**
* Comment Functions
*/
require get_parent_theme_file_path("inc/comment-functions.php");


/**
* Customizer Functions
*/
require get_parent_theme_file_path("inc/customizer.php");

/**
* TGM Functions
*/
require get_parent_theme_file_path("inc/tgm.php");

/**
* Template Functions
*/
require get_parent_theme_file_path("inc/template-tags.php");

/**
* Widgets Functions
*/
require get_parent_theme_file_path("inc/widgets/widget-about.php");
require get_parent_theme_file_path("inc/widgets/widget-posts.php");
require get_parent_theme_file_path("inc/widgets/widget-social.php");
include get_parent_theme_file_path("inc/widgets/widget-banner.php");


/**
* Demo Importer
*/
require get_parent_theme_file_path("ocdi/demo-importer.php");

/**
* Woocommerce
*/
if ( class_exists( 'WooCommerce' ) ) {
  require get_parent_theme_file_path("woocommerce/woocommerce-functions.php");
}




// Change default widget tag cloud settings
add_filter('widget_tag_cloud_args','tribe_set_tag_cloud_args');
function tribe_set_tag_cloud_args($args) {
	$args['largest'] = 17;
	$args['smallest'] = 11;
	$args['unit'] = 'px';
	return $args;
}


/**
 * Modify default excerpt length
 */
function tribe_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'tribe_excerpt_length', 999 );

function tribe_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'tribe_excerpt_more');

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function tribe_pingback_header() {
  if ( is_singular() && pings_open() ) {
    echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">' . "\n";
  }
}
add_action( 'wp_head', 'tribe_pingback_header' );


//Elementor Style
update_option( 'elementor_disable_color_schemes', 'yes' );
update_option( 'elementor_disable_typography_schemes', 'yes' );
