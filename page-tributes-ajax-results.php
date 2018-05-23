<?php 
/*
 * template-ajax-results.php
 * This file should be created in the root of your theme directory
 */
?>

        <div class="container-fluid px-5 mt-4">
            <div class="row justify-content-center">
                <div class="col d-flex justify-content-center">
                    <div class="card-deck justify-content-center ">


                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php $post_type = get_post_type_object($post->post_type); ?>
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

                                <div class="nfp-card-wrapper" first_name="'.$tributeFirstName.'" last_name="'.$tributeLastName.'">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="card mb-4 nfp-tribute-card">
                                            <img class="card-img-top nfp-tribute-card-image" src="<?php echo $url ?>">
                                            <p><?php echo get_field('individual_last_name') ?></p>
                                        </div>
                                    </a>
                                </div>

                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php echo '<p>Sorry, no results matched your search.</p>'; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
