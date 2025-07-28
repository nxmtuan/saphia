<?php
/**
 * Translate text CF7
 */
add_filter( 'wpcf7_form_elements', function ($form) {
	// Tìm placeholder trong định dạng {Your Text}
	$pattern = '/\{([^\}]+)\}/';
	$form = preg_replace_callback( $pattern, function ($matches) {
		$text = $matches[1]; // Lấy nội dung trong { }
		// Đăng ký chuỗi dịch động
		do_action( 'wpml_register_single_string', 'Contact Form 7', $text, $text );

		// Dịch chuỗi
		return esc_attr( function_exists( 'pll__' ) ? pll__( $text ) : __( $text, 'acbs' ) );
	}, $form );

    // Enable shortcode parsing in CF7 forms
    $form = do_shortcode( $form );
	return $form;
} );

add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Shortcode to render the ACF "button" sub field as a call button.
 *
 * Usage: [call_button]
 */
function saphia_call_button_shortcode( $atts ) {
    // Lấy giá trị sub field 'button' từ ACF
    $button = get_field( 'button' );
    $btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
    $btn_phone = ( is_array( $button ) && ! empty( $button['phone'] ) ) ? $button['phone'] : '';

    // Nếu không có tiêu đề thì trả về rỗng
    if ( ! $btn_title ) {
        return '';
    }

    // Chuẩn hóa URL (hàm check_link() của theme bạn)
    $link = check_link( $btn_phone );

    // Trả về HTML button
    return sprintf(
        '<a href="tel:%s" class="call-button">%s</a>',
        esc_url( $link ),
        esc_html( $btn_title )
    );
}

add_shortcode( 'call_button', 'saphia_call_button_shortcode' );

/**
 * Shortcode to output hidden inputs for ACF repeater 'product_info' sub fields 'title' and 'desc'.
 *
 * Usage: [product_info_fields]
 */
function saphia_product_info_shortcode( $atts ) {
    // Parse attributes, allow overriding post ID
    $atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts,
        'product_info_fields'
    );
    // Determine which post to use
    $post_id = $atts['id'] ? $atts['id'] : get_queried_object_id();
    $post_title = get_the_title( $post_id );

    // Get repeater field 'product_info'
    $product_info = get_field( 'product_info', $post_id );
    if ( empty( $product_info ) || ! is_array( $product_info ) ) {
        return '';
    }

    // Build hidden input elements for each repeater row
    $output = '<input type="hidden" name="post_title" value="' . esc_attr( $post_title ) . '">';
    foreach ( $product_info as $row ) {
        $title = isset( $row['title'] ) ? $row['title'] : '';
        $desc  = isset( $row['desc'] )  ? $row['desc']  : '';
        $combined = $title . ' - ' . $desc;
        $output .= '<input type="hidden" name="product_info[]" value="' . esc_attr( $combined ) . '">';
    }

    return $output;
}
add_shortcode( 'product_info_fields', 'saphia_product_info_shortcode' );

