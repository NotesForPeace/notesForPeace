<?php
/**
 * 
 * The default template file for a single post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Notes for Peace
 * @since 1.0
 * @version 1.0
 */
?>

        <?php get_header(); ?>

        <!-- Tribute Header -->
        <div class="container myContainer">
            <div class="row myRow">

                <!-- Individual's Image -->
                <div class="col-sm-6 myCol">
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
 
                <!-- Individual's Information -->
                <div class="col-sm-6 myCol">
    
                    <!-- Name -->
                    <div class="row myRow">
                        <div class="col-sm-12 myCol">
                            <h1><?php echo get_field('individual_first_name') ?> <?php echo get_field('individual_last_name') ?></h1>
                        </div>
                    </div>

                    <!-- Birth and Death Date -->
                    <div class="row myRow">
                        <div class="col-sm-12 myCol">
                            <p><?php echo date("F j, Y", strtotime(get_field('individual_birth_date'))); ?> - <?php echo date("F j, Y", strtotime(get_field('individual_death_date'))); ?>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="row myRow">
                        <div class="col-sm-12 myCol">
                            <hr>
                        </div>
                    </div>

                    <!-- Tagline -->
                    <div class="row myRow">
                        <div class="col-sm-12 myCol">
                           <p><?php echo get_field('individual_tagline') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tribute Content -->
        <div class="contain py-3" style="margin-top: 10px; border-top: 4px solid #e3dacd;">

        </div>

        <?php get_footer(); ?>
        