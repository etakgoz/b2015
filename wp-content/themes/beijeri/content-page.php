<?php
/**
 * The template used for displaying page content in page.php
 *
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
				<?php the_title( '<h1 class="section-title  mb20">', '</h1>' ); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container mb40">
		<div class="row">
			<div class="col-sm-12">
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>

</article><!-- #post-## -->
