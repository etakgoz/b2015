<section class="section mt10">
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
					<p><?php echo neatTrim(strip_tags(get_the_content()), 400); ?></p>
					<a class="read-more-link" href="<?php echo get_permalink();?>">Läs Mer</a>
				</div>
			</div>
		</div>
	</article>
</section>