<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<?php wp_head(); ?>

<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<div class="main-menu">
			<div class="container">
				<?php
				/**
				 * Functions hooked into storefront_header action
				 *
				 * @hooked storefront_skip_links                       - 0
				 * @hooked storefront_social_icons                     - 10
				 * @hooked storefront_site_branding                    - 20
				 * @hooked storefront_secondary_navigation             - 30
				 * @hooked storefront_product_search                   - 40
				 * @hooked storefront_primary_navigation_wrapper       - 42
				 * @hooked storefront_primary_navigation               - 50
				 * @hooked storefront_header_cart                      - 60
				 * @hooked storefront_primary_navigation_wrapper_close - 68
				 */
				do_action( 'storefront_header' ); ?>

			</div>

		</div>

		<div class="logo-evento">
			<!--a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/themes/11anos/img/topo.png" class="logo home" data-aos="fade-down"></a>
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/themes/11anos/img/logo-inside.png" class="logo inside" data-aos="fade-down"></a-->
		</div>

		<div class="wrapper">

			

			<img src="<?php echo get_site_url(); ?>/wp-content/themes/11anos/img/topo-psicodelia.png" class="topo-psicodelia">
			<img src="<?php echo get_site_url(); ?>/wp-content/themes/11anos/img/topo-curitiba.png" class="topo-curitiba">
			<img src="<?php echo get_site_url(); ?>/wp-content/themes/11anos/img/topo-dezembro.png" class="topo-dezembro">


		</div>


	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1" <?php if (!is_front_page()){ ?> data-aos="fade-down"<?php } ?>>
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
