<section
	class="relative rounded-b-[35px] overflow-hidden 1.5xl:h-[995px] xl:h-[700px] lg:h-[520px] h-[400px]" data-components="ttkh_banner">
    <picture>
        <?php if ( get_field('bg_mb')) { ?> 
            <source media="(max-width:767px)" srcset="<?php echo wp_get_attachment_image_url(get_field('bg_mb'), 'medium') ?>">
        <?php } ?>
      <?php echo wp_get_attachment_image(get_field('bg_pc'), 'full',false,['class'=>'absolute inset-0 size-full object-cover']) ?>
      
    </picture>

	
	<div class="container">
		<div
			class="relative 1.5xl:pt-[210px] lg:pt-[120px] pt-20 1.5xl:max-w-[864px] xl:max-w-[690px] max-w-[450px] ml-auto z-[1]">
            <?php if( get_field('title') ): ?>
                <div class="xl:text-[55px] text-2xl leading-[1] text-primary">
                     <?php the_field('title'); ?>
                </div>
            <?php endif; ?>
            <?php if( get_field('desc') ): ?>
                <div class="xl:mt-[67px] mt-5 xl:text-[40px] text-xl leading-[1]">
                    <?php the_field('desc'); ?>
                </div>
            <?php endif; ?>
		</div>
	</div>
</section>