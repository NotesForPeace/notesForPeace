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
        
        <!-- Search Page Header -->
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="container pt-4">
					<div class="row">
						<div class="col">
							<h1><?php the_title(); ?></h1>   
						</div>
					</div>
				</div>
				
			<?php endwhile; ?>
		<?php endif; ?>

        <?php $search = new WP_Advanced_Search('tributeSearch');?>

        <div class="container">
            <div class="row">

                <div id="facetedSearch" class="col-1">
                    <?php $search->the_form(); ?>
                </div>

                <div class="col-11">
                    <!-- This is results will be loaded -->
                    <div id="wpas-results"></div> 
                </div>

            </div>
        </div>


        <?php get_footer(); ?>
