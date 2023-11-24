<?php
// Add custom Theme Functions here
function my_custom_translations( $strings ) {
$text = array(
'Quick View' => 'Xem nhanh',
'SHOPPING CART' => 'Giỏ hàng',
'CHECKOUT DETAILS' => 'Thanh toán',
'ORDER COMPLETE' => 'Hoàn thành',
	'SALE!' => 'Giảm!',
	'VIEW CART' => 'Xem giỏ hàng',
	'CHECK OUT' => 'Thanh toán'
);

$strings = str_ireplace( array_keys( $text ), $text, $strings );
return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );
add_action( 'init', function () {
	if ( function_exists( 'add_ux_builder_post_type' ) ) {
	  add_ux_builder_post_type( 'service' );
	}
 } );