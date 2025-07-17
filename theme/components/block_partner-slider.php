<section class="lg:mt-[47px] mb-5" data-components="block_partner-slider">
    <div class="lg:container">
        <div class="py-16 w-full block_slider loop center_items has_autoplay">
            <?php for ($i = 0; $i < 10; $i++): ?>
                <div class="block_slider-item lg:mx-0 mx-5 lg:w-[20%] w-[30%] flex justify-center">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/logo-1.svg" alt="" loading="lazy"
                        class="object-contain">
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>