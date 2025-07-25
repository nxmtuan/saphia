   <section class="lg:my-[200px] my-[60px]" data-components="single_product-usage">
        <div class="container">
            <div class="bg-[#FFF3E7] rounded-[35px] overflow-hidden flex md:flex-row flex-col-reverse">
                <div class="md:w-3/5 w-full xl:py-[115px] py-6 xl:px-14 px-8">
                    <?php if( get_field('title') ): ?>
                        <div class="xl:text-[63px] text-xl leading-[1] text-content">
                            <?php the_field('title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('desc') ): ?>
                        <div
                            class="xl:mt-8 mt-6 text-[#0000008A] xl:prose-p:text-xl prose-p:text-base prose-ul:pl-5 prose-ul:list-['-'] xl:prose-ul:mb-7 prose-ul:mb-5 xl:prose-li:text-lg prose-li:text-sm">
                           <?php the_field('desc'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if( get_field('img') ): ?>
                    <div class="flex-1">
                        <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'size-full object-cover rounded-[35px] overflow-hidden']) ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>