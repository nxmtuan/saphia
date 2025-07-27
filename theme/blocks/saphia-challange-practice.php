<section class="relative lg:my-[150px] mt-[60px]" data-component="saphia-challange-practice">
	<?php echo wp_get_attachment_image( get_field( 'img' ), 'full', false, [ 'class' => 'absolute bottom-0 right-0 object-contain 2xl:max-w-[100%] md:max-w-[46%] md:block hidden' ] ) ?>

	<div class="relative container z-[1]">
		<div class="max-w-[842px]">
			<?php if ( get_field( 'title' ) ) : ?>
				<div class="lg:text-4xl text-2xl text-primary">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'desc' ) ) : ?>

				<div class="mt-3 xl:text-[26px] lg:text-xl text-[#5C5C5C]">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="mt-8 md:flex flex-wrap gap-[6px] md:max-w-[1192px] block_slider watch_css center_items md:mx-0 -mx-5">
				<?php
				$i = 0;
				while ( have_rows( 'list_content' ) ) :
					the_row();
					$i++;
					?>
					<div
						class="block_slider-item <?= $i === 1 ? 'md:mt-[68px]' : '' ?> <?= $i === 3 ? 'md:-mt-[68px]' : '' ?> md:w-[calc(50%-3px)] w-[83%] h-fit">
						<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
							class="group block relative xl:pt-12 lg:pt-8 pt-6 px-6 lg:rounded-[35px] rounded-[20px] overflow-hidden aspect-[591/396]">
							<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'absolute inset-0 size-full group-hover:scale-105 transition-transform duration-300' ] ) ?>

							<p class=" absolute top-2.5 right-2.5 size-[50px]">
								<?php echo svg( 'btnLink', '', '', 'size-full ahrink-0' ) ?>
							</p>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>