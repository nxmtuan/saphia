<section class="lg:my-[150px] mt-[60px]" data-component="saphia-challange">
	<div class="container">
		<div
			class="w-full rounded-[32px] overflow-hidden bg-[#5B79A4] xl:p-10 p-5 flex md:flex-row flex-col md:items-center xl:gap-11 gap-5"
            style="background-color: <?php  $color = get_field('bg_color')?:'#5B79A4'; echo $color ?>;"
            >
			<div class="relative md:w-[37%] w-full rounded-[20px] aspect-square overflow-hidden">
                <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'absolute inset-0 size-full object-cover hover:scale-105 transition-transform duration-300']) ?>
				
			</div>
			<div class="flex-1 text-[#F7F7F7]">
				<?php if ( get_field( 'title' ) ) : ?>
					<div class="max-w-[565px] xl:text-4xl lg:text-2xl text-lg">
						<?php the_field( 'title' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( get_field( 'desc' ) ) : ?>
					<div class="mt-8 xl:text-[26px] lg:text-xl leading-[1.1]">
						<?php the_field( 'desc' ); ?>
					</div>
				<?php endif; ?>
				<?php
				$button = get_field( 'button' );
				$btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
				$btn_link = ( is_array( $button ) && ! empty( $button['link'] ) ) ? $button['link'] : '';
				if ( $btn_title ) : ?>
					<a href="<?php echo check_link( $btn_link ) ?>"
						class="mt-10 block w-fit py-3 px-8 rounded-full overflow-hidden border border-[#FFFFFF2B] bg-[#FFFFFF2B] hover:bg-[#ffffff66] backdrop-blur-[10px] text-white transition-colors duration-300">
						<?php echo esc_html( $btn_title ); ?>
					</a>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>