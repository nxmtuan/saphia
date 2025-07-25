<section class="lg:my-[120px] my-[60px]" data-component="go-global-spread">
        <div class="container">
            <div>
                <?php if( get_field('title') ): ?>
                   
                    <div class="lg:text-4xl text-2xl text-center text-primary">
                         <?php the_field('title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_field('desc') ): ?>
                   
                    <div class="mt-8 lg:text-[26px] text-xl leading-[1.1] text-[#5C5C5C]">
                     <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>
                <?php
                $button = get_field('button');
                $btn_title = (is_array($button) && !empty($button['title'])) ? $button['title'] : '';
                $btn_link = (is_array($button) && !empty($button['link'])) ? $button['link'] : '';
                
                if ($btn_title) : ?>
                    <a href="<?php echo check_link($btn_link) ?>"
                        class="ml-auto mt-6 block w-fit py-3 px-8 rounded-full overflow-hidden border border-[#7B7B7B80] bg-[white] hover:bg-[#eae9e9] transition-colors duration-300">
                        <?php echo esc_html($btn_title); ?>
                    </a>
                <?php endif; ?>
                
            </div>
            <?php 
            $list_img = get_field('list_img'); // returns array of attachment IDs
            if ( $list_img ): ?>
                <div class="mt-10 md:grid grid-cols-3 gap-2.5 block_slider center_items watch_css md:mx-0 -mx-5">
                    <?php foreach ( $list_img as $image_id ): ?>
                        <div class="block_slider-item md:w-full w-[83%] aspect-[534/405] rounded-[32px] overflow-hidden relative">
                            <?php 
                            echo wp_get_attachment_image(
                                $image_id, 
                                'full', 
                                false, 
                                array(
                                    'class' => 'absolute inset-0 object-cover size-full hover:scale-105 transition-transform duration-300'
                                )
                            ); 
                            ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
          
        </div>
    </section>