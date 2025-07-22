<section class="lg:my-[192px] my-[60px] overflow-x-hidden" data-components="about_image-content">
    <div class="container">
        <div class="flex lg:flex-row flex-col xl:gap-[112px] lg:gap-5">
            <div class="lg:w-1/2 w-full flex lg:gap-[30px] gap-2.5">
                <?php if( get_field('content') ): ?>
                   
                    <?php echo svg('tric', '30', '23', 'shrink-0 text-primary') ?>
                    <div class="the_content">
                        <?php the_field('content'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php if( get_field('img') ): ?>
                
                <div
                    class="lg:w-1/2 w-full h-fit lg:rounded-[35px] rounded-[20px] overflow-hidden mission-slider block_slider center_items has_nav">
                   
                        <div class="block_slider-item size-full relative xl:p-[47px] p-5 flex items-end aspect-[760/648]">
                            <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'absolute inset-0 w-full h-full object-cover']) ?>
                        </div>
                    
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>