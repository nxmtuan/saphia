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
		acf_register_block_type( array(
			'name' => 'block_mission-highlights',
			'title' => __( '[Saphia]-[Home] Khối ảnh mansonry' ),
			'description' => __( '[Saphia]-[Home] Khối ảnh mansonry' ),
			'render_template' => 'blocks/block_mission-highlights.php',
			'keywords' => array( 'block_mission-highlights', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block-strong_point',
			'title' => __( '[Saphia]-[Home] Điểm mạnh' ),
			'description' => __( '[Saphia]-[Home] Điểm mạnh' ),
			'render_template' => 'blocks/block-strong_point.php',
			'keywords' => array( 'block-strong_point', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block-benefit',
			'title' => __( '[Saphia]-[Home] Lợi ích' ),
			'description' => __( '[Saphia]-[Home] Lợi ích' ),
			'render_template' => 'blocks/block-benefit.php',
			'keywords' => array( 'block-benefit', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_core-values',
			'title' => __( '[Saphia]-[Home] Giá trị cốt lõi' ),
			'description' => __( '[Saphia]-[Home] Giá trị cốt lõi' ),
			'render_template' => 'blocks/block_core-values.php',
			'keywords' => array( 'block_core-values', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'about_brand-intro',
			'title' => __( '[Saphia]-[About] Khối banner' ),
			'description' => __( '[Saphia]-[About] Khối banner' ),
			'render_template' => 'blocks/about_brand-intro.php',
			'keywords' => array( 'about_brand-intro', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'about_image-content',
			'title' => __( '[Saphia]-[About] Hình ảnh nội dung' ),
			'description' => __( '[Saphia]-[About] Hình ảnh nội dung' ),
			'render_template' => 'blocks/about_image-content.php',
			'keywords' => array( 'about_image-content', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'about_missions',
			'title' => __( '[Saphia]-[About] Sứ mệnh' ),
			'description' => __( '[Saphia]-[About] Sứ mệnh' ),
			'render_template' => 'blocks/about_mission.php',
			'keywords' => array( 'about_missions', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'about_number',
			'title' => __( '[Saphia]-[About] Số liệu' ),
			'description' => __( '[Saphia]-[About] Số liệu' ),
			'render_template' => 'blocks/about_number.php',
			'keywords' => array( 'about_number', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'about_staff',
			'title' => __( '[Saphia]-[About] Đội ngũ lãnh đạo' ),
			'description' => __( '[Saphia]-[About] Đội ngũ lãnh đạo' ),
			'render_template' => 'blocks/about_staff.php',
			'keywords' => array( 'about_staff', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'about_trip',
			'title' => __( '[Saphia]-[About] Hành trình' ),
			'description' => __( '[Saphia]-[About] Hành trình' ),
			'render_template' => 'blocks/about_trip.php',
			'keywords' => array( 'about_trip', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_category',
			'title' => __( '[Saphia]-[Product] Danh mục sản phẩm' ),
			'description' => __( '[Saphia]-[Product] Danh mục sản phẩm' ),
			'render_template' => 'blocks/block_category.php',
			'keywords' => array( 'block_category', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_balance',
			'title' => __( '[Saphia]-[Product] Cân Bằng Tế Bào' ),
			'description' => __( '[Saphia]-[Product] Cân Bằng Tế Bào' ),
			'render_template' => 'blocks/block_balance.php',
			'keywords' => array( 'block_balance', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_roadmap',
			'title' => __( '[Saphia]-[Product] Lộ trình cải thiện' ),
			'description' => __( '[Saphia]-[Product] Lộ trình cải thiện' ),
			'render_template' => 'blocks/block_roadmap.php',
			'keywords' => array( 'block_roadmap', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_product_desc',
			'title' => __( '[Saphia]-[Product] Khối sản phẩm' ),
			'description' => __( '[Saphia]-[Product] Khối sản phẩm' ),
			'render_template' => 'blocks/block_product_desc.php',
			'keywords' => array( 'block_product_desc', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_product_impact',
			'title' => __( '[Saphia]-[Product] Tác động của kiềm thảo' ),
			'description' => __( '[Saphia]-[Product] Tác động của kiềm thảo' ),
			'render_template' => 'blocks/block_product_impact.php',
			'keywords' => array( 'block_product_impact', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_product-excellence',
			'title' => __( '[Saphia]-[Product] Thượng tôn sản phẩm' ),
			'description' => __( '[Saphia]-[Product] Thượng tôn sản phẩm' ),
			'render_template' => 'blocks/block_product-excellence.php',
			'keywords' => array( 'block_product-excellence', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_product-video',
			'title' => __( '[Saphia]-[Product] Thành phần thảo dược' ),
			'description' => __( '[Saphia]-[Product] Thành phần thảo dược' ),
			'render_template' => 'blocks/block_product-video.php',
			'keywords' => array( 'block_product-video', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_product-recreate',
			'title' => __( '[Saphia]-[Product] Tái tạo sức sống' ),
			'description' => __( '[Saphia]-[Product] Tái tạo sức sống' ),
			'render_template' => 'blocks/block_product-recreate.php',
			'keywords' => array( 'block_product-recreate', 'quote' ),
		) );
	}
}
