<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gnws
 */

get_header();
?>

<main>
	<?php
	// Render content into a buffer to inspect rendered HTML
	ob_start();
	the_content();
	$content_html = ob_get_clean();

	// Detect rendered block wrapper via role="document"
	if ( strpos( $content_html, 'role="document"' ) !== false )
	{
		// Content contains block wrapper or editor markup: output as-is
		echo $content_html;
	} else
	{
		// Fallback for pure text content: wrap in container
		?>
		<section class="lg:my-20 my-10">
			<div class="container">
				<h1 class="xl:text-5xl lg:text-3xl text-2xl font-bold text-center mb-10">
					<?php the_title() ?>
				</h1>
				<div class="the_content">
					<?php echo $content_html; ?>
				</div>
			</div>
		</section>
		<?php
	}
	?>
</main>

<?php
get_footer();