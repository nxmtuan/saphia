<section class="lg:mt-[180px] lg:mb-12 my-[60px]">
	<div class="container">
		<div class="lg:space-y-9 space-y-4 text-content">
			<?php if ( get_field( 'title_top' ) ) : ?>
				<div
					class="lg:text-[25px] text-base lg:leading-[22.565px] tracking-[-0.242px] uppercase">
					<?php the_field( 'title_top' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'main_title' ) ) : ?>
				<div class="lg:text-[55px] text-4xl lg:leading-[1.1] tracking-[-0.96px] max-w-[888px]">
					<?php the_field( 'main_title' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<div
			class="lg:mt-[100px] mt-10 flex items-stretch gap-[35.585px] block_slider watch_css center_items md:mx-0 -mx-5">
			<?php
			// ACF fields
			$is_manual = get_field( 'is_manual' );
			$manual_posts = $is_manual ? get_field( 'select_post' ) : false;

			// Build posts array
			if ( $is_manual && $manual_posts )
			{
				// Relationship field returns array of post objects/IDs
				$posts_list = is_array( $manual_posts ) ? $manual_posts : array( $manual_posts );
			} else
			{
				$query_args = array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
				);
				$posts_list = get_posts( $query_args );
			}

			if ( $posts_list ) :
				foreach ( $posts_list as $p ) :
					$post_id = is_object( $p ) ? $p->ID : $p;

					$permalink = get_permalink( $post_id );
					$title = get_the_title( $post_id );
					$date = get_the_date( 'd/m/Y', $post_id );
					$author = get_the_author_meta( 'display_name', get_post_field( 'post_author', $post_id ) );
					$excerpt = get_the_excerpt( $post_id );

					$thumb_url = get_the_post_thumbnail_url( $post_id, 'large' );
					if ( ! $thumb_url )
					{
						$thumb_url = get_stylesheet_directory_uri() . '/assets/images/home7.png';
					}
					?>
					<a href="<?php echo esc_url( $permalink ); ?>"
						class="block_slider-item relative md:w-1/2 w-[83%] flex xl:flex-row flex-col xl:items-stretch xl:gap-[47px] md:gap-5 lg:rounded-[30px] rounded-[20px] overflow-hidden bg-[#ECF4FE]">
                        <img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>"
                            class="1.5xl:w-[333px] xl:w-[260px] w-full aspect-[332/384] object-cover lg:rounded-r-[30px] lg:rounded-b-0 rounded-b-[20px] overflow-hidden shrink-0">
						<div class="xl:py-11 xl:pr-11 xl:pl-0 p-6">

							<div class="xl:py-11 xl:pr-11 xl:pl-0 p-6">
								<div class="flex items-center gap-[15px]">
									<span
										class="text-[#525256] text-lg leading-[32.235px]"><?php echo esc_html( $author ); ?></span>
									<span class="text-[#525256]">•</span>
									<span
										class="text-[#525256] text-lg leading-[32.235px]"><?php echo esc_html( $date ); ?></span>
								</div>
								<p class="lg:mt-[49px] mt-4 line-clamp-3">
									<span
										class="block text-content text-[28.206px] leading-[36.265px] tracking-[-0.423px]">
										<?php echo esc_html( $title ); ?>
									</span>
								</p>
								<div
									class="mt-4 text-[18.132px] leading-[32.235px] text-[#525256] line-clamp-3">
									<?php echo esc_html( $excerpt ); ?>
								</div>
							</div>
							<p 
								class="absolute top-2.5 right-2.5 size-[54px] flex justify-center items-center rounded-full overflow-hidden bg-[#AEBBCE] shrink-0">
								<?php echo svg( 'up-right', '27', '30', 'shrink-0 text-white' ); ?>
							</p>
						</div>
                        </a>
						<?php
				endforeach;
				wp_reset_postdata();
			endif;
			?>
			</div>
		</div>
</section>