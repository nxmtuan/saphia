<section class="lg:my-[121px] my-[60px]" data-component="block_analysis-slider">
    <div class="container">
        <div class="lg:text-[55px] text-[30px] leading-[1.1] font-semibold text-primary text-center">
            KẾT QUẢ PHÂN TÍCH HỢP CHẤT KHÁNG SINH THỰC VẬT
        </div>
        <div class="lg:mt-20 mt-10 analysis-slider block_slider center_items has_nav">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div
                    class="block_slider-item w-full flex md:flex-row flex-col items-center md:justify-evenly md:gap-3 gap-8">
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <div class="xl:space-y-[47px] space-y-3 md:w-[395px] w-fit">
                            <div class="aspect-[395/473] w-full relative">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ketqua.png" alt=""
                                    loading="lazy" class="absolute inset-0 size-full object-contain">
                            </div>
                            <div class="text-center lg:text-2xl">
                                KẾT QUẢ KIỂM NGHIỆM SAPHIA ALKALI D - REVIE X300
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>