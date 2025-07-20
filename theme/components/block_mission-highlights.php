<section class="lg:my-[120px] my-[60px]" data-components="block_mission-highlights">
    <div class="container">
        <div class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px]">
            Vì một thế giới tốt đẹp hơn
        </div>
        <div id="masonry" class="max-w-full lg:px-4 lg:mt-20 mt-10">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <div class="grid-item mb-2 max-w-[30%]">
                    <div class="relative rounded-[30px] overflow-hidden">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about1.png" alt=""
                            loading="lazy" class="w-full h-full object-cover">
                        <div
                            class="absolute top-10 left-10 z-[1] text-[32px] sm:text-[38px] lg:text-[42.5px] leading-snug tracking-wide text-white">
                            Bảo vệ<br>môi trường
                        </div>
                        <a href="#"
                            class="absolute bottom-4 right-4 z-[1] bg-white text-[#3A566A] text-sm px-6 py-3 rounded-full">
                            Xem thêm
                        </a>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>