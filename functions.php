<?php
    //-------------------------------------------------------------------------
    //Load the Bootstrap files, Font Awesome, Google Fonts, and stylesheet for the NFP Theme
    function enqueue_nfp_scripts() {
        wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js', array('jquery'));
        wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Karla:400,700|Great+Vibes|Roboto:100,300,400,500,700,900');
        //wp_register_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        //wp_enqueue_style( 'fontawesome');
        wp_enqueue_style('nfp-style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'enqueue_nfp_scripts');


    //-------------------------------------------------------------------------
    //Initialize the NFP Theme
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

        //Allow for featured images (also sometimes called Post Thumbnails). 
        //A featured image represent an individual Post, Page, or Custom Post Type.
        add_theme_support( 'post-thumbnails' );
    }
    add_action('after_setup_theme', 'nfp_setup' );

    
    //-------------------------------------------------------------------------
    //Utility that bridges custom menus from Wordpress with Bootstrap 4
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
?>
