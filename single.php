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

<?php
function enqueue_audio_scripts() {
    wp_enqueue_script( 'audio_player', get_template_directory_uri() . '/audio_player.js', array(), true );
}
add_action('wp_enqueue_scripts', 'enqueue_audio_scripts');

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

                    <!-- Song -->
                    <div class="row justify-content-center">
                        <div class="col-sm-12" align="center">
                            <br>

                            <div class="audio-player">
                            <button id="play-btn" class="playpause button">

                            </button>
                                <div class="audio-wrapper" id="player-container" href="javascript:;">
                                <audio id="player" ontimeupdate="initProgressBar()">
                                        <source src="<?php echo get_field('individual_song'); ?>" type="audio/mp3">
                                        </audio>
                                </div>
                                
                                <div class="player-controls scrubber">
                                <span class="start-time audio-time"></span>
                                <span class="audio-time"> / </span>
                                <span class="end-time audio-time"></span>
                                <span id="seekObjContainer">
                                    <progress id="seekObj" value="0" max="1"></progress>
                                </span>


                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="d-none d-md-block" style="margin-top: 0px; border-top: 4px solid #e3dacd;"></div>

        <!-- Song, Song Title, and Lyrics -->
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10 col-xs-12" align="center">
                    <!-- Song Title and Lyrics -->
                    <span class="nfp-tribute-song-title"><?php echo get_field('individual_song_title') ?></span>
                    <p><?php echo get_field('loved_one_name') ?></p>
                    <br>
                    <span class="nfp-tribute-song-lyrics"><?php echo get_field('individual_song_lyrics') ?></span>

                </div>
            </div>
        </div>

        <!-- Previous and Next Links -->
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-4" align="center">
                    <?php previous_post_link(); ?>
                </div>
                <div class="col-4" align="center">
                </div>
                <div class="col-4" align="center">
                    <?php next_post_link(); ?>
                </div> 
            </div>
        </div>


<?php get_footer(); ?>