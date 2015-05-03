<section class="section mt30">
	<article class="blog-post-content">
		<div class="container">
			<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<?php the_title( '<h3 class="blog-post-title">', '</h1>' ); ?>
						<p><small><?php beijeri_posted_on(); ?></small></p>
					</div>
				</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
	</article>
</section>