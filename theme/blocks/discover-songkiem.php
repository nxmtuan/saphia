<section class="lg:my-[123px] my-[60px]" data-components="discover-songkiem">
	<div class="relative w-full bg-no-repeat bg-cover bg-center"
		style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('img'), 'full') ?>');">
		<div class="container py-[74px]">
			<div
				class="py-[70px] bg-life-gradient w-full min-h-max rounded-[50px] overflow-hidden">
				<div class="lg:max-w-[80%] max-w-[92%] mx-auto text-white">
					<?php if ( get_field( 'title' ) ) : ?>

						<div class="xl:text-[55px] text-xl leading-[1] text-center">
							<?php the_field( 'title' ); ?>
						</div>
					<?php endif; ?>
					<?php if ( get_field( 'desc' ) ) : ?>
						<div class="mt-10 lg:text-[35px] text-lg leading-[1.1] text-center">
							<?php the_field( 'desc' ); ?>
						</div>
					<?php endif; ?>
					<?php if ( have_rows( 'list_content' ) ) : ?>
						<ul class="mt-10 pl-5 space-y-5">
							<?php while ( have_rows( 'list_content' ) ) :
								the_row(); ?>
								<li class="xl:text-[26px] leading-[1.1] flex items-center lg:gap-9 gap-3">
									<?php echo svg( 'leaf', '49', '33', 'lg:w-[49px] w-[30px] lg:h-[33px] h-[14] shrink-0' ) ?>
									 <?php if( get_sub_field('title') ): ?>
                                        <?php the_sub_field('title'); ?>
                                     <?php endif; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>