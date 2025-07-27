<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gnws
 */

get_header();
?>

<main>
	<section class="lg:my-[164px] my-[60px]" data-component="post-kiemhoa">
		<div class="container">
			<?php if ( !is_search() ) { ?> 
				<?php
				if ( have_rows( 'tax_category_title',get_queried_object() ) ) : ?>
					<div
						class="xl:text-[64px] text-4xl xl:leading-[77px] tracking-[-0.96px] highlight mb-8">
						<?php while ( have_rows( 'tax_category_title',get_queried_object() ) ) :
							the_row(); ?>
							<?php if ( get_sub_field( 'highlight' ) ) : ?>
								<p><span><?php the_sub_field( 'title' ); ?></span></p>
							<?php else : ?>
								<p><?php the_sub_field( 'title' ); ?></p>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php else : ?>
					<div
						class="xl:text-[64px] text-4xl xl:leading-[77px] tracking-[-0.96px] highlight mb-8">
						<p><?php echo wp_kses_post( get_the_archive_title() ); ?></p>
					</div>
				<?php endif; ?>
				
			<?php } ?>

			<?php
			$archive_desc = get_the_archive_description();
			if ( $archive_desc && !is_search() ) : ?>
				<div class="lg:text-[26px] leading-[1.1] text-[#5C5C5C] mb-8">
					<?php echo wp_kses_post( $archive_desc ); ?>
				</div>
			<?php endif; ?>

			<?php if ( have_posts() ) :?>
				<?php if ( is_search()) { ?> 
					<h2 class="mb-6 text-2xl font-semibold">
						<?php
						/* translators: %s: search query */
						printf(
							esc_html__( 'Kết quả tìm kiếm cho từ khóa: "%s"', 'gnws' ),
							esc_html( get_search_query() )
						);
						?>
					</h2>
				<?php } ?>
				<div class="mt-8 grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 xl:gap-8 gap-5">
					<?php while ( have_posts() ) :
						the_post(); ?>
						<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
					<?php endwhile; ?>
				</div>

				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div class="mt-8 pagination-wrapper">
						<?php gnws_pagination(); ?>
					</div>
				<?php endif; ?>

			<?php else : ?>
			    <?php if ( is_search() ) : ?>
			        <h2 class="mb-6 text-2xl font-semibold">
			            <?php
			            /* translators: %s: search query */
			            printf(
			                esc_html__( 'Không tìm thấy kết quả cho từ khóa: "%s"', 'gnws' ),
			                esc_html( get_search_query() )
			            );
			            ?>
			        </h2>
			    <?php else : ?>
			        <?php get_template_part( 'template-parts/content-none' ); ?>
			    <?php endif; ?>
			<?php endif; ?>

		</div>
	</section>
</main>


<?php
get_footer();
