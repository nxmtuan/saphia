<section class="lg:my-[121px] my-[60px]" data-component="research-analysis">
    <div class="container">
        <?php if( get_field('title') ): ?>
            <div class="lg:text-[55px] text-[30px] leading-[1.1] font-semibold text-primary text-center">
                <?php the_field('title'); ?>
            </div>
        <?php endif; ?>
        <?php if( have_rows('list_content') ): ?>
            <div class="lg:mt-20 mt-10 analysis-slider block_slider has_nav">
            <?php while( have_rows('list_content') ): the_row();?>
                <div
                    class="block_slider-item md:w-1/3 w-full flex md:flex-row flex-col items-center md:justify-evenly md:gap-3 gap-8">
                    
                        <div class="xl:space-y-[47px] space-y-3 md:w-[395px] w-fit">
                            <a href="<?php echo wp_get_attachment_image_url(get_sub_field('img'), 'full') ?>" class="block aspect-[395/473] w-full relative" data-fancybox>
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'absolute inset-0 size-full object-contain']) ?>
                                
                            </a>
                             <?php if( get_sub_field('desc') ): ?>
                                <div class="text-center lg:text-2xl">
                                    <?php the_sub_field('desc'); ?>
                                </div>
                             <?php endif; ?>
                        </div>
                   
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
      
    </div>
</section>