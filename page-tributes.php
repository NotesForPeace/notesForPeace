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

		<!-- Tributes sorted by publish order -->
		<div class="container">        
			<h2>Publish Date</h2>
			<?php
				$posts = get_posts();
				foreach ($posts as $post) {
					// Get post title
					$post_title = $post->post_title;
					// Get post url
					$post_url = get_permalink($post->post_ID);
					echo '<div>';
					// Construct post URL
					echo '<a href="'.$post_url.'">'.$post_title.'</a>';
					echo '</div>';
				}
			?>

			<h2>First Name</h2>
			<?php 
				$posts = get_posts(array(
					'meta_key'			=> 'First Name',
					'orderby'			=> 'meta_value',
					'order'				=> 'ASC'
				));

				foreach ($posts as $post) {
					// Get post title
					$post_title = $post->post_title;
					// Get post url
					$post_url = get_permalink($post->post_ID);
					echo '<div>';
					// Construct post URL
					echo '<a href="'.$post_url.'">'.$post_title.'</a>';
					echo '</div>';
				}
			?>

			<h2>Last Name</h2>
			<?php 
				$posts = get_posts(array(
					'meta_key'			=> 'Last Name',
					'orderby'			=> 'meta_value',
					'order'				=> 'DESC'
				));

				foreach ($posts as $post) {
					// Get post title
					$post_title = $post->post_title;
					// Get post url
					$post_url = get_permalink($post->post_ID);
					echo '<div>';
					// Construct post URL
					echo '<a href="'.$post_url.'">'.$post_title.'</a>';
					echo '</div>';
				}
			?>
		</div><!-- .container -->


        <?php get_footer(); ?>

