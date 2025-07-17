<?php

/**
Template Name: Sản phẩm
 */

get_header();
?>

<main>
    <?php echo get_template_part('/components/block_brand-intro') ?>

    <section class="lg:my-[100px] my-[60px]" data-components="block_products">
        <div class="container">
            <div class="lg:flex items-stretch gap-[30px]">
                <div class="px-8 pb-6 relative lg:flex hidden items-end aspect-[503/628] xl:w-[503px] lg:w-[30%] w-full rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png');">
                    <div class="absolute inset-0 size-full bg-products-gradient"></div>
                    <div class="relative xl:text-[70px] text-4xl xl:leading-[78px] text-white z-[1]">
                        Nhóm kiềm hóa cơ thể
                    </div>
                </div>
                <div class="mb-6 lg:hidden block text-2xl">
                    Nhóm kiềm hóa cơ thể
                </div>
                <div class="flex-1 products-slider block_slider has_nav md:mx-0 -mx-5">
                    <?php for ($i = 0; $i < 10; $i++): ?>
                        <div
                            class="block_slider-item ml-4 p-6 md:w-[47%] w-[80%] h-full rounded-[35px] overflow-hidden bg-[#FFF3E7] flex flex-col gap-6">
                            <div class="text-2xl">
                                Pain Relief
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham.png" alt=""
                                    loading="lazy" class="object-contain max-xl:max-w-[60%] max-md:max-w-[50%]">
                            </div>
                            <div class="flex items-center gap-8">
                                <a href=""
                                    class="flex justify-center items-center w-1/2 p-[14px] rounded-full overflow-hidden bg-white hover:bg-[#f5f1f1] text-content leading-[1] transition-colors duration-300">
                                    Xem chi tiết
                                </a>
                                <a href=""
                                    class="flex justify-center items-center w-1/2 p-[14px] rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white leading-[1] transition-colors duration-300">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();