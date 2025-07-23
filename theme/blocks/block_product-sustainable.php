<section class="lg:my-[200px] my-[60px]" data-components="block_product-sustainable">
	<div class="container">
		<div class="relative w-full rounded-[35px] bg-[#ECF4FE]">
			<div class="xl:py-[109px] xl:pl-16 p-5 xl:max-w-[664px] md:max-w-[60%]">
                <?php if( get_field('title') ): ?>
                    <div class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] text-content">
                        <?php the_field('title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_field('desc') ): ?>
                    <div class="mt-5 lg:text-lg text-base text-[#525256] ">
                        <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>
			</div>
            <?php if( get_field('img') ): ?>
                
                <div class="md:absolute xl:top-[72px] md:top-5 xl:right-16 right-5 1.5xl:w-[592px] xl:w-[460px] lg:w-[370px] md:w-[260px] w-full aspect-[592/776] rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                    style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('img'), 'full') ?>');">
                </div>
            <?php endif; ?>
		</div>
	</div>
</section>