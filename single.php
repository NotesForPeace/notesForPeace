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

        <div id="ajaxcontent nfp-tribute-header">

            <!-- Get track URl -->
            <?php global $post; ?>
            <?php $firstname = get_post_meta($post->ID, 'First Name', true); ?>
            <?php $lastname = get_post_meta($post->ID, 'Last Name', true); ?>
            <?php $song_url='http://notesforpeace.org/wp-content/uploads/ap-hap-file-dir/' . $firstname . '_' . $lastname . '.mp3'; ?>
            <p class="song-button-container"><?php echo do_shortcode("[ap_hap_addtrack id='1' label='song' track_type='local'  mp3='".$song_url."']"); ?></p>

            <!-- Tribute Header -->
            <div class="container-fluid nfp-tribute-header">
                <div class="row vertical-align">

                    <!-- Individual's Image -->
                    <div class="col-sm-6">
                        <img src="<?php echo get_field('individual_featured_photo') ?>" class="img-fluid">
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
                            <div class="col-sm-12">
                                <div class="nfp-tribute-tagline py-3">
                                    <span><?php echo get_field('individual_tagline') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="d-none d-md-block" style="margin-top: 10px; border-top: 4px solid #e3dacd;"></div>

            
            <div class="container py-3">
                <div class="row">
                    <div class="col-md-7 col-sm-10 col-xs-12" align="center">
                        <p><?php echo do_shortcode('[ap_hap_play id="1" label="Play Track"]'); ?></p>
                        <p><?php echo get_field('individual_song_lyrics') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>

