<?php

/**
Template Name: Full Content
 */

get_header();
?>
<main>
	<section class="lg:my-20 my-10">
		<div class="container">
			<h1 class="xl:text-5xl lg:text-3xl text-2xl font-bold text-center mb-10">
				<?php the_title() ?>
			</h1>
			<div class="the_content">
				<?php the_content() ?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();