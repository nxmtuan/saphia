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
					<div class="rate flex items-center gap-1">
						<?php
						for ( $i = 0; $i < 5; $i++ )
						{
							?>
							<?php echo svg( 'star', '18', '18' ) ?>
						<?php
						}
						?>

					</div>
					<div class="flex items-center gap-[5px]">
						<div>
							<?php
							$sold = get_field( 'product_number_sold',get_the_ID() ) ?: 100;
							$rate = get_field( 'product_number_rate',get_the_ID() ) ?: 80;
							?>
							<?= $sold ?> <?php _e( 'đã bán', 'gnws' ) ?>
						</div>
						<div>|</div>
						<div><?= $rate ?> <?php _e( 'đã đánh giá', 'gnws' ) ?></div>
					</div>
				</div>
				<?php if ( get_field( 'product_short_desc',get_the_ID() ) ) : ?>
					<div class="md:text-lg text-sm text-[#000000E0]">
						<?php the_field( 'product_short_desc',get_the_ID() ); ?>
					</div>
				<?php endif; ?>
				<?php if ( have_rows( 'product_info',get_the_ID() ) ) : ?>
					<?php
					$i = 0;
					while ( have_rows( 'product_info',get_the_ID() ) ) :
						the_row();
						$i++;
						?>
						<?php if ( $i == 1 ) : ?>
							<div
								class="md:px-[25px] px-2 md:py-[19px] py-3 rounded-lg overflow-hidden bg-white md:text-sm text-xs flex items-center justify-between">
								<div><?php the_sub_field('title')  ?></div>
								
									<div class="product-price"><?php the_sub_field( 'desc' ); ?>
									</div>
								
							</div>

						<?php else : ?>
							<div
								class="md:px-[25px] px-2 md:py-[19px] py-3 rounded-lg overflow-hidden border border-[#0000001F] text-[#00000070] md:text-sm text-xs flex items-center justify-between">
								<div><?php the_sub_field('title')  ?></div>
								<div class="product-price-monthly">
									<?php the_sub_field( 'desc' ); ?>
								</div>
							</div>
						<?php endif; ?>

					<?php endwhile; ?>
				<?php endif; ?>


				<button type="button" data-popup="add-cart-popup" product-id = "<?php the_ID() ?>"
					class="md:p-[14px] p-2 rounded-full overflow-hidden w-full flex items-center justify-center md:text-lg text-sm text-white bg-primary hover:bg-[#224393c7] transition-colors duration-300">
					<?php _e( 'Thêm vào giỏ hàng', 'gnws' ) ?>
				</button>
			</div>
		</div>
	</div>
</section>