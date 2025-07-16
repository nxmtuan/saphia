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
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/logo.svg" alt="" loading="lazy"
					class="aspect-[281/105] shrink-0 object-contain w-[281px]">
				<div class="lg:mt-[66px] mt-5  text-lg !leading-[30px]">
					SAPHIA ALKALINE., JSC <br>
					Đưa cuộc sống KIỀM đến mọi gia đình trên thế giới!
				</div>
				<div class="mt-[22px] text-lg !leading-[30px]">
					<div>contact@kiemsaphia.com</div>
					<div>0333.432.968</div>
				</div>
				<div class="mt-10 flex items-center gap-5">
					<a href="" class="size-11 flex items-center justify-center shrink-0 rounded-full bg-[#f4f4f41a]">
						<?php echo svg('facebook', '', '', 'object-contain shrink-0 text-white') ?>
					</a>
					<a href="" class="size-11 flex items-center justify-center shrink-0 rounded-full bg-[#f4f4f41a]">
						<?php echo svg('twitter', '', '', 'object-contain shrink-0 text-white') ?>
					</a>
					<a href="" class="size-11 flex items-center justify-center shrink-0 rounded-full bg-[#f4f4f41a]">
						<?php echo svg('linkedin', '', '', 'object-contain shrink-0 text-white') ?>
					</a>
				</div>
			</div>
			<div class="flex-1 flex xl:flex-row flex-col xl:justify-between xl:gap-0 gap-10">
				<div class="space-y-[14px] max-w-[413px]">
					<?php for ($i = 0; $i < 4; $i++): ?>
						<div class="space-y-2.5">
							<div class="text-lg !leading-[30px] tracking-[-0.72px]">
								Văn phòng sản xuất
							</div>
							<div class="text-[#ffffffb3] leading-[30px] tracking-[-0.72px]">
								HS02-25, Khu đô thị sinh thái Vinhomes Riverside, phường Phúc Lợi, quận Long Biên, thành phố
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

		<div class="lg:mt-[103px] mt-8 text-center text-[#ffffff99] lg:text-lg text-[10px] !leading-[30px]">
			Copyright © 2025 Saphia Alkaline. All Rights Reserved.
		</div>
	</div>
</footer>
<div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svg('back-top', '20', '20', 'm-auto h-full') ?>
</div>
<?php wp_footer(); ?>

</body>

</html>