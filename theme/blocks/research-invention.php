<section class="lg:py-[121px] py-[60px] bg-[#FFFAFA]" data-component="research-invention">
	<div class="container">
		<div class="space-y-10">
			<?php if ( get_field( 'title' ) ) : ?>
				<div
					class="lg:text-[55px] text-[30px] leading-[1.1] font-semibold text-primary text-center">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'desc' ) ) : ?>

				<div class="space-y-5 lg:text-2xl">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php
		$gallery = get_field('list_content');
		if ($gallery) : ?>
			<div class="mt-[71px] grid md:grid-cols-2 lg:gap-10 gap-5 md:items-stretch">
				<?php foreach ($gallery as $image_id) : ?>
					<a href="<?php echo wp_get_attachment_image_url($image_id, 'full'); ?>" data-fancybox class="w-full aspect-[89/126] relative block">
						<?php echo wp_get_attachment_image($image_id, 'full', false, ['class' => 'absolute inset-0 size-full object-cover']); ?>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

	</div>
</section>