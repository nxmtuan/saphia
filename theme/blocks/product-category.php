<section class="lg:my-[100px] my-[60px]" data-components="product-category">
	<div class="container lg:space-y-[100px] space-y-10">
		<?php
		$terms = get_terms( array(
			'taxonomy' => 'product_cat',
			'hide_empty' => false,
		) );
		if ( $terms && ! is_wp_error( $terms ) ) :
			foreach ( $terms as $term ) :
				$img_id = get_term_meta( $term->term_id, 'tax_category_cat_img', true );
				$img_url = $img_id ? wp_get_attachment_image_url( $img_id, 'full' ) : '';
				?>
				<div class="lg:flex items-stretch gap-[30px] mb-12">
					<div class="px-8 pb-6 relative lg:flex hidden items-end aspect-[503/628] xl:w-[503px] lg:w-[30%] w-full rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
						style="background-image: url('<?php echo esc_url( $img_url ); ?>');">
						<div class="absolute inset-0 size-full bg-products-gradient"></div>
						<div class="relative xl:text-[70px] text-4xl xl:leading-[78px] text-white z-[1]">
							<?php echo esc_html( $term->name ); ?>
						</div>
					</div>
					<div class="mb-6 lg:hidden block text-2xl">
						<?php echo esc_html( $term->name ); ?>
					</div>
					<div class="flex-1 products-slider block_slider has_nav md:mx-0 -mx-5">
						<?php
						$args = array(
							'post_type' => 'product',
							'posts_per_page' => 10,
							'tax_query' => array(
								array(
									'taxonomy' => 'product_cat',
									'field' => 'term_id',
									'terms' => $term->term_id,
								),
							),
						);
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
								$loop->the_post();
								?>
								<div
									class="block_slider-item ml-4 p-6 md:w-[47%] w-[80%] h-full rounded-[35px] overflow-hidden bg-[#FFF3E7] flex flex-col gap-6">
									<div class="text-2xl"><?php the_title(); ?></div>
									<div class="flex-1 flex items-center justify-center">
										<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>"
											class="object-contain max-xl:max-w-[60%] max-md:max-w-[50%]">

									</div>
									<div class="flex items-center gap-8">
										<a href="<?php the_permalink(); ?>"
											class="flex justify-center items-center w-1/2 p-[14px] rounded-full overflow-hidden bg-white hover:bg-[#f5f1f1] text-content leading-[1] transition-colors duration-300">
											<?php _e( 'Xem chi tiết', 'gnws' ) ?>
										</a>
										<a href="<?php the_permalink(); ?>"
											class="flex justify-center items-center w-1/2 p-[14px] rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white leading-[1] transition-colors duration-300">
											<?php _e( 'Mua ngay', 'gnws' ) ?>
										</a>
									</div>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
				</div>
				<?php
			endforeach;
		endif;
		?>
	</div>
</section>