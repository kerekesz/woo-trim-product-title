function short_woocommerce_product_titles_chars( $title, $id ) {
  if ( ( is_home() || is_front_page() || is_shop() || is_product_tag() || is_product_category() ) && get_post_type( $id ) === 'product' ) {
    if ( strlen( $title ) > 45) { // Kicks in if the product title is longer than 45 characters
      return substr( $title, 0, 45 ) . '...'; // Shortens it to 45 characters and adds ellipsis at the end
    } else {
      return $title; // If the title isn't longer than 60 characters, it will be returned in its full length without the ellipsis
    }
  } else {
    return $title;
  }
}
add_filter( 'the_title', 'short_woocommerce_product_titles_chars', 10, 2 );
