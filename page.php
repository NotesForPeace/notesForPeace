<?php
/**
 * 
 * The default template file for the page post type
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Notes for Peace
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>


        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="container-fluid p-5">
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                         <h1><?php the_title(); ?></h1>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>


            <?php endwhile; ?>
        <?php endif; ?>


<?php get_footer(); ?>