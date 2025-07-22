<?php

/**
Template Name: Go global
 */

get_header();
?>

<main>
    <?php echo get_template_part('/components/block_banner') ?>

    <section class="max-lg:my-[60px]">
        <div class="container">
            <div class="flex lg:flex-row flex-col lg:justify-between items-center lg:gap-10 gap-6">
                <div class="max-w-[710px]">
                    <div class="lg:text-4xl text-2xl highlight">
                        TẠI SAO KIỀM THẢO DƯỢC SAPHIA
                        <span>XÁC ĐỊNH SỨ MỆNH CỦA MÌNH LÀ VƯƠN RA THẾ GIỚI</span>
                    </div>
                    <ul class="mt-8 pl-5 space-y-4">
                        <li class="flex items-center gap-2 lg:text-xl">
                            <?php echo svg('winking-face', '30', '30') ?>
                            Sản phẩm này thực sự tốt
                        </li>
                    </ul>
                </div>
                <div class="flex items-stretch gap-[5px] max-lg:w-full">
                    <div class="swiper marquee-carousel md:h-[946px] h-[558px] overflow-hidden pointer-events-none"
                        data-speed="10000">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 7; $i++): ?>
                                <div
                                    class="swiper-slide relative aspect-[354/473] xl:h-[473px] lg:h-[350px] md:h-[473px] h-[279px] rounded-[32px] overflow-hidden">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                                        loading="lazy"
                                        class="absolute inset-0 size-full hover:scale-105 transition-transform duration-300">
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                    <div class="swiper reverse-marquee-carousel md:h-[946px] h-[558px] overflow-hidden pointer-events-none"
                        data-speed="10000">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 7; $i++): ?>
                                <div
                                    class="swiper-slide relative aspect-[354/473] xl:h-[473px] lg:h-[350px] md:h-[473px] h-[279px] rounded-[32px] overflow-hidden">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                                        loading="lazy"
                                        class="absolute inset-0 size-full hover:scale-105 transition-transform duration-300">
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-[107px] py-[60px] 2xl:h-[1869px] relative">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg2.png" alt="" loading="lazy"
            class="absolute inset-0 size-full object-cover">
        <div class="relative z-[1] container size-full flex flex-col gap-8">
            <div class="max-w-[800px] ml-auto">
                <div class="lg:text-4xl text-2xl highlight">
                    <span>Dubai – Cửa ngõ toàn cầu</span> <br>
                    cho Kiềm Thảo Dược Saphia
                </div>
                <div class="mt-5 lg:text-[26px] text-xl leading-[1.1] text-[#5C5C5C]">
                    Khát vọng đưa thảo dược Việt ra thế giới bắt đầu từ chuyến công tác Dubai của CEO Kiềm Thảo Dược
                    Saphia, Nguyễn Thành Phương. Tại vùng đất giàu có nhưng thiếu thốn thảo dược, ông nhận định đây là
                    cơ hội lớn. Từ ý tưởng hợp tác, Kiềm Thảo Dược Saphia ký hợp đồng triệu đô với tỉ phú Tahor, đưa sản
                    phẩm đến 26 quốc gia, khẳng định giá trị sức khỏe và bản sắc Việt trên toàn cầu.
                </div>
            </div>

            <div class="mt-auto rounded-[32px] overflow-hidden bg-[#5B79A4] lg:py-[72px] py-9 xl:px-[200px] px-5">
                <div class="lg:text-4xl text-2xl text-white text-center">
                    ĐẠI DIỆN HỆ THỐNG KIỀM THẢO DƯỢC SAPHIA TẠI DUBAI
                </div>
                <div
                    class="mt-12 md:grid grid-cols-2 grid-rows-2 gap-3 block_slider center_items watch_css md:mx-0 -mx-5">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <div
                            class="block_slider-item md:w-full w-[83%] <?= $i == 0 ? 'row-span-2' : 'row-span-1' ?> rounded-[32px] overflow-hidden relative lg:min-h-[384px] md:min-h-[285px] min-h-[384px]">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                                loading="lazy"
                                class="absolute inset-0 object-cover size-full hover:scale-105 transition-transform duration-300">
                        </div>
                    <?php endfor ?>
                </div>
                <a href=""
                    class="mx-auto mt-11 block w-fit py-3 px-8 rounded-full overflow-hidden border border-[#FFFFFF2B] bg-[#FFFFFF2B] hover:bg-[#ffffff66] backdrop-blur-[10px] text-white transition-colors duration-300">
                    Tìm hiểu thêm
                </a>
            </div>
        </div>
    </section>

    <section class="lg:my-[120px] my-[60px]">
        <div class="container">
            <div>
                <div class="lg:text-4xl text-2xl text-center text-primary">
                    Malaysia - Lan toả lối sống kiềm hoá tại Đông Nam Á
                </div>
                <div class="mt-8 lg:text-[26px] text-xl leading-[1.1] text-[#5C5C5C]">
                    Malaysia, với khí hậu nhiệt đới và xu hướng sống lành mạnh, là thị trường tiềm năng. CEO Nguyễn
                    Thành Phương nhận thấy thảo dược Việt, giàu giá trị và đa dạng, đáp ứng nhu cầu sức khỏe tự nhiên.
                    Từ cuộc gặp gỡ tại hội chợ, ý tưởng hợp tác ra đời. Bà..., nhân vật ảnh hưởng trong ngành wellness
                    Đông Nam Á, cùng Saphia mang nước kiềm thảo dược pH 13-14 đến Malaysia. Thỏa thuận phân phối ký tại
                    Kuala Lumpur đánh dấu bước tiến của Saphia, lan tỏa tinh hoa thảo dược Việt ra Đông Nam Á.
                </div>
                <a href=""
                    class="ml-auto mt-6 block w-fit py-3 px-8 rounded-full overflow-hidden border border-[#7B7B7B80] bg-[white] hover:bg-[#eae9e9] transition-colors duration-300">
                    Tìm hiểu thêm
                </a>
            </div>
            <div class="mt-10 md:grid grid-cols-3 gap-2.5 block_slider center_items watch_css md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div
                        class="block_slider-item md:w-full w-[83%] aspect-[534/405] rounded-[32px] overflow-hidden relative">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                            loading="lazy"
                            class="absolute inset-0 object-cover size-full hover:scale-105 transition-transform duration-300">
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <section class="lg:my-[120px] my-[60px]">
        <div class="container">
            <div class="flex lg:flex-row flex-col lg:items-end justify-between gap-5">
                <div class="lg:text-4xl text-2xl text-primary max-w-[572px]">
                    Trải nghiệm Kiềm thảo dược Saphia cùng người dân xứ sở hoa anh đào
                </div>
                <a href=""
                    class="lg:ml-auto block w-fit py-3 px-8 rounded-full overflow-hidden border border-[#7B7B7B80] bg-[white] hover:bg-[#eae9e9] transition-colors duration-300">
                    Tìm hiểu thêm
                </a>
            </div>

            <div class="mt-12 md:grid grid-cols-3 xl:gap-5 gap-2.5 block_slider center_items watch_css md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="block_slider-item md:w-full w-[83%] xl:rounded-[35px] rounded-[20px] overflow-hidden bg-[#E3E3E3] xl:p-6 p-4">
                        <a href="" class="block relative w-full aspect-[480/320] xl:rounded-[35px] rounded-[20px] overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                                loading="lazy"
                                class="absolute inset-0 object-cover size-full hover:scale-105 transition-transform duration-300">
                        </a>
                        <div class="mt-5 xl:space-y-8 space-y-3">
                            <div class="line-clamp-2">
                                <a href="" class="block lg:text-3xl text-2xl text-[#1E1E1E]">
                                    Bí quyết của họ là xây dựng một lối sống kiềm hoá
                                </a>
                            </div class="">
                            <div class="lg:text-[26px] text-xl leading-[1.1] text-[#5C5C5C] line-clamp-6">
                                Tháng 5/2025 Kiềm thảo dược Saphia lần đầu đặt chân tới Nhật Bản - Xứ sở hoa anh đào. Người
                                dân Nhật Bản sở hữu tuổi thọ cao và một cuộc sống khoẻ mạnh ngay cả khi về già. Bí quyết của
                                họ là xây dựng một lối sống kiềm hoá, luôn ý thức cân bằng kiềm - axit cho cơ thể.
                            </div>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();