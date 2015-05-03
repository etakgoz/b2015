<?php
/**
 * Template Name: Home
 *
 * @package beijeri
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php get_template_part( 'content', 'home' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>