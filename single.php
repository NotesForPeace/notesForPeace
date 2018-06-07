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
                        $currentTributeID = get_the_ID();
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
                                
                                //Add middle name, if applicable
                                if (get_field('individual_middle_name') === '-' ){
                                } else {
                                    $individualDisplayName = $individualDisplayName . ' ' . get_field('individual_middle_name');
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

                                <div class="col-3">
                                </div>
                                <div class="col-6">
                                    <div class='row'>
                                        <div class="col-3">
                                            <button id="play-btn" class="playpause button"></button>
                                        </div>
                                        <div class="col-9">
                                            <div class='row justify-content-between'>
                                                <div class="col-xs-2 ml-3">
                                                    <div class="start-time audio-time"></div>
                                                </div>

                                                <div class="col-xs-2 mr-3">
                                                    <div class="end-time audio-time"></div>
                                                </div>
                                            </div>
                                            <div class='row progress-row'>
                                                <div class='col-12'>
                                                    <div class="audio-wrapper " id="player-container" href="javascript:;">
                                                        <audio id="player" ontimeupdate="initProgressBar()">
                                                                <source src="<?php echo get_field('individual_song'); ?>" type="audio/mp3">
                                                        </audio>
                                                        <div class="player-controls scrubber">
                                                            <div id="seekObjContainer">
                                                                <progress id="seekObj" value="0" max="1"></progress>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                </div>

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
                    <span class="nfp-tribute-song-title"><em><?php echo get_field('individual_song_title') ?></em></span>
                    <p> by <?php echo get_field('loved_one_name') ?>, arr. <?php echo get_field('individual_song_arranger') ?></p>
                    <br>
                    <span class="nfp-tribute-song-lyrics"><?php echo get_field('individual_song_lyrics') ?></span>

                </div>
            </div>
        </div>
 
        <!-- Previous and Next Links -->
        <?php
            $postlist = get_posts(array(
                'post_type'			=> 'tribute',
                'posts_per_page'	=> -1,
                'meta_key'			=> 'individual_last_name',
                'orderby'			=> 'meta_value',
                'order'				=> 'ASC'
            ));

            $posts = array();
            foreach ( $postlist as $post ) {
                $posts[] += $post->ID;
            }

            $postListSize = sizeof($postlist);
            $current = array_search($currentTributeID, $posts );

            if ($current == 0) {
                $prevID = $posts[$postListSize-1];
                $nextID = $posts[1];
            } elseif ($current == ($postListSize-1)) {
                $prevID = $posts[$current-1];
                $nextID = $posts[0];
            } else {
                $prevID = $posts[$current-1];
                $nextID = $posts[$current+1];    
            }
        ?>
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-4" align="center">
                    <?php echo '<a href="'.get_permalink( $prevID ).'">'.get_the_title( $prevID ).'</a>'; ?>
                </div>
                <div class="col-4" align="center">
                </div>
                <div class="col-4" align="center">
                <?php echo '<a href="'.get_permalink( $nextID ).'">'.get_the_title( $nextID ).'</a>'; ?>
                </div> 
            </div>
        </div>

<?php get_footer(); ?>