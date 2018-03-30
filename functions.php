<?php
    //---------------------------------------------------------------------------------------------
    //Load the Bootstrap files, Google Fonts, and stylesheet for the NFP Theme
    //---------------------------------------------------------------------------------------------
    function enqueue_nfp_scripts() {
        wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js', array('jquery'));
        wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Karla:400,700|Great+Vibes|Roboto:100,300,400,500,700,900');
        wp_enqueue_style('nfp-style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'enqueue_nfp_scripts');


    //---------------------------------------------------------------------------------------------
    // Initialize the NFP Theme
    //---------------------------------------------------------------------------------------------
    function nfp_setup() {

        //Gather all the links in the custom menu created in wp-admin
        //wp-admin > Appearance > Menus
        register_nav_menus( array(
            'primary' => __('Navbar Links', 'nfp')
        ));

        //Set the display text in the browser tab to the Site Title and Tagline
        //You can find those values in two different places
        //Option 1: wp-admin > Appearance > Customize > Site Identity
        //Option 2: wp-admin > Settings > General
        //If you update the Site Title and Tagline in one place it will update the other
        add_theme_support('title-tag');

        //Allow for a post, page, or custom post type to have afeatured images (also called Post Thumbnails). 
        add_theme_support( 'post-thumbnails' );

        //Theme Markup is a theme feature that allows themes to explicitly choose to 
        //apply HTML5 markup for search forms, comment forms, comment lists, gallery and caption.
        //I'm only adding HTML5 support for the search form for now.
        add_theme_support( 'html5', 'search-form' );
    }
    add_action('after_setup_theme', 'nfp_setup' );


    //---------------------------------------------------------------------------------------------
    // Wordpress has a built-in feature called widgets where we can add functionality like 
    // displaying a list of page links in our site, or having a live chat box inside of the 
    //sidebar. First, we have to "register" the sidebar so that Wordpress is aware of it and 
    // ready to use it.
    //---------------------------------------------------------------------------------------------
    function nfp_widgets() {
        register_sidebar( array(
            'name'          => __( 'Sidebar', 'customtheme' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in the sidebar', 'nfp' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        ) );
    }
    add_action( 'widgets_init', 'nfp_widgets' );


    //---------------------------------------------------------------------------------------------
    // Utility that bridges custom menus from Wordpress with Bootstrap 4
    //---------------------------------------------------------------------------------------------
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
?>
