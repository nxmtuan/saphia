<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gnws
 */

get_header();
?>

<main>
	<section class="my-10">
		<div class="container lg:max-w-[1000px]">
			<h1 class="xl:text-5xl lg:text-3xl text-2xl font-bold text-center mb-10">
				<?php the_title() ?>
			</h1>
			<div class="the_content">
				<?php the_content() ?>
			</div>
			<?php
			$categories = get_the_category();
			if ( ! empty( $categories ) ) :
				$cat_ids = wp_list_pluck( $categories, 'term_id' );
				$related_args = array(
					'category__in' => $cat_ids,
					'post__not_in' => array( get_the_ID() ),
					'posts_per_page' => 3,
				);
				$related_query = new WP_Query( $related_args );
				if ( $related_query->have_posts() ) : ?>
					<section class="related-posts my-10">
						<h2 class="text-xl font-semibold mb-4"><?php _e( 'Bài viết liên quan', 'gnws' ) ?>
						</h2>
						<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
							<?php while ( $related_query->have_posts() ) :
								$related_query->the_post(); ?>
								<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
							<?php endwhile;
							wp_reset_postdata(); ?>
						</div>
					</section>
					<?php
				endif;
			endif;
			?>
		</div>
	</section>



</main>

<?php
get_footer();
