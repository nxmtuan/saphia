<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package gnws
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gnws_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'gnws_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function gnws_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'gnws_pingback_header' );

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

/**
 * Function help call file SVG from assets/svg
 */
function svg( $name, $width = false, $height = false, $class = '' ) {
	$dir = TEMPLATEPATH . '/assets/svg/';
	$path = $dir . $name . '.svg';

	if ( $name && file_exists( $path ) ) {
		$svg = file_get_contents( $path );
		if ( $width || $height || $class ) {
			$size = '<svg';
			$new_size = '<svg';
			if ( $width ) {
				$new_size .= ' width="' . $width . 'px"';
			}
			if ( $height ) {
				$new_size .= ' height="' . $height . 'px"';
			}
			if ( $class ) {
				$new_size .= ' class="' . esc_attr( $class ) . '"';
			}
			$svg = str_replace( $size, $new_size, $svg );
		}
		return $svg;
	}
	return '';
}
/**
 * Function help call file SVG from url
 */
// function svg_dir( $path, $width = false, $height = false ) {
// 	if ( $path ) {
// 		$svg = file_get_contents( $path );
// 		if ( $width ) {
// 			$size = '<svg';
// 			$new_size = '<svg width="' . $width . 'px"';
// 			$svg = str_replace( $size, $new_size, $svg );
// 		}
// 		if ( $height ) {
// 			$size = '<svg';
// 			$new_size = '<svg height="' . $height . 'px"';
// 			$svg = str_replace( $size, $new_size, $svg );
// 		}
// 		return $svg;
// 	}
// 	return '';
// }

if ( ! function_exists( 'gnws_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function gnws_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
		} else {
			the_post_thumbnail_url( 'thumbnail' );
		}
	}
endif;

if ( ! function_exists( 'gnws_post_thumbnail_full' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function gnws_post_thumbnail_full() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
		} else {
			the_post_thumbnail_url();
		}
	}
endif;

/**
 * Displays pagination style by number page
 */
function gnws_pagination() {

	if ( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if ( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max = intval( $wp_query->max_num_pages );

	/** Add current page to the array */
	$links = array();
	if ( $paged >= 1 )
		$links[] = $paged;

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	// Container start
	echo '<div class="w-full flex justify-center items-center md:gap-10 gap-6">' . "\n";

	// Previous button
	if ( $paged > 1 ) {
		printf(
			'<a href="%s" class="button--previous size-10 shadow-btn border border-[#CDD4E7] bg-white hover:text-white hover:bg-primary hover:border-transparent text-black flex justify-center items-center gap-2 rounded-full overflow-hidden font-medium transition-all duration-500"><i>%s</i></a>' . "\n",
			esc_url( get_pagenum_link( $paged - 1 ) ),
			svg( 'angle-left' )
		);
	} else {
		printf(
			'<span class="button--previous shrink-0 size-10 shadow-btn border border-[#CDD4E7] bg-gray-200 text-gray-400 flex justify-center items-center gap-2 rounded-full overflow-hidden font-medium transition-all duration-500 cursor-not-allowed"><i>%s</i></span>' . "\n",
			svg( 'angle-left' )
		);
	}

	// Page links list start
	echo '<ul class="flex items-center md:gap-2 text-sm font-medium">' . "\n";

	// First page + ellipsis (if needed)
	if ( ! in_array( 1, $links, true ) ) {
		$active = ( 1 === $paged ) ? ' active' : '';
		printf(
			'<li><a href="%s" class="size-8 flex justify-center items-center%s [&:not(.active)]:bg-transparent hover([&:not(.active)]):bg-primary [&:not(.active)]:text-black text-white hover:[&:not(.active)]:text-white rounded-full overflow-hidden cursor-pointer transition-all duration-500">%d</a></li>' . "\n",
			esc_url( get_pagenum_link( 1 ) ),
			$active,
			1
		);
		if ( ! in_array( 2, $links, true ) ) {
			echo '<li><span class="size-8 flex justify-center items-center text-body">…</span></li>' . "\n";
		}
	}

	// Main page numbers
	sort( $links );
	foreach ( (array) $links as $link ) {
		$is_current = ( $link === $paged );
		if ( $is_current ) {
			printf(
				'<li><a href="javascript:void(0);" class="size-8 flex justify-center items-center bg-primary text-white rounded-full overflow-hidden cursor-default active">%d</a></li>' . "\n",
				$link
			);
		} else {
			printf(
				'<li><a href="%s" class="size-8 flex justify-center items-center [&:not(.active)]:bg-transparent hover:[&:not(.active)]:bg-primary [&:not(.active)]:text-black text-white hover:[&:not(.active)]:text-white rounded-full overflow-hidden cursor-pointer transition-all duration-500">%d</a></li>' . "\n",
				esc_url( get_pagenum_link( $link ) ),
				$link
			);
		}
	}

	// Last page + ellipsis (if needed)
	if ( ! in_array( $max, $links, true ) ) {
		if ( ! in_array( $max - 1, $links, true ) ) {
			echo '<li><span class="size-8 flex justify-center items-center text-body">…</span></li>' . "\n";
		}
		$active = ( $max === $paged ) ? ' active' : '';
		printf(
			'<li><a href="%s" class="size-8 flex justify-center items-center%s [&:not(.active)]:bg-transparent hover:[&:not(.active)]:bg-primary [&:not(.active)]:text-black text-white hover:[&:not(.active)]:text-white rounded-full overflow-hidden cursor-pointer transition-all duration-500">%d</a></li>' . "\n",
			esc_url( get_pagenum_link( $max ) ),
			$active,
			$max
		);
	}

	// Close list
	echo '</ul>' . "\n";

	// Next button
	if ( $paged < $max ) {
		printf(
			'<a href="%s" class="button--next shrink-0 size-10 shadow-btn border border-[#CDD4E7] bg-white hover:bg-primary hover:border-transparent text-black flex hover:text-white justify-center items-center gap-2 rounded-full overflow-hidden font-medium transition-all duration-500"><i>%s</i></a>' . "\n",
			esc_url( get_pagenum_link( $paged + 1 ) ),
			svg( 'angle-right' )
		);
	} else {
		printf(
			'<span class="button--next size-10 shadow-btn border border-[#CDD4E7] bg-gray-200 text-gray-400 flex justify-center items-center gap-2 rounded-full overflow-hidden font-medium transition-all duration-500 cursor-not-allowed"><i>%s</i></span>' . "\n",
			svg( 'angle-right' )
		);
	}

	// Container end
	echo '</div>' . "\n";
}

function gnws_pagination_template($input = null)
{
	// Nếu truyền vào là mảng chứa total và current
	if (is_array($input)) {
		$total_pages = isset($input['total']) ? (int) $input['total'] : 1;
		$current_page = isset($input['current']) ? (int) $input['current'] : 1;
	} else {
		// Trường hợp truyền vào là WP_Query hoặc null
		if ($input === null) {
			global $wp_query;
			$input = $wp_query;
		}

		$total_pages = $input->max_num_pages;

		$current_page = max(1, get_query_var('paged'));
		if (isset($_GET['paged'])) {
			$current_page = absint($_GET['paged']);
		}
	}

	if ($total_pages <= 1)
		return;

	$pagination_links = paginate_links([
		'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
		'format' => '',
		'current' => $current_page,
		'total' => $total_pages,
		'type' => 'array',
		'show_all' => false,
		'mid_size' => 1,
		'prev_text' => '',
		'next_text' => '',
		'add_args' => [],
	]);


	if (empty($pagination_links))
		return;

	// --- PHẦN HTML BÊN DƯỚI GIỮ NGUYÊN ---

	echo '<div class="w-full flex justify-center items-center md:gap-10 gap-6">' . "\n";

	// Previous
	if ($current_page > 1) {
		printf(
			'<a href="%s" class="button--previous size-10 shadow-btn border border-[#CDD4E7] bg-white hover:text-white hover:bg-primary hover:border-transparent text-black flex justify-center items-center gap-2 rounded-full overflow-hidden font-medium transition-all duration-500"><i>%s</i></a>',
			esc_url(get_pagenum_link($current_page - 1)),
			'<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M15.8337 10.0003H4.16699M4.16699 10.0003L10.0003 15.8337M4.16699 10.0003L10.0003 4.16699" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>'
		);
	} else {
		echo '<span class="button--previous shrink-0 size-10 shadow-btn border border-[#CDD4E7] bg-gray-200 text-gray-400 flex justify-center items-center gap-2 rounded-full overflow-hidden font-medium transition-all duration-500 cursor-not-allowed"><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M15.8337 10.0003H4.16699M4.16699 10.0003L10.0003 15.8337M4.16699 10.0003L10.0003 4.16699" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg></i></span>';
	}

	echo '<ul class="flex items-center md:gap-2 text-sm font-medium">' . "\n";

	foreach ($pagination_links as $link) {
		$is_current = strpos($link, 'current') !== false;
		$is_dots = strpos($link, 'dots') !== false;
		$is_prev = strpos($link, 'prev') !== false;
		$is_next = strpos($link, 'next') !== false;

		echo '<li>';
		if ($is_current) {
			$page_number = strip_tags($link);
			printf(
				'<a href="javascript:void(0);" class="size-8 flex justify-center items-center [&:not(.active)]:bg-transparent bg-primary text-white rounded-full overflow-hidden cursor-default active">%s</a>',
				esc_html($page_number)
			);
		} elseif ($is_dots) {
			echo '<span class="size-8 flex justify-center items-center text-body rounded-full overflow-hidden cursor-default">…</span>';
		} elseif ($is_prev || $is_next) {
			// Ẩn link prev/next mặc định
			preg_match('/<a[^>]+href=["\'](.*?)["\']/i', $link, $href_match);
			$href = isset($href_match[1]) ? $href_match[1] : '#';
			$class = $is_prev ? 'default-prev' : 'default-next';
			printf('<a href="%s" class="%s hidden"></a>', esc_url($href), $class);
		} else {
			preg_match('/<a[^>]+href=["\'](.*?)["\']/i', $link, $href_match);
			preg_match('/<a[^>]*>(.*?)<\/a>/i', $link, $number_match);
			$href = $href_match[1] ?? '#';
			$page_number = $number_match[1] ?? '';
			printf(
				'<a href="%s" class="size-8 flex justify-center items-center [&:not(.active)]:bg-transparent hover:[&:not(.active)]:bg-primary [&:not(.active)]:text-black text-white hover:[&:not(.active)]:text-white rounded-full overflow-hidden cursor-pointer transition-all duration-500">%s</a>',
				esc_url($href),
				esc_html($page_number)
			);
		}
		echo '</li>';
	}

	echo '</ul>' . "\n";

	// Next
	if ($current_page < $total_pages) {
		printf(
			'<a href="%s" class="button--next shrink-0 size-10 shadow-btn border border-[#CDD4E7] bg-white hover:bg-primary hover:border-transparent text-black flex hover:text-white justify-center items-center gap-2 rounded-full overflow-hidden font-medium transition-all duration-500"><i>%s</i></a>',
			esc_url(get_pagenum_link($current_page + 1)),
			'<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4.16699 10.0003H15.8337M15.8337 10.0003L10.0003 4.16699M15.8337 10.0003L10.0003 15.8337" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>'
		);
	} else {
		echo '<span class="button--next size-10 shadow-btn border border-[#CDD4E7] bg-gray-200 text-gray-400 flex justify-center items-center gap-2 rounded-full overflow-hidden font-medium transition-all duration-500 cursor-not-allowed"><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4.16699 10.0003H15.8337M15.8337 10.0003L10.0003 4.16699M15.8337 10.0003L10.0003 15.8337" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg></i></span>';
	}

	echo '</div>' . "\n";
}

/**
 * Displays exceprt by number string
 * How to use: echo excerpt(x) width x is number length
 */
function excerpt( $limit ) {
	$excerpt = explode( ' ', get_the_excerpt(), $limit );

	if ( count( $excerpt ) >= $limit ) {
		array_pop( $excerpt );
		$excerpt = implode( " ", $excerpt ) . '...';
	} else {
		$excerpt = implode( " ", $excerpt );
	}

	$excerpt = preg_replace( '`\[[^\]]*\]`', '', $excerpt );

	return strip_tags( $excerpt );
}

/**
 * Check Link
 * If not return javascript:void(0)
 */

function check_link( $value ) {
	if ( $value ) {
		return $value;
	} else {
		return 'javascript:void(0)';
	}
}
