<?php
/**
 * alter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alter
 * @since alter 1.0
 */


if ( ! function_exists( 'alter_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since alter 1.0
	 *
	 * @return void
	 */
	function alter_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		//define
		 define( 'alter_VERSION', '1.0.0' );
	    define( 'alter_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
	    define( 'alter_DIR', trailingslashit( get_template_directory() ) );
	    define( 'alter_URL', trailingslashit( get_template_directory_uri() ) );

	}

endif;

add_action( 'after_setup_theme', 'alter_support' );

if ( ! function_exists( 'alter_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since alter 1.0
	 *
	 * @return void
	 */
	function alter_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'alter-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'alter-style' );
		

	}

endif;

add_action( 'wp_enqueue_scripts', 'alter_styles' );

add_action( 'enqueue_block_editor_assets', function() {
	
    wp_enqueue_style('alter-block-editor-style', get_template_directory_uri() . '/block-editor.css', array(), '');

} );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

function alter_custom_menu(){
		     register_nav_menus(array(
			'alter-main-menu'        => esc_html__( 'Main', 'alter' )
		) );
	  }
add_action( 'after_setup_theme', 'alter_custom_menu' );


//theme option panel
require get_template_directory() . '/theme-option/theme-option.php';