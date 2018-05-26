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
                                
                                <!-- Create Caption -->
                                <?php 
                                    //Get first name
                                    $thumbnailCaption = get_field('individual_first_name');

                                    //Add nickname, if applicable
                                    if (get_field('individual_nickname') === '-' ){
                                    } else {
                                        $thumbnailCaption = $thumbnailCaption . ' "' . get_field('individual_nickname') . '"';
                                    }

                                    //Add last name
                                    $thumbnailCaption = $thumbnailCaption . ' ' . get_field('individual_last_name');
                                ?>

                                <div class="nfp-card-wrapper">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="card mb-4 nfp-tribute-card">
                                            <img class="card-img-top nfp-tribute-card-image" src="<?php echo the_post_thumbnail(); ?>
                                            <p><?php echo $thumbnailCaption ?></p>
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
