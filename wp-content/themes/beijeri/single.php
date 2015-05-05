<?php
/**
 * The template for displaying all single posts.
 *
 * @package beijeri
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				$image = get_field('hero_background_image');
				if (empty($image)) {
					get_template_part( 'content', 'single' );
				} else {
					get_template_part( 'content', 'single-hero' );
				}
			?>
			<?php  ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
