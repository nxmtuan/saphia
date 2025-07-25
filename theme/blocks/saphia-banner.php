<section data-component="saphia-banner">
    <div class="w-full lg:h-[600px] h-[400px] relative flex items-center">
        <picture>
            <?php if( get_field('img_mb') ): ?>
                <source media="(max-width:767px)" srcset="<?php echo wp_get_attachment_image_url(get_field('img_mb')) ?>">
            <?php endif; ?>
          <?php echo wp_get_attachment_image(get_field('img_pc'), 'full',false,['class'=>'absolute inset-0 size-full object-cover']) ?>
         
        </picture>
        
        <div class="container">
            <div class="relative text-white z-[1]">
                <?php if( get_field('title') ): ?>
                    
                    <div class="xl:text-5xl md:text-3xl text-xl">
                        <?php the_field('title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_field('desc') ): ?>
                   
                    <div class="mt-5 xl:text-[90px] md:text-5xl text-3xl leading-[1.1]">
                        <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>