<?php

// Khởi động session để lưu trữ phonenumber
add_action( 'init', function() {
    if ( ! session_id() ) {
        session_start();
    }
} );

add_action( 'wp_ajax_load_posts_by_ward', 'ajax_load_posts_by_ward' );
add_action( 'wp_ajax_nopriv_load_posts_by_ward', 'ajax_load_posts_by_ward' );

function ajax_load_posts_by_ward() {
	if ( ! isset( $_POST['security'] ) || ! wp_verify_nonce( $_POST['security'], 'common_nonce' ) )
	{
		wp_send_json_error( array( 'message' => 'Nonce verification failed' ) );
		wp_die();
	}
$ward_id = isset( $_POST['ward_id'] ) ? sanitize_text_field( $_POST['ward_id'] ) : '';

	$args = array(
		'post_type' => 'branch',
		'posts_per_page' => -1,
		'post_status' => 'publish',
	);

	if ( $ward_id !== 'all' && ! empty( $ward_id ) )
	{
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'province',
				'field' => 'term_id',
				'terms' => (int) $ward_id,
			),
		);
	}

	$query = new WP_Query( $args );

	ob_start();
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile;
		wp_reset_postdata();
	else :
		echo '<p>' . __( 'Không có bài viết nào.', 'acbs' ) . '</p>';
	endif;

	$html = ob_get_clean();
	echo $html;
	wp_die();
}

add_action('wp_ajax_load_wards_and_posts', 'ajax_load_wards_and_posts');
add_action('wp_ajax_nopriv_load_wards_and_posts', 'ajax_load_wards_and_posts');

function ajax_load_wards_and_posts() {
    if ( ! isset( $_POST['security'] ) || ! wp_verify_nonce( $_POST['security'], 'common_nonce' ) )
	{
		wp_send_json_error( array( 'message' => 'Nonce verification failed' ) );
		wp_die();
	}
    $province_id = isset($_REQUEST['province_id']) ? (int) $_REQUEST['province_id'] : 0;

    if ($province_id === 0 && $_REQUEST['province_id'] !== 'all') {
        wp_send_json_error(['message' => 'Invalid province ID']);
        return;
    }

    if ($_REQUEST['province_id'] === 'all') {
        $query = new WP_Query([
            'post_type'      => 'branch',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        ]);

        ob_start();
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                get_template_part('template-parts/content', get_post_type());
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>' . __('Không có bài viết nào.', 'acbs') . '</p>';
        endif;
        $html = ob_get_clean();

        wp_send_json_success([
            'wards' => [],
            'html'  => $html,
        ]);
    }

    // Lấy danh mục cấp 2 (con của province đã chọn)
    $child_terms = get_terms([
        'taxonomy'   => 'province',
        'hide_empty' => false,
        'parent'     => $province_id,
    ]);

    $wards = [];
    foreach ($child_terms as $term) {
        // Kiểm tra số bài viết cho mỗi term
        $count_query = new WP_Query([
            'post_type'      => 'branch',
            'posts_per_page' => 1,
            'post_status'    => 'publish',
            'tax_query'      => [
                [
                    'taxonomy' => 'province',
                    'field'    => 'term_id',
                    'terms'    => $term->term_id,
                ],
            ],
        ]);
        if ( $count_query->have_posts() ) {
            $wards[] = [
                'id'   => $term->term_id,
                'name' => $term->name,
            ];
        }
        wp_reset_postdata();
    }

    // Bài viết thuộc danh mục cấp 2 đầu tiên (nếu có)
    $html = '';
    if (!empty($wards)) {
        $query = new WP_Query([
            'post_type'      => 'branch',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'tax_query'      => [
                [
                    'taxonomy' => 'province',
                    'field'    => 'term_id',
                    'terms'    => $wards[0]['id'],
                ],
            ],
        ]);

        ob_start();
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                get_template_part('template-parts/content', get_post_type());
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>' . __('Không có bài viết nào.', 'acbs') . '</p>';
        endif;
        $html = ob_get_clean();
    }

    wp_send_json_success([
        'wards' => $wards,
        'html'  => $html,
    ]);
}

// Đăng ký AJAX tạo hoặc lấy lại bài theo số điện thoại
add_action( 'wp_ajax_ph_tracking_create', 'ph_tracking_create_callback' );
add_action( 'wp_ajax_nopriv_ph_tracking_create', 'ph_tracking_create_callback' );
function ph_tracking_create_callback() {
    // Kiểm tra nonce
    if ( ! isset( $_POST['security'] ) || ! wp_verify_nonce( $_POST['security'], 'common_nonce' ) ) {
        wp_send_json_error( [ 'message' => 'Nonce verification failed' ] );
    }

    // Lấy và sanitize dữ liệu
    $name  = isset( $_POST['name_customer'] ) ? sanitize_text_field( wp_unslash( $_POST['name_customer'] ) ) : '';
    $phone = isset( $_POST['name_phone'] )    ? sanitize_text_field( wp_unslash( $_POST['name_phone'] ) )    : '';

    if ( empty( $name ) || empty( $phone ) ) {
        wp_send_json_error( [ 'message' => 'Nhập đầy đủ thông tin' ] );
    }

    // Kiểm tra xem đã có post với số điện thoại này chưa
    $existing = get_posts( [
        'post_type'      => 'ph_tracking',
        'posts_per_page' => 1,
        'meta_query'     => [ [
            'key'   => 'name_phone',
            'value' => $phone,
        ] ],
    ] );

    if ( ! empty( $existing ) ) {
        $post_id = $existing[0]->ID;
         $message = 'Chào mừng bạn đã quay trở lại';
    } else {
        // Chưa có, tạo mới
        $post_id = wp_insert_post( [
            'post_type'   => 'ph_tracking',
            'post_title'  => $name . ' - ' . $phone,
            'post_status' => 'publish',
        ] );
        if ( is_wp_error( $post_id ) || ! $post_id ) {
            wp_send_json_error( [ 'message' => 'Không thể tạo bản ghi' ] );
        }
        $message = 'Bạn đã đăng ký thành công !';
    }

    // Cập nhật custom fields
    if ( function_exists( 'update_field' ) ) {
        update_field( 'name_customer', $name,  $post_id );
        update_field( 'name_phone',    $phone, $post_id );
    } else {
        update_post_meta( $post_id, 'name_customer', $name );
        update_post_meta( $post_id, 'name_phone',    $phone );
    }

    // Lưu số điện thoại vào session với timestamp
    $_SESSION['ph_phone']    = $phone;
    $_SESSION['ph_phone_ts'] = time();

    wp_send_json_success( [ 'message' => $message ] );
}

// Đăng ký AJAX cập nhật độ pH và trạng thái khách hàng
add_action( 'wp_ajax_ph_tracking_update', 'ph_tracking_update_callback' );
add_action( 'wp_ajax_nopriv_ph_tracking_update', 'ph_tracking_update_callback' );
function ph_tracking_update_callback() {
    // Kiểm tra nonce
    if ( ! isset( $_POST['security'] ) || ! wp_verify_nonce( $_POST['security'], 'common_nonce' ) ) {
        wp_send_json_error( [ 'message' => 'Nonce verification failed' ] );
    }

    // Kiểm tra session phone
    if ( ! session_id() || empty( $_SESSION['ph_phone'] ) ) {
        wp_send_json_error( [ 'message' => 'Chưa có phiên làm việc, vui lòng tạo trước.' ] );
    }

    // Hạn chế 1 update/ngày
    $today = date( 'Y-m-d' );
    if ( isset( $_SESSION['ph_update_date'] ) && $_SESSION['ph_update_date'] === $today ) {
        wp_send_json_error( [ 'message' => 'Bạn đã cập nhật trạng thái hôm nay rồi !' ] );
    }

    // Lấy input
    $ph     = isset( $_POST['ph'] )     ? sanitize_text_field( wp_unslash( $_POST['ph'] ) )     : '';
    $status = isset( $_POST['status'] ) ? sanitize_text_field( wp_unslash( $_POST['status'] ) ) : '';

    if ( $ph === '' || $status === '' ) {
        wp_send_json_error( [ 'message' => 'Thiếu dữ liệu pH hoặc trạng thái' ] );
    }

    // Tìm post theo số điện thoại trong session
    $posts = get_posts( [
        'post_type'      => 'ph_tracking',
        'posts_per_page' => 1,
        'meta_query'     => [ [
            'key'   => 'name_phone',
            'value' => $_SESSION['ph_phone'],
        ] ],
    ] );
    if ( empty( $posts ) ) {
        wp_send_json_error( [ 'message' => 'Không tìm thấy bản ghi theo số điện thoại.' ] );
    }
    $post_id = $posts[0]->ID;

    // Lấy repeater hiện tại
    $rows = function_exists('get_field') ? get_field( 'ph_tracking', $post_id ) : get_post_meta( $post_id, 'ph_tracking', true );
    if ( ! is_array( $rows ) ) {
        $rows = [];
    }

    // Thêm dòng mới
    $rows[] = [
        'ph'     => $ph,
        'status' => $status,
    ];

    // Giữ tối đa 7 dòng
    if ( count( $rows ) > 7 ) {
        array_shift( $rows );
    }

    // Cập nhật repeater
    if ( function_exists('update_field') ) {
        update_field( 'ph_tracking', $rows, $post_id );
    } else {
        update_post_meta( $post_id, 'ph_tracking', $rows );
    }

    // Ghi lại ngày cập nhật để khóa 1 lần/ngày
    $_SESSION['ph_update_date'] = $today;

    // Khởi tạo hoặc lấy dữ liệu pH từ session cũ
    $ph_data = ( isset( $_SESSION['ph_data'] ) && is_array( $_SESSION['ph_data'] ) )
        ? $_SESSION['ph_data']
        : array_fill( 0, 7, 0 );
    // Tính index theo ngày trong tuần: 0=Thứ 2,...6=Chủ nhật
    $phpDay = (int) date( 'w' ); // 0 (Sunday) to 6 (Saturday)
    $index  = ( $phpDay + 6 ) % 7;
    // Cập nhật giá trị pH mới vào vị trí tương ứng
    $ph_data[ $index ] = floatval( $ph );
    // Lưu lại session
    $_SESSION['ph_data'] = $ph_data;

    wp_send_json_success();
}

// Endpoint AJAX trả về dữ liệu pH từ session
// Endpoint AJAX trả về dữ liệu pH từ session
add_action( 'wp_ajax_ph_tracking_get_data',    'ph_tracking_get_data_callback' );
add_action( 'wp_ajax_nopriv_ph_tracking_get_data', 'ph_tracking_get_data_callback' );
function ph_tracking_get_data_callback() {
    // Kiểm tra session và số điện thoại
    if ( ! session_id() || empty( $_SESSION['ph_phone'] ) ) {
        wp_send_json_error( [ 'message' => 'Chưa có phiên làm việc.' ] );
    }
    // Tìm post theo số điện thoại
    $posts = get_posts( [
        'post_type'      => 'ph_tracking',
        'posts_per_page' => 1,
        'meta_query'     => [ [
            'key'   => 'name_phone',
            'value' => $_SESSION['ph_phone'],
        ] ],
    ] );
    if ( empty( $posts ) ) {
        wp_send_json_error( [ 'message' => 'Không tìm thấy bản ghi theo số điện thoại.' ] );
    }
    $post_id = $posts[0]->ID;

    // Lấy repeater rows
    $rows = function_exists('get_field')
        ? get_field( 'ph_tracking', $post_id )
        : get_post_meta( $post_id, 'ph_tracking', true );
    if ( ! is_array( $rows ) ) {
        $rows = [];
    }
    // Lấy chỉ giá trị ph
    $ph_values = array_map( function( $r ) {
        return floatval( $r['ph'] );
    }, $rows );
    // Đảm bảo có đúng 7 phần tử, pad với 0 đầu mảng hoặc cắt bớt nếu vượt
    $count = count( $ph_values );
    if ( $count < 7 ) {
        $ph_values = array_merge( array_fill( 0, 7 - $count, 0 ), $ph_values );
    } elseif ( $count > 7 ) {
        $ph_values = array_slice( $ph_values, -7 );
    }
    // Trả về mảng 7 giá trị pH
    wp_send_json_success( $ph_values );
}