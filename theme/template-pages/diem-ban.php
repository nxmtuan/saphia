<?php

/**
Template Name: Điểm bán
 */

get_header();
?>

<main>
    <section class="lg:my-[164px] my-[60px]" data-component="block_list-shop">
        <div class="container">
            <div class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] text-[#000000E0] text-center">
                HỆ THỐNG 200 NHÀ KIỀM "PHỦ SÓNG" KHẮP VIỆT NAM
            </div>
            <div class="md:mt-20 mt-5 list_transaction">
                <div class="flex items-end gap-5">
                    <div class="min-w-[150px]">
                        <span class="font-medium text-content"><?php _e('Tỉnh/thành', 'acbs') ?></span>
                        <div class="relative">
                            <select name="" id=""
                                class="appearance-none bg-white lg:w-36 w-full py-2 pl-5 pr-7 rounded-full border border-[#EAEEF4] text-sm text-[#151515] focus:outline-none focus:border-primary cursor-pointer transition-colors duration-300">
                                <option value="" selected><?php _e('Tất cả', 'acbs') ?></option>
                                <option value="">Hà Nội</option>
                            </select>
                            <?php echo svg('chevron-down', '', '', 'icon w-5 h-5 absolute top-1/2 right-2.5 -translate-y-1/2 [&:not(.active)]:rotate-0 rotate-180 transition-transform duration-300 pointer-events-none') ?>
                        </div>
                    </div>
                    <div class="min-w-[150px]">
                        <span class="font-medium text-content"><?php _e('Phường/Xã', 'acbs') ?></span>
                        <div class="relative">
                            <select name="" id=""
                                class="appearance-none bg-white lg:w-36 w-full py-2 pl-5 pr-7 rounded-full border border-[#EAEEF4] text-sm text-[#151515] focus:outline-none focus:border-primary cursor-pointer transition-colors duration-300">
                                <option value="" selected><?php _e('Tất cả', 'acbs') ?></option>
                                <option value="">Hà Nội</option>
                            </select>
                            <?php echo svg('chevron-down', '', '', 'icon w-5 h-5 absolute top-1/2 right-2.5 -translate-y-1/2 [&:not(.active)]:rotate-0 rotate-180 transition-transform duration-300 pointer-events-none') ?>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-6 flex md:flex-row flex-col-reverse items-stretch xl:gap-20 md:gap-8 gap-6 md:mx-0 -mx-[1.375rem]">
                    <div
                        class="md:w-[33%] w-full md:shadow-location shadow-contentCard bg-white rounded-[0.625rem] overflow-hidden md:py-4 py-3">
                        <div class="md:block flex items-center gap-2.5 md:px-0 px-2.5 pb-2.5">
                            <div class="w-full md:px-4">
                                <div class="relative">
                                    <?php echo svg('search', '', '', 'size-6 size-[1.125rem] shrink-0 absolute left-4 top-1/2 -translate-y-1/2') ?>
                                    <input id="search-transaction" type="text"
                                        placeholder="<?php _e('Tìm kiếm', 'acbs') ?>"
                                        class="w-full rounded-full overflow-hidden bg-white border border-[#DDE2EA] pl-12 md:pr-4 pr-2.5 md:py-3 py-2 md:text-base text-sm focus:outline-none focus:border-primary transition-colors duration-300">
                                </div>
                            </div>
                        </div>
                        <div class="lg:h-[34.75rem] md:h-[21.75rem] h-[21.75rem] list_location overflow-y-auto">
                            <?php for ($i = 0; $i < 10; $i++): ?>
                                <div
                                    class="selected-item group md:p-4 px-4 py-3 border-b last:border-b-0 border-[#1d1d1d1a] bg-white hover:bg-[#DDEBCE80] [&.active]:bg-[#DDEBCE] transition-colors duration-300 cursor-pointer">
                                    <div class="text-xl font-semibold text-primary name_transaction">
                                        Cơ sở 1
                                    </div>

                                    <div class="mt-2 text-content text-sm address_transaction">
                                        Trung Hòa, Nhân Chính, Hà Nội
                                    </div>

                                    <div class="mt-2 text-content text-sm flex gap-1 items-center">
                                        <span><?php _e('Số điện thoại:', 'acbs') ?></span>
                                        <a href="tel:<?php echo preg_replace('/\D+/', '', get_sub_field('phone')); ?>">
                                            0987654321
                                        </a>

                                    </div>
                                    <div class="transaction-btn mt-4">
                                        <a href="" target="_blank"
                                            class="group/inner flex items-center gap-1 text-sm font-medium text-primary w-fit">
                                            <?php _e('Chỉ đường', 'acbs') ?>
                                            <i
                                                class="text-primary group-hover/inner:translate-x-1 transition-transform duration-300">
                                                <?php echo svg('right', '12', '12') ?>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>

                    </div>

                    <div class="md:flex-1 max-md:h-[14.375rem]">
                        <div class="rounded-[0.625rem] overflow-hidden w-full h-full block_iframe">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/map.png" alt=""
                                loading="lazy" class="size-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[164px] my-[60px]">
        <div class="container">
            <div class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] text-[#000000E0] text-center">
                HỆ THỐNG 200 NHÀ KIỀM "PHỦ SÓNG" KHẮP VIỆT NAM
            </div>
            <div class="lg:mt-[60px] mt-10 flex 1.5xl:flex-row flex-col items-center gap-[70px] md:mx-0 -mx-5">
                <div
                    class="lg:w-[837px] w-full flex items-center justify-center gap-2 block_slider center_items watch_css has_autoplay">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <div
                            class="block_slider-item <?= $i === 1 ? 'md:w-1/3 w-[83%]' : 'md:w-[30%] w-[83%]' ?> aspect-[297/430] rounded-[42px] overflow-hidden p-2 flex flex-col lg:gap-6 md:gap-2 gap-6 bg-primary">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home4.png" alt=""
                                loading="lazy" class="aspect-square w-full object-cover rounded-[34px]">
                            <div class="flex-1 text-white">
                                <div class="xl:text-[26px] text-xl leading-[1] tracking-[-0.96px] text-center">
                                    NPP Lê Thị Tưởng
                                </div>
                                <div class="mt-3 text-xs text-center">
                                    Doanh thu
                                </div>
                                <div class="mt-2 xl:text-[26px] text-xl  leading-[1] tracking-[-0.96px] text-center">
                                    1.000.000.000
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="flex-1 rounded-xl overflow-hidden border-2 border-primary">
                    <table class="w-full border-collapse text-center">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="py-3 px-4 md:text-[25px] text-xs leading-[1] border border-primary">TOP</th>
                                <th class="py-3 px-4 md:text-[25px] text-xs leading-[1] border border-primary">NHÀ PHÂN
                                    PHỐI</th>
                                <th class="py-3 px-4 md:text-[25px] text-xs leading-[1] border border-primary">DOANH THU
                                    THỰC TẾ</th>
                            </tr>
                        </thead>
                        <tbody class="text-primary bg-white">
                            <?php for ($i = 0; $i < 3; $i++): ?>
                                <tr>
                                    <td
                                        class="py-2 px-4 md:text-[25px] text-xs leading-[1] border border-primary font-semibold">
                                        1</td>
                                    <td class="py-2 px-4 md:text-[25px] text-xs leading-[1] border border-primary">Lê Thị
                                        Tường</td>
                                    <td class="py-2 px-4 md:text-[25px] text-xs leading-[1] border border-primary">
                                        100.000.000</td>
                                </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[164px] my-[60px]">
        <div class="container">
            <div class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] text-[#000000E0] text-center">
                VĂN PHÒNG ĐẠI DIỆN DUBAI
            </div>
            <div class="lg:mt-[94px] mt-10 flex md:flex-row flex-col lg:items-stretch gap-6">
                <div class="relative aspect-square md:w-[40%] w-full lg:rounded-[40px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham5.jpg');">
                    <a href="https://youtu.be/BxuY9FET9Y4?si=oufOaTitd3e7e8Dc" data-fancybox>
                        <?php echo svg('playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[100px] size-[50px] shrink-0') ?>
                    </a>
                </div>
                <div class="relative flex-1 aspect-[1006/728] w-full lg:rounded-[40px] rounded-[20px] overflow-hidden">
                    <a href="https://youtu.be/BxuY9FET9Y4?si=oufOaTitd3e7e8Dc" data-fancybox>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham5.jpg" alt="" loading="lazy" class="absolute inset-0 size-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();