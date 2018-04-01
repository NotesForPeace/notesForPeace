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

		<!-- Title and Content of the Tributes Page -->
		<?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                
                <div class="container-fluid p-5">
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                         <h1><?php the_title(); ?></h1>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
                
            <?php endwhile; ?>
		<?php endif; ?>
		


		<!-- Grid of Tribute Cards -->
		<div class="container-fluid px-5 mt-4 myContainer">
			<div class="row">
				<div class="col-lg-3">
					<!-- Faceted Search -->
					<?php get_sidebar(); ?> 
				</div>
				<div class="col-lg-9">
					<div class="card-deck justify-content-center">
							<?php 
								$args = array(
									'posts_per_page' => -1, 			//-1 to return all posts
									'orderby'        => 'meta_value', 	//Meta values and custom fields are the same thing
									'order'          => 'ASC', 			//Ascending, use DESC for descending
									'meta_key'       => 'Last Name',    //TODO: We should move all the custom field key names into some centralized location
									'post_type'      => 'post',			//TODO: We need to finalize our data model
									'post_status'    => 'publish'		//Get only the posts that are meant to be public
								);
								$tributes = get_posts($args);

								foreach ($tributes as $tribute) {
									$tributeID 	 	  = $tribute->ID;
									$tributeTitle     = apply_filters( 'the_title', $tribute->post_title);
									$tributeURL       = get_permalink($tributeID);
									$tributeFirstName = get_post_meta($tributeID, 'First Name', true);
									$tributeLastName  = get_post_meta($tributeID, 'Last Name', true);
									$tributeSummary   = get_post_meta($tributeID, 'Summary', true);
									$tributeImageURL  = wp_get_attachment_image_src( get_post_thumbnail_id( $tributeID ), 'single-post-thumbnail' );

									echo '<a href="'.$tributeURL.'">';
										echo '<div class="card ml-3 mb-4" style="min-width: 250px; max-width: 250px;">';
											echo '<img class="card-img-top" src="'.$tributeImageURL[0].'" alt="Card image cap">';
											echo '<h5 class="card-title">'.$tributeTitle.'</h5>';
											echo '<div class="card-body">';
												echo '<p class="card-text">'.$tributeSummary.'</p>';
											echo '</div>';
										echo '</div>';
									echo '</a>';
								} //foreach
							?>
					</div>
				</div>
			</div>
		</div>


        <?php get_footer(); ?>
