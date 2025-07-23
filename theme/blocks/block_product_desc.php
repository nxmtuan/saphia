<section class="lg:my-[200px] my-[60px]" data-components="block_product_desc">
	<div class="container">
		<?php if ( get_field( 'title' ) ) : ?>
			<div
				class="lg:text-[64px] text-4xl leading-[1] bg-clip-text text-transparent bg-text-gradient">
				<?php the_field( 'title' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div class="lg:mt-[50px] mt-10 grid grid-cols-2 lg:gap-[30px] gap-2">
				<?php
				$i = 0;
				while ( have_rows( 'list_content' ) ) :
					the_row();
					$i++;
					?>
					<div
						class="col-span-1 flex flex-col gap-10 <?= $i % 2 == 0 ? 'lg:flex-col-reverse' : '' ?>">
						<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'rounded-[35px] size-full object-cover' ] ) ?>
						<?php if ( get_sub_field( 'desc' ) ) : ?>
							<div class="lg:text-xl text-[9px] text-[#525256]">
								<?php the_sub_field( 'desc' ); ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
	<?php if ( have_rows( 'list_product' ) ) : ?>
		<div class="mt-[30px] relative">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bgsam2.png" alt=""
				loading="lazy"
				class="absolute left-0 bottom-0 object-contain select-none 1.5xl:block hidden">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bgsam1.png" alt=""
				loading="lazy"
				class="absolute right-0 top-0 object-contain select-none 1.5xl:block hidden">
			<div class="container">
				<div
					class="md:flex flex-wrap gap-[6px] block_slider watch_css center_items md:mx-0 -mx-5">
					<?php
					$i = 0;
					while ( have_rows( 'list_product' ) ) :
						the_row();
						$i++;
						?>
						<div
							class="<?= $i ?> block_slider-item <?= $i === 2 ? 'md:mt-[150px]' : '' ?> <?= $i === 3 ? 'md:-mt-[150px]' : '' ?> md:w-[calc(50%-3px)] w-[83%] h-fit">
							<div class="group relative xl:pt-12 lg:pt-8 pt-6 px-6 lg:rounded-[35px] rounded-[20px] overflow-hidden aspect-[814/640] bg-no-repeat bg-cover bg-center"
								style="background-image: url('<?php echo wp_get_attachment_image_url( get_sub_field( 'img' ), 'full' ) ?>')">
								<div class="relative z-[1] flex flex-col items-center">
									<?php if ( get_sub_field( 'title' ) ) : ?>

										<div
											class="max-w-[332px] xl:text-[40px] lg:text-2xl text-xl lg:leading-[1] tracking-[-1px] text-[#000000E0] text-center">
											<?php the_sub_field( 'title' ); ?>
										</div>
									<?php endif; ?>
									<?php if ( get_sub_field( 'desc' ) ) : ?>
										<div
											class="mt-[2px] max-w-[185px] lg:text-[23px] text-sm leading-[1] tracking-[-0.21px] text-[#00000070] text-center">
											<?php the_sub_field( 'desc' ); ?>
										</div>
									<?php endif; ?>
									<?php
									$button = get_sub_field( 'button' );
									$btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
									$btn_link = ( is_array( $button ) && ! empty( $button['link'] ) ) ? $button['link'] : '';
									if ( $btn_title ) : ?>

										<a href="<?php echo check_link( $btn_link ) ?>"
											class="mt-[22px] block lg:py-[15px] py-2 lg:px-[49px] px-7 rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white font-content lg:text-[15px] text-xs leading-[1] tracking-[-0.151px] w-fit transition-colors duration-300">
											<?php echo esc_html( $btn_title ); ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

</section>