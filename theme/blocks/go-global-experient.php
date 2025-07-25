<section class="lg:my-[120px] my-[60px]" data-component="go-global-experient">
	<div class="container">
		<div class="flex lg:flex-row flex-col lg:items-end justify-between gap-5">
			<?php if ( get_field( 'title' ) ) : ?>
				<div class="lg:text-4xl text-2xl text-primary max-w-[572px]">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php
			$button = get_sub_field( 'button' );
			$btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
			$btn_link = ( is_array( $button ) && ! empty( $button['link'] ) ) ? $button['link'] : '';

			if ( $btn_title ) : ?>
				<a href="<?php echo check_link( $btn_link ) ?>"
					class="lg:ml-auto block w-fit py-3 px-8 rounded-full overflow-hidden border border-[#7B7B7B80] bg-[white] hover:bg-[#eae9e9] transition-colors duration-300">
					<?php echo esc_html( $btn_title ); ?>
				</a>
			<?php endif; ?>

		</div>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="mt-12 md:grid grid-cols-3 xl:gap-5 gap-2.5 block_slider center_items watch_css md:mx-0 -mx-5">
				<?php while ( have_rows( 'list_content' ) ) :
					the_row(); ?>
					<div
						class="block_slider-item md:w-full w-[83%] xl:rounded-[35px] rounded-[20px] overflow-hidden bg-[#E3E3E3] xl:p-6 p-4">
						<a href="<?php echo check_link(get_sub_field('link')) ?>"
							class="block relative w-full aspect-[480/320] xl:rounded-[35px] rounded-[20px] overflow-hidden">
							<?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'absolute inset-0 object-cover size-full hover:scale-105 transition-transform duration-300']) ?>
                           
						</a>
						<div class="mt-5 xl:space-y-8 space-y-3">
							<div class="line-clamp-2">
                                 <?php if( get_sub_field('title') ): ?>
                                    <a href="<?php echo check_link(get_sub_field('link')) ?>" class="block lg:text-3xl text-2xl text-[#1E1E1E]">
                                       <?php the_sub_field('title'); ?>
                                    </a>
                                 <?php endif; ?>
							</div>
                             <?php if( get_sub_field('desc') ): ?>
                                
                                <div class="lg:text-[26px] text-xl leading-[1.1] text-[#5C5C5C] line-clamp-6">
                                  <?php the_sub_field('desc'); ?>
                                </div>
                             <?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>