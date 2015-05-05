<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package beijeri
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Beijerinvest</title>

	<meta name="author" content="abusinesstheme">
	<meta name="description" content="Beijerinvest">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  	<!-- CSS files -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,600,700,900,400italic|Roboto+Slab:400,700' rel='stylesheet'>

	<?php if (SITE_VERSION === 'DEV') { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.css">
	<?php } else { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.min.css">
	<?php } ?>

	<?php // wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>

<div id="wrapper">
	<div class="h-wrapper">

		<!-- Header -->
		<header class="header-wrapper header-transparent">
			<div class="main-header">
				<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navigation">
					<div class="container">
						<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png" alt="logo"/></a>
					</div>

					<div class="navbar-collapse collapse">
						<nav class="navbar-right">
						<?php
						wp_nav_menu( array(
						 'container' =>false,
						 'menu_class' => 'menu',
						 'echo' => true,
						 'before' => '',
						 'after' => '',
						 'link_before' => '',
						 'link_after' => '',
						 'depth' => 0,
						 'walker' => new description_walker())
						 );

						?>
						</nav>
					</div><!--/.nav-collapse -->
				</div>
			</div> <!-- END Main Header -->
		</header>

	</div>

	<!-- Do not remove this class -->
	<div class="push-top" style="margin-top: 66px;"></div>


	<!--<div id="content" class="site-content">-->
