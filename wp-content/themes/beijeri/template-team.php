<?php
/**
 * Template Name: Team
 *
 * @package beijeri
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="section-header page-header team-section-header" id="<?php the_field('ledning_anchor'); ?>">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<h1 class="section-title mb20"><?php the_field('ledning_title'); ?></h1>
						</div>
					</div>
				</div>

				<div class="container mt20">
					<div class="row">
						<div class="col-sm-12">
							<div class="section-title-text"><?php the_field('ledning_details'); ?></div>
						</div>
					</div>
				</div>
			</div>

			<section class="section team-photos-section">
				<div class="container">
					<div class="row">
						<div class="team-section portfolio portfolio-center portfolio-text">
						<?php

						// check if the repeater field has rows of data
						if( have_rows('ledning_members') ):
							$loop = 0;
						 	// loop through the rows of data
						    while ( have_rows('ledning_members') ) : the_row();
								$loop++;
						?>

							<div class="col-sm-6 col-md-4">
		                    	<div class="portfolio-el">
									<div class="view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/placeholder.jpg" class="lazy" data-original="<?php the_sub_field('picture'); ?>" alt="<?php the_sub_field('name'); ?>">
		                            	<div class="mask">
		                            		<a href="#" class="portfolio-middle"><i class="fa fa-search"></i></a>
		                            	</div>
		                        	</div>
		                        	<div class="portfolio-text-content">
		                        		<div class="clearfix">
		                        			<div class="pull-left">
		                        				<h3 class="portfolio-text-title"><?php the_sub_field('name'); ?></h3>
		                        				<p class="portfolio-text-p mb10 color-main"><?php the_sub_field('title'); ?></p>
		                        			</div>
		                        		</div>
		                        		<p class="mb0"><?php the_sub_field('bio'); ?></p>
		                        	</div>
								</div>
		                    </div> <!-- END portfolio Item -->
		                    <?php if ($loop % 3 == 0) : ?>
    							<div class="clearfix visible-md"></div>
    							<div class="clearfix visible-lg"></div>
    						<?php endif; ?>
    						<?php if ($loop % 2 == 0) : ?>
							<div class="clearfix visible-sm"></div>
    						<?php endif; ?>

						<?php
							endwhile;
						endif;
						?>
						</div> <!-- END portfolio -->
					</div>
				</div>
			</section>

			<div class="section-header team-section-header" id="<?php the_field('styrelse_anchor'); ?>">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<h1 class="section-title mb20"><?php the_field('styrelse_title'); ?></h1>
						</div>
					</div>
				</div>

				<div class="container mt20">
					<div class="row">
						<div class="col-sm-12">
							<div class="section-title-text"><?php the_field('styrelse_details'); ?></div>
						</div>
					</div>
				</div>
			</div>

			<section class="section team-photos-section">
				<div class="container">
					<div class="row">
						<div class="team-section portfolio portfolio-center portfolio-text">
						<?php

						// check if the repeater field has rows of data
						if( have_rows('styrelse_members') ):
							$loop = 0;
						 	// loop through the rows of data
						    while ( have_rows('styrelse_members') ) : the_row();
						    	$loop++;
						?>

							<div class="col-sm-6 col-md-4">
		                    	<div class="portfolio-el">
									<div class="view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/placeholder.jpg" class="lazy" data-original="<?php the_sub_field('picture'); ?>" alt="<?php the_sub_field('name'); ?>">
		                            	<div class="mask">
		                            		<a href="#" class="portfolio-middle"><i class="fa fa-search"></i></a>
		                            	</div>
		                        	</div>
		                        	<div class="portfolio-text-content">
		                        		<div class="clearfix">
		                        			<div class="pull-left">
		                        				<h3 class="portfolio-text-title"><?php the_sub_field('name'); ?></h3>
		                        				<p class="portfolio-text-p mb10 color-main"><?php the_sub_field('title'); ?></p>
		                        			</div>
		                        		</div>
		                        		<p class="mb0"><?php the_sub_field('bio'); ?></p>
		                        	</div>
								</div>
		                    </div> <!-- END portfolio Item -->
		                    <?php if ($loop % 3 == 0) : ?>
    							<div class="clearfix visible-md"></div>
    							<div class="clearfix visible-lg"></div>
    						<?php endif; ?>
    						<?php if ($loop % 2 == 0) : ?>
							<div class="clearfix visible-sm"></div>
    						<?php endif; ?>
						<?php
							endwhile;
						endif;
						?>
						</div> <!-- END portfolio -->
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>