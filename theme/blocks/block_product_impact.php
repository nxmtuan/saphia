<section class="lg:my-[200px] my-[60px]" data-components="block_product_impact">
    <div class="container">
        <div class="flex md:flex-row flex-col xl:gap-[112px] gap-5">
            <?php echo wp_get_attachment_image(get_field('img'), 'full',false,['class'=>'md:w-1/2 w-full h-fit object-cover rounded-[35px] overflow-hidden']) ?>
           
            <div class="md:w-1/2 w-full">
                <?php if( get_field('top_title') ): ?>
                    <div class="lg:text-base text-sm tracking-[-0.24px;]">
                       <?php the_field('top_title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( have_rows('main_title') ): ?>
                     <div class="mt-5 lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] highlight">
                    <?php while( have_rows('main_title') ): the_row();?>
                        <?php if(get_sub_field('highlight')) : ?>
                            <span>
                                <?php  the_sub_field('title') ?>
                            </span>
                        <?php else : ?>
                            <?php  the_sub_field('title') ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if( get_field('desc') ): ?>
                    <div class="mt-5 lg:text-lg text-[#525256]">
                        <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>
                <?php
                $button = get_field('button');
                $btn_title = (is_array($button) && !empty($button['title'])) ? $button['title'] : '';
                $btn_link = (is_array($button) && !empty($button['link'])) ? $button['link'] : '';
                if ($btn_title) : ?>
                    <a href="<?php echo check_link($btn_link) ?>"
                        class="lg:mt-24 mt-5 w-fit block lg:py-[25px] py-2 px-10 lg:text-xl text-sm text-white bg-primary hover:bg-[#224393c7] rounded-full overflow-hidden transition-colors duration-300">
                        <?php echo esc_html($btn_title); ?>
                    </a>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</section>