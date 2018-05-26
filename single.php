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
        <div class="container-fluid nfp-tribute-header">
            <div class="row align-items-center">

                <!-- Individual's Image Carousel -->
                <div class="col-sm-6">
                    <?php 
                        global $post;
                        $post_slug=$post->post_name;
                    ?>
                    <?php masterslider($post_slug); ?>
                </div>

                <!-- Individual's Information -->
                <div class="col-sm-6 individual-information">

                    <!-- Name -->
                    <div class="row justify-content-center">
                        <div class="col-sm-12">

                            <!-- Create display name -->
                            <?php 
                                //Get first name
                                $individualDisplayName = get_field('individual_first_name');

                                //Add nickname, if applicable
                                if (get_field('individual_nickname') === '-' ){
                                } else {
                                    $individualDisplayName = $individualDisplayName . ' "' . get_field('individual_nickname') . '"';
                                }

                                //Add last name
                                $individualDisplayName = $individualDisplayName . ' ' . get_field('individual_last_name');

                                //Add suffix, if applicable
                                if (get_field('individual_name_suffix') === '-' ){
                                } else {
                                    $individualDisplayName = $individualDisplayName . ', ' . get_field('individual_name_suffix');
                                }
                            ?>

                            <div class="nfp-tribute-name">
                                <span><?php echo $individualDisplayName ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Birth and Death Date -->
                    <div class="row justify-content-center">
                        <div class="col-sm-12">
                            <div class="nfp-tribute-dates">
                                <span>
                                    <?php echo date("F j, Y", strtotime(get_field('individual_birth_date'))); ?> - <?php echo date("F j, Y", strtotime(get_field('individual_death_date'))); ?>
                                    <hr class="nfp-tribute-hr">
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Tagline -->
                    <div class="row justify-content-center">
                        <div class="col-sm-12" align="center">
                            <br>
                            <audio controls>
                                <source src="<?php echo get_field('individual_song'); ?>" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="container-fluid py-0">
            <div class="d-none d-md-block" style="margin-top: 10px; border-top: 4px solid #e3dacd;"></div>
        </div>

        <!-- Song, Song Title, and Lyrics -->
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10 col-xs-12" align="center">
                    <!-- Song Title and Lyrics -->
                    <span class="nfp-tribute-song-title"><?php echo get_field('individual_song_title') ?></span>
                    <p>
                        <?php echo get_field('loved_one_1_first_name') ?> <?php echo get_field('loved_one_1_last_name') ?> 
                    </p>
                    <br>
                    <span class="nfp-tribute-song-lyrics"><?php echo get_field('individual_song_lyrics') ?></span>

                </div>
            </div>
        </div>


<?php get_footer(); ?>