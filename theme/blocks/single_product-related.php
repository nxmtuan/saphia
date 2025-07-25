<?php
$current_id      = get_the_ID();
$terms           = wp_get_post_terms( $current_id, 'product_cat', array( 'fields' => 'ids' ) );
if ( $terms && ! is_wp_error( $terms ) ) {
    $wrapper_args = array(
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'post__not_in'   => array( $current_id ),
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $terms,
            ),
        ),
    );
    $wrapper_query = new WP_Query( $wrapper_args );
    if ( $wrapper_query->have_posts() ) :
        wp_reset_postdata(); // ensure no leftover loop state
?>
<section class="lg:my-[200px] my-[60px]" data-components="single_product-related">
	<div class="container">
		<div class="lg:text-[63px] text-4xl text-content">
			<?php _e( 'Sản phẩm liên quan', 'gnws' ) ?>
		</div>
		<div
			class="mt-14 md:grid lg:grid-cols-4 grid-cols-2 gap-[30px] block_slider center_items watch_css md:mx-0 -mx-5">
			<?php
			$current_id = get_the_ID();
			$terms = wp_get_post_terms( $current_id, 'product_cat', array( 'fields' => 'ids' ) );
			if ( $terms && ! is_wp_error( $terms ) )
			{
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => 4,
					'post__not_in' => array( $current_id ),
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'term_id',
							'terms' => $terms,
						),
					),
				);
				$related = new WP_Query( $args );
				if ( $related->have_posts() ) :
                    $i=0;
					while ( $related->have_posts() ) :
						$related->the_post(); 
                        $i++;
                        ?>
						<div class="block_slider-item md:w-full w-[83%] flex flex-col gap-7">
							<div
								class="p-8 aspect-[386/500] w-full flex items-center justify-center bg-[#FFF3E7] rounded-2xl overflow-hidden">
								<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>"
									class="max-w-[50%] object-contain">

							</div>
							<div class="star-rating-prosucts flex-1 flex flex-col gap-5">
								<div class="flex-1 flex flex-col gap-5">
									<div class="rate">
										<input type="radio" id="star5-<?= $i ?>" name="rate<?= $i ?>" value="5" checked />
										<label for="star5-<?= $i ?>" title="text">5 stars</label>
										<input type="radio" id="star4-<?= $i ?>" name="rate<?= $i ?>" value="4" />
										<label for="star4-<?= $i ?>" title="text">4 stars</label>
										<input type="radio" id="star3-<?= $i ?>" name="rate<?= $i ?>" value="3" />
										<label for="star3-<?= $i ?>" title="text">3 stars</label>
										<input type="radio" id="star2-<?= $i ?>" name="rate<?= $i ?>" value="2" />
										<label for="star2-<?= $i ?>" title="text">2 stars</label>
										<input type="radio" id="star1-<?= $i ?>" name="rate<?= $i ?>" value="1" />
										<label for="star1-<?= $i ?>" title="text">1 star</label>
									</div>
									<div class="text-lg text-content"><?php the_title(); ?></div>
								</div>
								<a href="<?php the_permalink(); ?>"
									class="w-full xl:p-[14px] p-2 xl:text-base text-sm text-content bg-white border border-[#0000001F] text-center rounded-full overflow-hidden">
									<?php _e( 'Mua ngay', 'gnws' ); ?> |
									<?php if ( get_field( 'product_price', get_the_ID() ) ) : ?>
										<?php the_field( 'product_price', get_the_ID() ); ?>
									<?php endif; ?>
								</a>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata();
				endif;
			}
			?>
		</div>
	</div>
</section>
<?php
    endif;
    wp_reset_postdata();
}
?>