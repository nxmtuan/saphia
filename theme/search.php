<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gnws
 */

get_header();
?>

<main>
	<section class="my-20">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<h2 class="mb-6 text-2xl font-semibold">
					<?php
					/* translators: %s: search query */
					printf(
						esc_html__( 'Kết quả tìm kiếm cho từ khóa: "%s"', 'gnws' ),
						esc_html( get_search_query() )
					);
					?>
				</h2>
				<div class="search-results grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					?>
				</div>
				<div class="mt-8">
					<?php gnws_the_posts_navigation(); ?>
				</div>
			<?php else : ?>
				<h2 class="mb-6 text-2xl font-semibold">
					<?php
					/* translators: %s: search query */
					printf(
						esc_html__( 'Không tìm thấy kết quả cho từ khóa: "%s"', 'gnws' ),
						esc_html( get_search_query() )
					);
					?>
				</h2>
				
			<?php endif; ?>
		</div>
	</section>
</main>

<?php
get_footer();
