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

		<!-- Table of tributes sorted by last name -->
		<div class="container">        
			<h1><?php the_title(); ?></h1>
			<div class="container">
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

						echo '<div class="row myRow">';
						echo '<div class="col-2 myCol">';
							echo '<p>'.$tributeTitle.'</p>';
						echo '</div>';
						echo '<div class="col-4 myCol">';
							  echo '<a href="'.$tributeURL.'">'.'Read more about'.'&nbsp'.$tributeFirstName.'</a>';
							echo '</div>';
						echo '</div>';
					}
				?>
			</div>
		</div>

        <?php get_footer(); ?>

