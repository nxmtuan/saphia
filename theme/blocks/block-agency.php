<section class="lg:mb-[180px] mb-[60px] lg:mt-0 mt-[30px]" data-component="block-agency">
	<div class="container">
		<div class="flex xl:flex-row flex-col items-center lg:justify-between">
			<?php if ( get_field( 'title' ) ) : ?>
				<div
					class="lg:text-[64px] lg:leading-[1.1] text-4xl tracking-[-0.96px] max-w-[988px] xl:text-left text-center">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php
			$button = get_field( 'button' );
			$btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
			$btn_link = ( is_array( $button ) && ! empty( $button['link'] ) ) ? $button['link'] : '';

			if ( $btn_title ) : ?>


				<a href="<?php echo check_link( $btn_link ) ?>" target="_blank"
					class="xl:mt-0 mt-3 w-fit lg:py-[25px] py-3 lg:px-11 px-5 rounded-full overflow-hidden bg-primary text-white lg:text-xl text-sm">
					<?php echo esc_html( $btn_title ); ?>
				</a>
			<?php endif; ?>

		</div>

		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="lg:mt-[60px] mt-10 group md:flex md:w-full md:max-w-full lg:h-[496px] h-[400px] xl:gap-[53px] gap-4 block_slider watch_css center_items md:mx-0 -mx-5">
				<?php 
                $i=0;
                while ( have_rows( 'list_content' ) ) :
					the_row();
                    $i++;
                    $img_hover = get_sub_field('img_hover')?:get_sub_field('img');
                    ?>
					<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank" class="block_slider-item relative block max-md:min-w-[83%] md:h-full basis-0 <?php echo $i == 1 ? 'md:flex-grow-[2]' : 'md:flex-grow' ?>  lg:rounded-[35px] rounded-[20px] bg-no-repeat bg-cover bg-center cursor-pointer md:transition-all md:duration-500 md:ease-in-out md:group-hover:first:flex-grow md:hover:flex-grow-[2] overflow-hidden group/inner"
						style="background-image: url('<?php echo wp_get_attachment_image_url(get_sub_field('img'), 'full',false) ?>');">

                        <?php echo wp_get_attachment_image($img_hover, 'full',false,['class'=>'absolute inset-0 size-full lg:opacity-0 group-hover/inner:opacity-100 transition-all duration-300 object-cover']) ?>

						<p 
							class="absolute lg:top-2 top-4 lg:right-2 right-4 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
							<?php echo svg( 'up-right', '27', '30', 'shrink-0 text-content' ) ?>
						</p>
					</a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	
	</div>
</section>