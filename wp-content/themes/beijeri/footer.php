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
	<footer class="footer-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<!--<p class="copyright">&copy; Copyright 2015 Beijerinvest</p>-->
					<p class="copyright"><?php the_field('footer_text', 'options');?></p>
					<!--Don't Delete Below!!-->
					<div style="visibility: hidden; font-weight: 600">Some Text to Trigger Loading of Bold Text</div>
				</div>
			</div>
		</div>
	</footer>

</div> <!-- END Global Wrapper -->



<?php wp_footer(); ?>


	<?php if (SITE_VERSION === 'DEV') { ?>

	<!-- Javascript files -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery.appear.js"></script>
	<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/retina.min.js"></script>-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/stellar.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/sticky.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery.lazyload.min.js"></script>
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
