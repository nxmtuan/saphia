<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('font-body font-normal'); ?>>

	<?php wp_body_open(); ?>

	<header class="fixed top-0 left-0 w-full bg-primary z-50">
		<div class="relative">
			<div class="container">
				<div class="flex items-center justify-between">
	
					<?php
					$custom_logo_id = get_theme_mod('custom_logo');
					$image = wp_get_attachment_image_src($custom_logo_id, 'full');
	
					if ($image) {
						$site_url = get_bloginfo('url');
						$site_description = get_bloginfo('description');
						$logo_url = $image[0];
						?>
						<a href="<?php echo esc_url($site_url); ?>" title="<?php echo esc_attr($site_description); ?>"
							class="table-cell align-middle">
							<img src="<?php echo esc_url($logo_url); ?>" alt="Logo" class="w-[176px] aspect-[176/66]">
						</a>
						<?php
					}
					?>
	
					<div class="flex items-center gap-[5px]">
						<ul class="flex items-center gap-[5px] main-menu">
							<li class="menu-item menu-item-has-children">
								<a href="#">Về chúng tôi</a>
								<ul class="sub-menu">
									<li class="menu-item">
										<a href="#">Câu chuyện thương hiệu</a>
									</li>
									<li class="menu-item">
										<a href="#">Hành trình Kiềm Thảo Dược</a>
									</li>
									<li class="menu-item">
										<a href="#">Lĩnh vực hoạt động</a>
									</li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children">
								<a href="#">Sản phẩm</a>
								<ul class="sub-menu">
									<li class="menu-item">
										<a href="#">Câu chuyện thương hiệu</a>
									</li>
									<li class="menu-item">
										<a href="#">Hành trình Kiềm Thảo Dược</a>
									</li>
									<li class="menu-item">
										<a href="#">Lĩnh vực hoạt động</a>
									</li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children">
								<a href="#">Thông tin khoa học</a>
								<ul class="sub-menu">
									<li class="menu-item">
										<a href="#">Câu chuyện thương hiệu</a>
									</li>
									<li class="menu-item">
										<a href="#">Hành trình Kiềm Thảo Dược</a>
									</li>
									<li class="menu-item">
										<a href="#">Lĩnh vực hoạt động</a>
									</li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children">
								<a href="#">Ngọc Xanh Châu Á</a>
								<ul class="sub-menu">
									<li class="menu-item">
										<a href="#">Câu chuyện thương hiệu</a>
									</li>
									<li class="menu-item">
										<a href="#">Hành trình Kiềm Thảo Dược</a>
									</li>
									<li class="menu-item">
										<a href="#">Lĩnh vực hoạt động</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="#">Vì Cộng Đồng</a>
							</li>
						</ul>
	
						<div class="size-14 rounded-full border border-[#ffffff2b] bg-[#ffffff12] backdrop-blur-[10px] flex items-center justify-center cursor-pointer">
							<?php echo svg('search', '18', '18', 'text-white shrink-0') ?>
						</div>
					</div>
	
					<?php if (function_exists('pll_current_language')): ?>
						<?php
						$current_lang = pll_current_language();
						$languages = pll_the_languages(array('raw' => 1));
						$current_lang_name = isset($languages[$current_lang]['name']) ? $languages[$current_lang]['name'] : $current_lang;
						$current_lang_data = isset($languages[$current_lang]) ? $languages[$current_lang] : null;
						?>
						<div class="mt-6 relative group flex">
							<a class="text-sm whitespace-nowrap font-medium inline-flex items-center gap-1">
								<?php echo esc_html($current_lang_name); ?>
								<?php echo svg('Group', '', '', 'icon-svg'); ?>
							</a>
							<ul
								class="other_languages text-sm text-gray-700 dark:text-gray-200 space-y-1 absolute bg-white rounded-md shadow-base p-1 whitespace-nowrap -bottom-[220%] left-0 font-normal opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-hover:z-10 transition-all duration-500 prose-a:flex prose-a:items-center prose-a:gap-1 w-max prose-a:rounded-md prose-a:px-4 prose-a:py-2">
								<?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1)); ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>