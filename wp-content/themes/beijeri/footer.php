<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package beijeri
 */
?>

	<!--</div><!-- #content -->

	<!-- Footer wrapper -->
	<footer class="footer-wrapper footer-bg">
		<div class="container">
			<div class="row col-p30">
				<div class="col-sm-12 col-md-6">
					<div class="footer-widget">
						<h3 class="footer-title">Beijerinvest</h3>
						<?php
						wp_nav_menu( array(
						 'container' =>false,
						 'menu_class' => 'footer-links clearfix',
						 'echo' => true,
						 'before' => '',
						 'after' => '',
						 'link_before' => '',
						 'link_after' => '',
						 'depth' => 0,
						 'walker' => new description_walker())
						 );

						?>
					</div>
				</div>

				<?php
				if( have_rows('kontakt') ):
					$loop = 0;
				 	// loop through the rows of data
				    while ( have_rows('kontakt') ) : the_row();
				?>
					<div class="col-sm-6 col-md-3">
						<div class="footer-widget <?php if ($loop == 1) echo 'mt60' ?>" <?php if ($loop == 1) echo 'style="padding-top: 5px;"' ?>>
							<?php if ($loop == 0) : ?>
							<h3 class="footer-title">Kontakt</h3>
							<?php endif; ?>
							<p><?php the_sub_field('type');?></p>
							<p><?php the_sub_field('name');?></p>
							<p><a href="mailto:<?php the_sub_field('email');?>"><?php the_sub_field('email');?></a></p>
							<p>Tel: <?php the_sub_field('landline');?></p>
							<p>Mob: <?php the_sub_field('mobile');?></p>
						</div>
					</div>
				<?php
					$loop++;
					endwhile;
				endif;
				?>
				<!--<div class="col-sm-6 col-md-3">
					<div class="footer-widget mt60" style="padding-top: 5px">
						<p>Övriga frågor</p>
						<p>Johan Wall</p>
						<p><a href="mailto:johan.wall@beijerinvest.se">johan.wall@beijerinvest.se</a></p>
						<p>Tel: +46 8 701 08 17</p>
						<p>Mob: +46 70 554 18 00</p>
					</div>
				</div> -->
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<p class="copyright">&copy; Copyright 2015 Beijerinvest</p>
				</div>
			</div>
		</div>
	</footer>

</div> <!-- END Global Wrapper -->

<?php // wp_footer(); ?>


	<?php if (SITE_VERSION === 'DEV') { ?>

	<!-- Javascript files -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery.appear.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/retina.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/stellar.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/sticky.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>

	<!-- Main javascript file -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

	<?php } else { ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/script.min.js"></script>
	<?php } ?>

</body>
</html>
