<section class="lg:my-[200px] my-[60px]" data-components="single_product-certificate">
	<div class="container">
		<?php if ( get_field( 'title' ) ) : ?>
			<div class="lg:text-[63px] text-4xl leading-[1] text-content">
				<?php the_field( 'title' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div class="lg:mt-12 mt-10">
				<div
					class="md:grid grid-cols-3 xl:gap-20 gap-8 block_slider center_items watch_css has_autoplay md:mx-0 -mx-5">
					<?php while ( have_rows( 'list_content' ) ) :
						the_row(); ?>
						<div class="block_slider-item md:w-full w-[83%] ">
							<a href="<?php echo wp_get_attachment_image_url( get_sub_field( 'img' ), 'full' ) ?>"
								class="size-full flex flex-col gap-[13px]" data-fancybox="certification">

								<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'medium', false, [ 'class' => 'size-full object-cover' ] ) ?>
								<?php if ( get_sub_field( 'desc' ) ) : ?>
									<div class="flex-1 flex justify-end flex-col xl:gap-[13px]">
										<div class="lg:text-2xl text-lg">
											<?php the_sub_field( 'desc' ); ?>
										</div>
									</div>
								<?php endif; ?>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>

	</div>
</section>