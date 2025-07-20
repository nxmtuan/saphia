<?php

/**
Template Name: Thông tin khoa học
 */

get_header();
?>

<main>
    <section class="relative rounded-b-[35px] overflow-hidden 1.5xl:h-[995px] xl:h-[700px] lg:h-[520px] h-[400px]">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt="" loading="lazy"
            class="absolute inset-0 size-full object-cover">
        <div class="container">
            <div
                class="relative 1.5xl:pt-[210px] lg:pt-[120px] pt-20 1.5xl:max-w-[864px] xl:max-w-[690px] max-w-[450px] ml-auto z-[1]">
                <div class="xl:text-[55px] text-2xl leading-[1] text-primary">
                    KHẲNG ĐỊNH GIÁ TRỊ TỪ KHOA HỌC KIỂM NGHIỆM VÀ THỰC NGHIỆM
                </div>
                <div class="xl:mt-[67px] mt-5 xl:text-[40px] text-xl leading-[1]">
                    Các kết quả kiểm nghiệm và thực nghiệm khoa học là minh chứng rõ ràng, minh bạch nhất cho những giá
                    trị của nước Kiềm thảo dược Saphia
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[164px] my-[60px]">
        <div class="container">
            <div class="max-w-[1483px] mx-auto">
                <div class="xl:text-[55px] text-2xl text-[#393CA2] text-center">
                    CÔNG NGHỆ HOẠT HÓA KIỀM TỪ HOẠT CHẤT THẢO DƯỢC
                </div>
                <div class="lg:mt-[67px] mt-7 xl:text-[32px] text-xl leading-[1] text-[#221F90] text-center">
                    Công nghệ này là nghiên cứu của đội ngũ các nhà khoa học tại Việt Nam, dẫn đầu là hai nhà khoa học,
                    GS.TS Đái Duy Ban và nhà khoa học Phương Dung, nghiên cứu chuyên sâu về cây thảo dược từ năm 2013.
                    Đây công nghệ lần đầu tiên có mặt trên thế giới tạo ra Kiềm có độ pH cao lành tính từ các loại cây
                    cỏ thảo dược, được đăng ký bằng độc quyền sáng chế năm 2020 và chính thức được cấp bằng độc quyền
                    sáng chế vào tháng 9 năm 2024.
                </div>
            </div>
            <div
                class="lg:mt-[86px] mt-7 md:grid grid-cols-4 lg:gap-7 gap-5 block_slider watch_css center_items md:mx-0 -mx-5">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="block_slider-item relative md:w-full w-[85%] rounded-[25px] overflow-hidden aspect-square">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                            loading="lazy" class="absolute inset-0 size-full object-cover">
                    </div>
                <?php endfor ?>
            </div>
            <div class="lg:mt-[51px] mt-7 max-w-[1389px] mx-auto">
                <div class="xl:text-[32px] text-xl leading-[1] text-[#221F90] text-center">
                    Kiềm Thảo Dược được chiết xuất theo công nghệ hoạt hóa, tạo nên từ các thành phần vi khoáng và vi
                    lượng trong cây.
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[164px] my-[60px]">
        <div class="container">
            <div class="max-w-[1389px] mx-auto">
                <div class="xl:text-[55px] text-2xl text-[#393CA2] text-center">
                    NGUỒN GỐC & SỨC MẠNH CỦA CÔNG NGHỆ
                </div>
                <div class="lg:mt-9 mt-4 xl:text-4xl text-lg text-center text-content">
                    ƯU ĐIỂM VƯỢT TRỘI CỦA NƯỚC KIỀM THẢO DƯỢC SAPHIA VỚI CÁC LOẠI KIỀM KHÁC
                </div>
            </div>
            <div class="lg:mt-[136px] mt-10 flex md:flex-row flex-col items-stretch">
                <div class="md:w-1/2 w-full xl:pr-[103px] pr-5 md:border-r border-primary">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="w-full object-cover h-fit rounded-[25px] aspect-square">
                    <div class="lg:my-[78px] my-7 xl:text-[32px] text-xl leading-[1] text-[#221F90]">
                        Là Kiềm đi từ thảo dược 100%, trải qua công nghệ hoạt hóa, tạo thành dưới dạng hợp chất tự nhiên
                        có tính Kiềm cao ở dạng vật chất có độ pH cao lành tính và rất giàu hợp chất thiên nhiên, kháng
                        sinh thực vật, vi khoáng, vi lượng, vitamin Khả năng mạnh mẽ nhất của Kiềm Thảo Dược là hỗ trợ
                        trung hòa acid dư thừa trong cơ thể, tạo ra sự cân bằng trong trong thời gian ngắn, qua đó hỗ
                        trợ tiêu diệt các loại vi khuẩn virus, hồi phục các tế bào tổn thương. Kiềm Thảo Dược bền vững
                        với thời gian (đã có mẫu thử nghiệm pH kiềm cao trong 5 năm). Ngoài ra, Kiềm Thảo Dược Saphia
                        chứa rất nhiều dược chất gồm hợp chất thiên nhiên và kháng sinh thực vật cao gồm: Glycosid,
                        Flavonoid, Teppenoid, Saponin,… có nhiều công dụng cho sức khoẻ.
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="w-full object-cover h-fit rounded-[14px] aspect-[665/183]">
                </div>

                <div class="md:w-1/2 w-full">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <div
                            class="lg:space-y-12 space-y-5 xl:p-[70px] md:p-5 py-8 border-b last:border-b-0 border-primary">
                            <div class="xl:text-4xl text-lg leading-[1]">
                                1.KIỀM ION (ĐIỆN PHÂN)
                            </div>
                            <div class="xl:text-[32px] text-xl text-[#221F90]">
                                Tạo thành nước Kiềm và Acid ở hai điện cực. Đây là kiềm tạo thành nhờ dòng điện, khi để ra
                                môi trường bên ngoài sẽ nhanh chóng mất kiềm sau thời gian ngắn. Bản chất Kiềm Ion có thể
                                tạo thành pH 8,5 9,5 (theo như công bố của nhà sản xuất), nhưng thực tế khi đo pH tại các
                                chai nước Ion mua ngoài thị trường, pH chỉ 6 8 và không bền vững với thời gian. Kiềm Ion
                                không phải là kiềm vật chất.
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[190px] my-[60px]">
        <div class="container">
            <div class="xl:pt-[105px] xl:pb-9 1.5xl:px-[126px] xl:px-10 p-5 relative w-full rounded-[35px] overflow-hidden bg-no-repeat bg-cover bg-center"
                style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/khoahoc.png');">
                <div class="absolute inset-0 size-full bg-[#221f90c7]"></div>
                <div class="relative z-[1] text-white lg:pb-[250px] md:pb-[70px] pb-[250px]">
                    <div class="relative z-[1] xl:text-[55px] text-2xl xl:leading-[1] text-center">
                        NGUYÊN LÝ HỖ TRỢ SỨC KHOẺ CỦA KIỀM SINH HỌC
                    </div>
                    <div class="relative z-[1] lg:mt-[74px] mt-6 xl:text-[36px] text-2xl leading-[1] max-w-[955px]">
                        “NGƯỜI KHOẺ MẠNH CÓ ĐỘ PH DUY TRÌ TỪ 7,35 – 7,45” ĐÂY LÀ NGUYÊN LÝ VÔ CÙNG QUAN TRỌNG CỦA SẢN
                        PHẨM KIỀM SINH HỌC.
                    </div>
                    <div
                        class="relative z-[1] lg:mt-[60px] mt-6 xl:text-[32px] text-xl xl:max-w-[566px] lg:max-w-[465px] md:max-w-[320px]">
                        Thức ăn hàng ngày đưa vào cơ thể chúng ta 70% có tính Acid và chỉ 30% có tính Kiềm, dẫn đến cơ
                        thể luôn luôn thiếu Kiềm. Đây là căn nguyên của bệnh tật do lượng Acid dư thừa quá lớn, lúc đó
                        pH cơ thể xuống thấp, cơ thể thiếu Kiềm trầm trọng. Vì vậy cần phải cân bằng Kiềm và Acid trong
                        cơ thể.
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/khoahoc2.png" alt=""
                        loading="lazy" class="absolute right-0 bottom-0 xl:max-w-full md:max-w-[60%] max-w-full">
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[190px] my-[60px]">
        <div class="xl:text-[55px] text-2xl xl:leading-[1] text-[#393CA2] text-center">
            ỨNG DỤNG CỦA CÔNG NGHỆ HOẠT HÓA KIỀM THẢO DƯỢC
        </div>
        <div class="bg-no-repeat bg-cover bg-center w-full aspect-[1920/972]"
            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-khoahoc.png');');">
        </div>
        <div class="container">
            <div class="max-w-[1298px] md:mx-auto -mx-5 md:flex flex-col block_slider watch_css center_items">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div
                        class="block_slider-item md:w-full w-[83%] flex <?= $i % 2 == 0 ? 'md:flex-row flex-col' : 'md:flex-row-reverse flex-col' ?> items-stretch">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                            loading="lazy"
                            class="md:mb-0 mb-3 md:w-1/2 w-full aspect-square rounded-[25px] overflow-hidden object-cover">
                        <div
                            class="<?= $i % 2 == 0 ? 'lg:pl-[130px] md:pl-10' : 'lg:pr-[60px] pr-10' ?> md:w-1/2 w-full flex flex-col justify-center md:space-y-7 space-y-3 text-primary">
                            <div class="xl:text-[55px] text-2xl xl:leading-[1]">
                                KIỀM THÁNH GIÓNG
                            </div>
                            <div class="xl:text-[32px] text-xl">
                                Ngành thực phẩm chăm sóc sức khỏe
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="lg:my-[190px] my-[60px]">
        <div class="xl:text-[55px] text-2xl xl:leading-[1] text-[#393CA2] text-center">
            ỨNG DỤNG CỦA CÔNG NGHỆ HOẠT HÓA KIỀM THẢO DƯỢC
        </div>
        <div class="lg:mt-[134px] mt-10 w-full aspect-[1920/1122] lg:rounded-b-[85px] rounded-b-[20px] bg-no-repeat bg-cover bg-center"
            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-khoahoc2.png');">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/isops.png" alt="" loading="lazy"
                class="mx-auto max-w-[80%] aspect-[1128/361] object-contain">
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();