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


        <!-- Homepage Carousel -->
        <div class="container-fluid">
            <?php masterslider("homepage"); ?>
        </div>

        <!-- Mission Statement -->
        <div class="container-fluid py-3">
            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10 col-xs-12" align="center">
                    <h1>our mission</h1>
                    <p>We are coping with a terrible epidemic of gun violence. While a parent may never move past the loss of their child, we join together in community to create a more peaceful Chicago. We write songs to remember our loved ones. We write songs to share our stories since music communicates directly to the soul.</p>
                </div>
            </div>
        </div>


        <?php get_footer(); ?>