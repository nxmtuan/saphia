<?php
add_action( 'acf/init', 'my_acf_init_block_types' );
function my_acf_init_block_types() {
	if ( function_exists( 'acf_register_block_type' ) )
	{
		acf_register_block_type( array(
			'name' => 'intro',
			'title' => __( '[Saphia]-[Home] Khối giới thiệu sản phẩm' ),
			'description' => __( '[Saphia]-[Home] Khối giới thiệu sản phẩm' ),
			'render_template' => 'blocks/intro-product.php',
			'keywords' => array( 'intro', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'product-featured',
			'title' => __( '[Saphia]-[Home] Sản phẩm nổi bật' ),
			'description' => __( '[Saphia]-[Home] Sản phẩm nổi bật' ),
			'render_template' => 'blocks/product-featured.php',
			'keywords' => array( 'product-featured', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block-agency',
			'title' => __( '[Saphia]-[Home] Đại lý phân phối' ),
			'description' => __( '[Saphia]-[Home] Đại lý phân phối' ),
			'render_template' => 'blocks/block-agency.php',
			'keywords' => array( 'block-agency', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block-news',
			'title' => __( '[Saphia]-[Home] Tin tức nổi bật' ),
			'description' => __( '[Saphia]-[Home] Tin tức nổi bật' ),
			'render_template' => 'blocks/block-news.php',
			'keywords' => array( 'block-news', 'quote' ),
		) );
        		acf_register_block_type( array(
			'name' => 'block_partner-slider',
			'title' => __( '[Saphia]-[Home] Slider đối tác' ),
			'description' => __( '[Saphia]-[Home] Slider đối tác' ),
			'render_template' => 'blocks/block_partner-slider.php',
			'keywords' => array( 'block_partner-slider', 'quote' ),
		) );
	}
}
