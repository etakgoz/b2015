<?php
/**
 * Template Name: About
 *
 * @package beijeri
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="section-header page-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<?php the_title( '<h1 class="section-title  mb20">', '</h1>' ); ?>
						</div>
					</div>
				</div>

			</div>

			<section class="section about-section" id="<?php the_field('first_section_anchor'); ?>">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="entry-content">
								<?php the_field('first_section_text'); ?>
							</div>
						</div>
						<div class="col-sm-4">
						<?php
							$image = get_field('first_section_image');

							if( !empty($image) ): ?>
							<img class="section-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>

			<section class="section about-section" id="<?php the_field('second_section_anchor'); ?>">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="entry-content">
								<?php the_field('second_section_text'); ?>
							</div>
						</div>
						<div class="col-sm-4">
						<?php
							$image = get_field('second_section_image');

							if( !empty($image) ): ?>
							<img class="section-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>

			<section class="section about-section" id="<?php the_field('third_section_anchor'); ?>">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="entry-content">
								<?php the_field('third_section_text'); ?>
							</div>
						</div>
						<div class="col-sm-4">
						<?php
							$image = get_field('third_section_image');

							if( !empty($image) ): ?>
							<img class="section-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>

			<section class="section about-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="entry-content">
								<?php the_content() ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>