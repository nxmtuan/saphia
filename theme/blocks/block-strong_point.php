<section class="lg:my-[150px] my-[60px]" data-component="block-strong_point">
	<div class="container">
		<?php if ( have_rows( 'main_title' ) ) : ?>
			<div
				class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] highlight text-black max-w-">
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

		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="lg:mt-[68px] mt-10 md:grid xl:grid-cols-4 grid-cols-2 xl:gap-[54px] gap-4 md:h-[496px] h-[400px] block_slider watch_css center_items md:mx-0 -mx-5">
				<?php while ( have_rows( 'list_content' ) ) :
					the_row(); ?>
					<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
						class="block_slider-item md:w-full w-[83%] h-full relative lg:rounded-[35px] rounded-[20px] overflow-hidden flex items-end">
						<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'absolute inset-0 size-full object-cover' ] ) ?>
						<div
							class="relative px-3 py-[23px] lg:text-[42.5px] text-[30px] leading-[1] bg-card-gradient text-white z-[1]">
							<?php the_sub_field( 'title' ) ?>
						</div>
						<p
							class="absolute lg:top-2 top-4 lg:right-2 right-4 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0 z-[1]">
							<?php echo svg( 'up-right', '27', '30', 'shrink-0 text-content' ) ?>
						</p>
					</a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>