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
if ( ! session_id() ) {
    session_start();
}
// Import homepage_layout from cookie into session
if ( isset( $_COOKIE['homepage_layout'] ) ) {
    $cookie = sanitize_text_field( wp_unslash( $_COOKIE['homepage_layout'] ) );
    if ( $cookie === 'default' ) {
        $_SESSION['homepage_layout'] = 'default';
    } elseif ( is_numeric( $cookie ) ) {
        $_SESSION['homepage_layout'] = intval( $cookie );
    } elseif ( filter_var( $cookie, FILTER_VALIDATE_URL ) ) {
        $pid = url_to_postid( $cookie );
        if ( $pid ) {
            $_SESSION['homepage_layout'] = $pid;
        }
    }
}
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'font-body font-normal overflow-x-hidden' ); ?>>

	<?php wp_body_open(); ?>

	<header class="bg-primary sticky top-0 left-0 w-full z-50">
		<div class="relative">
			<div class="container">
				<div class="flex items-center justify-between">

					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );

					if ( $image )
					{
						$site_url = get_bloginfo( 'url' );
						$site_description = get_bloginfo( 'description' );
						$logo_url = $image[0];
						?>
						<a href="<?php echo esc_url( $site_url ); ?>"
							title="<?php echo esc_attr( $site_description ); ?>"
							class="table-cell align-middle">
							<img src="<?php echo esc_url( $logo_url ); ?>" alt="Logo"
								class="lg:w-[176px] w-[130px] aspect-[176/66]">
						</a>
						<?php
					}
					?>

					<div class="flex items-center gap-[5px]">

						<ul class="xl:flex hidden items-center gap-[5px] main-menu">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'container' => '__return_false',
								'fallback_cb' => '__return_false',
								'items_wrap' => '%3$s',
								'depth' => 2,

							) );
							?>

						</ul>

						<div class="flex items-center">
							<div data-open="#searchBox"
								class="toggle-btn lg:size-14 size-10 rounded-full border border-[#ffffff2b] [&:not(.active)]:bg-[#ffffff12] bg-[#ffffff85] backdrop-blur-[10px] flex items-center justify-center cursor-pointer transition-all duration-300">
								<?php echo svg( 'search', '18', '18', 'text-white shrink-0' ) ?>
							</div>
							<div class="size-10 xl:hidden flex items-center justify-end cursor-pointer"
								data-open="#menuMobile">
								<?php echo svg( 'mobile-menu', '20', '20', 'shrink-0 text-white' ) ?>
							</div>
						</div>
						<form action="<?php echo get_home_url()?>" id="searchBox"
							class="absolute origin-top left-0 top-full border border-[#ffffff2b] bg-[#5C82E080] backdrop-blur-[10px] w-full lg:p-[26px] p-5 [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none pointer-events-auto flex justify-center transition-all duration-300">
							<div class="relative lg:w-fit w-full">
								<input type="text" name="s" placeholder="<?php _e( 'Tìm kiếm', 'gnws' ) ?>"
									class="pl-5 pr-11 lg:py-4 py-2.5 lg:w-[900px] w-full lg:text-lg text-sm rounded-full overflow-hidden bg-white border border-transparent focus:outline-none focus:border-primary transition-colors duration-300">
								<?php echo svg( 'search', '18', '18', 'shrink-0 absolute right-5 top-1/2 -translate-y-1/2' ) ?>
							</div>
						</form>
					</div>

					<?php if ( function_exists( 'pll_current_language' ) ) : ?>
						<?php
						$current_lang = pll_current_language();
						$languages = pll_the_languages( array( 'raw' => 1 ) );
						$current_lang_name = isset( $languages[ $current_lang ]['name'] ) ? $languages[ $current_lang ]['name'] : $current_lang;
						$current_lang_data = isset( $languages[ $current_lang ] ) ? $languages[ $current_lang ] : null;
						?>
						<div class="hidden relative group xl:flex cursor-default">
							<a
								class="text-lg text-white whitespace-nowrap font-medium inline-flex items-center gap-1">
								<?php echo esc_html( $current_lang_name ); ?>
								<?php echo svg( 'chevron-down', '', '', 'icon-svg text-white' ); ?>
							</a>
							<ul
								class="other_languages text-sm text-[#002681] hover:text-white space-y-1 absolute border-[#ffffff2b] bg-[#5C82E080] backdrop-blur-[10px] shadow-base p-1 whitespace-nowrap top-full left-0 font-normal opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-hover:z-10 transition-all duration-500 prose-a:flex prose-a:items-center prose-a:gap-1 w-max prose-a:rounded-md prose-a:px-4 prose-a:py-2">
								<?php pll_the_languages( array( 'show_flags' => 1, 'show_names' => 1 ) ); ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<div id="menuMobile"
		class="xl:hidden px-5 py-8 fixed top-0 right-0 md:w-[400px] w-[100dvw] h-[100dvh] bg-primary z-[51] [&:not(.active)]:translate-x-full translate-x-0 transition-transform duration-300">
		<div class="relative h-full flex flex-col">
			<?php echo svg( 'close', '20', '20', 'close-icon absolute top-0 right-0 text-white' ) ?>
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );

			if ( $image )
			{
				$site_url = get_bloginfo( 'url' );
				$site_description = get_bloginfo( 'description' );
				$logo_url = $image[0];
				?>
				<a href="<?php echo esc_url( $site_url ); ?>"
					title="<?php echo esc_attr( $site_description ); ?>" class="table-cell align-middle">
					<img src="<?php echo esc_url( $logo_url ); ?>" alt="Logo"
						class="w-[176px] aspect-[176/66]">
				</a>
				<?php
			}
			?>
			<div class="mt-[50px] flex-1 space-y-8">
				<ul class="main-menu-mobile">
					<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'container' => '__return_false',
								'fallback_cb' => '__return_false',
								'items_wrap' => '%3$s',
								'depth' => 2,

							) );
							?>
				</ul>

				<?php if ( function_exists( 'pll_current_language' ) ) : ?>
					<?php
					$current_lang = pll_current_language();
					$languages = pll_the_languages( array( 'raw' => 1 ) );
					$current_lang_name = isset( $languages[ $current_lang ]['name'] ) ? $languages[ $current_lang ]['name'] : $current_lang;
					$current_lang_data = isset( $languages[ $current_lang ] ) ? $languages[ $current_lang ] : null;
					?>
					<div class="relative group">
						<a
							class="whitespace-nowrap text-white font-medium inline-flex items-center gap-1">
							<?php echo esc_html( $current_lang_name ); ?>
							<?php echo svg( 'chevron-down', '', '', 'icon-svg text-white' ); ?>
						</a>
						<ul
							class="other_languages text-sm text-white space-y-1 absolute rounded-md shadow-base p-1 whitespace-nowrap -bottom-[220%] left-0 font-normal opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-hover:z-10 transition-all duration-500 prose-a:flex prose-a:items-center prose-a:gap-1 w-max prose-a:rounded-md prose-a:px-4 prose-a:py-2">
							<?php pll_the_languages( array( 'show_flags' => 1, 'show_names' => 1 ) ); ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>

			<div class="flex items-center gap-5">
				<?php for ( $i = 0; $i < 4; $i++ ) : ?>
					<a href=""
						class="size-14 rounded-full border border-[#ffffff2b] bg-[#ffffff12] backdrop-blur-[10px] flex items-center justify-center cursor-pointer">
						<?php echo svg( 'search', '18', '18', 'text-white shrink-0' ) ?>
					</a>
				<?php endfor ?>
			</div>
		</div>
	</div>