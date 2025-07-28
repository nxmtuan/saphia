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