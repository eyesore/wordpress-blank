<?php
    
    function eye_wp_enqueue_scripts() { 
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("//code.jquery.com/jquery-3.0.0.js"), false);
        wp_enqueue_script('jquery');
        wp_enqueue_script('slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'));
        wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap4-1-1', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
    } 

    function eye_wp_enqueue_styles(){
        wp_enqueue_style('wordpress', get_template_directory_uri() . '/css/wordpress.css' );
        wp_enqueue_style('bootstrapmin', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style('bootstrapgridmin', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
        wp_enqueue_style('bootstrapreboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
        wp_enqueue_style('slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
        wp_enqueue_style('style', get_stylesheet_uri() );
        wp_enqueue_style('bootstrap4-1-1', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    }
    add_action('wp_enqueue_scripts', 'eye_wp_enqueue_scripts'); 
    add_action('wp_enqueue_scripts', 'eye_wp_enqueue_styles'); 
    
    function eye_init() {
        /**Remove Head Links**/
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');

        /** Register Sidebar */
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

        /** Register Menus */
        register_nav_menus( array( 'mega-menu' => __( 'Mega Menu' ), 'menu-2' => __( 'Menu 2' ) ) ); 

        /** Add Theme Support */
        add_theme_support( 'automatic-feed-links' );
        //add featured image feature
        add_theme_support( 'post-thumbnails' );
    }
    add_action('init', 'eye_init');


    remove_action('wp_head', 'wp_generator');

    add_filter( 'widget_text', 'do_shortcode' );
    
    function eye_cc_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }
    add_filter('upload_mimes', 'eye_cc_mime_types');


    /** Customizer additions. */
    require_once(get_template_directory() . '/inc/customizer.functions.php');

    /** Functions to be used in templates */
    require_once(get_template_directory() . '/inc/template.functions.php');