<section class="lg:my-[192px] my-[60px]" data-components="about_staff">
        <div class="container">
            <div class="space-y-[50px]">
                <?php if( have_rows('list_content') ): ?>
                    <?php while( have_rows('list_content') ): the_row();
                    $is_right = get_sub_field('is_right');
                    ?>
                        <div class="lg:space-y-[50px] space-y-8">
                             <?php if( get_sub_field('title') ): ?>
                                <div
                                    class="lg:text-[64px] text-4xl tracking-[-0.96px] text-content <?= !$is_right ? 'md:text-start text-center' : 'md:text-end text-center' ?> ">
                                    <?php the_sub_field('title'); ?>
                                </div>
                             <?php endif; ?>
                        <div class="md:grid lg:grid-cols-4 md:grid-cols-2 1.5xl:gap-[60px] lg:gap-6 md:gap-[60px] block_slider center_items watch_css has_autoplay md:mx-0 -mx-5">
                            <?php if( have_rows('list_staff') ): ?>
                                <?php while( have_rows('list_staff') ): the_row();?>
                                     <div class="block_slider-item md:w-full w-[83%] space-y-6">
                                        <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'aspect-square w-full object-cover rounded-[30px] overflow-hidden']) ?>
                                    
                                    <div class="max-w-[85%] flex flex-col items-center text-center mx-auto">
                                         <?php if( get_sub_field('pos') ): ?>
                                            <div class="xl:text-2xl text-sm text-[#00081280]">
                                                <?php the_sub_field('pos'); ?>
                                               
                                            </div>
                                         <?php endif; ?>
                                          <?php if( get_sub_field('name') ): ?>
                                             <div class="mt-1 1.5xl:text-[34px] text-2xl text-content">
                                                  <?php the_sub_field('name'); ?>
                                             </div>
                                          <?php endif; ?>
                                           <?php if( get_sub_field('desc') ): ?>
                                              <div class="xl:mt-6 mt-1 1.5xl:text-xl text-base text-[#00081280]">
                                                 <?php the_sub_field('desc'); ?>
                                              </div>
                                           <?php endif; ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                               
                            <?php endif; ?>
                          
                        </div>
                    </div>
                    <?php endwhile; ?>
                   
                <?php endif; ?>
                   
                
            </div>
        </div>
    </section>