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
<?php
    //---------------------------------------------------------------------------------------------
    //Load the Bootstrap files, Google Fonts, and stylesheet for the NFP Theme
    //---------------------------------------------------------------------------------------------
    function enqueue_search_scripts() {
        wp_enqueue_script('page-tributes', get_stylesheet_directory_uri() . '/page-tributes.js', array( 'jquery' ) );
    }
    add_action('wp_enqueue_scripts', 'enqueue_search_scripts');

?>
<?php get_header(); ?>
<div id="ajaxcontent">
	<!-- Search Page Header -->
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container pt-4">
				<div class="row justify-content-center">
					<div class="col">
						<h1 class="text-center"><?php the_title(); ?></h1>   
					</div>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php $search = new WP_Advanced_Search('tributeSearch');?>

	<div class="container">
	    <div class="row justify-content-center">
	    <div id="facetedSearch" class="col-9">
		    <?php $search->the_form(); ?>
		</div>
	    </div>

	    <div class="row">



		<div class="col-12">
		    <!-- This is results will be loaded -->
		    <div id="wpas-results"></div> 
		</div>

	    </div>
	</div>
</div>
<?php get_footer(); ?>
