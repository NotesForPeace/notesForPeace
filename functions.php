<?php
    //---------------------------------------------------------------------------------------------
    //Load the Bootstrap files, Google Fonts, and stylesheet for the NFP Theme
    //---------------------------------------------------------------------------------------------
    function enqueue_nfp_scripts() {
        wp_register_script('custom_script', get_stylesheet_directory_uri() . '/loadsong.js', array( 'jquery' ) );
        wp_enqueue_script('custom_script');
        wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js', array('jquery'));
        wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Great+Vibes|Libre+Baskerville:400,400i|Roboto:300,500');
        wp_enqueue_style('nfp-style', get_stylesheet_uri());
        wp_enqueue_script('page-tributes', get_stylesheet_directory_uri() . '/page-tributes.js', array( 'jquery' ) );
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



    //---------------------------------------------------------------------------------------------
    // Utility library to build faceted search
    //---------------------------------------------------------------------------------------------
    require_once('wp-advanced-search/wpas.php');

    function facetedSearch() {
        $args = array();

        $args['wp_query'] = array(
            'posts_per_page' => -1, 			        //-1 to return all posts
            'orderby'        => 'meta_value', 	        //Meta values and custom fields are the same thing
            'order'          => 'ASC', 			        //Ascending, use DESC for descending
            'meta_key'       => 'individual_last_name', //TODO: We should move all the custom field key names into some centralized location
            'post_type'      => 'tribute',              //TODO: We need to finalize our data model
            'post_status'    => 'publish'		        //Get only the posts that are meant to be public
        );
    
        $args['form'] = array( 
            'auto_submit'       => true,
            'disable_wrappers'  => true,
            'method'           => 'GET',
            'name'              => 'tributeSearch',
            'ajax'              => array( 
                                    'enabled'                => true,
                                    'show_default_results'   => true,
                                    'results_template'       => 'page-tributes-ajax-results.php', // This file must exist in your theme root
                                    'button_text'            => 'Load More Results'));

        $args['fields'][] = array( 
            'type'  => 'reset',
            'class' => 'button',
            'value' => 'Clear' );


        $args['fields'][] = array( 
            'type'      => 'search',
            'label'     => 'Keyword',
            'class'     => array('myclass', 'nfp-search-bar'),
            'pre_html'  => '<div class="test">',
            'post_html' => '</div>');

        $args['fields'][] = array( 
            'type'      => 'meta_key', 
            'format'    => 'checkbox',
            'meta_key'  => 'individual_alpha_sort',
            'values'    => array(
                            'a' => 'A',
                            'b' => 'B',
                            'c' => 'C',
                            'd' => 'D',
                            'e' => 'E',
                            'f' => 'F',
                            'g' => 'G',
                            'h' => 'H',
                            'i' => 'I',
                            'j' => 'J',
                            'k' => 'K', 
                            'l' => 'L',
                            'm' => 'M',
                            'n' => 'N',
                            'o' => 'O',
                            'p' => 'P',
                            'q' => 'Q',
                            'r' => 'R',
                            's' => 'S',
                            't' => 'T',
                            'u' => 'U',
                            'v' => 'V',
                            'w' => 'W',
                            'x' => 'X',
                            'y' => 'Y',
                            'z' => 'Z'),
            'compare'   => 'IN',
        );  
    
        register_wpas_form('tributeSearch', $args);
    }
    add_action('init', 'facetedSearch');

    
    //---------------------------------------------------------------------------------------------
    // This function takes the text and images in the "About" section of each individual tribute
    // page and moves them side-by-side (on a computer, not mobile)
    //---------------------------------------------------------------------------------------------
    function rearrange_about() {
        //get all about-individual>p classes
        //move them into about-text
        //get all about-individual>img classes
        //move them into about-images
    }
    add_action( 'init', 'rearrange_about' );
?>
