<?php
/**
 * 
 * Template Name: Search
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Notes for Peace
 * @since 1.0
 * @version 1.0
 */
?>

        <?php get_header(); ?>


<div class="container mt-3">
    <div class='row nfp-search-row'>
        <div class='col-sm-6  offset-2'>
            <!-- <?php get_search_form(); ?> -->
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><svg viewBox="0 0 20 20" width="20" height="20" style="margin-top:5px;color:white;fill: white;"><path d="M17.5,2.4C15.9,0.9,13.7,0,11.4,0S7,0.9,5.4,2.4S2.9,6.1,2.9,8.2c0,1.6,0.5,3.1,1.3,4.4l-3.6,3.7c-0.8,0.9-0.8,2.3,0.1,3.1 c0.4,0.4,1,0.6,1.5,0.6c0.6,0,1.2-0.2,1.7-0.7l3.6-3.7c1.2,0.6,2.5,0.9,3.9,0.9c2.3,0,4.4-0.9,6.1-2.4S20,10.4,20,8.2 S19.1,4,17.5,2.4z M15.6,12.3c-1.1,1.1-2.6,1.7-4.1,1.7s-3-0.6-4.1-1.7c-2.3-2.2-2.3-5.8,0-8c1.1-1.1,2.6-1.7,4.1-1.7s3,0.6,4.1,1.7 C17.9,6.5,17.9,10,15.6,12.3z"></path></svg></button>
            </span>
            </div>
        </div>
        <div class='col  col-sm-8 offset-1'>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="card-deck">
                <?php 
                    $posts = get_posts(array(
                        'meta_key' => 'Last Name',
                        'orderby'  => 'meta_value',
                        'order'	   => 'ASC'
                    ));

                    foreach ($posts as $post) {
                        $tributeID 	 	  = $post->ID;
                        $tributeTitle     = apply_filters( 'the_title', $post->post_title);
                        $tributeURL       = get_permalink($tributeID);
                        $tributeFirstName = get_post_meta($tributeID, 'First Name', true);
                        $tributeLastName  = get_post_meta($tributeID, 'Last Name', true);
                        $tributeSummary   = get_post_meta($tributeID, 'Summary', true);
                        $tributeImageURL  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

                        echo '<div class="card mb-4" style="min-width: 18rem; max-width: 18rem;">';
                            echo '<img class="card-img-top" src="'.$tributeImageURL[0].'" alt="Card image cap">';
                            echo '<h5 class="card-title">'.$tributeTitle.'</h5>';
                            echo '<div class="card-body">';
                                echo '<p class="card-text">'.$tributeSummary.'</p>';
                                echo '<p class="card-text"><small class="text-muted"><a href="'.$tributeURL.'">learn more</a></small></p>';
                            echo '</div>';
                        echo '</div>';

                    }
                ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

