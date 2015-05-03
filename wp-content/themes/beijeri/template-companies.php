<?php
/**
 * Template Name: Companies
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
									<div class="page-breadcrumbs" style="padding-left: 0">
										<a href="#">hem</a> <span class="separator"> / </span> <?php the_title( '<a class="active">', '</a>' ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<?php the_title( '<h1 class="section-title  mb20">', '</h1>' ); ?>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<p class="section-title-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi earum, neque debitis distinctio quasi sit quibusdam, itaque possimus fuga et dolorem soluta dolore rerum? Quo eum, voluptatem earum provident facere.</p>
						</div>
					</div>
				</div>
			</div>

			<section class="companies mt30">
				<div class="container company mb40" style="border-bottom: solid 1px #dcdcdc; padding-bottom: 40px;">
					<div class="row">
						<div class="col-sm-12">
							<div class="comapany-info clearfix">
								<div class="pull-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/fjaraskupan.logo.png" alt="logo"/></div>
								<div style="margin-left: 250px">
									<h3>Fjäraskupan</h3>
									<p>Some tagline</p>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum omnis, maxime totam quod nisi sint cum pariatur soluta illum placeat non voluptatem magni quaerat itaque, animi veritatis accusamus ullam iste.</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="container company mb40" style="border-bottom: solid 1px #dcdcdc; padding-bottom: 40px;">
					<div class="row">
						<div class="col-sm-12">
							<div class="comapany-info clearfix">
								<div class="pull-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/fjaraskupan.logo.png" alt="logo"/></div>
								<div style="margin-left: 250px">
									<h3>Fjäraskupan</h3>
									<p>Some tagline</p>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum omnis, maxime totam quod nisi sint cum pariatur soluta illum placeat non voluptatem magni quaerat itaque, animi veritatis accusamus ullam iste.</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container company mb40" style="border-bottom: solid 1px #dcdcdc; padding-bottom: 40px;">
					<div class="row">
						<div class="col-sm-12">
							<div class="comapany-info clearfix">
								<div class="pull-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/fjaraskupan.logo.png" alt="logo"/></div>
								<div style="margin-left: 250px">
									<h3>Fjäraskupan</h3>
									<p>Some tagline</p>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum omnis, maxime totam quod nisi sint cum pariatur soluta illum placeat non voluptatem magni quaerat itaque, animi veritatis accusamus ullam iste.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>