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
			'name' => 'home_trip',
			'title' => __( '[Saphia]-[Home] Hành trình' ),
			'description' => __( '[Saphia]-[Home] Hành trình' ),
			'render_template' => 'blocks/home_trip.php',
			'keywords' => array( 'home_trip', 'quote' ),
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
			'title' => __( '[Saphia]-[Page] Khối banner' ),
			'description' => __( '[Saphia]-[Page] Khối banner' ),
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
		acf_register_block_type( array(
			'name' => 'block_product-sustainable',
			'title' => __( '[Saphia]-[Product] Phát Triển Bền Vững' ),
			'description' => __( '[Saphia]-[Product] Phát Triển Bền Vững' ),
			'render_template' => 'blocks/block_product-sustainable.php',
			'keywords' => array( 'block_product-sustainable', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'single_product-banner',
			'title' => __( '[Saphia]-[Single Product] Banner sản phẩm' ),
			'description' => __( '[Saphia]-[Single Product] Banner sản phẩm' ),
			'render_template' => 'blocks/single_product-banner.php',
			'keywords' => array( 'single_product-banner', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'single_product-cart',
			'title' => __( '[Saphia]-[Single Product] Thêm vào giỏ hàng' ),
			'description' => __( '[Saphia]-[Single Product] Thêm vào giỏ hàng' ),
			'render_template' => 'blocks/single_product-cart.php',
			'keywords' => array( 'single_product-cart', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'single_product-usage',
			'title' => __( '[Saphia]-[Single Product] Hướng dẫn sử dụng' ),
			'description' => __( '[Saphia]-[Single Product] Hướng dẫn sử dụng' ),
			'render_template' => 'blocks/single_product-usage.php',
			'keywords' => array( 'single_product-usage', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'single_product-certificate',
			'title' => __( '[Saphia]-[Single Product] Chứng nhận' ),
			'description' => __( '[Saphia]-[Single Product] Chứng nhận' ),
			'render_template' => 'blocks/single_product-certificate.php',
			'keywords' => array( 'single_product-certificate', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'single_product-rate',
			'title' => __( '[Saphia]-[Single Product] Đánh giá' ),
			'description' => __( '[Saphia]-[Single Product] Đánh giá' ),
			'render_template' => 'blocks/single_product-rate.php',
			'keywords' => array( 'single_product-rate', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'single_product-related',
			'title' => __( '[Saphia]-[Single Product] Sản phẩm liên quan' ),
			'description' => __( '[Saphia]-[Single Product] Sản phẩm liên quan' ),
			'render_template' => 'blocks/single_product-related.php',
			'keywords' => array( 'single_product-related', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'product-category',
			'title' => __( '[Saphia]-[Product Category] Sản phẩm' ),
			'description' => __( '[Saphia]-[Product Category] Sản phẩm' ),
			'render_template' => 'blocks/product-category.php',
			'keywords' => array( 'product-category', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'ttkh_banner',
			'title' => __( '[Saphia]-[Thông tin khoa học] Banner' ),
			'description' => __( '[Saphia]-[Thông tin khoa học] Banner' ),
			'render_template' => 'blocks/ttkh_banner.php',
			'keywords' => array( 'ttkh_banner', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'ttkh_tech',
			'title' => __( '[Saphia]-[Thông tin khoa học] Công nghệ' ),
			'description' => __( '[Saphia]-[Thông tin khoa học] Công nghệ' ),
			'render_template' => 'blocks/ttkh_tech.php',
			'keywords' => array( 'ttkh_tech', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'ttkh_resoure',
			'title' => __( '[Saphia]-[Thông tin khoa học] Nguồn gốc & sức mạnh' ),
			'description' => __( '[Saphia]-[Thông tin khoa học] Nguồn gốc & sức mạnh' ),
			'render_template' => 'blocks/ttkh_resoure.php',
			'keywords' => array( 'ttkh_resoure', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'ttkh_principle',
			'title' => __( '[Saphia]-[Thông tin khoa học] Nguyên lý' ),
			'description' => __( '[Saphia]-[Thông tin khoa học] Nguyên lý' ),
			'render_template' => 'blocks/ttkh_principle.php',
			'keywords' => array( 'ttkh_principle', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'ttkh_apply',
			'title' => __( '[Saphia]-[Thông tin khoa học] Ứng dụng công nghệ' ),
			'description' => __( '[Saphia]-[Thông tin khoa học] Ứng dụng công nghệ' ),
			'render_template' => 'blocks/ttkh_apply.php',
			'keywords' => array( 'ttkh_apply', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'sapphire_trip',
			'title' => __( '[Saphia]-[Ngọc xanh] Hành trình' ),
			'description' => __( '[Saphia]-[Ngọc xanh ] Hành trình' ),
			'render_template' => 'blocks/sapphire_trip.php',
			'keywords' => array( 'sapphire_trip', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'block_campaign',
			'title' => __( '[Saphia]-[Ngọc xanh] Khối nội dung' ),
			'description' => __( '[Saphia]-[Ngọc xanh ] Khối nội dung' ),
			'render_template' => 'blocks/block_campaign.php',
			'keywords' => array( 'block_campaign', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'aspiration',
			'title' => __( '[Saphia]-[Vì cộng đồng] Khát vọng' ),
			'description' => __( '[Saphia]-[Vì cộng đồng] Khát vọng' ),
			'render_template' => 'blocks/aspiration.php',
			'keywords' => array( 'aspiration', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'aspiration-video',
			'title' => __( '[Saphia]-[Vì cộng đồng] Video' ),
			'description' => __( '[Saphia]-[Vì cộng đồng] Video' ),
			'render_template' => 'blocks/aspiration-video.php',
			'keywords' => array( 'aspiration-video', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'aspiration-form',
			'title' => __( '[Saphia]-[Vì cộng đồng] Form đăng ký' ),
			'description' => __( '[Saphia]-[Vì cộng đồng] Form đăng ký' ),
			'render_template' => 'blocks/aspiration-form.php',
			'keywords' => array( 'aspiration-form', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'research-banner',
			'title' => __( '[Saphia]-[Nghiên cứu và phát triển] Banner' ),
			'description' => __( '[Saphia]-[Nghiên cứu và phát triển] Banner' ),
			'render_template' => 'blocks/research-banner.php',
			'keywords' => array( 'research-banner', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'research-faq',
			'title' => __( '[Saphia]-[Nghiên cứu và phát triển] Kết quả nghiên cứu' ),
			'description' => __( '[Saphia]-[Nghiên cứu và phát triển] Kết quả nghiên cứu' ),
			'render_template' => 'blocks/research-faq.php',
			'keywords' => array( 'research-faq', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'research-analysis',
			'title' => __( '[Saphia]-[Nghiên cứu và phát triển] Kết quả phân tích' ),
			'description' => __( '[Saphia]-[Nghiên cứu và phát triển] Kết quả phân tích' ),
			'render_template' => 'blocks/research-analysis.php',
			'keywords' => array( 'research-analysis', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'research-file',
			'title' => __( '[Saphia]-[Nghiên cứu và phát triển] Hồ sơ nhà khoa học' ),
			'description' => __( '[Saphia]-[Nghiên cứu và phát triển] Hồ sơ nhà khoa học' ),
			'render_template' => 'blocks/research-file.php',
			'keywords' => array( 'research-file', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'research-invention',
			'title' => __( '[Saphia]-[Nghiên cứu và phát triển] Độc quyền sáng chế' ),
			'description' => __( '[Saphia]-[Nghiên cứu và phát triển] Độc quyền sáng chế' ),
			'render_template' => 'blocks/research-invention.php',
			'keywords' => array( 'research-invention', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'support-customer',
			'title' => __( '[Saphia]- Hỗ trợ khách hàng' ),
			'description' => __( '[Saphia]- Hỗ trợ khách hàng' ),
			'render_template' => 'blocks/support-customer.php',
			'keywords' => array( 'support-customer', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'branch-system',
			'title' => __( '[Saphia]- Hệ thống chi nhánh' ),
			'description' => __( '[Saphia]- Hệ thống chi nhánh' ),
			'render_template' => 'blocks/branch-system.php',
			'keywords' => array( 'branch-system', 'quote' ),
		) );
		acf_register_block_type( array(
			'name' => 'branch-road',
			'title' => __( '[Saphia]-[Điểm bán] Đại lộ danh vọng' ),
			'description' => __( '[Saphia]-[Điểm bán] Đại lộ danh vọng' ),
			'render_template' => 'blocks/branch-road.php',
			'keywords' => array( 'branch-road', 'quote' ),
		) );
				acf_register_block_type( array(
			'name' => 'branch-office',
			'title' => __( '[Saphia]-[Điểm bán] Văn phòng đại diện' ),
			'description' => __( '[Saphia]-[Điểm bán] Văn phòng đại diện' ),
			'render_template' => 'blocks/branch-office.php',
			'keywords' => array( 'branch-office', 'quote' ),
		) );

	}
}
