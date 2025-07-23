<?php

/**
Template Name: Nghiên cứu và phát triển
 */

get_header();
?>

<main>
    <section>
        <div class="aspect-[1920/989] w-full relative">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-banner.png" alt="" loading="lazy"
                class="absolute inset-0 size-full lg:rounded-b-[80px] rounded-[20px] object-cover">
        </div>
    </section>

    <section class="lg:my-[121px] my-[60px]">
        <div class="container">
            <div class="lg:text-[55px] text-[30px] leading-[1.1] font-semibold text-primary text-center">
                KẾT QUẢ NGHIÊN CỨU THỰC NGHIỆM VÀ NGHIÊN CỨU LÂM SÀNG
            </div>
            <div class="lg:mt-[134px] mt-[40px] lg:space-y-[65px] space-y-[30px]">
                <?php for ($i = 0; $i < 7; $i++): ?>
                    <div class="content-wrapper lg:pb-[65px] pb-[30px] border-b border-[#4F4E4D]">
                        <div class="content-btn flex w-full justify-between items-center cursor-pointer">
                            <span class="w-[80%] xl:text-[45px] lg:text-2xl md:text-xl xl:leading-[1.2] font-semibold">
                                1. Kết quả nghiên cứu độc tính cấp của chế phẩm Saphia Alkali D - Revie X50 trên thực nghiệm
                            </span>
                            <div
                                class="icon xl:size-[92px] lg:size-[60px] size-10 shrink-0 rounded-full overflow-hidden flex justify-center items-center [&:not(.active)]:bg-[#D9D9D9] bg-black [&:not(.active)]:text-black [&:not(.active)]:rotate-0 rotate-45 transition-all duration-300">
                                <span class="text-white lg:text-[50px] text-[30px] leading-[1]">+</span>
                            </div>
                        </div>
                        <div class="content-block p-8 flex justify-center">
                            <div class="research-slider block_slider center_items has_nav aspect-[410/585] w-[570px]">
                                <div class="block_slider-item w-full relative">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/book.png" alt=""
                                        loading="lazy" class="absolute inset-0 object-contain w-full">
                                </div>
                                <?php for ($j = 0; $j < 7; $j++): ?>
                                    <div class="block_slider-item w-full bg-white max-h-[585] overflow-y-auto the_content p-5">
                                        <p>
                                            The standard Lorem Ipsum passage, used since the 1500s
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                            irure
                                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit anim id est laborum."
                                        </p>

                                        <p>
                                            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque
                                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                            voluptas
                                            sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                            ratione
                                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
                                            sit
                                            amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt
                                            ut
                                            labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                                            commodi
                                            consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                                            quam
                                            nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                                            pariatur?"
                                        </p>

                                        <p>
                                            1914 translation by H. Rackham
                                            "But I must explain to you how all this mistaken idea of denouncing pleasure and
                                            praising pain was born and I will give you a complete account of the system, and
                                            expound
                                            the actual teachings of the great explorer of the truth, the master-builder of human
                                            happiness. No one rejects, dislikes, or avoids pleasure itself, because it is
                                            pleasure,
                                            but because those who do not know how to pursue pleasure rationally encounter
                                            consequences that are extremely painful. Nor again is there anyone who loves or
                                            pursues
                                            or desires to obtain pain of itself, because it is pain, but because occasionally
                                            circumstances occur in which toil and pain can procure him some great pleasure. To
                                            take
                                            a trivial example, which of us ever undertakes laborious physical exercise, except
                                            to
                                            obtain some advantage from it? But who has any right to find fault with a man who
                                            chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a
                                            pain
                                            that produces no resultant pleasure?"
                                        </p>
                                    </div>
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_analysis-slider') ?>

    <?php echo get_template_part('/components/block_analysis-slider') ?>

    <section class="lg:py-[121px] py-[60px] bg-[#FFFAFA]">
        <div class="container">
            <div class="lg:text-[55px] text-[30px] leading-[1.1] font-semibold text-primary text-center">
                KẾT QUẢ NGHIÊN CỨU THỰC NGHIỆM VÀ NGHIÊN CỨU LÂM SÀNG
            </div>
        </div>
        <div class="aspect-[1919/937] w-full relative">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-nkh.png" alt="" loading="lazy"
                class="absolute inset-0 size-full object-cover">
        </div>
        <div class="container">
            <div class="relative flex flex-col lg:gap-[300px] gap-[200px] items-center">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1px] h-full border border-dashed border-black">
                </div>
                <div class="relative z-[1] flex flex-col lg:gap-[300px] gap-[200px] items-center">
                    <div class="max-w-[1186px] text-center text-2xl py-[28px] bg-[#FFFAFA]">
                        Từ đam mê thảo dược và khát khao giúp đời mãnh liệt, Nhà khoa học Phương Dung đã dành cả đời
                        nghiên
                        cứu để tìm ra phương pháp hỗ trợ cải thiện các vấn đề sức khỏe tận gốc, an toàn tuyệt đối cho
                        người
                        dùng.
                    </div>
                    <?php for ($i = 0; $i < 7; $i++): ?>
                        <div class="py-[28px] bg-[#FFFAFA] max-w-[859px] flex flex-col items-center">
                            <div class="lg:text-[40px] text-3xl leading-[1] text-center">
                                Năm 1998
                            </div>
                            <div class="mt-5 lg:text-2xl text-lg text-center text-[#5C5C5C]">
                                Bà Phương Dung tốt nghiệp Cử nhân ngành Luật
                                <br> tại Trường Đại học Khoa học xã hội và nhân văn
                            </div>
                            <div
                                class="lg:mt-[50px] mt-4 relative aspect-square md:w-[498px] w-full rounded-[30px] overflow-hidden">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home8.png" alt=""
                                    loading="lazy" class="absolute inset-0 size-full object-cover">
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-[121px] py-[60px] bg-[#FFFAFA]">
        <div class="container">
            <div class="space-y-10">
                <div class="lg:text-[55px] text-[30px] leading-[1.1] font-semibold text-primary text-center">
                    BẰNG ĐỘC QUYỀN SÁNG CHẾ SỐ 41442
                </div>
                <div class="space-y-5 lg:text-2xl">
                    <p>
                        KHẲNG ĐỊNH QUY TRÌNH SẢN XUẤT CHẾ PHẨM KIỀM THẢO DƯỢC VÀ CHẾ PHẨM KIỀM THẢO DƯỢC THU ĐƯỢC TỪ QUY
                        TRÌNH NÀY THUỘC VỀ BÀ NGUYỄN THỊ CHUNG (TỨC NGUYỄN PHƯƠNG DUNG)
                    </p>
                    <p>
                        Sau gần 2 thập kỷ, Nhà khoa học Nguyễn Phương Dung cùng các cộng sự ngày đêm tìm tòi nghiên cứu,
                        vào tháng 9/2020, Bà chính thức nộp đơn đăng ký bằng độc quyền sáng chế, ròng rã trong 4 năm với
                        rất nhiều cuộc họp với các nhà khoa học, chuyên gia đầu ngành để bảo vệ thành quả nghiên cứu.
                        Ngày 18/09/2025, Nhà khoa học Nguyễn Phương Dung chính thức được Cục sở hữu trí tuệ trao quyết
                        định và Bằng độc quyền sáng chế số 41442 cho "QUY TRÌNH SẢN XUẤT CHẾ PHẨM KIỀM THẢO DƯỢC VÀ CHẾ
                        PHẨM KIỀM THẢO DƯỢC THU ĐƯỢC TỪ QUY TRÌNH NÀY” có pH cao lành tính có hiệu quả trong việc ức chế
                        sự phát triển của virus. Khẳng định sự tiên phong trong nghiên cứu khoa học và chất lượng sản
                        phẩm vượt trội của Kiềm thảo dược đầu tiên và duy nhất tại Việt Nam.
                    </p>
                </div>
            </div>
            <div class="mt-[71px] flex md:flex-row flex-col lg:gap-10 gap-5 md:items-stretch">
                <div class="md:w-1/2 w-full aspect-[89/126] relative">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ketqua.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                </div>
                <div class="md:w-1/2 w-full aspect-[89/126] relative">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ketqua.png" alt=""
                        loading="lazy" class="absolute inset-0 size-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();