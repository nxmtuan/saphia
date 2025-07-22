<?php

/**
Template Name: Saphia Challenge
 */

get_header();
?>
<main>
    <?php echo get_template_part('/components/block_banner') ?>

    <section class="mt-[100px] mb-[150px]">
        <div class="container">
            <div class="space-y-5">
                <div class="text-[48px] leading-[1.1] text-center highlight">
                    <span>Saphia Challange</span> - Chinh phục mọi giới hạn
                </div>
                <div class="text-[26px] leading-[1.1] text-center">
                    Cùng Kiềm thảo dược Saphia tham gia các thử thách thú vị để trải nghiệm sức mạnh thảo dược Việt, góp
                    phần bảo vệ môi trường, hỗ trợ cộng đồng, và đưa sản phẩm được tạo nên từ trí tuệ của người Việt Nam
                    và thiên nhiên của đất nước Việt Nam ra thế giới!
                </div>
            </div>
            <div class="mt-[110px] flex xl:flex-row flex-col xl:items-stretch gap-8">
                <div class="xl:w-[42%] w-full">
                    <div class="xl:text-4xl text-xl highlight">
                        THỬ THÁCH TRẢI NGHIỆM <br>
                        <span>HƯƠNG VỊ "THÁNH GIÓNG NGỌC XANH"</span>
                    </div>
                    <div class="mt-4 xl:text-[26px] leading-[1.1]">
                        Theo chân Kiềm thảo dược Saphia khám phá cảm nhận của người tiêu dùng về hương vị của sản phẩm
                        "Thánh Gióng Ngọc Xanh", nước Kiềm thảo dược uống liền đang được người dân Dubai yêu thích và
                        săn lùng!
                    </div>
                    <a href=""
                        class="xl:mt-20 mt-4 block p-3 max-w-[161px] rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white text-center transition-colors duration-300">
                        Tìm hiểu thêm
                    </a>
                </div>
                <div class="flex-1 flex gap-2">
                    <?php for ($i = 0; $i < 3; $i++):
                        $mtClass = match ($i) {
                            0 => 'translate-y-[104px]', // 52 + 52
                            1 => 'translate-y-[52px]',
                            2 => 'mt-0',
                        };
                        ?>
                        <div
                            class="relative w-1/3 aspect-[306/544] lg:rounded-[32px] rounded-xl overflow-hidden <?php echo $mtClass; ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                                loading="lazy" class="absolute inset-0 size-full object-cover">
                            <a href="https://youtu.be/BxuY9FET9Y4?si=oufOaTitd3e7e8Dc" data-fancybox>
                                <?php echo svg('playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[66px] size-8 shrink-0 z-[1]') ?>
                            </a>
                            <div
                                class="absolute lg:left-5 left-3 lg:top-10 top-3 lg:text-[64px] text-[25px] leading-[1] text-[#F7F7F7] z-[1]">
                                0<?php echo $i + 1; ?></div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[150px] mt-[60px]">
        <div class="container">
            <div
                class="w-full rounded-[32px] overflow-hidden bg-[#5B79A4] xl:p-10 p-5 flex md:flex-row flex-col md:items-center xl:gap-11 gap-5">
                <div class="relative md:w-[37%] w-full rounded-[20px] aspect-square overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home.png" alt="" loading="lazy"
                        class="absolute inset-0 size-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="flex-1 text-[#F7F7F7]">
                    <div class="max-w-[565px] xl:text-4xl lg:text-2xl text-lg">
                        THỬ THÁCH THU THẬP VỎ CHAI GÓP SỨC CHO TRẺ EM VÙNG CAO
                    </div>
                    <div class="mt-8 xl:text-[26px] lg:text-xl leading-[1.1]">
                        Thu thập vỏ chai Kiềm thảo dược Saphia và gửi về điểm tái chế của công ty. Mỗi chai góp 1000 VNĐ
                        vào quỹ hỗ trợ trẻ em vùng cao mua sách vở và nước uống bổ sung sức khoẻ (Thánh Gióng Khoẻ).
                    </div>
                    <div class="mt-5 xl:text-[26px] lg:text-xl leading-[1.1] italic">
                        5.000 vỏ chai đã mang 250 chai Thánh Gióng khoẻ đến với trẻ em vùng cao, giúp tái tạo năng
                        lượng, nâng bước các em đến trường!
                    </div>
                    <a href=""
                        class="mt-10 block w-fit py-3 px-8 rounded-full overflow-hidden border border-[#FFFFFF2B] bg-[#FFFFFF2B] hover:bg-[#ffffff66] backdrop-blur-[10px] text-white transition-colors duration-300">
                        Tìm hiểu thêm
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[150px] mt-[60px]">
        <div class="container">
            <div class="xl:text-4xl text-xl highlight">
                THỬ THÁCH <span>NUÔI DƯỠNG CÂY XANH BẰNG KIỀM PLASMA</span>
            </div>
            <div class="mt-[14px] max-w-[1343px] xl:text-[26px] lg:text-xl leading-[1.1]">
                Khám phá hành trình từ hạt mầm nhỏ đến khi cây nảy mầm, sinh trưởng và nở hoa chỉ với việc tưới kiềm mỗi
                ngày. Bạn có muốn thử thách không? Đăng ký ngay để được trải nghiệm nhé!
            </div>
        </div>
        <div class="pl-container-offset challenge-slider">
            <div class="mt-10 block_slider has_nav md:ml-0 -ml-5">
                <?php for ($i = 0; $i < 7; $i++): ?>
                    <div
                        class="block_slider-item xl:w-[23%] lg:w-[30%] md:w-[40%] w-[83%] relative aspect-[384/576] rounded-[32px] overflow-hidden">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                            loading="lazy"
                            class="absolute inset-0 size-full hover:scale-105 transition-transform duration-300">
                        <div class="text-white xl:text-4xl text-xl absolute top-5 right-5">
                            Day 1
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <section class="relative lg:my-[150px] mt-[60px]">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg.png" alt="" loading="lazy"
            class="absolute bottom-0 right-0 object-contain 2xl:max-w-[100%] md:max-w-[46%] md:block hidden">
        <div class="relative container z-[1]">
            <div class="max-w-[842px]">
                <div class="lg:text-4xl text-2xl text-primary">
                    THỰC HÀNH SỐNG KHOẺ NHƯ NGƯỜI NHẬT
                </div>
                <div class="mt-3 xl:text-[26px] lg:text-xl text-[#5C5C5C]">
                    Theo chân Kiềm thảo dược Saphia đặt chân tới nước Nhật để khám phá bí quyết sống thọ và khoẻ mạnh
                    của người Nhật
                </div>
            </div>
            <div class="mt-8 md:flex flex-wrap gap-[6px] md:max-w-[1192px] block_slider watch_css center_items md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div
                        class="block_slider-item <?= $i === 0 ? 'md:mt-[68px]' : '' ?> <?= $i === 3 ? 'md:-mt-[68px]' : '' ?> md:w-[calc(50%-3px)] w-[83%] h-fit">
                        <div class="group relative xl:pt-12 lg:pt-8 pt-6 px-6 lg:rounded-[35px] rounded-[20px] overflow-hidden aspect-[591/396]">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home8.png" alt=""
                                loading="lazy"
                                class="absolute inset-0 size-full group-hover:scale-105 transition-transform duration-300">
                            <a href="" class="block absolute top-2.5 right-2.5 size-[50px]">
                                <?php echo svg('btnLink', '', '','size-full ahrink-0') ?>
                            </a>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>
    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();