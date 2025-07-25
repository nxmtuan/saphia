<?php  
$pos_content = get_field('pos_content');
?>
<section class="lg:my-[200px] my-[60px]" data-component="block_campaign">
    <div class="container">
        <div class="w-full relative rounded-[35px] overflow-hidden lg:aspect-[1632/960] h-max bg-no-repeat bg-cover bg-center"
            style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('bg_img'), 'full') ?>');">
            <div class="absolute inset-0 bg-why-gradient pointer-events-none"></div>
            <div class="relative z-[1] lg:w-1/2 md:w-[70%] w-full text-white xl:py-[60px] xl:px-[70px] lg:p-12 p-5 <?= $pos_content == 'right'?'ml-auto':'mr-auto' ?>">
                <?php if( get_field('title') ): ?>
                    <div class="lg:mb-[50px] mb-5 xl:text-5xl text-2xl <?= $pos_content == 'right'?'lg:text-right':'' ?>">
                        <?php the_field('title'); ?>
                    </div>
                <?php endif; ?>
                
                <?php if( get_field('desc') ): ?>
                    <div class="xl:text-xl md:text-sm text-[10px] prose-p:mb-5 prose-h3:mb-5 prose-h3:xl:text-[40px] prose-h3:text-lg prose-h2:mb-5 prose-h2:xl:text-[40px] prose-h2:text-lg">
                        <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>
               
            </div>
        </div>
    </div>
</section>