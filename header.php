<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Notes for Peace
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>


    <body <?php body_class(); ?> >

        <!-- NfP Navbar -->
        <nav class="navbar navbar-expand-sm fixed-top nfp-navbar py-0">

            <!-- NfP Logo -->
            <a class="navbar-brand mr-auto" href="<?php echo get_site_url(); ?>">
                <span class="navbar-tex nfp-logo">notes <span class="navbar-tex nfp-logo2">for</span> peace</span>
            </a>

            <!-- Hamburger Menu -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapse_target">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>				
            </button>


            <!-- Links 
                 The navigation links are dynamically generated from the "Navbar Links"
                 menu that was created in Wordpress. You can find menus at 
                 Go to wp-admin > Appearance > Menu to change the links -->
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'collapse_target',
                    'menu_class'        => 'nav navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ) );
            ?>

            <!--
                NOTE TO SELF: The "Navigation Label" of a Menu Item in Wordpress will accept HTML and CSS.
                TODO: If possible remove this hack. Don't insert the svg into the navigation label.  
                <svg viewBox="0 0 20 20" width="20" height="20" style="margin-top:5px;color:#e3dacd;fill: #e3dacd;"><path d="M17.5,2.4C15.9,0.9,13.7,0,11.4,0S7,0.9,5.4,2.4S2.9,6.1,2.9,8.2c0,1.6,0.5,3.1,1.3,4.4l-3.6,3.7c-0.8,0.9-0.8,2.3,0.1,3.1 c0.4,0.4,1,0.6,1.5,0.6c0.6,0,1.2-0.2,1.7-0.7l3.6-3.7c1.2,0.6,2.5,0.9,3.9,0.9c2.3,0,4.4-0.9,6.1-2.4S20,10.4,20,8.2 S19.1,4,17.5,2.4z M15.6,12.3c-1.1,1.1-2.6,1.7-4.1,1.7s-3-0.6-4.1-1.7c-2.3-2.2-2.3-5.8,0-8c1.1-1.1,2.6-1.7,4.1-1.7s3,0.6,4.1,1.7 C17.9,6.5,17.9,10,15.6,12.3z"/></svg>
            -->

        </nav>
