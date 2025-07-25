<section class="lg:py-[121px] py-[60px] bg-[#FFFAFA]" data-component="research-file">
        <div class="container">
            <?php if( get_field('title') ): ?>
              
                <div class="lg:text-[55px] text-[30px] leading-[1.1] font-semibold text-primary text-center">
                      <?php the_field('title'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="aspect-[1919/937] w-full relative">
            <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'absolute inset-0 size-full object-cover']) ?>
           
        </div>
     
        <div class="container">
            <div class="relative flex flex-col lg:gap-[300px] gap-[200px] items-center">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1px] h-full border border-dashed border-black">
                </div>
                <div class="relative z-[1] flex flex-col lg:gap-[300px] gap-[200px] items-center">
                    <?php if( get_field('desc') ): ?>
                        <div class="max-w-[1186px] text-center text-2xl py-[28px] bg-[#FFFAFA]">
                          <?php the_field('desc'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( have_rows('list_content') ): ?>
                        
                        <?php while( have_rows('list_content') ): the_row();?>
                           <div class="scroll-scale-item py-[28px] bg-[#FFFAFA] max-w-[859px] flex flex-col items-center transform transition-transform duration-300 ease-in-out">
                             <?php if( get_sub_field('year') ): ?>
                               
                                <div class="lg:text-[40px] text-3xl leading-[1] text-center">
                                     <?php the_sub_field('year'); ?>
                                </div>
                             <?php endif; ?>
                              <?php if( get_sub_field('desc') ): ?>
                                 
                                 <div class="mt-5 lg:text-2xl text-lg text-center text-[#5C5C5C]">
                                   <?php the_sub_field('desc'); ?>
                                 </div>
                              <?php endif; ?>
                              <?php if( get_field('img') ): ?>
                                 
                                  <div
                                      class="lg:mt-[50px] mt-4 relative aspect-square md:w-[498px] w-full rounded-[30px] overflow-hidden">
                                      <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'absolute inset-0 size-full object-cover']) ?>
                                  </div>
                              <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                       
                    <?php endif; ?>
                  
                </div>
            </div>
        </div>
    </section>