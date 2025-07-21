<?php

/**
Template Name: Vì cộng đồng
 */

get_header();
?>

<main>
    <?php echo get_template_part('/components/block_brand-intro') ?>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="flex md:flex-row flex-col md:items-stretch lg:gap-12 gap-4">
                <div class="relative 2xl:max-w-[900px] 1.5xl:max-w-[830px] md:max-w-[50%] text-content">
                    <div class="lg:text-2xl text-sm">
                        Khát vọng
                    </div>
                    <div class="mt-8 1.5xl:text-[64px] text-4xl 1.5xl:leading-[77px] tracking-[-0.96px]">
                        Khát vọng đưa thảo dược Việt trở thành xu hướng tiên phong chăm sóc sức khỏe toàn cầu
                    </div>
                    <div
                        class="lg:-mb-[55px] lg:absolute lg:bottom-0 lg:left-0 1.5xl:py-[30px] 1.5xl:px-10 p-5 1.5xl:min-w-[1156px] xl:min-w-[800px] lg:min-w-[640px] md:min-w-[480px] w-full bg-[#ECF4FE] rounded-[30px] overflow-hidden">
                        <?php echo svg('phay', '', '', 'lg:w-[51px] w-[31px] lg:h-[43px] h-[23px] shrink-0') ?>
                        <div class="mt-5 italic 2xl:text-2xl xl:text-xl text-xs text-[#575757]">
                            <p>
                                Hơn 20 năm ấp ủ một công trình nghiên cứu người đời gọi là "viển vông", trải qua hàng
                                nghìn thí nghiệm thất bại, Kiềm Thảo Dược Saphia thực sự đã đi trên một hành trình tiên
                                phong phi thường biến điều không thể thành có thể.
                            </p>
                            <p>
                                Bằng tất cả niềm tự hào dân tộc, chúng tôi khao khát muốn được chứng minh cho thế giới
                                thấy sức mạnh kì diệu của những cây thảo dược Việt Nam thông qua những sản phẩm tốt nhất
                                được tạo nên từ trí tuệ, lòng quả cảm của người Việt - tình yêu đất nước - và điều kỳ
                                diệu từ thiên nhiên. Đây sẽ là một cuộc cách mạng thay đổi thói quen, nhận thức của toàn
                                thế giới về một phương pháp chăm sóc sức khoẻ chủ động từ tự nhiên, kiến tạo nên một
                                tương lai xanh cho toàn cầu.
                            </p>
                        </div>
                        <div class="mt-3 space-y-3 text-end">
                            <div class="text-primary 1.5xl:text-2xl text-sm">
                                Nguyễn Thành Phương
                            </div>
                            <div class="1.5xl:text-lg text-xs text-[#575757]">
                                CEO - SAPHIA ALKALINE., JSC
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham3.png" alt=""
                        loading="lazy" class="w-full aspect-[675/837] rounded-[30px] object-cover">
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_mission-highlights') ?>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="relative aspect-[1632/900] w-full lg:rounded-[35px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
                style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham5.jpg');">
                <div class="absolute inset-0 size-full bg-video-gradient"></div>
                <a href="https://youtu.be/BxuY9FET9Y4?si=oufOaTitd3e7e8Dc" data-fancybox>
                    <?php echo svg('playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[100px] size-[50px] shrink-0 z-[1]') ?>
                </a>
                <div
                    class="relative lg:px-[69px] lg:py-[50px] p-5 lg:text-[32px] text-sm leading-[1.2] text-white z-[1]">
                    Hãy lắng nghe cơ thể mình <br> Bước đầu tiên để học cách kiềm hóa cơ thể
                </div>
            </div>
        </div>
    </section>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="relative flex justify-end 1.5xl:p-[72px] lg:p-10 p-5 rounded-[35px] bg-[#ECF4FE]">
                <div class="xl:block hidden -mb-[90px] rounded-[35px] overflow-hidden absolute bottom-0 1.5xl:left-[72px] left-10">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/sanpham3.png" alt="" loading="lazy" class="aspect-[592/776] object-cover 1.5xl:w-[592px] xl:w-[540px]">
                </div>
                <div class="2xl:max-w-[706px] 1.5xl:max-w-[650px] xl:max-w-[580px] max-w-full">
                    <div class="lg:text-[48px] text-2xl lg:leading-[60px] tracking-[-0.72px] text-content">
                        Bạn muốn biết cơ thể bạn đang ở độ pH nào?
                    </div>
                    <div class="lg:mt-9 mt-2.5 lg:text-lg text-sm text-[#525256]">
                        Đăng ký để nhận FREE giấy quỳ tím và 1 chai Thánh gióng
                    </div>
                    <div class="lg:mt-[30px] mt-4 form-dang-ky">
                        <?php echo do_shortcode('[contact-form-7 id="fea2433" title="Form đăng ký nhận thông báo từ Saphia"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();