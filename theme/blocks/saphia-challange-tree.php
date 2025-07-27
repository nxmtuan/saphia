<section class="lg:my-[150px] mt-[60px]" data-component="saphia-challange-tree">
	<div class="container">
		<?php if ( have_rows( 'main_title' ) ) : ?>
			<div class="xl:text-4xl text-xl highlight">
				<?php while ( have_rows( 'main_title' ) ) :
					the_row(); ?>
					<?php if ( get_sub_field( 'highlight' ) ) : ?>
						<span>
							<?php the_sub_field( 'title' ) ?>
						</span>
					<?php else : ?>
						<?php the_sub_field( 'title' ) ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php if ( get_field( 'desc' ) ) : ?>
			<div class="mt-[14px] max-w-[1343px] xl:text-[26px] lg:text-xl leading-[1.1]">
				<?php the_field( 'desc' ); ?>
			</div>
		<?php endif; ?>
	</div>
    <?php if( have_rows('list_content') ): ?>
       <div class="pl-container-offset challenge-slider">
		<div class="mt-10 block_slider has_nav md:ml-0 -ml-5">
        <?php while( have_rows('list_content') ): the_row();?>
            <div
					class="block_slider-item xl:w-[23%] lg:w-[30%] md:w-[40%] w-[83%] relative aspect-[384/576] rounded-[32px] overflow-hidden">
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'absolute inset-0 size-full hover:scale-105 transition-transform duration-300']) ?>
					 <?php if( get_sub_field('desc') ): ?>
                        <div class="text-white xl:text-4xl text-xl absolute top-5 right-5">
                            <?php the_sub_field('desc'); ?>
                        </div>
                     <?php endif; ?>
				</div>
        <?php endwhile; ?>
        </div>
        </div>
    <?php endif; ?>

</section>