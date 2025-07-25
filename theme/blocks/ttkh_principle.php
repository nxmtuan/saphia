 <section class="lg:my-[190px] my-[60px]">
        <div class="container">
            <div class="xl:pt-[105px] xl:pb-9 1.5xl:px-[126px] xl:px-10 p-5 relative w-full rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('bg_img')) ?>');">
                <div class="absolute inset-0 size-full bg-[#221f90c7]"></div>
                <div class="relative z-[1] text-white lg:pb-[250px] md:pb-[70px] pb-[250px]">
                    <?php if( get_field('main_title') ): ?>
                       
                        <div class="relative z-[1] xl:text-[55px] text-2xl xl:leading-[1] text-center">
                            <?php the_field('main_title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('desc_top') ): ?>
                        
                        <div class="relative z-[1] lg:mt-[74px] mt-6 xl:text-[36px] text-2xl leading-[1] max-w-[955px]">
                          <?php the_field('desc_top'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('desc_bottom') ): ?>
                        <div
                            class="relative z-[1] lg:mt-[60px] mt-6 xl:text-[32px] text-xl xl:max-w-[566px] lg:max-w-[465px] md:max-w-[320px]">
                            <?php the_field('desc_bottom'); ?>
                        </div>
                    <?php endif; ?>
                    <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'absolute right-0 bottom-0 xl:max-w-full md:max-w-[60%] max-w-full']) ?>
                   
                </div>
            </div>
        </div>
    </section>