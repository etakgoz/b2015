<?php
/**
 * Template Name: Company
 *
 * @package beijeri
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php
				$image = get_field('hero_image');
				if (!empty($image)) {
					$bgStyle = 'style="background-image: url(\''.$image['url'].'\');"';
				} else {
					$bgStyle = '';
				}

			?>

			<section class="section-intro bg-img stellar" data-stellar-background-ratio="0.4" <?php echo $bgStyle ?>>
				<div class="bg-overlay op5"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-8">
							<?php the_title( '<h1 class="intro-title  mb20">', '</h1>' ); ?>
							<p class="intro-p mb30"><?php the_field('tagline') ?></p>
							<div id="shareit" class="sharrre" data-url="" data-text="Make your sharing widget with Sharrre (jQuery Plugin)" data-title="Share"></div>
						</div>
					</div>
				</div>
			</section>

			<div class="page-breadcrumbs-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="pull-right">
								<div class="page-breadcrumbs">
									<a href="<?php echo get_site_url() ?>">Hem</a> <span class="separator"> / </span> Våra Bolag <span class="separator"> / </span> <?php the_title( '<a class="active">', '</a>' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="section mt30">
				<article class="blog-post-content">
					<div class="container">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="entry-content">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</article>
			</section>

			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>