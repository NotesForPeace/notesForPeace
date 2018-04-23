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
<div class="container">
    <div class="row align-middle vertical-align">

        <!-- Individual's Image -->
        <div class="col-sm-6">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <img src="<?php echo $image[0]; ?>" class="img-fluid">
            <?php endif; ?>
        </div>

        <!-- Individual's Information -->
        <div class="col-sm-6 justify-content-center individual-information align-middle">

            <!-- Name -->
            <div class="row justify-content-center">
                <div class="col-sm-12 justify-content-center">
                    <h1><?php echo get_field('individual_first_name') ?> <?php echo get_field('individual_last_name') ?></h1>
                </div>
            </div>

            <!-- Birth and Death Date -->
            <div class="row justify-content-center">
                <div class="col-sm-7 justify-content-center">
                    <p>
                        <?php echo date("F j, Y", strtotime(get_field('individual_birth_date'))); ?> - <?php echo date("F j, Y", strtotime(get_field('individual_death_date'))); ?>
                        <hr>
                    </p>
                </div>
            </div>

            <!-- Tagline -->
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h2><?php echo get_field('individual_tagline') ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tribute Content -->
<div class="py-3" style="margin-top: 10px; border-top: 4px solid #e3dacd;">
    <div class="row justify-content-center">
        <div class="col-sm-8">

            <!--Section Navigation -->                    
            <div class="row individual-section-titles justify-content-center">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">
                            About
                            <hr>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-song-tab" data-toggle="pill" href="#pills-song" role="tab" aria-controls="pills-song" aria-selected="false">
                            Song
                            <hr>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-letter-tab" data-toggle="pill" href="#pills-letter" role="tab" aria-controls="pills-letter" aria-selected="false">
                            Letter
                            <hr>
                        </a>
                    </li>
                </ul>
            </div>

            <!--Section Content -->
            <div class="tab-content" id="pills-tabContent">

                <!--About Section-->    
                <div class="tab-pane fade show active media" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                    <div class="media-body about-individual-text">
                        <p class="drop-cap"><?php echo get_field('individual_about') ?></p>
                    </div>
                </div>

                <!--Song Section-->
                <div class="tab-pane fade" id="pills-song" role="tabpanel" aria-labelledby="pills-song-tab">
                    <p><?php echo get_field('individual_song_lyrics') ?></p>
                </div>

                <!--Letter Section-->
                <div class="tab-pane fade" id="pills-letter" role="tabpanel" aria-labelledby="pills-letter-tab">
                    <p><?php echo get_field('individual_letter') ?></p>
                </div>
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>
