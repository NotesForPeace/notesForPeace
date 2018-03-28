<?php
/**
 * 
 * Template Name: Tributes
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

