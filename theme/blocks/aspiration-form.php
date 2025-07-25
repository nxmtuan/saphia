 <section class="lg:my-[200px] my-[60px]" data-component="aspiration-form">
        <div class="container">
            <div class="relative flex justify-end 1.5xl:p-[72px] lg:p-10 p-5 rounded-[35px] bg-[#ECF4FE]">
                <div class="xl:block hidden -mb-[90px] rounded-[35px] overflow-hidden absolute bottom-0 1.5xl:left-[72px] left-10">
                    <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'aspect-[592/776] object-cover 1.5xl:w-[592px] xl:w-[540px]']) ?>
                    
                </div>
                <div class="2xl:max-w-[706px] 1.5xl:max-w-[650px] xl:max-w-[580px] max-w-full">
                    <?php if( get_field('title') ): ?>
                       
                        <div class="lg:text-[48px] text-2xl lg:leading-[60px] tracking-[-0.72px] text-content">
                            <?php the_field('title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('desc') ): ?>
                        <div class="lg:mt-9 mt-2.5 lg:text-lg text-sm text-[#525256]">
                           <?php the_field('desc'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="lg:mt-[30px] mt-4 form-dang-ky">
                        <?php echo do_shortcode('[contact-form-7 id="fea2433" title="Form đăng ký nhận thông báo từ Saphia"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>