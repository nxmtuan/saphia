<?php

/**
Template Name: Home
 */

get_header();
?>

<main>
    <section class="lg:my-[183px] my-[60px]">
        <div class="container">
            <div class="lg:text-[76px] text-4xl leading-[1] tracking-[-1.425px] highlight text-black">
                <span>Kiềm SAPHIA X300</span> <br>
                Lựa chọn cho riêng bạn
            </div>

            <div class="lg:mt-[154px] mt-10 flex flex-col items-center lg:gap-[30px] gap-4">
                <div class="flex md:flex-row flex-col md:items-stretch lg:gap-6 gap-4">
                    <div
                        class="lg:p-10 p-5 lg:w-[479px] md:w-2/5 w-full lg:rounded-[35px] rounded-[20px] overflow-hidden bg-primary text-white">
                        <div
                            class="lg:text-[95px] md:text-[45px] text-[60px] lg:leading-[104.5px] md:leading-[45px] leading-[70px] tracking-[-1.425px]">
                            10+</div>
                        <div class="lg:text-2xl md:text-base text-2xl tracking-[-0.34px]">
                            năm nghiên cứu, thử nghiệm và ứng dụng
                        </div>
                        <div
                            class="lg:mt-8 mt-5 lg:text-4xl md:text-base text-2xl lg:!leading-[32px] prose-strong:font-semibold lg:prose-strong:text-[56px] prose-strong:text-[40px] prose-strong:leading-[46.8px] prose-strong:tracking-[-0.54px]">
                            Hơn <strong>20.000+</strong> người sử dụng hiệu quả
                        </div>
                    </div>
                    <div class="relative lg:rounded-[35px] rounded-[20px] lg:w-fit md:w-3/5 w-fit overflow-hidden">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home.png" alt=""
                            loading="lazy" class="aspect-[762/391] lg:w-[762px] w-full md:h-full object-cover">
                        <a href="" class="block absolute top-[11px] right-[11px]">
                            <?php echo svg('btnLink', '47', '47', 'shrink-0') ?>
                        </a>
                    </div>
                </div>
                <div class="w-full flex md:flex-row flex-col md:items-stretch lg:gap-6 gap-4">
                    <div class="lg:p-10 p-5 xl:w-[804px] md:w-1/2 w-full xl:h-[496px] lg:h-[400px] h-fit flex flex-col lg:rounded-[35px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-right"
                        style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home1.png');">
                        <div
                            class="lg:text-[41px] text-xl lg:leading-[44px] tracking-[-0.72px] text-white max-w-[599px]">
                            Nhận tư vấn miễn phí từ Kiềm Thảo Dược Saphia ngay!
                        </div>
                        <div class="lg:mt-auto mt-8 form-nhan-tu-van-mien-phi">
                            <?php echo do_shortcode('[contact-form-7 id="801976b" title="Form nhận tư vấn miễn phí"]'); ?>
                        </div>
                    </div>
                    <div class="flex-1 flex items-stretch lg:gap-6 gap-4">
                        <?php for ($i = 0; $i < 2; $i++): ?>
                            <div class="w-1/2 md:h-full h-[212px] relative lg:rounded-[35px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
                                style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png');">
                                <a href=""
                                    class="absolute lg:top-2 top-4 lg:right-2 right-4 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                                    <?php echo svg('up-right', '27', '30', 'shrink-0 text-content') ?>
                                </a>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[183px] my-[60px]">
        <div class="container">
            <div
                class="relative py-[103px] xl:px-[266px] px-6 bg-primary lg:rounded-[35px] rounded-[20px] overflow-hidden w-full">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cloud.png" alt="" loading="lazy"
                    class="absolute top-0 right-0 w-[818px] object-contain">
                <div class="lg:space-y-[30px] space-y-5 text-white">
                    <div class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px]">
                        Hành trình của <br> Kiềm Thảo Dược Saphia
                    </div>
                    <div class="lg:text-[28px] text-base lg:leading-[32px]">
                        Không đơn giản là hành trình của một sản phẩm, đây là câu chuyện biến ước mơ thành hiện thực của
                        một Nhà khoa học Việt Nam mang trên mình hoài bão lớn đưa thảo dược Việt đi khắp thế giới để
                        gieo mầm sức khoẻ tới mọi gia đình. Cuộc đời bà gắn liền với Kiềm Thảo Dược Saphia
                    </div>
                </div>
                <div class="lg:mt-[110px] mt-10">
                    <div class="flex gap-2 items-center justify-center">
                        <div
                            class="font-content p-[14px] md:text-base text-xs leading-[18px] tracking-[-0.16px] rounded-full overflow-hidden border [&:not(.active)]:bg-[#ffffff12] bg-white [&:not(.active)]:border-[#ffffff2b] border-transparent [&:not(.active)]:backdrop-blur-[10px] backdrop-blur-0 [&:not(.active)]:text-white text-black cursor-pointer transition-all duration-300 active">
                            Hành trình go global
                        </div>
                        <div
                            class="font-content p-[14px] md:text-base text-xs leading-[18px] tracking-[-0.16px] rounded-full overflow-hidden border [&:not(.active)]:bg-[#ffffff12] bg-white [&:not(.active)]:border-[#ffffff2b] border-transparent [&:not(.active)]:backdrop-blur-[10px] backdrop-blur-0 [&:not(.active)]:text-white text-black cursor-pointer transition-all duration-300">
                            Hoãi bão 10 năm
                        </div>
                    </div>
                    <div class="mt-[3px]">
                        <div>
                            <div
                                class="text-[#D9EAFD] lg:text-[30px] text-xl lg:leading-[37px] tracking-[-0.96px] max-w-[370px]">
                                Tiểu vương quốc Dubai <br>
                                Bước chân đầu tiên ra thế giới
                            </div>
                            <div
                                class="mt-[23px] lg:h-[808px] h-[400px] md:grid grid-cols-2 grid-rows-2 gap-2 block_slider center_items watch_css md:mx-0 -mx-6">
                                <div class="block_slider-item lg:p-[50px] p-6 flex flex-col md:w-full w-[83%] h-full rounded-3xl overflow-hidden bg-no-repeat bg-cover bg-center"
                                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png');">
                                    <div
                                        class="mt-[15px] text-white text-[29px] leading-[32.63px] tracking-[-0.844px] max-w-[273px]">
                                        Khởi nguồn từ sa mạc đầy nắng và gió
                                    </div>
                                    <a href=""
                                        class="font-content mt-auto ml-auto py-[14px] px-[26px] rounded-full overflow-hidden bg-[#ffffff2b] hover:bg-white text-white hover:text-[#3A566A] backdrop-blur-[10px] transition-colors duration-300">
                                        Xem thêm
                                    </a>
                                </div>

                                <div class="block_slider-item md:row-span-2 lg:p-[50px] p-6 flex flex-col md:w-full w-[83%] h-full rounded-3xl overflow-hidden bg-no-repeat bg-cover bg-center"
                                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png');">
                                    <div
                                        class="mt-[15px] text-white text-[29px] leading-[32.63px] tracking-[-0.844px] max-w-[273px] prose-strong:font-normal prose-strong:text-[45px] prose-strong:whitespace-nowrap">
                                        Tầm nhìn ra <strong>100 quốc gia</strong>
                                    </div>
                                    <a href=""
                                        class="font-content mt-auto ml-auto py-[14px] px-[26px] rounded-full overflow-hidden bg-[#ffffff2b] hover:bg-white text-white hover:text-[#3A566A] backdrop-blur-[10px] transition-colors duration-300">
                                        Xem thêm
                                    </a>
                                </div>

                                <div class="block_slider-item lg:p-[50px] p-6 flex flex-col md:w-full w-[83%] h-full rounded-3xl overflow-hidden bg-no-repeat bg-cover bg-center"
                                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png');">
                                    <div
                                        class="mt-[15px] text-white text-[29px] leading-[32.63px] tracking-[-0.844px] max-w-[273px]">
                                        Cái bắt tay triệu đô mở ra cơ hội lớn
                                    </div>
                                    <a href=""
                                        class="font-content mt-auto ml-auto py-[14px] px-[26px] rounded-full overflow-hidden bg-[#ffffff2b] hover:bg-white text-white hover:text-[#3A566A] backdrop-blur-[10px] transition-colors duration-300">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>

                            <div class="lg:mt-[126px] mt-10 flex flex-col items-center">
                                <div
                                    class="text-white lg:text-[64px] text-[28px] tracking-[-0.96px] max-w-[759px] text-center">
                                    Hội đồng khoa học <br>
                                    Kiềm Thảo Dược Saphia
                                </div>
                                <div
                                    class="mt-11 w-full md:flex flex-wrap justify-center gap-5 text-white block_slider center_items watch_css has_autoplay">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <div
                                            class="block_slider-item md:w-[31%] w-full flex flex-col items-center gap-[9px]">
                                            <div
                                                class="lg:size-[223px] size-[180px] rounded-full overflow-hidden bg-[#ECF4FE] flex items-end">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home4.png"
                                                    alt="" loading="lazy">
                                            </div>
                                            <div>
                                                <div class="lg:text-xl text-base lg:leading-[24px] text-center">
                                                    TSDD. NKH. Nhà phát minh sáng chế
                                                </div>
                                                <div class="lg:text-[26px] text-xl lg:leading-[25px] text-center">
                                                    Nguyễn Thị Chung <br>
                                                    (Tức Nguyễn Phương Dung)
                                                </div>
                                                <div class="mt-[15px] lg:text-xl text-base leading-[24px] text-center">
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

    <section class="lg:mt-[183px] mt-[60px] lg:pb-[183px] pb-[60px] bg-home-gradient">
        <div class="container">
            <div class="w-full flex justify-center">
                <div class="w-full lg:h-[361px] md:h-[220px] h-[160px] relative">
                    <div
                        class="lg:text-[64px] text-[34px] lg:leading-[70px] leading-10 tracking-[-0.96px] highlight text-black lg:text-end w-fit">
                        Kiềm Thảo Dược Saphia <br>
                        <span>Nước của sự sống</span>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/lavile.png" alt=""
                        loading="lazy"
                        class="absolute bottom-0 right-0 aspect-[1199/344] lg:w-[1199px] w-full pointer-events-none">
                </div>
            </div>

            <div class="mt-10 flex md:flex-row flex-col md:gap-[6px] gap-4 md:mx-0 -mx-5">
                <div class="md:w-1/2 w-full md:space-y-[6px] block_slider watch_css center_items">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <div class="block_slider-item group relative xl:pt-9 lg:pt-8 pt-6 xl:pl-16 lg:pl-8 pl-6 lg:rounded-[35px] rounded-[20px] overflow-hidden aspect-[814/640] md:w-full w-[83%] bg-no-repeat bg-cover bg-center"
                            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home5.png;')">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home6.png" alt=""
                                loading="lazy"
                                class="absolute inset-0 size-full lg:opacity-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300">
                            <div class="relative z-[1]">
                                <div
                                    class="max-w-[250px] xl:text-[40px] lg:text-2xl text-xl lg:leading-[1] tracking-[-1px] text-[#000000E0]">
                                    Kiềm Thánh Gióng (pH10)
                                </div>
                                <div
                                    class="mt-[2px] max-w-[185px] lg:text-[23px] text-sm leading-[1] tracking-[-0.21px] text-[#00000070]">
                                    Thực phẩm bảo vệ sức khỏe
                                </div>
                                <a href=""
                                    class="mt-[22px] block lg:py-[15px] py-2 lg:px-[49px] px-7 rounded-full overflow-hidden bg-primary text-white font-content lg:text-[15px] text-xs leading-[1] tracking-[-0.151px] w-fit">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="md:mt-[151px] md:w-1/2 w-full md:space-y-[6px] block_slider watch_css center_items">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <div class="block_slider-item group relative xl:pt-12 lg:pt-8 pt-6 px-6 lg:rounded-[35px] rounded-[20px] overflow-hidden aspect-[814/640] md:w-full w-[83%] bg-no-repeat bg-cover bg-center"
                            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home6.png;')">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home5.png" alt=""
                                loading="lazy"
                                class="absolute inset-0 size-full lg:opacity-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300">
                            <div class="relative z-[1] flex flex-col items-center">
                                <div
                                    class="max-w-[332px] xl:text-[40px] lg:text-2xl text-xl lg:leading-[1] tracking-[-1px] text-[#000000E0] text-center">
                                    Kiềm Thánh Gióng (pH10)
                                </div>
                                <div
                                    class="mt-[2px] max-w-[185px] lg:text-[23px] text-sm leading-[1] tracking-[-0.21px] text-[#00000070] text-center">
                                    Thực phẩm bảo vệ sức khỏe
                                </div>
                                <a href=""
                                    class="mt-[22px] block lg:py-[15px] py-2 lg:px-[49px] px-7 rounded-full overflow-hidden bg-primary text-white font-content lg:text-[15px] text-xs leading-[1] tracking-[-0.151px] w-fit">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:mb-[180px] mb-[60px] lg:mt-0 mt-[30px]">
        <div class="container">
            <div class="flex xl:flex-row flex-col items-center lg:justify-between">
                <div
                    class="lg:text-[64px] lg:leading-[1.1] text-4xl tracking-[-0.96px] max-w-[988px] xl:text-left text-center">
                    Tìm kiếm hệ thống Đại lý phân phối gần bạn nhất
                </div>
                <a href=""
                    class="xl:mt-0 mt-3 w-fit lg:py-[25px] py-3 lg:px-11 px-5 rounded-full overflow-hidden bg-primary text-white lg:text-xl text-sm">
                    Xem tất cả
                </a>
            </div>

            <div
                class="lg:mt-[60px] mt-10 group md:flex md:w-full md:max-w-full lg:h-[496px] h-[400px] xl:gap-[53px] gap-4 block_slider watch_css center_items md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="block_slider-item relative block max-md:min-w-[83%] md:h-full basis-0 <?php echo $i === 0 ? 'md:flex-grow-[2]' : 'md:flex-grow' ?>  lg:rounded-[35px] rounded-[20px] bg-no-repeat bg-cover bg-center cursor-pointer md:transition-all md:duration-500 md:ease-in-out md:group-hover:first:flex-grow md:hover:flex-grow-[2]"
                        style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png');">
                        <a href=""
                            class="absolute lg:top-2 top-4 lg:right-2 right-4 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                            <?php echo svg('up-right', '27', '30', 'shrink-0 text-content') ?>
                        </a>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <section class="lg:mt-[180px] mt-[60px]">
        <div class="container">
            <div class="lg:space-y-9 space-y-4 text-content">
                <div class="lg:text-[25px] text-base lg:leading-[22.565px] tracking-[-0.242px] uppercase">
                    Bản tin kiềm hoá
                </div>
                <div class="lg:text-[55px] text-4xl lg:leading-[1.1] tracking-[-0.96px] max-w-[888px]">
                    Đừng bỏ lỡ những thông tin mới nhất về Kiềm Thảo Dược Saphia
                </div>
            </div>
            <div
                class="lg:mt-[100px] mt-10 flex items-stretch gap-[35.585px] block_slider watch_css center_items md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <div
                        class="block_slider-item relative md:w-1/2 w-[83%] flex xl:flex-row flex-col xl:items-stretch xl:gap-[47px] md:gap-5 lg:rounded-[30px] rounded-[20px] overflow-hidden bg-[#ECF4FE]">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home7.png" alt=""
                            loading="lazy"
                            class="1.5xl:w-[333px] xl:w-[260px] w-full aspect-[332/384] object-cover lg:rounded-r-[30px] lg:rounded-b-0 rounded-b-[20px] overflow-hidden shrink-0">
                        <div class="xl:py-11 xl:pr-11 xl:pl-0 p-6">
                            <div class="flex items-center gap-[15px]">
                                <span class="text-[#525256] text-lg leading-[32.235px]">Admin</span>
                                <span class="text-[#525256]">•</span>
                                <span class="text-[#525256] text-lg leading-[32.235px]">10/05/2025</span>
                            </div>
                            <p class="lg:mt-[49px] mt-4 line-clamp-3">
                                <a href=""
                                    class="block text-content text-[28.206px] leading-[36.265px] tracking-[-0.423px]">
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
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>

    <?php echo get_template_part('/components/block_mission-highlights') ?>

    <section class="lg:my-[150px] my-[60px]">
        <div class="container">
            <div
                class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] highlight text-black max-w-[1011px]">
                4 điểm mạnh chỉ có tại hệ thống kinh doanh <span>Kiềm thảo dược Saphia</span>
            </div>
            <div
                class="lg:mt-[68px] mt-10 md:grid xl:grid-cols-4 grid-cols-2 xl:gap-[54px] gap-4 md:h-[496px] h-[400px] block_slider watch_css center_items md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div
                        class="block_slider-item md:w-full w-[83%] h-full relative lg:rounded-[35px] rounded-[20px] overflow-hidden flex items-end">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                            loading="lazy" class="absolute inset-0 size-full object-cover">
                        <div
                            class="relative px-3 py-[23px] lg:text-[42.5px] text-[30px] leading-[1] bg-card-gradient text-white z-[1]">
                            Phù hợp với nhiều đối tượng
                        </div>
                        <a href=""
                            class="absolute lg:top-2 top-4 lg:right-2 right-4 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0 z-[1]">
                            <?php echo svg('up-right', '27', '30', 'shrink-0 text-content') ?>
                        </a>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <section class="lg:my-[150px] my-[60px]">
        <div class="container">
            <div
                class="ml-auto lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] highlight text-black max-w-[1139px] text-end">
                5 lợi ích khác biệt khi chọn đồng hành kinh doanh cùng <span>Kiềm thảo dược Saphia</span>
            </div>
            <div
                class="mt-7 md:grid grid-cols-10 grid-rows-7 gap-2 xl:h-[896px] lg:h-[740px] md:h-[600px] h-[400px] text-white block_slider watch_css center_items has_autoplay md:mx-0 -mx-5">
                <div
                    class="block_slider-item max-md:w-[83%] row-start-1 row-end-4 col-start-1 col-end-5 relative lg:pt-[43px] pt-6 lg:pl-[43px] pl-6 lg:rounded-[35px] rounded-[20px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative xl:text-[42.5px] text-2xl tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-content') ?>
                    </a>
                </div>

                <div
                    class="block_slider-item max-md:w-[83%] row-start-1 row-end-4 col-start-5 col-end-8 relative lg:pt-[43px] pt-6 lg:pl-[43px] pl-6 lg:rounded-[35px] rounded-[20px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative xl:text-[42.5px] text-2xl tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-content') ?>
                    </a>
                </div>

                <div
                    class="block_slider-item max-md:w-[83%] row-start-1 row-end-4 col-start-8 col-end-11 relative lg:pt-[43px] pt-6 lg:pl-[43px] pl-6 lg:rounded-[35px] rounded-[20px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative xl:text-[42.5px] text-2xl tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-content') ?>
                    </a>
                </div>

                <div
                    class="block_slider-item max-md:w-[83%] row-start-4 row-end-8 col-start-1 col-end-6 relative lg:pt-[43px] pt-6 lg:pl-[43px] pl-6 lg:rounded-[35px] rounded-[20px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative xl:text-[42.5px] text-2xl tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-content') ?>
                    </a>
                </div>

                <div
                    class="block_slider-item max-md:w-[83%] row-start-4 row-end-8 col-start-6 col-end-11 relative lg:pt-[43px] pt-6 lg:pl-[43px] pl-6 lg:rounded-[35px] rounded-[20px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                    <div class="relative xl:text-[42.5px] text-2xl tracking-[1px] z-[1]">
                        Không rủi ro
                    </div>
                    <a href=""
                        class="absolute bottom-2.5 right-2.5 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white shrink-0">
                        <?php echo svg('up-right', '27', '30', 'shrink-0 text-content') ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_core-values') ?>
</main>

<?php
get_footer();