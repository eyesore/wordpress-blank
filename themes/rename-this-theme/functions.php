<?php
    
    // Add RSS links to <head> section
    add_theme_support( 'automatic-feed-links' );
    
    // Load jQuery
    function fixScripts() { 
        if ( !is_admin() ) {
            wp_deregister_script('jquery');
            wp_register_script('jquery', ("//code.jquery.com/jquery-3.0.0.js"), false);
            wp_enqueue_script('jquery');
        }
    } 
    add_action('wp_enqueue_scripts', 'fixScripts'); 


    /* enqueue styles and scripts */
    function import_styles_scripts() {
        wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css' );
        wp_enqueue_style('wordpress', get_template_directory_uri() . '/css/wordpress.css' );
        wp_enqueue_style('bootstrapmin', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style('bootstrapgridmin', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
        wp_enqueue_style('bootstrapreboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
        wp_enqueue_style('slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
        wp_enqueue_style('style', get_stylesheet_uri() );
    }
    add_action('wp_enqueue_scripts', 'import_styles_scripts');
    
    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    add_filter( 'widget_text', 'do_shortcode' );

    //add featured image feature
    add_theme_support( 'post-thumbnails' );

    /** Customizer additions. */
    require get_template_directory() . '/inc/customizer.php';
    
    function cc_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');

    function register_my_menus() { register_nav_menus( array( 'mega-menu' => __( 'Mega Menu' ), 'menu-2' => __( 'Menu 2' ) ) ); }
        add_action( 'init', 'register_my_menus' );