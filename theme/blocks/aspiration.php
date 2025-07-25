<section class="lg:my-[200px] my-[60px]" data-components="aspiration">
        <div class="container">
            <div class="flex md:flex-row flex-col md:items-stretch lg:gap-12 gap-4">
                <div class="relative 2xl:max-w-[900px] 1.5xl:max-w-[830px] md:max-w-[50%] text-content">
                    <?php if( get_field('top_title') ): ?>
                        <div class="lg:text-2xl text-sm">
                           <?php the_field('top_title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('main_title') ): ?>
                        
                        <div class="mt-8 1.5xl:text-[64px] text-4xl 1.5xl:leading-[77px] tracking-[-0.96px]">
                            <?php the_field('main_title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('desc') ): ?>
                       
                        <div
                            class="lg:-mb-[55px] lg:absolute lg:bottom-0 lg:left-0 1.5xl:py-[30px] 1.5xl:px-10 p-5 1.5xl:min-w-[1156px] xl:min-w-[800px] lg:min-w-[640px] md:min-w-[480px] w-full bg-[#ECF4FE] rounded-[30px] overflow-hidden">
                            <?php echo svg('phay', '', '', 'lg:w-[51px] w-[31px] lg:h-[43px] h-[23px] shrink-0') ?>
    
                            <div class="mt-5 italic 2xl:text-2xl xl:text-xl text-xs text-[#575757]">
                                <?php the_field('desc'); ?>
                            </div>
                            <div class="mt-3 space-y-3 text-end">
                                <?php if( get_field('author') ): ?>
                                    
                                    <div class="text-primary 1.5xl:text-2xl text-sm">
                                       <?php the_field('author'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_field('pos') ): ?>
                                    <div class="1.5xl:text-lg text-xs text-[#575757]">
                                         <?php the_field('pos'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if( get_field('img') ): ?>
                    <div class="flex-1">
                        <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'w-full aspect-[675/837] rounded-[30px] object-cover']) ?>
                        
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>