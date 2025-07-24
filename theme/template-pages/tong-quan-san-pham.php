<?php

/**
Template Name: Tổng quan về sản phẩm
 */

get_header();
?>

<main>
    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-x-7 lg:gap-y-[50px] gap-y-7">
                <?php for ($i = 0; $i < 10; $i++): ?>
                    <div class="space-y-5 w-full flex flex-col items-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home7.png" alt=""
                            loading="lazy" class="aspect-square w-full object-cover rounded-full overflow-hidden">
                        <div
                            class="lg:text-[32px] text-xl leading-[1] tracking-[-0.754px] text-content max-w-[90%] text-center">
                            Nhiều bệnh nền
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="lg:space-y-[30px] space-y-6">
                <div
                    class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] bg-clip-text text-transparent bg-text-gradient">
                    Đưa tế bào về trạng thái cân bằng tự nhiên là gì?
                </div>
                <div class="max-w-[836px] lg:text-lg text-sm text-[#525256]">
                    Trạng thái cân bằng tự nhiên của tế bào là khi môi trường xung quanh và bên trong tế bào (gọi là nội
                    môi và nội bào) được duy trì ở điều kiện lý tưởng để tế bào sống, trao đổi chất và phục hồi. Điều
                    này bao gồm pH phù hợp, nồng độ oxy ổn định, ít gốc tự do, đủ dưỡng chất và enzyme hoạt động hiệu
                    quả.
                </div>
            </div>
            <div class="lg:my-[50px] my-10 grid grid-cols-2 grid-rows-3 lg:gap-x-[30px] lg:gap-y-[10px] gap-2">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div
                        class="<?= $i % 2 == 0 ? 'row-span-2' : 'row-span-1' ?> w-full relative rounded-[35px] overflow-hidden lg:min-h-[291px] min-h-[150px]">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                            loading="lazy" class="absolute inset-0 size-full object-cover">
                    </div>
                <?php endfor ?>
            </div>
            <div class="lg:space-y-[30px] space-y-6 text-end">
                <div
                    class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] bg-clip-text text-transparent bg-text-gradient">
                    pH cao nhất bền vững của <br> Kiềm Thảo Dược Saphia có gì nổi bật?
                </div>
                <div class="lg:text-lg text-sm lg:space-y-5 space-y-2 text-[#525256]">
                    <p>
                        Kiềm Thảo Dược Saphia sở hữu độ pH cao vượt trội trong thang kiềm – nằm trong nhóm kiềm mạnh
                        nhưng
                        vẫn an toàn nhờ công thức chiết xuất hoàn toàn từ thảo dược tự nhiên. Đặc biệt, sản phẩm được
                        nghiên
                        cứu để đạt tính kiềm bền vững, tức là duy trì độ pH cao ổn định trong thời gian dài mà không bị
                        biến
                        đổi dưới tác động của môi trường. Đây chính là điểm khác biệt cốt lõi giúp sản phẩm có khả năng
                        trung hòa axit nhanh chóng, hỗ trợ tái thiết lập môi trường kiềm cho tế bào, từ đó nâng cao sức
                        đề
                        kháng, cải thiện chuyển hóa và thúc đẩy quá trình thải độc một cách tự nhiên.
                    </p>
                    <p>
                        Không chỉ đơn thuần là nước uống, Kiềm Thảo Dược Saphia là giải pháp tái tạo nội lực – giúp cơ
                        thể phục hồi, bảo vệ và trẻ hóa từ bên trong.
                    </p>
                    <p>
                        Cơ thể khoẻ mạnh là cơ thể hạnh phúc
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="flex lg:flex-row flex-col lg:items-stretch xl:gap-11 md:gap-3 md:mx-0 -mx-5">
                <div
                    class="p-5 lg:w-2/5 w-full md:rounded-[35px] overflow-hidden border-2 border-[#ECF4FE] shadow-product hidden">
                    <div class="text-lg">
                        Cập nhật thông tin hôm nay
                    </div>
                    <div class="mt-5 w-full">
                        <label for="phSlider" class="block text-[15px]">
                            Giá trị pH của bạn
                        </label>

                        <input id="phSlider" type="range" min="5.5" max="8.0" step="0.1" value="7.0"
                            class="w-full h-[3px] appearance-none cursor-pointer bg-line-gradient">

                        <div id="valueDisplay" class="text-center text-[15px]">7.0</div>

                        <div class="flex justify-between text-xs -mt-4">
                            <span class="text-red-600">Axit (5.5)</span>
                            <span class="text-green-600">Kiềm (8.0)</span>
                        </div>
                    </div>
                    <div class="mt-5 text-lg text-content">
                        Bạn cảm thấy thế nào hôm nay?
                    </div>
                    <div class="mt-5 flex justify-between">
                        <div
                            class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300">
                            <?php echo svg('angry-face', '', '', 'xl:size-[60px] size-10 shrink-0') ?>
                            <span class="xl:text-base text-xs text-content text-center">
                                <?php _e('Tệ', 'gnws') ?>
                            </span>
                        </div>
                        <div
                            class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300">
                            <?php echo svg('downcast-face', '', '', 'xl:size-[60px] size-10 shrink-0') ?>
                            <span class="xl:text-base text-xs text-content text-center">
                                <?php _e('Không tốt', 'gnws') ?>
                            </span>
                        </div>
                        <div
                            class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300">
                            <?php echo svg('kissing-face', '', '', 'xl:size-[60px] size-10 shrink-0') ?>
                            <span class="xl:text-base text-xs text-[#5D9A00] text-center">
                                <?php _e('Bình thường', 'gnws') ?>
                            </span>
                        </div>
                        <div
                            class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300">
                            <?php echo svg('winking-face', '', '', 'xl:size-[60px] size-10 shrink-0') ?>
                            <span class="xl:text-base text-xs text-content text-center">
                                <?php _e('Tốt', 'gnws') ?>
                            </span>
                        </div>
                        <div
                            class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300">
                            <?php echo svg('face-blowing', '', '', 'xl:size-[60px] size-10 shrink-0') ?>
                            <span class="xl:text-base text-xs text-content text-center">
                                <?php _e('Rất tốt', 'gnws') ?>
                            </span>
                        </div>
                    </div>
                    <div
                        class="btn-submitPH mt-5 mx-auto lg:p-2.5 p-2 min-w-[263px] w-fit rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white lg:text-xl text-sm text-center cursor-pointer transition-colors duration-300">
                        <?php _e('Cập nhật giá trị mới', 'gnws') ?>
                    </div>
                </div>
                
                <!-- Form điền thông tin cho user lần đầu -->
                <div class="md:p-10 p-5 lg:w-2/5 w-full md:rounded-[35px] overflow-hidden flex justify-center bg-[#ECF4FE]">
                    <div class="max-w-[513px]">
                        <div class="md:text-5xl text-2xl tracking-[-0.72px] text-content">
                            Đăng ký theo dõi pH hàng ngày
                        </div>
                        <div class="mt-3 md:text-lg text-[#525256]">
                            Ghi lại pH hàng ngày và đề xuất giải pháp cá nhân hóa cho bạn
                        </div>
                        <div class="mt-10 w-full space-y-5">
                            <input type="text" placeholder="Họ và tên" class="md:p-5 px-5 py-2 w-full bg-white rounded-xl overflow-hidden md:text-lg text-[#525256] border border-transparent focus:outline-none focus:border-primary transition-colors duration-300">
                            <input type="tel" placeholder="Số điện thoại" class="md:p-5 px-5 py-2 w-full bg-white rounded-xl overflow-hidden md:text-lg text-[#525256] border border-transparent focus:outline-none focus:border-primary transition-colors duration-300">
                            <div class="mx-auto w-fit bg-primary hover:bg-[#224393c7] rounded-full overflow-hidden py-5 px-10 text-white text-xl text-center cursor-pointer transition-colors duration-300">
                                Đăng ký
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative p-5 flex-1 md:rounded-[35px] overflow-hidden border-2 border-[#ECF4FE] shadow-product">
                    <!-- Blur kết quả cho user lần đầu -->
                    <div class="absolute z-[1] inset-0 size-full backdrop-blur-lg"></div>
                    <div class="flex md:flex-row flex-col md:items-center md:justify-between">
                        <div class="text-lg">
                            Cập nhật thông tin hôm nay
                        </div>
                        <div
                            class="p-[6px] lg:min-w-[180px] max-lg:w-fit border border-primary text-primary bg-white hover:hover:bg-[#f5f1f1] text-sm cursor-pointer text-center rounded-full overflow-hidden transition-colors duration-300">
                            <?php _e('Nhận lời khuyên', 'gnws') ?>
                        </div>
                    </div>
                    <div id="pHChart"></div>
                    <div class="px-[30px] py-2 bg-[#ECF4FE] rounded-[35px] overflow-hidden space-y-[5px]">
                        <div class="xl:text-2xl text-lg text-content">
                            Phân tích:
                        </div>
                        <div class="xl:text-lg text-sm text-[#525256]">
                            Độ pH của bạn đã cải thiện đáng kể trong tuần qua, tăng từ 6.2 lên 7.0. Tiếp tục duy trì chế
                            độ ăn giàu thực phẩm kiềm và sử dụng sản phẩm Kiềm Thảo Dược Saphia để đạt được kết quả tốt
                            nhất.
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="lg:space-y-9 space-y-5">
                <div
                    class="lg:text-[64px] text-4xl leading-[1] bg-clip-text text-transparent bg-text-gradient text-center">
                    Lộ trình cải thiện của bạn
                </div>
                <div class="lg:text-xl text-base text-content text-center max-w-[760px] mx-auto">
                    Dựa trên thông tin bạn cung cấp, chúng tôi đã tạo lộ trình cá nhân hóa giúp cải thiện vấn đề sức
                    khỏe của bạn thông qua lối sống kiềm
                </div>
            </div>
            <div class="lg:mt-[50px] mt-10 flex md:flex-col md:gap-0 gap-5 mã-md:items-stretch md:space-y-[50px]">
                <div class="flex md:flex-row flex-col gap-5 md:items-center justify-evenly">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="relative lg:px-[38px]">
                            <div
                                class="lg:size-[150px] size-[100px] rounded-full bg-primary text-white flex items-center justify-center">
                                <?php echo svg('schedule', '', '', 'lg:size-[96px] size-[60px] shrink-0') ?>
                                <div
                                    class="absolute top-0 right-0 lg:size-10 size-5 rounded-full overflow-hidden lg:border-[5px] border-[3px] border-[#26AAE1] flex justify-center items-center lg:text-xl text-sm text-content">
                                    1</div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="md:block hidden w-full h-2.5 rounded-full bg-[#26AAE1]"></div>
                <div class="flex md:flex-row flex-col gap-5 md:items-center justify-evenly">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="max-w-[226px] lg:space-y-5 space-y-3 text-center">
                            <div class="lg:text-[28px] text-xl leading-[1] tracking-[-0.754px] text-content">
                                Đánh giá tình trạng pH
                            </div>
                            <div class="lg:text-xl text-sm leading-[1] text-content">
                                Xác định mức độ axit trong cơ thể thông qua bài kiểm tra pH
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="lg:text-[64px] text-4xl leading-[1] bg-clip-text text-transparent bg-text-gradient">
                Sự kết hợp giữa nước kiềm và báu vật từ thiên nhiên
            </div>
            <div class="lg:mt-[50px] mt-10 grid grid-cols-2 grid-rows-3 lg:gap-[30px] gap-2">
                <div class="row-span-2 w-full relative rounded-[35px] overflow-hidden lg:min-h-[291px] min-h-[150px]">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                </div>
                <div
                    class="row-span-1 lg:text-xl text-[9px] text-[#525256] flex items-center w-full lg:min-h-[291px] min-h-[150px]">
                    Bắt nguồn từ kho tàng y học cổ truyền dân tộc, kết hợp với khoa học hiện đại và sự thấu hiểu sâu sắc
                    về giá trị của thảo dược quê hương, Kiềm Thảo Dược Saphia ra đời như một giải pháp đột phá, mang
                    trong mình sứ mệnh chăm sóc và bảo vệ sức khỏe con người một cách tự nhiên và bền vững. Mỗi giọt
                    Kiềm thảo dược là kết tinh của niềm đam mê nghiên cứu, sự trân trọng Mẹ Thiên Nhiên và trên hết là
                    tình yêu dành cho sức khỏe cộng đồng.
                </div>

                <div class="row-span-2 w-full relative rounded-[35px] overflow-hidden lg:min-h-[291px] min-h-[150px]">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                </div>

                <div
                    class="row-span-1 lg:text-xl text-[9px] text-[#525256] flex items-center w-full lg:min-h-[291px] min-h-[150px]">
                    Bắt nguồn từ kho tàng y học cổ truyền dân tộc, kết hợp với khoa học hiện đại và sự thấu hiểu sâu sắc
                    về giá trị của thảo dược quê hương, Kiềm Thảo Dược Saphia ra đời như một giải pháp đột phá, mang
                    trong mình sứ mệnh chăm sóc và bảo vệ sức khỏe con người một cách tự nhiên và bền vững. Mỗi giọt
                    Kiềm thảo dược là kết tinh của niềm đam mê nghiên cứu, sự trân trọng Mẹ Thiên Nhiên và trên hết là
                    tình yêu dành cho sức khỏe cộng đồng.
                </div>
            </div>
        </div>
        <div class="mt-[30px] relative">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bgsam2.png" alt="" loading="lazy"
                class="absolute left-0 bottom-0 object-contain select-none 1.5xl:block hidden">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bgsam1.png" alt="" loading="lazy"
                class="absolute right-0 top-0 object-contain select-none 1.5xl:block hidden">
            <div class="container">
                <div class="md:flex flex-wrap gap-[6px] block_slider watch_css center_items md:mx-0 -mx-5">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div
                            class="block_slider-item <?= $i === 1 ? 'md:mt-[150px]' : '' ?> <?= $i === 2 ? 'md:-mt-[150px]' : '' ?> md:w-[calc(50%-3px)] w-[83%] h-fit">
                            <div class="group relative xl:pt-12 lg:pt-8 pt-6 px-6 lg:rounded-[35px] rounded-[20px] overflow-hidden aspect-[814/640] bg-no-repeat bg-cover bg-center"
                                style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home8.png;')">
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
                                        class="mt-[22px] block lg:py-[15px] py-2 lg:px-[49px] px-7 rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white font-content lg:text-[15px] text-xs leading-[1] tracking-[-0.151px] w-fit transition-colors duration-300">
                                        Mua ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_content-with-image-left') ?>

    <?php echo get_template_part('/components/block_content-with-image-right') ?>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="relative aspect-[1632/900] w-full lg:rounded-[35px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
                style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham5.jpg');">
                <a href="https://youtu.be/BxuY9FET9Y4?si=oufOaTitd3e7e8Dc" data-fancybox>
                    <?php echo svg('playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[100px] size-[50px] shrink-0') ?>
                </a>
            </div>
            <div class="lg:mt-20 mt-10">
                <div class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] max-w-[593px]">
                    Thành phần thảo dược nổi bật
                </div>
                <div class="mt-[30px] flex flex-wrap items-center justify-center xl:gap-[100px] gap-6">
                    <?php for ($i = 0; $i < 9; $i++): ?>
                        <div
                            class="xl:min-h-[385px] lg:max-w-[200px] max-w-[100px] flex flex-col <?= $i % 2 == 0 ? '' : 'justify-end' ?> lg:gap-[37px] gap-5">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                                loading="lazy" class="w-full aspect-square rounded-full overflow-hidden object-cover">
                            <div class="text-center lg:text-[32px] leading-[1] tracking-[-0.754px]">
                                Nhân sâm
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_content-with-image-right') ?>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="w-full relative rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham6.jpg');">
                <div class="absolute inset-0 size-full bg-[#393CA280]"></div>
                <div class="relative lg:py-[107px] lg:pl-24 p-6 max-w-[769px] text-white z-[1]">
                    <div class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px]">
                        Tái tạo sức sống Khỏe đẹp vẹn tròn
                    </div>
                    <ul class="lg:my-16 my-8 lg:pl-5 space-y-4 lg:text-lg text-sm">
                        <?php for ($i = 0; $i < 7; $i++): ?>
                            <li class="flex items-center gap-4">
                                <?php echo svg('check', '20', '20', 'shrink-0') ?>
                                Trung hoà acid dư thừa <br> Tạo môi trường cân bằng lý tưởng giúp tế bào phân chia và sửa
                                chữa
                            </li>
                        <?php endfor ?>
                    </ul>
                    <a href=""
                        class="w-fit block lg:py-[25px] py-2 px-10 lg:text-xl text-sm text-white bg-primary hover:bg-[#224393c7] rounded-full overflow-hidden transition-colors duration-300">
                        Khám phá
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_content-with-image-left') ?>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="relative w-full rounded-[35px] bg-[#ECF4FE]">
                <div class="xl:py-[109px] xl:pl-16 p-5 xl:max-w-[664px] md:max-w-[60%]">
                    <div class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] text-content">
                        Kiềm thảo dược Saphia tự hào là doanh nghiệp phát triển bền vững
                    </div>
                    <div class="mt-5 lg:text-lg text-base text-[#525256]">
                        Mỗi sản phẩm của Kiềm Thảo Dược Saphia đều được xây dựng với tầm nhìn dài hạn – không chỉ để
                        giải quyết vấn đề tức thời, mà để đồng hành lâu dài cùng sức khỏe người tiêu dùng. Chính vì vậy,
                        chúng tôi lựa chọn đầu tư bài bản vào vùng trồng dược liệu đạt tiêu chuẩn, cùng hệ thống nhà máy
                        sản xuất chuẩn GMP, nhằm đảm bảo từng giọt sản phẩm đưa đến tay khách hàng đều đạt chuẩn cao
                        nhất về an toàn, hiệu lực và tính bền vững. Với Kiềm Thảo Dược Saphia, phát triển sản phẩm không
                        phải để bán nhanh – mà là để sống cùng khách hàng trên hành trình khỏe - đẹp - vững bền.
                    </div>
                </div>
                <div class="md:absolute xl:top-[72px] md:top-5 xl:right-16 right-5 1.5xl:w-[592px] xl:w-[460px] lg:w-[370px] md:w-[260px] w-full aspect-[592/776] rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png');">
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();