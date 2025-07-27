<section class="lg:my-[120px] my-[60px]" data-component="support-customer">
	<div class="container">
		<div class="lg:space-y-10 space-y-4">
			<?php if ( get_field( 'title' ) ) : ?>
				<div
					class="xl:text-[85px] lg:text-[55px] text-4xl text-primary leading-[1] text-center">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'desc' ) ) : ?>
				<div class="lg:text-[40px] text-base leading-[1.1] text-center">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="xl:mt-[152px] lg:mt-[60px] mt-10 flex flex-wrap justify-center xl:gap-[60px] gap-6">
				<?php while ( have_rows( 'list_content' ) ) :
					the_row(); ?>
					<div class=" group lg:w-[30%] md:w-[48%] w-full lg:space-y-8 space-y-3 cursor-pointer"
						data-open="#popupHoTro">
						<div class="relative rounded-[28px] overflow-hidden">
							<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'aspect-square w-full object-cover hover:scale-105 transition-transform duration-300' ] ) ?>

							<div
								class="absolute top-[14px] right-[14px] size-16 flex justify-center items-center bg-white rounded-full overflow-hidden group-hover:rotate-45 transition-transform duration-300">
								<?php echo svg( 'up-right', '', '', 'size-7 shrink-0' ) ?>
							</div>
						</div>
						<?php if ( get_sub_field( 'title' ) ) : ?>
							<div class="xl:text-[35px] lg:text-2xl text-lg leading-[1] text-center title">
								<?php the_sub_field( 'title' ); ?>
							</div>
						<?php endif; ?>
						<?php if ( get_sub_field( 'desc' ) ) : ?>
							<div class="content hidden">
								<?php the_sub_field( 'desc' ); ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>

<div id="popupHoTro"
	class="fixed top-0 left-0 w-full h-[100dvh] overflow-hidden bg-[#d3d3d359] backdrop-blur-[10px] [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none pointer-events-auto [&:not(.active)]:-z-10 z-[53] transition-all duration-300">
	<div class="container 1.5xl:py-20 py-10 flex justify-center items-center">
		<div
			class="relative max-w-[1000px] h-[90dvh] lg:p-20 py-10 px-5 lg:rounded-[35px] rounded-xl overflow-hidden border border-[#ffffff2b] bg-white flex flex-col">
			<?php echo svg( 'close', '20', '20', 'close-icon absolute lg:top-10 top-[15px] lg:right-10 right-[15px] cursor-pointer' ) ?>
            <div class="text-center mb-5 uppercase title lg:text-4xl text-xl title">

            </div>
			<div class="the_content flex-1 overflow-y-auto"></div>

		</div>
	</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
	const openButtons = document.querySelectorAll('[data-open="#popupHoTro"]');
	const popup = document.getElementById('popupHoTro');
	const popupContent = popup.querySelector('.the_content');
	const popupTitle = popup.querySelector('.title');

	openButtons.forEach(button => {
		button.addEventListener('click', function () {
			const content = this.querySelector('.content');
			const title = this.querySelector('.title');
			if (popupContent) {
				popupContent.innerHTML = '';
				popupContent.innerHTML = content ? content.innerHTML : '';
			}
			if (popupTitle) {
				popupTitle.innerHTML = '';
				popupTitle.innerHTML = title ? title.innerHTML : '';
			}
		});
	});


});
</script>