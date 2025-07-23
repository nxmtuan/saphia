<section class="lg:my-[200px] my-[60px]" data-components="block_product-recreate">
	<div class="container">
		<div class="w-full relative rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
			style="background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'img' ), 'full' ) ?>');">
			<div class="absolute inset-0 size-full bg-[#393CA280]"></div>
			<div class="relative lg:py-[107px] lg:pl-24 p-6 max-w-[769px] text-white z-[1]">
				<?php if ( get_field( 'title' ) ) : ?>
					<div class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px]">
						<?php the_field( 'title' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( have_rows( 'list_content' ) ) : ?>
					<ul class="lg:my-16 my-8 lg:pl-5 space-y-4 lg:text-lg text-sm">
						<?php while ( have_rows( 'list_content' ) ) :
							the_row(); ?>
							<li class="flex items-center gap-4">
								<?php echo svg( 'check', '20', '20', 'shrink-0' ) ?>
								<?php the_sub_field( 'content' ) ?>
							</li>
						<?php endwhile; ?>
                        </ul>
					<?php endif; ?>
					<?php
					$button = get_field( 'button' );
					$btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
					$btn_link = ( is_array( $button ) && ! empty( $button['link'] ) ) ? $button['link'] : '';

					if ( $btn_title ) : ?>

						<a href="<?php echo check_link( $btn_link ) ?>"
							class="w-fit block lg:py-[25px] py-2 px-10 lg:text-xl text-sm text-white bg-primary hover:bg-[#224393c7] rounded-full overflow-hidden transition-colors duration-300">
							<?php echo esc_html( $btn_title ); ?>
						</a>
					<?php endif; ?>
			</div>

		</div>
	</div>
	</div>
</section>