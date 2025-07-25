<?php

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