<?php if ( have_rows( 'list_cat' ) ) : ?>
	<section class="lg:my-[200px] my-[60px]" data-components="block_category">
		<div class="container">
			<div
				class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-x-7 lg:gap-y-[50px] gap-y-7">
				<?php while ( have_rows( 'list_cat' ) ) :
					the_row(); ?>
					
                        <a href="<?php echo check_link(get_sub_field('link')) ?>" class="space-y-5 w-full flex flex-col items-center group">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'aspect-square w-full object-cover rounded-full overflow-hidden transition-all duration-500 group-hover:scale-105']) ?>
                             <?php if( get_sub_field('title') ): ?>
                                <div
                                    class="lg:text-[32px] text-xl leading-[1] tracking-[-0.754px] text-content max-w-[90%] text-center group-hover:text-primary transition-all duration-500">
                                    <?php the_sub_field('title'); ?>
                                </div>
                             <?php endif; ?>
                        </a>
					
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>