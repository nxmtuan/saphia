<?php

/**
Template Name: Ngọc xanh Châu Á
 */

get_header();
?>

<main>
    <?php echo get_template_part('/components/block_brand-intro') ?>

    <section class="lg:my-[200px] my-[60px]">
        <div class="container">
            <div class="w-full relative rounded-[35px] overflow-hidden flex items-end md:aspect-[1632/960] h-max bg-no-repeat bg-cover bg-center"
                style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner2.png');">
                <div class="absolute inset-0 bg-section-gradient"></div>
                <div class="relative z-[1] 1.5xl:px-[116px] xl:px-10 p-5 xl:pb-[50px] pb-5">
                    <div
                        class="max-w-[1013px] mx-auto text-primary xl:text-[63px] lg:text-4xl text-2xl xl:leading-[76px] text-center">
                        Hành trình mang trí tuệ & trái tim của người Việt ra thế giới
                    </div>
                    <div
                        class="1.5xl:text-lg xl:text-base lg:text-sm text-[10px] text-content text-center lg:prose-p:mt-5 prose-p:mt-2">
                        <p>
                            Trên dải đất hình chữ S thân thương, nơi tinh hoa đất trời hội tụ và trí tuệ cha ông được
                            gìn giữ qua bao thế hệ, đã nảy nở một hành trình đầy tâm huyết - hành trình phát triển Kiềm
                            Thảo Dược Saphia. Đây không chỉ đơn thuần là câu chuyện về một sản phẩm chăm sóc sức khỏe,
                            mà còn là biểu tượng cho khát vọng và bản lĩnh của người Việt Nam trong thời đại mới.
                        </p>
                        <p>
                            Bắt nguồn từ kho tàng y học cổ truyền dân tộc, kết hợp với khoa học hiện đại và sự thấu hiểu
                            sâu sắc về giá trị của thảo dược quê hương, Kiềm Thảo Dược Saphia ra đời như một giải pháp
                            đột phá, mang trong mình sứ mệnh chăm sóc và bảo vệ sức khỏe con người một cách tự nhiên và
                            bền vững. Mỗi giọt Kiềm Thảo Dược Saphia là kết tinh của niềm đam mê nghiên cứu, sự trân
                            trọng Mẹ Thiên Nhiên và trên hết là tình yêu dành cho sức khỏe cộng đồng.
                        </p>
                        <p>
                            Và Kiềm Thảo Dược Saphia còn mang theo ước mơ đưa thảo dược Việt vươn ra biển lớn...
                        </p>
                        <p>
                            Không chỉ dừng lại ở câu chuyện kinh doanh hay chiếm lĩnh thị trường Kiềm toàn cầu, Kiềm
                            Thảo Dược Saphia gửi gắm vào đó những khát vọng của người Việt - mang TRÍ TUỆ & TRÁI TIM của
                            người Việt cùng niềm tự tôn dân tộc sánh vai cùng năm châu, để NGƯỜI VIỆT NAM LÀM GIÀU CHO
                            CHÍNH MẢNH ĐẤT QUÊ HƯƠNG MÌNH, để thảo dược Việt không chỉ là bài thuốc quý lưu truyền trong
                            dân gian mà bất cứ ai trên thế giới cũng có cơ hội được tiếp cận với phương pháp chăm sóc
                            sức khỏe 100% từ thiên nhiên đất Việt. Thông qua đó, thảo dược Việt một lần nữa được khẳng
                            định là BÁU VẬT TRỜI NAM, là NGỌC XANH CHÂU Á, là niềm tự hào của nhân loại. Kiềm Thảo Dược
                            Saphia muốn lan tỏa giá trị của sự cân bằng, của việc sống hòa hợp với tự nhiên, góp phần
                            xây dựng một thế giới khỏe mạnh và an lành hơn.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_missions') ?>

     <?php echo get_template_part('/components/block_campaign') ?>

      <?php echo get_template_part('/components/block_campaign') ?>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();