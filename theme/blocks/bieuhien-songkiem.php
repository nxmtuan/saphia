<section class="lg:my-[123px] my-[60px]" data-components="bieuhien-songkiem">
	<div class="container">
		<div class="flex md:flex-row flex-col xl:gap-[112px] gap-8">
			<div
				class="relative xl:w-[760px] md:w-1/2 w-full aspect-[760/900] rounded-[35px] overflow-hidden">
				<?php echo wp_get_attachment_image( get_field( 'img' ), 'full', false, [ 'class' => 'absolute inset-0 size-full object-cover hover:scale-105 transition-transform duration-300' ] ) ?>

			</div>
			<div class="flex-1">
				<?php if ( get_field( 'title' ) ) : ?>
					<div class="xl:text-[55px] text-xl leading-[1]">
						<?php the_field( 'title' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( have_rows( 'list_content' ) ) : ?>
					<div class="lg:mt-[67px] mt-10 space-y-[30px]">
						<?php while ( have_rows( 'list_content' ) ) :
							the_row(); ?>
							<div class="space-y-2.5">
								 <?php if( get_sub_field('title') ): ?>
                                    <div class="md:text-2xl text-lg text-[#000000E0]">
                                        <?php the_sub_field('title'); ?>
								</div>
                                 <?php endif; ?>
                                  <?php if( get_sub_field('desc') ): ?>
                                     <div class="md:text-lg text-[#525256]">
                                         <?php the_sub_field('desc'); ?>
                                     </div>
                                  <?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>