<?php
/**
 * @package beijeri
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
					<?php the_title( '<h1 class="section-title  mb20 br-bottom">', '</h1>' ); ?>
					<p class="date-published">Publicerade <?php beijeri_posted_on(false); ?> i <a href="<?php echo get_site_url() ?>/nyheter">Nyheter</a></p>
				</div>
			</div>
		</div>

	</div>


	<section class="section mt0">
		<article class="blog-post-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
</article>
