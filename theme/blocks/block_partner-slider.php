<?php if ( have_rows( 'list_partner' ) ) : ?>
	<section class="lg:mt-[47px] mb-5" data-components="block_partner-slider">
		<div class="lg:container">
			<div class="py-16 w-full block_slider loop center_items has_autoplay">
				<?php while ( have_rows( 'list_partner' ) ) :
					the_row(); ?>
					<div class="block_slider-item lg:mx-0 mx-5 lg:w-[20%] w-[30%] flex justify-center">
						<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'object-contain' ] ) ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>