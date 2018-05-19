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
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119552489-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-119552489-1');
        </script>

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

        </nav>
