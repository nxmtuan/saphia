<section class="lg:my-[164px] my-[60px]" data-component="post-kiemhoa">
	<div class="container">
		<?php if ( have_rows( 'main_title' ) ) : ?>
			<div class="xl:text-[64px] text-4xl xl:leading-[77px] tracking-[-0.96px] highlight mb-8">
				<?php while ( have_rows( 'main_title' ) ) :
					the_row(); ?>
					<?php if ( get_sub_field( 'highlight' ) ) : ?>
						<p>
							<span>
								<?php the_sub_field( 'title' ) ?>
							</span>
						</p>
					<?php else : ?>
						<p>
							<?php the_sub_field( 'title' ) ?>
						</p>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php if ( get_field( 'desc' ) ) : ?>
			<div class="lg:text-[26px] leading-[1.1] text-[#5C5C5C] mb-8">
				<?php the_field( 'desc' ); ?>
			</div>
		<?php endif; ?>
		<?php
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$mode = get_field( 'select_post' );
		// Base args
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 9,
			'paged' => $paged,
		);
		if ( 'manual' === $mode )
		{
			// If manual mode, filter by selected categories
			$selected_terms = get_field( 'select_cat' );
			if ( $selected_terms )
			{
				$args['tax_query'] = array(
					array(
						'taxonomy' => 'category',
						'field' => 'term_id',
						'terms' => $selected_terms,
					),
				);
			}
		}
		$post_query = new WP_Query( $args );
		if ( $post_query->have_posts() ) : ?>
			<div class="mt-8 grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 xl:gap-8 gap-5">
				<?php while ( $post_query->have_posts() ) :
					$post_query->the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
				<?php endwhile; ?>
			</div>
			<div class="mt-8 pagination-wrapper">
				<?php gnws_pagination_template( $post_query ); ?>
			</div>
			<?php
		endif;
		wp_reset_postdata();
		?>
	</div>
</section>