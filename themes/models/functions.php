<?php
	show_admin_bar(false);
	
 if(!defined('ABSPATH')) exit;

 if ( ! function_exists( 'wx__setup' ) ) :

	function ici__setup() {

		/**
		 * Show or Hide Admin top bar
		 *
		 * @param true/false
		 */

		//show_admin_bar(true);

		load_theme_textdomain( 'buenoste' );

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
		add_theme_support( 'custom-background' );


		// Custom Crop Sizes
		add_image_size( 'wx_small', 190,220, 1 );
		add_image_size( 'wx_medium', 424,540, 1 );
		add_image_size( 'wx_big', 1260 );
		add_image_size( 'wx_blog',370,230,1);
		add_image_size( 'wx_product',360,360,1);

		// This theme uses wp_nav_menu() in one locations.
		register_nav_menus( array(
			'top'    => __( 'Top Menu', 'models' ),
			'footer_menu' => __('Footer Menu', 'models')
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'video',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		if ( ! isset( $content_width ) ) {
			$content_width = 1500;
		}

		add_editor_style();

	}

	add_action( 'after_setup_theme', 'ici__setup' );

 endif;

 /**
  * Enqueue scripts and styles.
  *
  * @since 1.0
  */

 function ici__enqueue_scripts() {
	global $post;
	$post_pt = get_post_type($post->ID);
	
	// CSS
	
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');
	wp_enqueue_style('animations',get_template_directory_uri().'/css/animations.css');
	wp_enqueue_style('fonts',get_template_directory_uri().'/css/fonts.css');
	wp_enqueue_style( 'ici-style', get_stylesheet_uri() );

	// JS
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(),'',true);
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'compressed', get_template_directory_uri() . '/js/compressed.js', array('jquery'),'',true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'),'',true);
 }

 add_action( 'wp_enqueue_scripts', 'ici__enqueue_scripts' );


  // Loading WP Ajax
 function ici__custom_js() {
 	
	global $rdx;

	$contact_bg = '';
	if(!empty($rdx['rdx_contact__bg']['url'])) {
		$contact_bg = $rdx['rdx_contact__bg']['url'];
	}
	
	echo '<script type="text/javascript">
			var ajaxurl = "' . admin_url('admin-ajax.php') . '";
		</script>';
 }
 
 add_action('wp_head', 'ici__custom_js');

 /**
  *
  * Head Title us wp_title()
  *
  * @since Wexzy Start 1.0
  */

 function ici_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'buenoste' ), max( $paged, $page ) );
	}

	return $title;
 }
 add_filter( 'wp_title', 'ici_wp_title', 10, 2 );


  /**
  *
  * Get url of post thumbnail
  *
  * @param number $post_id		ID of post
  * @param string $thumbnail	Image size
  */

 function ici__featured_image($post_id,$thumbnail="thumbnail") {
 	$post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id), $thumbnail );

	if($post_image) {
		return esc_url($post_image[0]);
	}

	return false;
 }



  // Trace Debug
 function trace($data) {
 	echo "<pre>";
	print_r($data);
	echo "</pre>";
 }


	// TGM Activation Plugins
	require_once('inc/tgm-activation.php');
	
	// MetaBox io Settings
	require_once('inc/metaboxio.php');
	
	// Active Redux Framework
	if( class_exists('ReduxFramework')) {
		require_once('inc/reduxf.php');
	}
	// Functions
	require_once('inc/function.php');
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	