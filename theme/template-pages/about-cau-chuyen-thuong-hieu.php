<?php

/**
Template Name: About - Câu chuyện thương hiệu
 */

get_header();
?>

<main>
    <?php echo get_template_part('/components/block_brand-intro') ?>

    <?php echo get_template_part('/components/block_mission-statement') ?>

    <section class="lg:my-[192px] my-[60px]">
        <div class="container">
            <div class="text-content lg:text-[64px] text-4xl lg:leading-[1] text-center max-md:max-w-[230px] mx-auto">
                Sứ mệnh & Giá trị cốt lõi
            </div>
            <div
                class="lg:mt-12 mt-10 grid md:grid-cols-2 grid-cols-1 lg:rounded-[35px] rounded-[20px] overflow-hidden">
                <div class="order-1 lg:py-10 lg:px-12 p-6 w-full bg-[#ECF4FE]">
                    <div class="text-primary lg:text-[48px] text-2xl lg:leading-[60px]">
                        Tầm nhìn & Sứ mệnh
                    </div>
                    <div class="mt-8 the_content">
                        <p>
                            Đưa cuộc sống Kiềm đến mọi gia đình vì một thế giới khoẻ mạnh hơn. Chúng tôi không ngừng nỗ
                            lực thổi hồn vào sự rực rỡ của cuộc sống, phát triển trong sự hài hòa với con người và thiên
                            nhiên.
                        </p>
                        <p>
                            Đưa cuộc sống Kiềm đến mọi gia đình vì một thế giới khoẻ mạnh hơn.
                        </p>
                    </div>
                </div>

                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt="" loading="lazy"
                    class="order-2 w-full h-full object-cover">

                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt="" loading="lazy"
                    class="md:order-3 order-4 w-full h-full object-cover">

                <div class="md:order-4 order-3 lg:py-10 lg:px-12 p-6 w-full bg-[#ECF4FE]">
                    <div class="text-primary lg:text-[48px] text-2xl lg:leading-[60px]">
                        Giá trị cốt lõi
                    </div>
                    <div class="mt-8 the_content">
                        <p>
                            Kiềm Thảo Dược Saphia định hình một lối sống mới, lấy sự cân bằng làm nền tảng, thông qua 5
                            trụ cột:
                        </p>
                        <ul>
                            <li>
                                Ăn kiềm: Chế độ dinh dưỡng, cân bằng kiềm - giúp làm sạch, phục hồi và nuôi dưỡng tế bào
                            </li>
                            <li>
                                Uống kiềm: Sử dụng giải pháp Kiềm thảo dược giúp trung hoà axit dư thừa, tăng cường sức
                                đề kháng và phục hồi tự nhiên
                            </li>
                            <li>
                                Tâm trí Kiềm: Hướng tới tinh thần tích cực, bình an và trí tuệ thông suốt
                            </li>
                            <li>
                                Tập luyện Kiềm: Thể dục vận động phù hợp để tăng cường trao đổi chất và năng lượng tích
                                cực
                            </li>
                            <li>
                                Tài chính bình an: Hỗ trợ kiến tạo cuộc sống ổn định, chủ động và vững vàng về kinh tế
                                qua mô hình kinh doanh nhân văn
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[192px] my-[60px]">
        <div class="container">
            <div class="spave-y-[30px] text-right">
                <div class="lg:text-[64px] text-[34px] lg:leading-[77px] leading-[40px] tracking-[-0.96px] highlight">
                    <span>Kiềm Thảo Dược Saphia</span> <br> đi cùng kỷ nguyên vươn mình của dân tộc
                </div>
                <div class="lg:text-lg text-xs text-[#525256]">
                    Khởi nguồn từ cánh đồng dược liệu với bạt ngàn thảo dược, một nhà khoa học đã mò mẫm từng bước để
                    tìm ra "điều phi thường" đi ra từ những thứ nhỏ bé. Để rồi đến thời điểm chín muồi, nở rộ mạnh mẽ
                    cùng kỷ nguyên vươn mình của dân tộc. Kiềm Thảo Dược Saphia với tình yêu sâu sắc dành cho đất nước,
                    mang theo tình thần dân tộc và giá trị của thiên nhiên Việt Nam đi ra biển lớn, khẳng định với thế
                    giới về một đất nước Việt Nam hùng cường.
                </div>
            </div>
            <div
                class="lg:mt-[50px] mt-10 relative 3xl:h-[540px] 1.5xl:h-[665px] xl:h-[641px] lg:h-[570px] md:h-[425px] h-[594px] overflow-hidden md:mx-0 -mx-5">
                <div
                    class="absolute left-0 md:bottom-0 max-md:top-0 1.5xl:w-[75.61%] xl:w-[77%] md:w-[78%] w-[220px] max-md:h-[465px] flex md:flex-row flex-col justify-between">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <div
                            class="lg:p-10 p-3 1.5xl:size-[450px] xl:size-[400px] lg:size-[340px] md:size-[250px] size-[220px] rounded-full overflow-hidden border border-[#7ECAEB] bg-white flex flex-col items-center justify-center">
                            <div
                                class="lg:text-[95px] text-[60px] lg:leading-[104.5px] leading-[1] tracking-[-1.425px] text-content">
                                20+</div>
                            <div class="mt-[18px] lg:text-lg text-sm lg:leading-[32.4px] text-[#525256] text-center">
                                Năm kinh nghiệm nghiên cứu và ứng dụng trong ngành
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div
                    class="absolute right-0 md:top-0 max-md:bottom-0 1.5xl:w-[75.61%] xl:w-[77%] md:w-[78%] w-[220px] max-md:h-[465px] flex md:flex-row flex-col justify-between">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <div
                            class="lg:p-10 p-3 1.5xl:size-[450px] xl:size-[400px] lg:size-[340px] md:size-[250px] size-[220px] rounded-full overflow-hidden <?= $i === 0 ? 'bg-[#F0BF8C]' : 'bg-[#5B79A4]' ?> flex flex-col items-center justify-center text-white">
                            <div class="lg:text-[95px] text-[60px] lg:leading-[104.5px] leading-[1] tracking-[-1.425px]">20+
                            </div>
                            <div class="mt-[18px] lg:text-lg text-sm lg:leading-[32.4px] text-center">
                                Năm kinh nghiệm nghiên cứu và ứng dụng trong ngành
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[192px] my-[60px]">
        <div class="container">
            <div class="space-y-[50px]">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <div class="lg:space-y-[50px] space-y-8">
                        <div
                            class="lg:text-[64px] text-4xl tracking-[-0.96px] text-content <?= $i % 2 === 0 ? 'md:text-start text-center' : 'md:text-end text-center' ?> ">
                            Đội ngũ Ban lãnh đạo
                        </div>
                        <div class="md:grid lg:grid-cols-4 md:grid-cols-2 1.5xl:gap-[60px] lg:gap-6 md:gap-[60px] block_slider center_items watch_css has_autoplay md:mx-0 -mx-5">
                            <?php for ($j = 0; $j < 4; $j++): ?>
                                <div class="block_slider-item md:w-full w-[83%] space-y-6">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home4.png" alt="" loading="lazy"
                                        class="aspect-square w-full object-cover rounded-[30px] overflow-hidden">
                                    <div class="max-w-[85%] flex flex-col items-center text-center mx-auto">
                                        <div class="xl:text-2xl text-sm text-[#00081280]">
                                            Đại tá
                                        </div>
                                        <div class="mt-1 1.5xl:text-[34px] text-2xl text-content">
                                            Quách Văn Mích
                                        </div>
                                        <div class="xl:mt-6 mt-1 1.5xl:text-xl text-base text-[#00081280]">
                                            Nguyên Giám đốc Viện Y Học Hàng không
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
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