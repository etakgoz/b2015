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
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<?php the_title( '<h1 class="section-title  mb20">', '</h1>' ); ?>
						</div>
					</div>
				</div>

				<div class="container mt20">
					<div class="row">
						<div class="col-sm-12">
							<div class="section-title-text"><?php the_field('page_info'); ?></div>
						</div>
					</div>
				</div>
			</div>

			<?php 
				$posts = get_posts(array('post_type' => 'bolag', 'posts_per_page' => 20));
			?>

			<?php if ( !empty( $posts ) ) { ?>

			<section class="companies mt30">
				<?php
					foreach ($posts as $post) {
						setup_postdata( $post );
						$excerpt = neatTrim(strip_tags($post->post_content), 250);
						$permalink = get_permalink();

						$postDate = $post->post_date;
						$postDate = date("d M Y", time($postDate));

						$image = get_field('company_logo');

						if (!empty($image)) {
							$imageUrl = $image["url"];
						}
				?>

				<div class="container company mb40">
					<div class="row">
						<div class="col-sm-12">
							<div class="company-info clearfix">
								<div class="logo-container pull-left"><a href="<?php echo $permalink; ?>"><img src="<?php echo $imageUrl; ?>" alt="logo"/></a></div>
								<div class="info-container">
									<h3 class="company-name"><a href="<?php echo $permalink; ?>"><?php the_title(); ?></a></h3>
									<?php if( get_field( "tagline" ) ): ?>
									<p class="tagline"><?php the_field('tagline'); ?></p>
									<?php endif; ?>
									<div class="description"><?php the_field('short_description'); ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php } ?>

			</section>
			<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>