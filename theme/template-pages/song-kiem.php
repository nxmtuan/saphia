<?php

/**
Template Name: Sống kiềm
 */

get_header();
?>

<main>
    <?php echo get_template_part('/components/block_brand-intro') ?>

    <section class="lg:my-[123px] my-[60px]">
        <div class="container">
            <div
                class="max-w-[1207px] mx-auto rounded-3xl overflow-hidden bg-primary text-white lg:py-10 py-6 lg:px-20 px-8">
                <div class="xl:text-[55px] text-xl leading-[1] text-center">
                    HÃY SỐNG MỘT CUỘC ĐỜI Ý NGHĨA
                </div>
                <div class="lg:mt-8 mt-6 xl:text-[35px] text-lg leading-[1.1] text-center">
                    Nếu bạn đang tìm kiếm một nơi giúp bạn xây dựng lối sống cân bằng với thân thể khoẻ mạnh và tâm trí
                    bình an, chào mừng bạn đến với "Sống Kiềm"
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[123px] my-[60px]">
        <div class="container">
            <div class="space-y-8">
                <div class="xl:text-[55px] text-xl leading-[1] text-center text-primary">
                    HÃY SỐNG MỘT CUỘC ĐỜI Ý NGHĨA
                </div>
                <div class="xl:text-[26px] text-lg leading-[1.1] text-[#5C5C5C]">
                    Nhịp sống hiện đại với vô vàn thực phẩm bẩn, ô nhiễm không khí cùng với áp lực công việc và những lo
                    toan đời thường khiến thân thể dần suy kiệt, tâm trí luôn mỏi mệt, bất an. Nhiều người tự hỏi: Mình
                    đang sống hay chỉ đang tồn tại? Cuộc đời có ý nghĩa gì giữa bộn bề này? Từ những trăn trở đó, SỐNG
                    KIỀM được hình thành – giúp mỗi người tự cân bằng lại cuộc sống, bồi dưỡng thân thể, tìm lại sự an
                    yên trong tâm hồn và kiến tạo một cuộc đời thật sự đáng sống.
                </div>
            </div>
            <div class="lg:mt-[112px] mt-10 flex flex-col xl:gap-[115px] gap-8">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <div
                        class="flex <?= $i % 2 == 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' ?> flex-col items-center xl:gap-[111px] gap-8">
                        <div class="lg:w-1/2 w-full aspect-[724/550] relative rounded-[35px] overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home7.png" alt=""
                                loading="lazy"
                                class="absolute inset-0 size-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="lg:w-1/2 w-full lg:space-y-[52px] space-y-4 flex flex-col items-center">
                            <div class="xl:text-[50px] text-lg leading-[1.1] text-center">
                                CÔNG THỨC SỐNG CỦA CÁC QUỐC GIA HẠNH PHÚC
                            </div>
                            <div class="xl:text-[26px] leading-[1.1] text-[#5C5C5C]">
                                “Công thức” của các quốc gia hạnh phúc nhất thế giới là cân bằng cuộc sống. Cân bằng là
                                trạng thái ổn định tổng hòa của sức khỏe thể chất và tinh thần, công việc và các mối quan
                                hệ… Sống cân bằng có nghĩa là xem xét tất cả các yếu tố đó để điều chỉnh. Chìa khóa để tìm
                                thấy cân bằng không phải là cố gắng thay đổi mọi thứ ngay tức thì mà cần “sửa chữa” theo
                                thời gian nhằm tìm ra phương pháp hiệu quả. Từ đó, tạo ra những thói quen mới phù hợp.
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="lg:my-[123px] my-[60px]">
        <div class="relative w-full bg-no-repeat bg-cover bg-center"
            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham5.jpg');">
            <div class="container py-[74px]">
                <div
                    class="py-[70px] bg-life-gradient w-full lg:min-h-[940px] min-h-max rounded-[50px] overflow-hidden">
                    <div class="lg:max-w-[80%] max-w-[92%] mx-auto text-white">
                        <div class="xl:text-[55px] text-xl leading-[1] text-center">
                            KHÁM PHÁ BÍ MẬT LỐI SỐNG KIỀM
                        </div>
                        <div class="mt-10 lg:text-[35px] text-lg leading-[1.1] text-center">
                            Sống Kiềm không chỉ là lựa chọn lối sống lành mạnh, mà còn là hành trình hướng đến một cuộc
                            đời ý nghĩa, vững vàng giữa dòng xoáy thời gian.
                        </div>
                        <ul class="mt-10 pl-5 space-y-5">
                            <li class="xl:text-[26px] leading-[1.1] flex items-center lg:gap-9 gap-3">
                                <?php echo svg('leaf', '49', '33', 'lg:w-[49px] w-[30px] lg:h-[33px] h-[14] shrink-0') ?>
                                Sống Kiềm lấy nguyên lý cân bằng làm gốc, do đó sức khỏe thể chất lẫn tinh thần được
                                khỏe mạnh bền vững.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[123px] my-[60px]">
        <div class="container">
            <div class="flex md:flex-row flex-col xl:gap-[112px] gap-8">
                <div class="relative xl:w-[760px] md:w-1/2 w-full aspect-[760/900] rounded-[35px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                        loading="lazy"
                        class="absolute inset-0 size-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="flex-1">
                    <div class="xl:text-[55px] text-xl leading-[1]">
                        3 BIỂU HIỆN CỦA SỐNG KIỀM
                    </div>
                    <div class="lg:mt-[67px] mt-10 space-y-[30px]">
                        <div class="space-y-2.5">
                            <div class="md:text-2xl text-lg text-[#000000E0]">
                                THÂN KHOẺ
                            </div>
                            <div class="md:text-lg text-[#525256]">
                                Trạng thái cơ thể khỏe mạnh nhờ nhận thức được sức khỏe là mục tiêu quan trọng của cuộc
                                đời. Từ đó ăn uống cân bằng: chọn ăn kiềm, chọn uống kiềm…
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[123px] my-[60px]">
        <div class="container">
            <div class="xl:text-[55px] text-xl leading-[1] text-center">
                NGƯỜI TRUYỀN KIỀM
            </div>
            <div
                class="mt-[38px] md:grid grid-cols-2 lg:gap-10 gap-5 block_slider center_items watch_css md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="block_slider-item md:w-full w-[83%] space-y-5">
                        <div class="relative aspect-[777/437] w-full rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
                            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham5.jpg');">
                            <a href="https://youtu.be/BxuY9FET9Y4?si=oufOaTitd3e7e8Dc" data-fancybox>
                                <?php echo svg('playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[66px] size-8 shrink-0') ?>
                            </a>
                        </div>
                        <div class="space-y-1 text-center">
                            <div class="lg:text-2xl text-lg text-[#00081280]">Nhà khoa học</div>
                            <div class="lg:text-3xl text-xl text-[#000812]">
                                Nguyễn Phương Dung
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="lg:my-[123px] my-[60px]">
        <div class="container">
            <div class="lg:space-y-[38px] space-y-5">
                <div class="xl:text-[55px] text-3xl leading-[1] text-center">
                    NHỊP SỐNG KIỀM
                </div>
                <div class="xl:text-[26px] leading-[1.1]">
                    Giữa nhịp sống hối hả và bon chen, "Nhịp sống Kiềm" là lời nhắc nhẹ nhàng rằng vẫn luôn tồn tại
                    những khoảnh khắc lạc quan, những góc nhìn bình yên giữa đời thường. Đó là khi ta chọn sống chậm
                    lại, trân trọng sức khỏe, nuôi dưỡng tâm an và tìm về sự cân bằng tự nhiên.
                </div>
            </div>
            <div
                class="lg:mt-20 mt-10 md:grid grid-cols-4 lg:gap-10 gap-5 block_slider center_items watch_css md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="block_slider-item md:w-full w-[83%] space-y-5">
                        <div class="relative aspect-[369/585] w-full rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
                            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham5.jpg');">
                            <a href="https://youtu.be/BxuY9FET9Y4?si=oufOaTitd3e7e8Dc" data-fancybox>
                                <?php echo svg('playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[66px] size-8 shrink-0') ?>
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();