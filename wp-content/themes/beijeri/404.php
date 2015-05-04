<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package beijeri
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="section-header page-header ">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="section-title" style="text-align: center; margin-top: 150px;">404 - Sidan Hittades Inte</h1>
						</div>
					</div>
				</div>

				<div class="container mt20" style="margin-bottom: 250px;">
					<div class="row">
						<div class="col-sm-12">
							<p class="section-title-text" style="text-align: center;">Du har klickat på en felaktig länk eller skrivit in fel adress.</p>
							<p class="section-title-text" style="text-align: center;">Du kan gå till <a href="<?php echo get_site_url(); ?>">startsidan</a></p>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
