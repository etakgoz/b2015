<section class="section mt30">
	<article class="blog-post-content">
		<div class="container">
			<div class="row">
					<div class="col-sm-8">
						<h3 class="blog-post-title news-title"><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h3>
						<p><small><?php beijeri_posted_on(); ?></small></p>
					</div>
				</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
	</article>
</section>