add_action( 'woocommerce_after_shop_loop_item', 'add_to_quote_button', 11 );
 
function add_to_quote_button() {
	global $product;
	$id = $product->get_id();
	$title = $product->get_title();
	$sku = $product->get_sku();
	$site_url = get_site_url();
	
	echo '<a
		href="' . $site_url . '/request-quote/?add-to-quote=' . $id . '"
		data-quantity="1"
		class="button"
		data-product_id="' . $id . '"
		data-product_sku="' . $sku . '"
		aria-label="Add “' . $title . '” to your quote"
		aria-describedby=""
		rel="nofollow"
	>
		Add to quote
	</a>';
}