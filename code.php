<?php 

function wcpt_hide_price_unless_logged_in( $price ) {
    if ( !is_user_logged_in() ) {
        return 'Autenticati per vedre i prezzi';
    }
    return $price;
}
add_filter( 'wc_product_table_data_price', 'wcpt_hide_price_unless_logged_in' );
