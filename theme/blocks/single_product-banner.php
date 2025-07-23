    <section class="lg:my-[200px] my-[60px]" data-components="single_product-banner">
        <div class="container">
            <div
                class="lg:p-16 p-6 bg-[#96AADD] lg:rounded-[35px] rounded-[20px] overflow-hidden md:max-h-[600px] w-full flex lg:flex-row flex-col items-center lg:justify-between">
                <?php if( get_field('title') ): ?>
                   
                    <div
                        class="1.5xl:text-[94px] lg:text-[60px] text-3xl xl:leading-[96px] lg:leading-[1] tracking-[-0.96px] text-white max-w-[609px] w-full lg:text-left text-center">
                       <?php the_field('title'); ?>
                    </div>
                <?php endif; ?>
                <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'object-contain flex-1 max-xl:w-1/2 max-lg:w-full']) ?>
            </div>
        </div>
    </section>