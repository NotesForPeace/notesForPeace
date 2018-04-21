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

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active nfp-homepage-image-carousel">
                    <img src="/wp-content/themes/notesForPeace/assets/images/homepageImage.jpg" alt="Concert">
                    <div class="carousel-caption nfp-homepage-carousel-caption">
                        <span>We hope that our songs act as a balm that allows us to remember, to heal and ultimately, to grow.<br>
                            <span style="font-size: 15px;">- Maestro Riccardo Muti</span>
                        </span>
                    </div>
                </div>

                <div class="carousel-item nfp-homepage-image-carousel">
                    <img src="/wp-content/themes/notesForPeace/assets/images/homepageImage-2.jpg" alt="Songwriting">
                    <div class="carousel-caption nfp-homepage-carousel-caption">
                        <span>We hope that our songs act as a balm that allows us to remember, to heal and ultimately, to grow.<br>
                            <span style="font-size: 15px;">- Maestro Riccardo Muti</span>
                        </span>
                    </div>
                </div>

                <div class="carousel-item nfp-homepage-image-carousel">
                    <img src="/wp-content/themes/notesForPeace/assets/images/homepageImage-3.jpg" alt="Group">
                    <div class="carousel-caption nfp-homepage-carousel-caption">
                        <span>We hope that our songs act as a balm that allows us to remember, to heal and ultimately, to grow.<br>
                            <span style="font-size: 15px;">- Maestro Riccardo Muti</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" role="button" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" role="button" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
