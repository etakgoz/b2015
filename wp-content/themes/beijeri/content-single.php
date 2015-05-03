<?php
/**
 * @package beijeri
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="section-intro bg-img bgCompany stellar" data-stellar-background-ratio="0.4">
		<div class="bg-overlay op5"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-8">
					<h1 class="intro-title mb20">Pressmeddelande</h1>
					<!--<p class="intro-p mb30">Firskt vatten på jobbet</p>-->
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
							Hem <span class="separator"> / </span> Nyheter
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
							<?php the_title( '<h3 class="blog-post-title">', '</h3>' ); ?>
							<p><small><?php beijeri_posted_on(); ?></small></p>
						</div>
					</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</article>
	</section>
</article>
