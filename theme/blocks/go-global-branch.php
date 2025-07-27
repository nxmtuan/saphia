<section class="lg:py-[107px] py-[60px] 2xl:h-[1869px] relative" data-component="go-global-branch">
	<?php echo wp_get_attachment_image( get_field( 'bg' ), 'full', false, [ 'class' => 'absolute inset-0 size-full object-cover' ] ) ?>

	<div class="relative z-[1] container size-full flex flex-col gap-8">
		<div class="max-w-[800px] ml-auto">
			<?php if ( have_rows( 'main_title' ) ) : ?>
				<div class="lg:text-4xl text-2xl highlight">
					<?php while ( have_rows( 'main_title' ) ) :
						the_row(); ?>
						<?php if ( get_sub_field( 'highlight' ) ) : ?>
							<p>
								<span>
									<?php the_sub_field( 'title' ) ?>
								</span>
							</p>

						<?php else : ?>
							<p>
								<?php the_sub_field( 'title' ) ?>
							</p>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'desc' ) ) : ?>
				<div class="mt-5 lg:text-[26px] text-xl leading-[1.1] text-[#5C5C5C]">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>

		<div
			class="mt-auto rounded-[32px] overflow-hidden bg-[#5B79A4] lg:py-[72px] py-9 xl:px-[200px] px-5">
			<?php if ( get_field( 'title' ) ) : ?>

				<div class="lg:text-4xl text-2xl text-white text-center">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php

			if ( have_rows( 'list_content' ) ) :

				?>
				<div
					class="mt-12 md:grid grid-cols-2 grid-rows-2 gap-3 block_slider center_items watch_css md:mx-0 -mx-5">
					<?php
					$i = 0;
					while ( have_rows( 'list_content' ) ) :
						the_row();
						$i++;
						?>
						<div
							class="block_slider-item md:w-full w-[83%] <?= $i == 1 ? 'row-span-2' : 'row-span-1' ?> rounded-[32px] overflow-hidden relative lg:min-h-[384px] md:min-h-[285px] min-h-[384px]">
							<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'absolute inset-0 object-cover size-full hover:scale-105 transition-transform duration-300' ] ) ?>

						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php
			$button = get_field( 'button' );
			$btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
			$btn_link = ( is_array( $button ) && ! empty( $button['link'] ) ) ? $button['link'] : '';

			if ( $btn_title ) : ?>

				<a href="<?php echo check_link( $btn_link ) ?>"
					class="mx-auto mt-11 block w-fit py-3 px-8 rounded-full overflow-hidden border border-[#FFFFFF2B] bg-[#FFFFFF2B] hover:bg-[#ffffff66] backdrop-blur-[10px] text-white transition-colors duration-300">
					<?php echo esc_html( $btn_title ); ?>
				</a>
			<?php endif; ?>

		</div>
	</div>
</section>