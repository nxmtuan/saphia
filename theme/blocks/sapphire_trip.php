 <section class="lg:my-[200px] my-[60px]" data-components="sapphire_trip">
        <div class="container">
            <div class="w-full relative rounded-[35px] overflow-hidden flex items-end md:aspect-[1632/960] h-max bg-no-repeat bg-cover bg-center"
                style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('img'), 'full') ?>');">
                <div class="absolute inset-0 bg-section-gradient"></div>
                <div class="relative z-[1] 1.5xl:px-[116px] xl:px-10 p-5 xl:pb-[50px] pb-5">
                    <?php if( get_field('title') ): ?>
                        <div
                            class="max-w-[1013px] mx-auto text-primary xl:text-[63px] lg:text-4xl text-2xl xl:leading-[76px] text-center">
                             <?php the_field('title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('desc') ): ?>
                       
                        <div
                            class="1.5xl:text-lg xl:text-base lg:text-sm text-[10px] text-content text-center lg:prose-p:mt-5 prose-p:mt-2">
                            <?php the_field('desc'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>