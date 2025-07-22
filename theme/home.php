<?php
/**
 * Template Name: Trang chủ
 */

// Đảm bảo session đã được khởi
if ( ! session_id() ) {
    session_start();
}

get_header();

// 1. Lấy raw value từ session (có thể là ID hoặc URL)
$raw_layout = $_SESSION['homepage_layout'] ?? '';

// 2. Chuyển sang page ID
if ( is_numeric( $raw_layout ) ) {
    $selected_page_id = intval( $raw_layout );
} elseif ( is_string( $raw_layout ) && strpos( $raw_layout, 'http' ) === 0 ) {
    // Nếu session lưu URL, dùng hàm url_to_postid để lấy ID
    $selected_page_id = url_to_postid( $raw_layout );
} else {
    $selected_page_id = 0;
}

// 3. ID của trang gốc (template này)
$base_id = get_queried_object_id();

// 4. Lấy repeater từ ACF Option và build mảng valid IDs
$rows = get_field( 'homepage_layout_list', 'option' ) ?: [];
$valid_ids = [];
foreach ( $rows as $row ) {
    $pid_raw = $row['select_page'];
    if ( is_numeric( $pid_raw ) ) {
        $pid_id = intval( $pid_raw );
    } else {
        $pid_id = url_to_postid( $pid_raw );
    }
    if ( $pid_id ) {
        $valid_ids[] = $pid_id;
    }
}

// 5. Nếu selected_page_id hợp lệ, load nội dung page đó
if ( $selected_page_id && in_array( $selected_page_id, $valid_ids, true ) ) {
    $page_id = $selected_page_id;
    global $post;
    $post = get_post( $page_id );
    setup_postdata( $post );
} else {
    $page_id = $base_id;
}

// 6. Dùng slug làm class layout
$layout = get_post_field( 'post_name', $page_id );
?>
<main<?php if ( $layout && $layout !== 'default' ): ?> class="homepage homepage-<?php echo esc_attr( $layout ); ?>"<?php endif; ?>>
    <?php the_content(); ?>
</main>
<?php
// Reset postdata nếu đã swap
if ( $selected_page_id && in_array( $selected_page_id, $valid_ids, true ) ) {
    wp_reset_postdata();
}

get_footer();