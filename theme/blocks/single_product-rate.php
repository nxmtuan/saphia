<section class="lg:my-[200px] my-[60px]" data-components="single_product-rate">
	<div class="container">
		<div class="lg:text-[40px] text-2xl leading-[1] text-[#000000E0] text-center">
			<?php the_title() ?>
		</div>
		<div class="star-rating-customer flex flex-col items-center gap-[21px] mb-5">
			<div class="rate">
				<input type="radio" id="star5-5" name="rate2" checked value="5" />
				<label for="star5-5" title="text">5 stars</label>
				<input type="radio" id="star4-4" name="rate2" value="4" />
				<label for="star4-4" title="text">4 stars</label>
				<input type="radio" id="star3-3" name="rate2" value="3" />
				<label for="star3-3" title="text">3 stars</label>
				<input type="radio" id="star2-2" name="rate2" value="2" />
				<label for="star2-2" title="text">2 stars</label>
				<input type="radio" id="star1-1" name="rate2" value="1" />
				<label for="star1-1" title="text">1 star</label>
			</div>
			<div class="lg:text-2xl text-xl text-[#000000E0]">
				<?php _e( '4.9 trên 5.0', 'gnws' ) ?>
			</div>
			<div class="text-xs underline text-[#00000070]">
				<?php
				$random_number = rand( 50, 200 );
				_e( "Dựa trên {$random_number} đánh giá", 'gnws' ) ?>
			</div>

		</div>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div class="max-w-[1026px] mx-auto block_slider center_items has_dots has_autoplay">
				<?php while ( have_rows( 'list_content' ) ) :
					the_row(); ?>
					<div class="block_slider-item w-full pb-[60px]">
						<div class="w-full ">

							<div class="lg:text-[32px] text-xl leading-[1] text-[#0000008A]  text-center ">
								<?php if ( get_sub_field( 'content' ) ) : ?>
									<div class="font-bold italic">
										<?php the_sub_field( 'content' ); ?>
									</div>
								<?php endif; ?>
								<?php if ( get_sub_field( 'name' ) ) : ?>

									<div class="mt-2 text-[15px] not-italic text-black">
										<?php the_sub_field( 'name' ); ?>
									</div>
								<?php endif; ?>
								<?php if ( get_sub_field( 'pos' ) ) : ?>
									<div class="mt-2 text-[15px] not-italic text-[#757575]">
										<?php the_sub_field( 'pos' ); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>