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

			<section class="companies">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="comapany-info clearfix">
								<div class="pull-left"><img src=""></div></div>
								<div class="pull-right"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>