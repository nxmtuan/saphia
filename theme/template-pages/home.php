<?php

/**
Template Name: Home
 */

get_header();
?>

<main>
    <section class="my-[183px]">
        <div class="container">
            <div class="text-[76px] leading-[1] tracking-[-1.425px] highlight text-black">
                <span>Kiềm SAPHIA X300</span> <br>
                Lựa chọn cho riêng bạn
            </div>

            <div class="mt-[154px] flex flex-col items-center gap-[30px]">
                <div class="flex items-stretch gap-6">
                    <div class="p-10 w-[479px] rounded-[35px] overflow-hidden bg-primary text-white">
                        <div class="text-[95px] leading-[104.5px] tracking-[-1.425px]">10+</div>
                        <div class="text-2xl tracking-[-0.34px]">
                            năm nghiên cứu, thử nghiệm và ứng dụng
                        </div>
                        <div
                            class="mt-8 text-4xl !leading-[32px] prose-strong:font-semibold prose-strong:text-[56px] prose-strong:leading-[46.8px] prose-strong:tracking-[-0.54px]">
                            Hơn <strong>20.000+</strong> người sử dụng hiệu quả
                        </div>
                    </div>
                    <div class="relative rounded-[35px] overflow-hidden">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home.png" alt=""
                            loading="lazy" class="aspect-[762/391] w-[762px] object-cover">
                        <a href="" class="block absolute top-[11px] right-[11px]">
                            <?php echo svg('btnLink', '47', '47', 'shrink-0') ?>
                        </a>
                    </div>
                </div>
                <div class="w-full flex items-stretch gap-6">
                    <div class="p-10 w-[804px] h-[496px] flex flex-col rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                        style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home1.png');">
                        <div class="text-[41px] leading-[44px] tracking-[-0.72px] text-white max-w-[599px]">
                            Nhận tư vấn miễn phí từ Kiềm Thảo Dược Saphia ngay!
                        </div>
                        <div class="mt-auto form-nhan-tu-van-mien-phi">
                            <?php echo do_shortcode('[contact-form-7 id="801976b" title="Form nhận tư vấn miễn phí"]'); ?>
                        </div>
                    </div>
                    <div class="flex-1 flex items-stretch gap-6">
                        <?php for ($i = 0; $i < 2; $i++): ?>
                            <div class="w-1/2 h-full relative rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                                style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png');">
                                <a href=""
                                    class="absolute top-2 right-2 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                                    <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                                </a>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-[183px]">
        <div class="container">
            <div class="relative py-[103px] px-[266px] bg-primary rounded-[35px] overflow-hidden w-full">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cloud.png" alt="" loading="lazy"
                    class="absolute top-0 right-0 w-[818px] object-contain">
                <div class="space-y-[30px] text-white">
                    <div class="text-[64px] leading-[77px] tracking-[-0.96px]">
                        Hành trình của <br> Kiềm Thảo Dược Saphia
                    </div>
                    <div class="text-[28px] leading-[32px]">
                        Không đơn giản là hành trình của một sản phẩm, đây là câu chuyện biến ước mơ thành hiện thực của
                        một Nhà khoa học Việt Nam mang trên mình hoài bão lớn đưa thảo dược Việt đi khắp thế giới để
                        gieo mầm sức khoẻ tới mọi gia đình. Cuộc đời bà gắn liền với Kiềm Thảo Dược Saphia
                    </div>
                </div>
                <div class="mt-[110px]">
                    <div class="flex gap-2 items-center justify-center">
                        <div
                            class="font-content p-[14px] leading-[18px] tracking-[-0.16px] rounded-full overflow-hidden border [&:not(.active)]:bg-[#ffffff12] bg-white [&:not(.active)]:border-[#ffffff2b] border-transparent [&:not(.active)]:backdrop-blur-[10px] backdrop-blur-0 [&:not(.active)]:text-white text-black cursor-pointer transition-all duration-300 active">
                            Hành trình go global
                        </div>
                        <div
                            class="font-content p-[14px] leading-[18px] tracking-[-0.16px] rounded-full overflow-hidden border [&:not(.active)]:bg-[#ffffff12] bg-white [&:not(.active)]:border-[#ffffff2b] border-transparent [&:not(.active)]:backdrop-blur-[10px] backdrop-blur-0 [&:not(.active)]:text-white text-black cursor-pointer transition-all duration-300">
                            Hoãi bão 10 năm
                        </div>
                    </div>
                    <div class="mt-[3px]">
                        <div>
                            <div class="text-[#D9EAFD] text-[30px] leading-[37px] tracking-[-0.96px] max-w-[370px]">
                                Tiểu vương quốc Dubai <br>
                                Bước chân đầu tiên ra thế giới
                            </div>
                            <div class="mt-[23px] h-[808px] grid grid-cols-2 grid-rows-2 gap-2">
                                <div class="p-[50px] flex flex-col w-full h-full rounded-3xl overflow-hidden bg-no-repeat bg-cover bg-center"
                                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png');">
                                    <div
                                        class="mt-[15px] text-white text-[29px] leading-[32.63px] tracking-[-0.844px] max-w-[273px]">
                                        Khởi nguồn từ sa mạc đầy nắng và gió
                                    </div>
                                    <a href=""
                                        class="font-content mt-auto ml-auto py-[14px] px-[26px] rounded-full overflow-hidden bg-[#ffffff2b] text-white backdrop-blur-[10px]">
                                        Xem thêm
                                    </a>
                                </div>

                                <div class="row-span-2 p-[50px] flex flex-col w-full h-full rounded-3xl overflow-hidden bg-no-repeat bg-cover bg-center"
                                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png');">
                                    <div
                                        class="mt-[15px] text-white text-[29px] leading-[32.63px] tracking-[-0.844px] max-w-[273px] prose-strong:font-normal prose-strong:text-[45px] prose-strong:whitespace-nowrap">
                                        Tầm nhìn ra <strong>100 quốc gia</strong>
                                    </div>
                                    <a href=""
                                        class="font-content mt-auto ml-auto py-[14px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] backdrop-blur-[10px]">
                                        Xem thêm
                                    </a>
                                </div>

                                <div class="p-[50px] flex flex-col w-full h-full rounded-3xl overflow-hidden bg-no-repeat bg-cover bg-center"
                                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png');">
                                    <div
                                        class="mt-[15px] text-white text-[29px] leading-[32.63px] tracking-[-0.844px] max-w-[273px]">
                                        Cái bắt tay triệu đô mở ra cơ hội lớn
                                    </div>
                                    <a href=""
                                        class="font-content mt-auto ml-auto py-[14px] px-[26px] rounded-full overflow-hidden bg-[#ffffff2b] text-white backdrop-blur-[10px]">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>

                            <div class="mt-[126px] flex flex-col items-center">
                                <div class="text-white text-[64px] tracking-[-0.96px] max-w-[759px] text-center">
                                    Hội đồng khoa học <br>
                                    Kiềm Thảo Dược Saphia
                                </div>
                                <div class="mt-11 w-full flex flex-wrap justify-center gap-5 text-white">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <div class="w-[31%] flex flex-col items-center gap-[9px]">
                                            <div
                                                class="size-[223px] rounded-full overflow-hidden bg-[#ECF4FE] flex items-end">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home4.png"
                                                    alt="" loading="lazy">
                                            </div>
                                            <div>
                                                <div class="text-xl !leading-[24px] text-center">
                                                    TSDD. NKH. Nhà phát minh sáng chế
                                                </div>
                                                <div class="text-[26px] leading-[25px] text-center">
                                                    Nguyễn Thị Chung <br>
                                                    (Tức Nguyễn Phương Dung)
                                                </div>
                                                <div class="mt-[15px] text-xl !leading-[24px] text-center">
                                                    Chủ tịch HĐQL kiêm Chủ tịch HĐQT Công ty CPTM Kiềm Saphia Pharma
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor ?>
                                </div>
                            </div>
                        </div>

                        <div class=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-[183px] pb-[183px] bg-home-gradient">
        <div class="container">
            <div class="w-full flex justify-center">
                <div class="w-[1385px] h-[361px] relative">
                    <div class="text-[64px] leading-[70px] tracking-[-0.96px] highlight text-black text-end w-fit">
                        Kiềm Thảo Dược Saphia <br>
                        <span>Nước của sự sống</span>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/lavile.png" alt=""
                        loading="lazy"
                        class="absolute bottom-0 right-0 aspect-[1199/344] w-[1199px] pointer-events-none">
                </div>
            </div>

            <div class="mt-10 flex gap-[6px]">
                <div class="w-1/2 space-y-[6px]">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <div class="relative pt-9 pl-16 rounded-[35px] overflow-hidden aspect-[814/640] w-full">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home5.png" alt=""
                                loading="lazy" class="absolute inset-0">
                            <div class="relative z-[1]">
                                <div class="max-w-[250px] text-[40px] leading-[1] tracking-[-1px] text-[#000000E0]">
                                    Kiềm Thánh Gióng (pH10)
                                </div>
                                <div
                                    class="mt-[2px] max-w-[185px] text-[23px] leading-[1] tracking-[-0.21px] text-[#00000070]">
                                    Thực phẩm bảo vệ sức khỏe
                                </div>
                                <a href=""
                                    class="mt-[22px] block py-[15px] px-[49px] rounded-full overflow-hidden bg-primary text-white font-content text-[15px] leading-[1] tracking-[-0.151px] w-fit">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="mt-[151px] w-1/2 space-y-[6px]">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <div class="relative pt-12 rounded-[35px] overflow-hidden aspect-[814/640] w-full">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home6.png" alt=""
                                loading="lazy" class="absolute inset-0">
                            <div class="relative z-[1] flex flex-col items-center">
                                <div
                                    class="max-w-[332px] text-[40px] leading-[1] tracking-[-1px] text-[#000000E0] text-center">
                                    Kiềm Thánh Gióng (pH10)
                                </div>
                                <div
                                    class="mt-[2px] max-w-[185px] text-[23px] leading-[1] tracking-[-0.21px] text-[#00000070] text-center">
                                    Thực phẩm bảo vệ sức khỏe
                                </div>
                                <a href=""
                                    class="mt-[22px] block py-[15px] px-[49px] rounded-full overflow-hidden bg-primary text-white font-content text-[15px] leading-[1] tracking-[-0.151px] w-fit">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-[180px]">
        <div class="container">
            <div class="flex items-center justify-between">
                <div class="text-[64px] tracking-[-0.96px] max-w-[988px]">
                    Tìm kiếm hệ thống Đại lý phân phối gần bạn nhất
                </div>
                <a href="" class="py-[25px] px-11 rounded-full overflow-hidden bg-primary text-white text-xl">
                    Xem tất cả
                </a>
            </div>
            <div class="mt-[60px] flex items-stretch gap-[53px]">
                <div class=" w-[790px] h-[496px] relative rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png');">
                    <a href=""
                        class="absolute top-2 right-2 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                    </a>
                </div>
                <div class="flex-1 flex items-stretch gap-[53px]">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <div class="w-1/2 h-full relative rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png');">
                            <a href=""
                                class="absolute top-2 right-2 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                                <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-[180px] mb-5">
        <div class="container">
            <div class="space-y-9 text-[#292929]">
                <div class="text-[25px] leading-[22.565px] tracking-[-0.242px] uppercase">
                    Bản tin kiềm hoá
                </div>
                <div class="text-[55px] tracking-[-0.96px] max-w-[888px]">
                    Đừng bỏ lỡ những thông tin mới nhất về Kiềm Thảo Dược Saphia
                </div>
            </div>
            <div class="mt-[100px] flex items-stretch gap-[35.585px]">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <div
                        class="relative w-1/2 h-[384.809px] flex items-stretch gap-[47px] rounded-[30px] overflow-hidden bg-[#ECF4FE]">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home7.png" alt=""
                            loading="lazy"
                            class="w-[332.759px] h-full object-cover rounded-r-[30px] overflow-hidden shrink-0">
                        <div class="py-11 pr-11">
                            <div class="flex items-center gap-[15px]">
                                <span class="text-[#525256] text-lg leading-[32.235px]">Admin</span>
                                <span class="text-[#525256]">•</span>
                                <span class="text-[#525256] text-lg leading-[32.235px]">10/05/2025</span>
                            </div>
                            <p class="mt-[49px] line-clamp-3">
                                <a href=""
                                    class="block text-[#292929] text-[28.206px] leading-[36.265px] tracking-[-0.423px]">
                                    Bằng độc quyền sáng chế kiềm thảo dược. Niềm tự hào của trí tuệ Việt
                                </a>
                            </p>
                            <div class="mt-4 text-[18.132px] leading-[32.235px] text-[#525256] line-clamp-3">
                                Consequat mauris nunc congue nisi vitae suscipit tellus. Quis eleifend quam adipiscing vitae
                                proin sagittis
                            </div>
                        </div>
                        <a href=""
                            class="absolute top-2.5 right-2.5 size-[54px] flex justify-center items-center rounded-full overflow-hidden bg-[#AEBBCE] shrink-0">
                            <?php echo svg('up-right', '27', '30', 'shrink-0 text-white') ?>
                        </a>
                    </div>
                <?php endfor ?>
            </div>
            <div class="mt-[47px] py-16 w-full flex items-center justify-evenly">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/logo-1.svg" alt="" loading="lazy"
                        class="object-contain">
                <?php endfor ?>
            </div>
        </div>
    </section>

    <section class="my-[120px]">
        <div class="container">
            <div class="text-[64px] leading-[77px] tracking-[-0.96px]">
                Vì một thế giới tốt đẹp hơn
            </div>
            <div class="mt-20 grid grid-cols-12 grid-rows-11 gap-2 text-white h-[1397px]">
                <div
                    class="row-start-1 row-end-5 col-start-1 col-end-9 relative pt-[43px] pl-[43px] rounded-[30px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Bảo vệ <br> môi trường
                    </div>
                    <a href=""
                        class="absolute w-fit bottom-[18px] right-5 block py-[15px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] text-sm z-[1]">
                        Xem thêm
                    </a>
                </div>

                <div
                    class="row-start-1 row-end-3 col-start-9 col-end-13 relative pt-[43px] pl-[43px] rounded-[30px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Bảo vệ <br> môi trường
                    </div>
                    <a href=""
                        class="absolute w-fit bottom-[18px] right-5 block py-[15px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] text-sm z-[1]">
                        Xem thêm
                    </a>
                </div>

                <div
                    class="row-start-3 row-end-5 col-start-9 col-end-13 relative pt-[43px] pl-[43px] rounded-[30px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Bảo vệ <br> môi trường
                    </div>
                    <a href=""
                        class="absolute w-fit bottom-[18px] right-5 block py-[15px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] text-sm z-[1]">
                        Xem thêm
                    </a>
                </div>

                <div
                    class="row-start-5 row-end-8 col-start-1 col-end-6 relative pt-[43px] pl-[43px] rounded-[30px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Bảo vệ <br> môi trường
                    </div>
                    <a href=""
                        class="absolute w-fit bottom-[18px] right-5 block py-[15px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] text-sm z-[1]">
                        Xem thêm
                    </a>
                </div>

                <div
                    class="row-start-5 row-end-8 col-start-6 col-end-10 relative pt-[43px] pl-[43px] rounded-[30px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Bảo vệ <br> môi trường
                    </div>
                    <a href=""
                        class="absolute w-fit bottom-[18px] right-5 block py-[15px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] text-sm z-[1]">
                        Xem thêm
                    </a>
                </div>

                <div
                    class="row-start-5 row-end-8 col-start-10 col-end-13 relative pt-[43px] pl-[43px] rounded-[30px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Bảo vệ <br> môi trường
                    </div>
                    <a href=""
                        class="absolute w-fit bottom-[18px] right-5 block py-[15px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] text-sm z-[1]">
                        Xem thêm
                    </a>
                </div>

                <div
                    class="row-start-8 row-end-12 col-start-1 col-end-7 relative pt-[43px] pl-[43px] rounded-[30px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Bảo vệ <br> môi trường
                    </div>
                    <a href=""
                        class="absolute w-fit bottom-[18px] right-5 block py-[15px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] text-sm z-[1]">
                        Xem thêm
                    </a>
                </div>

                <div
                    class="row-start-8 row-end-12 col-start-7 col-end-13 relative pt-[43px] pl-[43px] rounded-[30px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Bảo vệ <br> môi trường
                    </div>
                    <a href=""
                        class="absolute w-fit bottom-[18px] right-5 block py-[15px] px-[26px] rounded-full overflow-hidden bg-white text-[#3A566A] text-sm z-[1]">
                        Xem thêm
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-[150px]">
        <div class="container">
            <div class="text-[64px] leading-[77px] tracking-[-0.96px] highlight text-black max-w-[1011px]">
                4 điểm mạnh chỉ có tại hệ thống kinh doanh <span>Kiềm thảo dược Saphia</span>
            </div>
            <div class="mt-[68px] grid grid-cols-4 gap-[54px] h-[496px]">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="px-3 pb-[23px] size-full relative rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center flex items-end"
                        style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png');">
                        <div class="text-[42.5px] leading-[1] text-white">
                            Phù hợp với nhiều đối tượng
                        </div>
                        <a href=""
                            class="absolute top-2 right-2 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                            <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                        </a>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <section class="my-[150px]">
        <div class="container">
            <div
                class="ml-auto text-[64px] leading-[77px] tracking-[-0.96px] highlight text-black max-w-[1139px] text-end">
                5 lợi ích khác biệt khi chọn đồng hành kinh doanh cùng <span>Kiềm thảo dược Saphia</span>
            </div>
            <div class="mt-7 grid grid-cols-10 grid-rows-7 gap-2 h-[896px] text-white">
                <div
                    class="row-start-1 row-end-4 col-start-1 col-end-5 relative pt-[43px] pl-[43px] rounded-[35px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                    </a>
                </div>

                <div
                    class="row-start-1 row-end-4 col-start-5 col-end-8 relative pt-[43px] pl-[43px] rounded-[35px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                    </a>
                </div>

                <div
                    class="row-start-1 row-end-4 col-start-8 col-end-11 relative pt-[43px] pl-[43px] rounded-[35px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                    </a>
                </div>

                <div
                    class="row-start-4 row-end-8 col-start-1 col-end-6 relative pt-[43px] pl-[43px] rounded-[35px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                    </a>
                </div>

                <div
                    class="row-start-4 row-end-8 col-start-6 col-end-11 relative pt-[43px] pl-[43px] rounded-[35px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative text-[42.5px] tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 size-16 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-[#292929]') ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class=""></section>
</main>

<?php
get_footer();