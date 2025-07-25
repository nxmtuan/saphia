<section class="lg:my-[192px] my-[60px]" data-components="about_brand-intro">
	<div class="container">
		<div class="relative flex items-end lg:p-[60px] p-5 w-full lg:rounded-[35px] rounded-[20px] overflow-hidden aspect-[1632/600] bg-cover bg-center bg-no-repeat"
			<?php if ( get_field( 'bg' ) ) : ?> 	<?php the_field( 'bg' ); ?>
				style="background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'bg' ), 'full' ) ?>');"
			<?php endif; ?>>
			<div class="absolute inset-0 bg-[#5B79A480] pointer-events-none"></div>
            <div class="relative z-10">
                <?php if( get_field('title') ): ?>
                    <h2
                        class="xl:text-[64px] lg:text-4xl md:text-2xl xl:leading-[76px] leading-[1] tracking-[-0.96px] text-white xl:max-w-[1225px] lg:max-w-[80%] max-w-[65%] z-[1]">
                         <?php the_field('title'); ?>
                    </h2>
                <?php endif; ?>
                <?php if( get_field('desc') ): ?>
                    <div class="lg:text-4xl text-xl  my-10 text-white">
                        <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>

            </div>
            <?php
            $button = get_field('button');
            $btn_title = (is_array($button) && !empty($button['title'])) ? $button['title'] : '';
            $btn_link = (is_array($button) && !empty($button['link'])) ? $button['link'] : '';
            if ($btn_title) : ?>
                <a href="<?php echo check_link(get_sub_field('link')) ?>"
                    class="font-content absolute lg:bottom-10 md:bottom-5 bottom-2 lg:right-10 md:right-5 right-2 lg:py-[14px] md:py-2.5 py-1 lg:px-[26px] md:px-5 px-4 rounded-full overflow-hidden bg-[#ffffff2b] hover:bg-white text-white hover:text-[#3A566A] lg:text-base text-sm backdrop-blur-[10px] z-[1] transition-colors duration-300">
                   <?php echo esc_html($btn_title); ?>
                </a>
            <?php endif; ?>
            
		</div>
	</div>
</section>