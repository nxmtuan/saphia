<section class="lg:my-[123px] my-[60px]" data-components="trending-songkiem">
        <div class="container">
            <div class="space-y-8">
                <?php if( get_field('title') ): ?>
                    
                    <div class="xl:text-[55px] text-xl leading-[1] text-center text-primary">
                        <?php the_field('title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_field('desc') ): ?>
                    <div class="xl:text-[26px] text-lg leading-[1.1] text-[#5C5C5C]">
                       <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if( have_rows('list_content') ): ?>
                 <div class="lg:mt-[112px] mt-10 flex flex-col xl:gap-[115px] gap-8">
                <?php
                $i=1;
                while( have_rows('list_content') ): the_row();
                $i++;
                ?>
                    <div
                        class="flex <?= $i % 2 == 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' ?> flex-col items-center xl:gap-[111px] gap-8">
                        <div class="lg:w-1/2 w-full aspect-[724/550] relative rounded-[35px] overflow-hidden">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'absolute inset-0 size-full object-cover hover:scale-105 transition-transform duration-300']) ?>
                           
                        </div>
                        <div class="lg:w-1/2 w-full lg:space-y-[52px] space-y-4 flex flex-col items-center">
                             <?php if( get_sub_field('title') ): ?>
                                <div class="xl:text-[50px] text-lg leading-[1.1] text-center">
                                  <?php the_sub_field('title'); ?>
                                </div>
                             <?php endif; ?>
                              <?php if( get_sub_field('desc') ): ?>
                                 <div class="xl:text-[26px] leading-[1.1] text-[#5C5C5C]">
                                   <?php the_sub_field('desc'); ?>
                                 </div>
                              <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
          
        </div>
    </section>