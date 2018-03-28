<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Notes for Peace
 * @since 1.0
 * @version 1.0
 */

 ?>

        <?php get_header(); ?>

        <!-- Homepage Image and Quote -->
        <!-- To change the homepage image, update the backaground image in the nfp-homepage-image class -->
        <div class="nfp-homepage-image">
            <span class="nfp-homepage-image-quote" align="center">
                We hope that our songs act as a balm that allows us to remember, to heal and ultimately, to grow.<br>
                <span style="font-size: 15px;">- Maestro Ricardo Muti</span>
            </span>
        </div>


        <!-- Mission Statement -->
        <div class="container-fluid py-3">
            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10 col-xs-12" align="center">
                    <h1>our mission</h1>
                    <p>We are coping with a terrible epidemic of gun violence. While a parent may never move past the loss of their child, we join together in community to create a more peaceful Chicago. We write letters to remember our loved ones. We write songs to share our stories since music communicates directly to the soul.</p>
                </div>
        </div>

        <?php get_footer(); ?>
