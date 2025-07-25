<section class="lg:my-[200px] my-[60px]" data-components="single_product-cart">
	<div class="container">
		<div
			class="md:px-8 md:py-7 p-6 bg-[#ECF4FE] rounded-[35px] overflow-hidden flex lg:flex-row flex-col items-center lg:justify-between md:gap-10 gap-5">
			<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>"
				class="lg:w-1/2 w-full object-contain">

			<div
				class="lg:p-[50px] p-6 space-y-[18px] flex-1 bg-[#D5E6FA] lg:rounded-[35px] rounded-[20px] overflow-hidden">
				<div class="md:text-3xl text-xl text-content product-name">
					<?php the_title() ?>
				</div>
				<div
					class="star-rating flex md:flex-row flex-col md:items-center gap-[5px] text-[#0000008A] text-xs">
					<div class="rate">
						<input type="radio" id="star5" name="rate" checked value="5" />
						<label for="star5" title="text">5 stars</label>
						<input type="radio" id="star4" name="rate" value="4" />
						<label for="star4" title="text">4 stars</label>
						<input type="radio" id="star3" name="rate" value="3" />
						<label for="star3" title="text">3 stars</label>
						<input type="radio" id="star2" name="rate" value="2" />
						<label for="star2" title="text">2 stars</label>
						<input type="radio" id="star1" name="rate" value="1" />
						<label for="star1" title="text">1 star</label>
					</div>
					<div class="flex items-center gap-[5px]">
						<div>
							<?php
							$sold = get_field( 'product_number_sold', get_the_ID() ) ?: 100;
							$rate = get_field( 'product_number_rate', get_the_ID() ) ?: 80;
							?>
							<?= $sold ?> <?php _e( 'đã bán', 'gnws' ) ?>
						</div>
						<div>|</div>
						<div><?= $rate ?> <?php _e( 'đã đánh giá', 'gnws' ) ?></div>
					</div>
				</div>
				<?php if ( get_field( 'product_short_desc', get_the_ID() ) ) : ?>
					<div class="md:text-lg text-sm text-[#000000E0]">
						<?php the_field( 'product_short_desc', get_the_ID() ); ?>
					</div>
				<?php endif; ?>
				<div
					class="md:px-[25px] px-2 md:py-[19px] py-3 rounded-lg overflow-hidden bg-white md:text-sm text-xs flex items-center justify-between">
					<div><?php the_title() ?></div>
					<?php if ( get_field( 'product_price', get_the_ID() ) ) : ?>
						<div class="product-price"><?php the_field( 'product_price', get_the_ID() ); ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ( get_field( 'product_price_monthly', get_the_ID() ) ) : ?>
					<div
						class="md:px-[25px] px-2 md:py-[19px] py-3 rounded-lg overflow-hidden border border-[#0000001F] text-[#00000070] md:text-sm text-xs flex items-center justify-between">
						<div><?php _e( 'Giao hàng mỗi tháng', 'gnws' ) ?></div>
						<div class="product-price-monthly">
							<?php the_field( 'product_price_monthly', get_the_ID() ); ?></div>
					</div>
				<?php endif; ?>
				<button type="button" data-popup="add-cart-popup"
					class="md:p-[14px] p-2 rounded-full overflow-hidden w-full flex items-center justify-center md:text-lg text-sm text-white bg-primary hover:bg-[#224393c7] transition-colors duration-300">
					<?php _e( 'Thêm vào giỏ hàng', 'gnws' ) ?>
				</button>
			</div>
		</div>
	</div>
</section>

<div id="add-cart-popup"
	class="fixed top-0 z-[51] transition-all duration-500 [&:not(.show)]:opacity-0 [&:not(.show)]:pointer-events-none [&:not(.show)]:invisible popup">
	<div
		class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 1.5xl:w-[1348px] lg:w-[60%] w-[95%] rounded-[35px] overflow-hidden flex items-stretch z-[52]">
		<div class="1.5xl:block hidden w-[630px] aspect-[717/519] relative bg-form-gradient">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-form.png" alt=""
				loading="lazy" class="absolute inset-0 object-cover size-full">
			<div class="absolute inset-0 object-cover size-full bg-form-gradient"></div>
		</div>
		<div
			class="flex-1 1.5xl:pt-[51px] 1.5xl:pb-[30px] 1.5xl:pr-[54px] 1.5xl:pl-0 px-5 py-8 bg-[#EBF3FD]">
			<div class="lg:text-5xl text-2xl text-content">
				<?php _e('Để lại thông tin để nhận tư vấn!', 'gnws') ?>
			</div>
			<div class="mt-8 form-de-lai-thong-tin-tu-van">
				<?php echo do_shortcode( '[contact-form-7 id="2b83a3a" title="Form để lại thông tin tư vấn"]' ); ?>
			</div>
		</div>
	</div>

</div>