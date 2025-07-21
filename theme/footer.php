<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?>
<footer class="lg:pt-[93px] pt-[30px] pb-[30px] bg-primary">
	<div class="container">
		<div class="flex lg:flex-row flex-col justify-between lg:gap-[84px] gap-10 text-white">
			<div class="max-w-[334px]">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/logo.svg" alt=""
					loading="lazy" class="aspect-[281/105] shrink-0 object-contain w-[281px]">
				<div class="lg:mt-[66px] mt-5  text-lg !leading-[30px]">
					SAPHIA ALKALINE., JSC <br>
					Đưa cuộc sống KIỀM đến mọi gia đình trên thế giới!
				</div>
				<div class="mt-[22px] text-lg !leading-[30px]">
					<div>contact@kiemsaphia.com</div>
					<div>0333.432.968</div>
				</div>
				<div class="mt-10 flex items-center gap-5">
					<a href=""
						class="size-11 flex items-center justify-center shrink-0 rounded-full bg-[#f4f4f41a]">
						<?php echo svg( 'facebook', '', '', 'object-contain shrink-0 text-white' ) ?>
					</a>
					<a href=""
						class="size-11 flex items-center justify-center shrink-0 rounded-full bg-[#f4f4f41a]">
						<?php echo svg( 'twitter', '', '', 'object-contain shrink-0 text-white' ) ?>
					</a>
					<a href=""
						class="size-11 flex items-center justify-center shrink-0 rounded-full bg-[#f4f4f41a]">
						<?php echo svg( 'linkedin', '', '', 'object-contain shrink-0 text-white' ) ?>
					</a>
				</div>
			</div>
			<div class="flex-1 flex xl:flex-row flex-col xl:justify-between xl:gap-0 gap-10">
				<div class="space-y-[14px] max-w-[413px]">
					<?php for ( $i = 0; $i < 4; $i++ ) : ?>
						<div class="space-y-2.5">
							<div class="text-lg !leading-[30px] tracking-[-0.72px]">
								Văn phòng sản xuất
							</div>
							<div class="text-[#ffffffb3] leading-[30px] tracking-[-0.72px]">
								HS02-25, Khu đô thị sinh thái Vinhomes Riverside, phường Phúc Lợi, quận
								Long Biên, thành phố
								Hà Nội.
							</div>
						</div>
					<?php endfor ?>
				</div>

				<div class="flex flex-1 xl:justify-evenly xl:gap-0 md:gap-20 gap-10">
					<ul class="md:text-xl text-base tracking-[-0.72px] space-y-3">
						<li>
							<a href="">Điểm bán</a>
						</li>
						<li>
							<a href="">Hỗ trợ khách hàng</a>
						</li>
						<li>
							<a href="">Tin tức</a>
						</li>
						<li>
							<a href="">Liên hệ</a>
						</li>
					</ul>

					<ul class="md:text-xl text-base tracking-[-0.72px] space-y-3">
						<li>
							<a href="">Cơ hội nghề nghiệp</a>
						</li>
						<li>
							<a href="">Sống Kiềm</a>
						</li>
						<li>
							<a href="">Saphia Challenge</a>
						</li>
						<li>
							<a href="">Go Global</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div
			class="lg:mt-[103px] mt-8 text-center text-[#ffffff99] lg:text-lg text-[10px] !leading-[30px]">
			Copyright © 2025 Saphia Alkaline. All Rights Reserved.
		</div>
	</div>
</footer>
<div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svg( 'back-top', '20', '20', 'm-auto h-full' ) ?>
</div>

<?php
// Popup layout chooser: only show on front page if user hasn't chosen yet
if ( empty( $_SESSION['homepage_layout'] ) && is_front_page() ) :

	// Get all pages using the 'page-home.php' template
	$home_pages = get_posts( [ 
		'post_type' => 'page',
		'numberposts' => -1,
		'meta_key' => '_wp_page_template',
		'meta_value' => 'home.php',
		'fields' => 'ids',
	] );

	// Build mapping of layout key => page ID
	$layout_map = [];
	foreach ( $home_pages as $pid )
	{
		$layout_key = get_field( 'select_homepage_layout', $pid );
		if ( $layout_key )
		{
			$layout_map[ $layout_key ] = $pid;
		}
	}


	$field_obj = get_field_object( 'select_homepage_layout', get_queried_object_id() );
	$choices = ! empty( $field_obj['choices'] ) ? $field_obj['choices'] : [];
	?>
	<div class="fixed top-0 z-[21] transition-all duration-500 [&:not(.active)]:opacity-0 [&:not(.active)]:pointer-events-none [&:not(.active)]:invisible popup active">
		<div
			class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 py-8 md:px-10 px-4 bg-white rounded-xl overflow-hidden md:w-[33.063rem] w-[95vw] z-[52] popup-content">
			<div class="popup-content">
				<h3>
					Chúng tôi có thể giúp gì cho bạn?
				</h3>
				<p>
					Hãy chọn vai trò của bạn để nhận trải nghiệm phù hợp.
				</p>
				<ul class="popup-list flex flex-wrap gap-4">
					<?php foreach ( $layout_map as $key => $pid ) :
						switch ( $key )
						{
							case 'customer':
								$label = 'Tôi là khách hàng';
								break;
							case 'partner':
								$label = 'Tôi là Đối tác';
								break;
							case 'distributor':
								$label = 'Tôi là nhà phân phối';
								break;
							case 'otc':
								$label = 'OTC/ETC';
								break;
							default:
								$label = '';
						}
						?>
						<li >
							<a href="<?php echo esc_url( home_url() ); ?>"
								onclick="document.cookie = 'homepage_layout=<?php echo esc_js( $key ); ?>; path=/';">
								<?php echo esc_html( $label ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<p class="close-popup">
					Bỏ qua
				</p>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php wp_footer(); ?>
<div
	class="modal-backdrop fixed inset-0 top-0 transition-all duration-500 left-0 bg-[#00000040] w-[100dvw] h-[100dvh] [&:not(.active)]:opacity-0 [&:not(.active)]:pointer-events-none [&:not(.active)]:invisible z-[2] <?= empty( $_SESSION['homepage_layout'] )?'active':'' ?>">
</div>
</body>

</html>