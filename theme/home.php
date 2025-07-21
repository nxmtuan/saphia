<?php

/**
Template Name: Trang chủ
 */

get_header();
if ( ! session_id() )
{
	session_start();
}
// If user explicitly selects a layout via ?layout=xxx, save to session and reload without the param
if ( ! empty( $_GET['layout'] ) )
{
	$allowed = [ 'default', 'customer', 'partner', 'distributor', 'otc' ];
	$layout_key = sanitize_key( $_GET['layout'] );
	if ( in_array( $layout_key, $allowed, true ) )
	{
		$_SESSION['homepage_layout'] = $layout_key;
	}
	wp_redirect( remove_query_arg( 'layout' ) );
	exit;
}
// Base page ID (default front page page)
$base_id = get_queried_object_id();
// Determine selected layout key from session
$selected_layout = ! empty( $_SESSION['homepage_layout'] ) 
    ? sanitize_key( $_SESSION['homepage_layout'] )
    : '';

// Build map of layout keys to page IDs that use this template
$home_pages = get_posts([
    'post_type'   => 'page',
    'numberposts' => -1,
    'meta_key'    => '_wp_page_template',
    'meta_value'  => 'home.php',
    'fields'      => 'ids',
]);
$layout_map = [];
foreach ( $home_pages as $pid ) {
    $key = get_field( 'select_homepage_layout', $pid );
    if ( $key ) {
        $layout_map[ $key ] = $pid;
    }
}

// If a valid layout is selected, switch global post to that page
if ( $selected_layout && isset( $layout_map[ $selected_layout ] ) ) {
    $page_id = $layout_map[ $selected_layout ];
    $post = get_post( $page_id );
    setup_postdata( $post );
} else {
    $page_id = $base_id;
}

// Determine layout class for CSS
$layout = $selected_layout ?: ( get_field( 'select_homepage_layout', $page_id ) ?: 'default' );
?>
<main class="homepage homepage-<?php echo esc_attr( $layout ); ?>">
    <?php the_content(); ?>
</main>
<?php
// Reset postdata if we used setup_postdata()
if ( $selected_layout && isset( $layout_map[ $selected_layout ] ) ) {
    wp_reset_postdata();
}
get_footer();