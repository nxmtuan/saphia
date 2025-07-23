<?php

/**
 * Functions which customizer into WordPress
 *
 * @package gnws
 */


/**
 * Function help upload SVG
 */
/**
 * Allow SVG uploads for administrator users.
 *
 * @param array $upload_mimes Allowed mime types.
 *
 * @return mixed
 */
add_filter(
	'upload_mimes',
	function ($upload_mimes) {
		// By default, only administrator users are allowed to add SVGs.
// To enable more user types edit or comment the lines below but beware of
// the security risks if you allow any user to upload SVG files.
		if (!current_user_can('administrator')) {
			return $upload_mimes;
		}

		$upload_mimes['svg'] = 'image/svg+xml';
		$upload_mimes['svgz'] = 'image/svg+xml';

		return $upload_mimes;
	}
);

/**
 * Add SVG files mime check.
 *
 * @param array $wp_check_filetype_and_ext Values for the extension, mime type, and corrected filename.
 * @param string $file Full path to the file.
 * @param string $filename The name of the file (may differ from $file due to $file being in a tmp directory).
 * @param string[] $mimes Array of mime types keyed by their file extension regex.
 * @param string|false $real_mime The actual mime type or false if the type cannot be determined.
 */
add_filter(
	'wp_check_filetype_and_ext',
	function ($wp_check_filetype_and_ext, $file, $filename, $mimes, $real_mime) {

		if (!$wp_check_filetype_and_ext['type']) {

			$check_filetype = wp_check_filetype($filename, $mimes);
			$ext = $check_filetype['ext'];
			$type = $check_filetype['type'];
			$proper_filename = $filename;

			if ($type && 0 === strpos($type, 'image/') && 'svg' !== $ext) {
				$ext = false;
				$type = false;
			}

			$wp_check_filetype_and_ext = compact('ext', 'type', 'proper_filename');
		}

		return $wp_check_filetype_and_ext;
	},
	10,
	5
);

/**
 * Remove Crop Image Wordpress Size: Large + Medium_large + Medium
 */
add_filter('intermediate_image_sizes', function ($sizes) {
	return array_diff($sizes, ['medium_large']);  // Medium Large (768 x 0)
});
//
add_action('init', 'remove_extra_image_sizes');
function remove_extra_image_sizes()
{
	$sizes = array();
	foreach (get_intermediate_image_sizes() as $size) {
		if (!in_array($size, $sizes)) {
			remove_image_size($size);
		}
	}
}

/**
 * Remove Editor Gutenberg, make Edior Classic
 */
// Post
// add_filter( 'use_block_editor_for_post', '__return_false', 10 );
// // Post type
// add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );

/**
 * Setup Plugin ACF
 */
// 1. customize ACF path
add_filter('acf/settings/path', 'willgroup_acf_settings_path');
function willgroup_acf_settings_path($path)
{
	$path = get_stylesheet_directory() . '/inc/acf/';
	return $path;
}

// 2. customize ACF dir
add_filter('acf/settings/dir', 'willgroup_acf_settings_dir');
function willgroup_acf_settings_dir($dir)
{
	$dir = get_stylesheet_directory_uri() . '/inc/acf/';
	return $dir;
}

// 3. Include ACF
include_once(get_stylesheet_directory() . '/inc/acf/acf.php');


// Add save and load points for ACF JSON
add_filter('acf/settings/save_json', 'cysp_acf_json_save_point');
function cysp_acf_json_save_point($path)
{
	$path = get_stylesheet_directory() . '/acf-json';
	return $path;
}

add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
function cysp_acf_json_load_point($paths)
{
	$paths[] = get_stylesheet_directory() . '/acf-json';
	return $paths;
}

/**
 * Style Dashboard
 */
//Css Admin
if (!function_exists('gnws_css_admin')):
	add_action('admin_head', 'gnws_css_admin');
	add_action('admin_enqueue_scripts', 'gnws_css_admin');
	function gnws_css_admin()
	{
		wp_enqueue_style('admin_css', get_template_directory_uri() . '/admin/admin.css');
	}
endif;
//CSS Login
if (!function_exists('gnws_css_admin_login')):
	add_action('login_enqueue_scripts', 'gnws_css_admin_login');
	function gnws_css_admin_login()
	{
		wp_enqueue_style('admin_login_css', get_template_directory_uri() . '/admin/login.css');
	}
endif;

/**
 * Get home url Author
 */
add_filter('login_headerurl', 'my_custom_login_url');
function my_custom_login_url($url)
{
	$theme_data = wp_get_theme();
	$theme_uri = $theme_data->get('ThemeURI');
	return $theme_uri;
}

/**
 * Automatically set the image Title, Alt-Text, Caption & Description upload (image tab)
 */
add_action('add_attachment', 'gnws_set_image_meta_image_upload');
function gnws_set_image_meta_image_upload($post_ID)
{
	if (wp_attachment_is_image($post_ID)) {
		$gnws_image_title = get_post($post_ID)->post_title;
		$gnws_image_title = preg_replace(
			'%\s*[-_\s]+\s*%',
			' ',
			$gnws_image_title
		);
		$gnws_image_title = ucwords(strtolower($gnws_image_title));
		$gnws_my_image_meta = array(
			'ID' => $post_ID,
			'post_title' => $gnws_image_title,
			'post_excerpt' => '',
			'post_content' => '',
		);
		update_post_meta($post_ID, '_wp_attachment_image_alt', $gnws_image_title);
		wp_update_post($gnws_my_image_meta);
	}
}


/**
 * Remove Logo / Version / Help
 */
function gnws_remove_version()
{
	return '';
}
add_filter('the_generator', 'gnws_remove_version');
function change_footer_admin()
{
	return ' ';
}
add_filter('admin_footer_text', 'change_footer_admin', 9999);
function change_footer_version()
{
	return ' ';
}
add_filter('update_footer', 'change_footer_version', 9999);
remove_action('wp_head', 'wp_generator');
// Remove version from rss
add_filter('the_generator', '__return_empty_string');

add_action('admin_head', 'gnws_remove_help_tabs');

function gnws_remove_help_tabs()
{
	$screen = get_current_screen();
	if ($screen) {
		$screen->remove_help_tabs();
	}
}
add_action('admin_bar_menu', 'remove_wp_logo', 999);
function remove_wp_logo($wp_admin_bar)
{
	$wp_admin_bar->remove_node('wp-logo');
}

/**
 * Disabled Template
 */
function my_remove_page_template()
{
	if (!class_exists('WooCommerce')) {
		global $pagenow;
		if (in_array($pagenow, array('post-new.php', 'post.php')) && get_post_type() == 'page') { ?>
			<script>
				(function ($) {
					$(document).ready(function () {
						$('#page_template option[value="template-page/content-woocommerce.php"]').remove();
					})
				})(jQuery)
			</script>
			<?php
		}
	}
}
add_action('admin_footer', 'my_remove_page_template', 10);


/**
 * Remove Tag, Category from archive title
 */
add_filter('get_the_archive_title', 'my_theme_archive_title');
function my_theme_archive_title($title)
{
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	}

	return $title;
}

/**
 * Classic Widget
 */
function example_theme_support()
{
	remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'example_theme_support');


/*
 * Fix check child-parent taxonomy in admin
 */
add_filter('wp_terms_checklist_args', function ($args, $idPost) {
	$args['checked_ontop'] = false;

	return $args;
}, 10, 2);


/**
 * Disable Remove HTML ACF 6.2.5
 */
add_filter('acf/admin/prevent_escaped_html_notice', '__return_true');
add_filter('wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2);
function acf_add_allowed_iframe_tag($tags, $context)
{
	if ($context === 'acf') {
		$tags['iframe'] = array(
			'src' => true,
			'height' => true,
			'width' => true,
			'frameborder' => true,
			'allowfullscreen' => true,
		);
	}

	return $tags;
}

/**
 * Disable XMLRPC
 */
add_filter('xmlrpc_enabled', '__return_false');
// Disable X-Pingback to header
add_filter('wp_headers', 'disable_x_pingback');
function disable_x_pingback($headers)
{
	unset($headers['X-Pingback']);
	return $headers;
}
function remove_xmlrpc_methods($methods)
{
	return array();
}
add_filter('xmlrpc_methods', 'remove_xmlrpc_methods');
remove_action('wp_head', 'rsd_link');


/**
 * Disable Rest  API
 */

add_filter('rest_authentication_errors', function ($result) {
	// If a previous authentication check was applied,
	// pass that result along without modification.
	if (true === $result || is_wp_error($result)) {
		return $result;
	}

	// No authentication has been performed yet.
	// Return an error if user is not logged in.
	if (!is_user_logged_in() && empty($_POST['_wpcf7'])) {
		return new WP_Error(
			'rest_not_logged_in',
			__('You are not currently logged in.'),
			array('status' => 401)
		);
	}

	// Our custom authentication check should have no effect
	// on logged-in requests
	return $result;
});

/**
 * Remove Version Number
 */
// Remove version number from WordPress
// Pick out the version number from scripts and styles
function remove_version_from_style_js($src)
{
	if (strpos($src, 'ver=' . get_bloginfo('version')))
		$src = remove_query_arg('ver', $src);
	return $src;
}
add_filter('style_loader_src', 'remove_version_from_style_js');
add_filter('script_loader_src', 'remove_version_from_style_js');

add_filter('wpcf7_autop_or_not', '__return_false');

// Add attr lazy load to image upload
function add_lazy_loading_to_images($attr)
{
	$attr['loading'] = 'lazy';
	return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'add_lazy_loading_to_images');

/**
 * Render homepage layout chooser popup.
 */
function saphia_render_homepage_popup()
{
	// Đảm bảo session đã được khởi
	if (session_status() !== PHP_SESSION_ACTIVE) {
		session_start();
	}

	// Chỉ show popup trên front page khi user chưa chọn layout
	if (!empty($_SESSION['homepage_layout']) || !is_front_page()) {
		return;
	}

	// Lấy repeater rows từ ACF Options
	$rows = get_field('homepage_layout_list', 'option');
	if (!$rows) {
		return;
	}

	// In popup
	?>
	<div
		class="fixed top-0 z-[51] transition-all duration-500 [&:not(.active)]:opacity-0 [&:not(.active)]:pointer-events-none [&:not(.active)]:invisible popup active">

		<div
			class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[52] flex flex-col items-center popup-content">
			<div
				class="relative size-full md:px-[50px] md:pb-[50px] md:pt-[86px] p-6 text-white rounded-[35px] overflow-hidden lg:w-[800px] md:w-[700px] w-[95vw]">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-popup.png" alt="" loading="lazy"
					class="absolute inset-0 object-cover size-full pointer-events-none">
				<div class="relative z-[1]">
					<div class="lg:text-[32px] text-2xl leading-[1] text-center">Chúng tôi có thể giúp gì cho bạn?</div>
					<div class="mt-3 lg:text-lg text-center">Hãy chọn vai trò của bạn để nhận trải nghiệm phù hợp.</div>
					<ul class="mt-8 popup-list flex flex-wrap gap-x-4 md:gap-y-[30px] gap-y-4">
						<?php foreach ($rows as $row):
							// Xác định page ID
							$raw = $row['select_page'];
							if (is_object($raw) && isset($raw->ID)) {
								$pid = $raw->ID;
							} elseif (is_numeric($raw)) {
								$pid = intval($raw);
							} elseif (is_string($raw)) {
								$pid = url_to_postid($raw);
							} else {
								continue;
							}
							$label = $row['title'];
							if (!$pid) {
								continue;
							}
							?>
							<li class="popup-item md:w-[calc(50%-8px)] w-full">
								<a href="#"
									class="block py-5 px-8 w-full rounded-full overflow-hidden bg-white hover:bg-[#e3e3e3] text-center text-black transition-colors duration-300 whitespace-nowrap"
									onclick="
									   document.cookie = 'homepage_layout=<?php echo esc_js($pid); ?>; path=/';
									   window.location.href = '<?php echo esc_url(home_url()); ?>';
									   return false;
								   ">
									<?php echo esc_html($label); ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
					<p class="mt-[30px] close-popup cursor-pointer w-full">
						<a href="#" class="block py-5 px-8 w-full rounded-full overflow-hidden bg-transparent hover:bg-[#00000030] text-center text-lg border border-white transition-colors duration-300" onclick="
						  document.cookie = 'homepage_layout=default; path=/';
						  window.location.href = '<?php echo esc_url(home_url()); ?>';
						  return false;
					  ">
							Bỏ qua
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php
}
add_action('wp_footer', 'saphia_render_homepage_popup', 5);