<section class="my-10">
	<div class="container">
        <div class="the_content">
            <?php if ( get_field( 'content' ) ) : ?>
                <?php the_field( 'content' ); ?>
            <?php endif; ?>
        </div>
	</div>
</section>