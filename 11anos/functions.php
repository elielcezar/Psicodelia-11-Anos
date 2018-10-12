<?php


function my_function() {

 if ( is_category() && $query->is_main_query() ) {

 $query->set( 'orderby', 'title');
 $query->set( 'order', 'ASC' );
 return $query;

 }

}
add_action( 'pre_get_posts', 'my_function');

/**
 * Redirect users after add to cart.
 */
function my_custom_add_to_cart_redirect( $url ) {
	$url = home_url( 'finalizar-compra/' ); // URL to redirect to (1 is the page ID here)
	return $url;
}
add_filter( 'woocommerce_add_to_cart_redirect', 'my_custom_add_to_cart_redirect' );

/**
 * remove zoom and mgnify support
 */
remove_theme_support( 'wc-product-gallery-zoom' );
remove_theme_support( 'wc-product-gallery-lightbox' );
remove_theme_support( 'wc-product-gallery-slider' );

// Custom redirect for users after clicking 'return to shop'
add_filter('woocommerce_return_to_shop_redirect', 'bryce_wc_return_to_shop_redirect');
function bryce_wc_return_to_shop_redirect( $redirect ) {
     $redirect = 'https://psicodelia.org/11anos#tickets';
     return $redirect;
}


?>
