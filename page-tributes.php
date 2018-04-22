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
		

		<!-- Tribute Page Header -->
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="container-fluid pt-4">
					<div class="row justify-content-center">
						<div class="col d-flex justify-content-center">
							<h1><?php the_title(); ?></h1>   
						</div>
					</div>
				</div>
				
			<?php endwhile; ?>
		<?php endif; ?>
		

		<!-- Search Bar -->
		<div class="container-fluid p-0">
			<div class='row justify-content-center'>
				<div class="col-10 col-sm-5 col-md-8 col-lg-7 col-xl-8 px-0">
					<div class="input-group">
						<input type="text" id="nfp-search-bar" class="form-control nfp-search-bar" placeholder="Search for..." onkeyup="search_input()">
					</div>
				</div>
			</div>
		</div>


		<!-- Grid of Tribute Cards -->
		<div class="container-fluid px-5 mt-4">
			<div class="row justify-content-center">
				<div class="col d-flex justify-content-center">
					<div class="card-deck justify-content-center ">
						<?php 
							$args = array(
								'posts_per_page' => -1, 					//-1 to return all posts
								'orderby'        => 'meta_value', 			//Meta values and custom fields are the same thing
								'order'          => 'ASC', 					//Ascending, use DESC for descending
								'meta_key'       => 'individual_last_name',	//TODO: We should move all the custom field key names into some centralized location
								'post_type'      => 'tribute',				//TODO: We need to finalize our data model
								'post_status'    => 'publish'				//Get only the posts that are meant to be public
							);
							$tributes = get_posts($args);

							foreach ($tributes as $tribute) {
								$tributeID 	 	  = $tribute->ID;
								$tributeTitle     = apply_filters( 'the_title', $tribute->post_title);
								$tributeURL       = get_permalink($tributeID);
								$tributeFirstName = get_post_meta($tributeID, 'individual_first_name', true);
								$tributeLastName  = get_post_meta($tributeID, 'individual_last_name', true);
								$tributeSummary   = get_post_meta($tributeID, 'individual_tagline', true);
								$tributeImageURL  = wp_get_attachment_image_src( get_post_thumbnail_id( $tributeID ), 'single-post-thumbnail' );
								
								echo '<div class="nfp-card-wrapper" tribute_title="'.$tributeTitle.'" individual_full_name="'.$tributeFirstName.' '.$tributeLastName. '" individual_first_name="'.$tributeFirstName.'" individual_last_name="'.$tributeLastName.'">';
									echo '<a href="'.$tributeURL.'">';
										echo '<div class="card mb-4 nfp-tribute-card">';
											echo '<img class="card-img-top nfp-tribute-card-image" src="'.$tributeImageURL[0].'">';
											echo '<p>'.$tributeTitle.'</p>';
										echo '</div>';
									echo '</a>';
								echo '</div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>

		<br />
		<br />

        <?php get_footer(); ?>
