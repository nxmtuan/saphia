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

	return $form;
} );

add_filter( 'wpcf7_autop_or_not', '__return_false' );
