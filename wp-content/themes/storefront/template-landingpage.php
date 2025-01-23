<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Landing Page Layout
 *
 * @package storefront
 */

get_header(); ?>

	<main id="main" class="body" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

		

			get_template_part( 'content_without_heading', 'page' );

			/**
			 * Functions hooked in to storefront_page_after action
			 *
			 * @hooked storefront_display_comments - 10
			 */
		

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
