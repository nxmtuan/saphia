<section class="lg:my-[200px] my-[60px]" data-components="block_product-excellence">
    <div class="container">
        <div class="flex md:flex-row flex-col xl:gap-[112px] gap-5">
            <div class="md:w-1/2 w-full">
                  <?php if( have_rows('main_title') ): ?>
                     <div class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] highlight">
                    <?php while( have_rows('main_title') ): the_row();?>
                        <?php if(get_sub_field('highlight')) : ?>
                            <p>
                                <span>
                                    <?php  the_sub_field('title') ?>
                                </span>
                            </p>
                        <?php else : ?>
                            <p>
                                <?php  the_sub_field('title') ?>
                            </p>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if( get_field('desc') ): ?>
                    <div class="mt-5 lg:text-lg text-[#525256]">
                        <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>
                <?php if( have_rows('list_content') ): ?>
                    <div class="lg:mt-[50px] mt-5 grid grid-cols-2 lg:gap-x-[50px] gap-5">
                    <?php while( have_rows('list_content') ): the_row();?>
                         <div class="space-y-5">
                             <?php if( get_sub_field('title') ): ?>
                                
                                <div class="lg:text-[28px] text-xl leading-[1] tracking-[-0.42px] text-content">
                                    <?php the_sub_field('title'); ?>
                                </div>
                             <?php endif; ?>
                              <?php if( get_sub_field('desc') ): ?>
                                 <div class="lg:text-lg text-[#525256]">
                                     <?php the_sub_field('desc'); ?>
                                 </div>
                              <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
               
            </div>
            <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'md:w-1/2 w-full h-fit object-contain rounded-[35px] overflow-hidden']) ?>
            
        </div>
    </div>
</section>