	<?php
		$homeDescriptionTitle = get_field('home_description_title');
		$homeDescriptionText = get_field('home_description_text');

		$posts = get_posts(array('post_type' => 'bolag', 'posts_per_page' => 20));
	?>


	<!-- Slider -->
	<div class="tp-banner-container rs_fullwidth">

		<div class="tp-banner">
			<ul>
				<?php
					foreach ($posts as $post) {
						setup_postdata( $post );
						$excerpt = neatTrim(strip_tags($post->post_content), 250);
						$permalink = get_permalink();

						$postDate = $post->post_date;
						$postDate = date("d M Y", time($postDate));

						$image = get_field('hero_image');
						if (!empty($image)) {
							$imageUrl  = $image['url'];
						} else {
							$imageUrl = '';
						}
				?>

				<!-- SLIDE 2 -->
				<li data-transition="fade" data-slotamount="7" data-delay="8000" data-title="<?php the_title(); ?>">
					<!-- Background Image -->
					<img src="<?php echo $imageUrl; ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="">
					<div class="bg-overlay op5"></div>


						<div class="tp-caption sfb stt"
							data-x="left" data-hoffset="15"
							data-y="center" data-voffset="-75" 
							data-speed="600" data-start="600"
							data-endspeed="400" data-end="7900"
							data-easing="Power3.easeInOut" data-endeasing=""
							style="z-index: 4">
						<h3 class="title-slider-small uppercased mb50"><?php the_title(); ?> </h3>
						</div>

						<div class="tp-caption sfb stt"
							data-x="left" data-hoffset="15"
							data-y="center" data-voffset="30" 
							data-speed="700" data-start="800"
							data-endspeed="500" data-end="7950"
							data-easing="Power3.easeInOut" data-endeasing=""
							style="z-index: 4">
						<h2 class="title-slider-large"><?php the_field('hero_image_text'); ?></h2>
						</div>

						<div class="tp-caption sfb stl"
							data-x="left" data-hoffset="15"
							data-y="center" data-voffset="120" 
							data-speed="900" data-start="1200"
							data-endspeed="600" data-end="7950"
							data-easing="Power3.easeInOut" data-endeasing=""
							style="z-index: 4">
						<a href="<?php echo get_site_url(); ?>/?page_id=12" class="btn-slider">läs mer</a>
						</div>

				</li>
				<?php } ?>
			</ul>
		</div>
	</div> <!-- END Slider-->

	<section class="section">
		<div class="container home-description">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="description-title"><?php echo $homeDescriptionTitle ?></h2>
					<p class="description-text"><?php echo $homeDescriptionText; ?></p>
				</div>
			</div>
		</div>
	</section>



	<section class="section">
		<div class="container">
			<div class="row mb20">
				<div class="col-sm-6">
					<h3 class="title-medium br-bottom">Våra Bolag</h3>
				</div>
				<div class="col-sm-6">
					<div class="clearfix">
						<div class="pull-right xs-pull-left">
							<nav class="portfolio-filter pf2">
								<ul>
									<li class="xs-pl0"><a href="#" data-filter="*" class="active"><i class="fa fa-bars"></i></a></li>
									<li><a href="#" data-filter=".above_">Industri</a></li>
									<li><span> / </span></li>
									<li><a href="#" data-filter=".beyond_">Marknad</a></li>
									<li><span> / </span></li>
									<li class="pr0"><a href="#" data-filter=".nowhere_" class="pr0">Verkstad</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div id="portfolio-isotope">
						<div class="row col-p5">
							<div class="portfolio portfolio-animation-off">
								<div class="col-sm-6 col-md-4 el above_ beyond_">
									<div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/beijer.alma.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">Beijer Alma</h3>
		                            			<p class="text">Verkstadsindustri</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
			                    <div class="col-sm-6 col-md-4 el above_ nowhere_">
			                    	<div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/centro.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">Centro</h3>
		                            			<p class="text">Kakel &amp; Klinker</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
			                    <div class="col-sm-6 col-md-4 el beyond_ nowhere_">
			                    	<div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/fjarekupan.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">Fjäråskupan</h3>
		                            			<p class="text">Köksfläktar</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
			                    <div class="col-sm-6 col-md-4 el above_">
			                        <div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/gbp.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">GPB</h3>
		                            			<p class="text">Golvmatrial</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
			                    <div class="col-sm-6 col-md-4 el beyond_">
			                        <div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/imero.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">Imero</h3>
		                            			<p class="text">metaller</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
			                    <div class="col-sm-6 col-md-4 el nowhere_">
			                        <div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/osby.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">Osby Glas</h3>
		                            			<p class="text">isolerglass</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
			                    <div class="col-sm-6 col-md-4 el above_">
			                        <div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/vattentornet.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">Vattentornet</h3>
		                            			<p class="text">Friskt vatten på jobbet</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
			                    <div class="col-sm-6 col-md-4 el beyond_">
			                        <div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/poolkungen.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">Poolkungen</h3>
		                            			<p class="text">Pool och spabad</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
			                    <div class="col-sm-6 col-md-4 el nowhere_">
			                        <div class="portfolio-el view">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/svensk.dos.700x500.jpg" alt="project">
		                            	<a href="portfolio_project_half.html" class="mask">
		                            		<div class="portfolio-middle">
		                            			<h3 class="project-title br-bottom">Svensk Dos</h3>
		                            			<p class="text">Läkemedelsdistribution</p>
		                            		</div>
		                            	</a>
									</div>
			                    </div> <!-- END portfolio Item -->
							</div> <!-- END portfolio -->
						</div>
					</div> <!-- END Portfolio Isotope -->
				</div>
			</div>
		</div>
	</section>

	<?php 
		$posts = get_posts(array('posts_per_page' => 3));
	?>

	<?php if ( !empty( $posts ) ): ?>
	<section>
		<div class="container mb50 mt20 home-posts">
			<div class="row mb30">
				<div class="col-sm-12">
					<div class="clearfix">
						<h3 class="title-medium br-bottom pull-left">Nyheter</h3>
						<h3 class="title-small pull-right see-all"><a href="<?php echo get_site_url(); ?>/nyheter">Se alla nyheter</a></h3>
					</div>
				</div>
			</div>
			<div class="row mb30">
				<?php 
					foreach ($posts as $post) {
						setup_postdata( $post );
						$excerpt = neatTrim(strip_tags($post->post_content), 250);
						$permalink = get_permalink();

						$postDate = $post->post_date;
						$postDate = date("d M Y", time($postDate));
				?>
					<div class="col-md-4">
						<div class="box-services-b">
							<h3 class="title-small mb10"><a href="<?php echo $permalink; ?>"><?php echo $post->post_title; ?></a></h3>
							<p><?php echo $excerpt; ?><a href="<?php echo $permalink; ?>" class="link-read-more xs-mt0">läs mer</a></p>
							<small><i class="fa fa-clock-o mr10"></i><?php echo $postDate; ?></small>
						</div>
					</div><!--./col-md-4-->
				<?php
					}
				?>
			</div>
		</div>
	</section>
	<?php endif; ?>