<section class="lg:my-[150px] my-[60px]" data-components="block-benefit">
	<div class="container">
		<?php if ( have_rows( 'main_title' ) ) : ?>
			<div
				class="ml-auto lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] highlight text-black max-w-[1160px] text-end">
				<?php while ( have_rows( 'main_title' ) ) :
					the_row(); ?>
					<?php if ( get_sub_field( 'highlight' ) ) : ?>
						<span>
							<?php the_sub_field( 'title' ) ?>
						</span>
					<?php else : ?>
						<?php the_sub_field( 'title' ) ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="mt-7 md:grid grid-cols-10 grid-rows-7 gap-2 xl:h-[896px] lg:h-[740px] md:h-[600px] h-[400px] text-white block_slider watch_css center_items has_autoplay md:mx-0 -mx-5">
				<?php
				$i = 0;
				while ( have_rows( 'list_content' ) ) :
					the_row();
					$i++;
					// map 1→5 to the Tailwind grid classes
					$map_classes = [
						1 => 'row-start-1 row-end-4 col-start-1 col-end-5',
						2 => 'row-start-1 row-end-4 col-start-5 col-end-8',
						3 => 'row-start-1 row-end-4 col-start-8 col-end-11',
						4 => 'row-start-4 row-end-8 col-start-1 col-end-6',
						5 => 'row-start-4 row-end-8 col-start-6 col-end-11',
					];

					
					$pos = (($i - 1) % 5) + 1;
					$class = $map_classes[ $pos ];
					?>

					<a href="<?php echo check_link(get_sub_field('link')) ?>"
						class="<?= $class ?> block_slider-item max-md:w-[83%] relative lg:pt-[43px] pt-6 lg:pl-[43px] pl-6 lg:rounded-[35px] rounded-[20px] overflow-hidden block group">
						
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'absolute inset-0 size-full object-cover transition-all duration-500 group-hover:scale-105 ']) ?>
                             <?php if( get_sub_field('title') ): ?>
                                <div class="relative xl:text-[42.5px] text-2xl tracking-[1px] z-[1] group-hover:text-primary transition-all duration-500">
                                  <?php the_sub_field('title'); ?>
                                </div>
                             <?php endif; ?>
						<p 
							class="absolute bottom-2.5 right-2.5 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0 transition-all duration-500 group-hover:bg-primary group-hover:rotate-45">
							<?php echo svg( 'up-right', '27', '30', 'shrink-0 text-content group-hover:text-white transition-all duration-500' ) ?>
						</p>
					</a>

				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	
	</div>
</section>