<?php 

class Alter_theme_option{

    /**
     * Menu page title
     *
     * @since 1.0
     * @var array $menu_page_title
     */
    static public $menu_page_title = 'alter';

    /**
     * Current Slug
     *
     * @since 1.0
     * @var array $current_slug
     */
    static public $current_slug = 'general';

    function __construct(){

    add_action('admin_enqueue_scripts', array($this, 'alter_enqueue_scripts'));
    add_action('admin_menu', array($this, 'alter_register_settings_menu'),99);
      
    }

    function alter_register_settings_menu() {

    $menu_title = sprintf( esc_html__( '%s Options', 'alter' ), apply_filters( 'thsm_page_title', __( 'Alter', 'alter' ) ) );

    add_theme_page(esc_html__('Alter', 'alter'), $menu_title, 'edit_theme_options', 'alter_thunk_started', array($this, 'alter_settings_page'));   
   
  }
   
   function alter_enqueue_scripts() {
    
    wp_enqueue_style( 'alter-settings-css', get_template_directory_uri() . '/theme-option/build/style-index.css', array(), '1.0.0', false );

    wp_enqueue_script( 'alter-settings-js', get_template_directory_uri() . '/theme-option/build/index.js', array( 'wp-element', 'wp-i18n' ), '1.0', true );

    wp_localize_script(
        'alter-settings-js',
        'wpapi',
        array(
          'homeUrl' => get_home_url(),
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
          'wpnonce' => wp_create_nonce( "ajaxnonce" ),
          'alterUri' => trailingslashit(get_template_directory_uri()),
          'themeName' => wp_get_theme()->get( 'Name' ),
          'themeVersion' =>  wp_get_theme()->get( 'Version' ),
        )
    );
   }

   function alter_settings_page() {
    ?>
        <div id="alter-theme-setting-page" class="alter-theme-setting-page">
        </div>
    <?php

   }
  
}

$obj = new Alter_theme_option();

//theme option panel
require get_template_directory() . '/theme-option/plugin-data.php';