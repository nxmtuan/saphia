<section class="my-[60px]" data-components="block_mission-highlights">
	<div class="container">
		<?php if ( get_field( 'main_title' ) ) : ?>
			<div class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px]">
				<?php the_field( 'main_title' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div id="masonry" class="max-w-full lg:px-4 lg:mt-20 mt-10">
				<?php while ( have_rows( 'list_content' ) ) :
					the_row(); ?>
					<div class="grid-item mb-2 max-w-[30%]">
						<a href="<?php echo check_link(get_sub_field('link')) ?>" class="relative lg:rounded-[30px] rounded-xl overflow-hidden block">
						<?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'w-full h-full object-cover']) ?>	
                         <?php if( get_sub_field('title') ): ?>
							<div
								class="absolute lg:top-10 top-2.5 lg:left-10 left-2.5 z-[1] text-sm md:text-xl xl:text-[42.5px] leading-snug tracking-wide text-white">
							<?php the_sub_field('title'); ?>
							</div>
                         <?php endif; ?>
                          <?php if( get_sub_field('title_btn') ): ?>
                             <p
                                 class="lg:block hidden absolute bottom-4 right-4 z-[1] bg-white hover:bg-[#cbc9c9] text-[#3A566A] text-sm px-6 py-3 rounded-full transition-colors duration-300">
                                <?php the_sub_field('title_btn'); ?>
                             </p>
                          <?php endif; ?>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>