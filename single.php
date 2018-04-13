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
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <!--Section Navigation -->
                    
                    <div class="row individual-section-titles justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">About <?php echo get_field('individual_first_name') ?>
                                    <div class="link-border-bottom"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-song-tab" data-toggle="pill" href="#pills-song" role="tab" aria-controls="pills-song" aria-selected="false">Song
                                    <div class="link-border-bottom"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-letter-tab" data-toggle="pill" href="#pills-letter" role="tab" aria-controls="pills-letter" aria-selected="false">Letter From Parents
                                    <div class="link-border-bottom"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <!--About section-->
                        
                        <div class="tab-pane fade show active media" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                            <div class="media-body about-individual-text">
                                <p>This is where the text about the individual will go</p>
                            </div>
                        </div>
                        <!--Song section-->
                        <div class="tab-pane fade" id="pills-song" role="tabpanel" aria-labelledby="pills-song-tab">
                            <p>insert song lyrics</p>
                        </div>
                        <!--Letter section-->
                        <div class="tab-pane fade" id="pills-letter" role="tabpanel" aria-labelledby="pills-letter-tab">
                            <p>Letters from parents or a loved one will go in this section</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>
        