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
    <div class="row align-middle  vertical-align">

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
<div class="d-none d-md-block" style="margin-top: 10px; border-top: 4px solid #e3dacd;"></div>
<div class="contain py-3">
    <div class="row justify-content-center">
        <div class="col-10 col-md-8">
            <!--Section Navigation -->
            <div class="row individual-section-titles justify-content-center">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">About
                            <hr>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-song-tab" data-toggle="pill" href="#pills-song" role="tab" aria-controls="pills-song" aria-selected="false">
                            Song
                            <hr>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <!--About section-->
                <div class="tab-pane fade show active media" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                    <div class="media-body about-individual">
                        <div class="row">
                            <div class="col-sm-8">
                                <?php echo get_field('about_individual') ?>
                            </div>
                            <div class="col-sm-4" id="about-images"></div>
                        </div>
                    </div>
                </div>
                <!--Song section-->
                <div class="tab-pane fade justify-content-center lyrics" id="pills-song" role="tabpanel" aria-labelledby="pills-song-tab">
                    <!-- Get track URl and play song -->
                    <?php global $post; ?>
                    <?php $firstname = get_post_meta($post->ID, 'First Name', true); ?>
                    <?php $lastname = get_post_meta($post->ID, 'Last Name', true); ?>
                    <?php $song_url='http://enefp.local/wp-content/uploads/ap-hap-file-dir/' . $firstname . '_' . $lastname . '.mp3'; ?>
                    <p><?php echo do_shortcode("[ap_hap_addtrack id='1' label='Play the tribute track' track_type='local'  mp3='".$song_url."']"); ?></p>
                    <?php echo do_shortcode('[ap_hap_play id="1" label="actually play"]'); ?>
                    <p><?php echo get_field('song_lyrics') ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
