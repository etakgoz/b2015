<?php
/**
 * @package beijeri
 */
?>

<?php
	$image = get_field('hero_background_image');
	if (!empty($image)) {
		$bgStyle = 'style="background-image: url(\''.$image['url'].'\'); background-size: cover;"';
	} else {
		$bgStyle = '';
	}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="section-intro bg-img stellar title-with-hero" data-stellar-background-ratio="0.4" <?php echo $bgStyle ?>>
		<div class="bg-overlay op5"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-8">
					<h1 class="intro-title mb20"><?php the_title(); ?></h1>
					<div class="date-published"><?php beijeri_posted_on(false); ?></div>
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
							<a href="<?php echo get_site_url() ?>">Hem</a> <span class="separator"> / </span> <a href="<?php echo get_site_url() ?>/nyheter">Nyheter</a>
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
</article>
