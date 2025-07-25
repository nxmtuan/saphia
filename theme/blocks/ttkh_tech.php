<section class="lg:my-[164px] my-[60px]" data-components="ttkh_tech">
	<div class="container">
		<div class="max-w-[1483px] mx-auto">
			<?php if ( get_field( 'title' ) ) : ?>

				<h3 class="xl:text-[55px] text-2xl text-[#393CA2] text-center">
					<?php the_field( 'title' ); ?>
				</h3>
			<?php endif; ?>
			<?php if ( get_field( 'desc' ) ) : ?>
				<div
					class="lg:mt-[67px] mt-7 xl:text-[32px] text-xl leading-[1] text-[#221F90] text-center">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php 
		$images = get_field( 'list_content' );
		if ( $images ) : ?>
			<div class="lg:mt-[86px] mt-7 md:grid grid-cols-4 lg:gap-7 gap-5 block_slider watch_css center_items md:mx-0 -mx-5">
				<?php foreach ( $images as $image_id ) : 
					$full_url   = wp_get_attachment_image_url( $image_id, 'full' );
					$medium_url = wp_get_attachment_image_url( $image_id, 'medium' );
					$alt_text   = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
				?>
					<div class="block_slider-item relative md:w-full w-[85%] rounded-[25px] overflow-hidden aspect-square">
						<a href="<?php echo esc_url( $full_url ); ?>" data-fancybox>
							<img src="<?php echo esc_url( $medium_url ); ?>"
							     alt="<?php echo esc_attr( $alt_text ); ?>"
							     class="absolute inset-0 size-full object-cover" />
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<?php if ( get_field( 'content' ) ) : ?>
			<div class="lg:mt-[51px] mt-7 max-w-[1389px] mx-auto">
				<div class="xl:text-[32px] text-xl leading-[1] text-[#221F90] text-center">
					<?php the_field( 'content' ); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>