<?php
/**
* Woocommerce functions

**/

//Declaring compatibility
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


//Put Price after short description
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 29 );


//Hide Tags
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );



//Change Add to cart text 
	//In archive
add_filter( 'woocommerce_product_add_to_cart_text', 'tribe_woo_archive_custom_cart_button_text' );    // 2.1 +
function tribe_woo_archive_custom_cart_button_text() {
	$at_woo_buybutton = get_theme_mod( 'at_setting__woo_prod_buybutton', 'Reserve Your Seat Now!' ); 
    return wp_kses_post($at_woo_buybutton);
}
	//In archive
add_filter( 'woocommerce_product_single_add_to_cart_text', 'tribe_woo_custom_cart_button_text' );    // 2.1 +
function tribe_woo_custom_cart_button_text() {
	$at_woo_buybutton = get_theme_mod( 'at_setting__woo_prod_buybutton', 'Reserve Your Seat Now!' ); 
    return wp_kses_post($at_woo_buybutton); 
}


//Hide Sidebar in Product
add_action('woocommerce_before_single_product','tribe_woo_remove_product_sidebar');
function tribe_woo_remove_product_sidebar() {
	//$at_woo_prod_sidebar = get_theme_mod( 'at_setting__woo_prod_sidebar', '0' );
    //if ( is_product() && ( $at_woo_prod_sidebar == 0 ) ) {
        remove_action('woocommerce_sidebar','woocommerce_get_sidebar');
    //}
}

// remove sidebar for woocommerce pages 

 add_action('woocommerce_before_main_content', 'tribe_woo_remove_sidebar' );
    function tribe_woo_remove_sidebar()
    {
         remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
         remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
    }

//Hide Breadcrumb
add_action('woocommerce_before_main_content','tribe_woo_remove_product_breadcrumb');
function tribe_woo_remove_product_breadcrumb() {
	$at_woo_prod_breadcrumb = get_theme_mod( 'at_setting__woo_prod_breadcrumb', '0' );
    if ( is_product() && ( $at_woo_prod_breadcrumb == 0 ) ) {
        remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
    }
}




// Change the tab titles
add_filter( 'woocommerce_product_tabs', 'tribe_woo_change_product_description_tab_title', 10, 1 );
function tribe_woo_change_product_description_tab_title( $tabs ) {
  global $post;
  	$at_woo_prod_desctab = get_theme_mod( 'at_setting__woo_prod_desctab', 'Why You Need it' );
  	$at_woo_prod_attrtab = get_theme_mod( 'at_setting__woo_prod_attrtab', 'When and Where' );
  	$at_woo_prod_reviewtab = get_theme_mod( 'at_setting__woo_prod_reviewtab', 'What My Customers Say' );

	if ( isset( $tabs['description']['title'] ) )
		$tabs['description']['title'] = $at_woo_prod_desctab;
	if ( isset( $tabs['reviews']['title'] ) )
		$tabs['reviews']['title'] = $at_woo_prod_reviewtab;
	if ( isset( $tabs['additional_information']['title'] ) )
		$tabs['additional_information']['title'] = $at_woo_prod_attrtab;
	return $tabs;

}


// Remove tab headings
add_filter( 'woocommerce_product_description_heading', 'tribe_woo_change_product_description_tab_heading', 10, 1 );
function tribe_woo_change_product_description_tab_heading( $title ) {
	global $post;
	return '';
}

//Remove Review Tab
add_filter( 'woocommerce_product_tabs', 'tribe_woo_remove_reviews_tab', 98 );
function tribe_woo_remove_reviews_tab($tabs) {
	$at_woo_prod_reviews = get_theme_mod( 'at_setting__woo_prod_reviews', '1' );
    if ( $at_woo_prod_reviews == 0 )
    	unset($tabs['reviews']);
    return $tabs;
}

// Nb of products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', "return get_theme_mod( 'at_setting__woo_shop_nbprod', '6' );" ), 20 );

//Remove Breadcrumbs from shop page
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);


// remove default sorting dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
// Removes showing results 
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

// Remove prices from archive
add_action('woocommerce_before_shop_loop','tribe_woo_remove_shop_price');
function tribe_woo_remove_shop_price() {
	$at_woo_shop_price = get_theme_mod( 'at_setting__woo_shop_price', '1' );
	if ( $at_woo_shop_price == 0 ) 
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

 }


 // Remove purchase buttn from archive
add_action('woocommerce_before_shop_loop','tribe_woo_remove_shop_button');
function tribe_woo_remove_shop_button() {
	$at_woo_shop_button = get_theme_mod( 'at_setting__woo_shop_button', '1' );
	if ( $at_woo_shop_button == 0 ) 
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
 }

 //Add excerpt in archive
add_action( 'woocommerce_after_shop_loop_item_title', 'tribe_woo_excerpt_in_shop', 40 );
function tribe_woo_excerpt_in_shop() {
	$at_woo_shop_excerpt = get_theme_mod( 'at_setting__woo_shop_excerpt', '1' );
	if ( $at_woo_shop_excerpt == 1 ) 
   		the_excerpt();   
}



/**
 * Redirect users after add to cart.
 */
add_filter( 'woocommerce_add_to_cart_redirect', 'tribe_woo_add_to_cart_redirect' );
function tribe_woo_add_to_cart_redirect( $url ) {
	$at_woo_checkout = get_theme_mod( 'at_setting__woo_checkout', '0' );
	if ( $at_woo_checkout == 1 ) {
		$url = WC()->cart->get_checkout_url();
		// $url = wc_get_checkout_url(); // since WC 2.5.0
		return $url;
	}
}
