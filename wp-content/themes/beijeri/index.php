<?php
/**
 * The main template
 *
 * @package beijeri
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="section-header page-header">
			<div class="page-breadcrumbs-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="pull-left">
								<div class="page-breadcrumbs" style="padding-left: 0;">
									<a href="#">Hem</a> <span class="separator"> / </span> Nyheter
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title">Nyheter</h1>
					</div>
				</div>
			</div>
		</div>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'news' );
				?>

			<?php endwhile; ?>

			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php the_posts_navigation(array(
							'prev_text' => '&lt;&lt; Äldre inlägg',
							'next_text' => 'Nyare inlägg &gt;&gt;',
							'screen_reader_text' => ''
						)); ?>
					</div>
				</div>
			</div>



		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>