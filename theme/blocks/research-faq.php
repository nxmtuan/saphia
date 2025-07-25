<section class="lg:my-[121px] my-[60px]" data-components="research-faq">
	<div class="container">
		<?php if ( get_field( 'title' ) ) : ?>
			<div
				class="lg:text-[55px] text-[30px] leading-[1.1] font-semibold text-primary text-center">
				<?php the_field( 'title' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div class="lg:mt-[134px] mt-[40px] lg:space-y-[65px] space-y-[30px]">
				<?php while ( have_rows( 'list_content' ) ) :
					the_row(); ?>

					<div class="content-wrapper lg:pb-[65px] pb-[30px] border-b border-[#4F4E4D]">
						<?php if ( get_sub_field( 'title' ) ) : ?>
							<div class="content-btn flex w-full justify-between items-center cursor-pointer">
								<span
									class="w-[80%] xl:text-[45px] lg:text-2xl md:text-xl xl:leading-[1.2] font-semibold">
									<?php the_sub_field( 'title' ); ?>
								</span>
								<div
									class="icon xl:size-[92px] lg:size-[60px] size-10 shrink-0 rounded-full overflow-hidden flex justify-center items-center [&:not(.active)]:bg-[#D9D9D9] bg-black [&:not(.active)]:text-black [&:not(.active)]:rotate-0 rotate-45 transition-all duration-300">
									<span class="text-white lg:text-[50px] text-[30px] leading-[1]">+</span>
								</div>
							</div>
						<?php endif; ?>
						<?php if ( have_rows( 'list_result' ) ) : ?>
							<div class="content-block p-8 flex justify-center">
								<div
									class="research-slider block_slider center_items has_nav aspect-[410/585] w-[570px]">
									<?php while ( have_rows( 'list_result' ) ) :
										the_row();
										$is_text = get_sub_field( 'is_text' );
										?>
										<?php if ( $is_text ) : ?>

											<div
												class="block_slider-item w-full bg-white max-h-[585] overflow-y-auto the_content p-5">
												<?php the_sub_field( 'content' ) ?>
											</div>
										<?php else : ?>
											<div class="block_slider-item w-full relative">
												<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'absolute inset-0 object-contain w-full' ] ) ?>

											</div>
										<?php endif; ?>

									<?php endwhile; ?>
								</div>
							</div>
						<?php endif; ?>

					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>