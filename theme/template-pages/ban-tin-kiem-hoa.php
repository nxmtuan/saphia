<?php

/**
Template Name: Bản tin kiềm hóa
 */

get_header();
?>

<main>
    <section class="lg:my-[164px] my-[60px]">
        <div class="container">
            <div class="lg:text-[26px] leading-[1.1] text-[#5C5C5C]">
                Kiềm Saphia, với sứ mệnh mang tinh hoa thảo dược Việt ra thế giới, đã được hàng loạt tờ báo uy tín trong
                nước và quốc tế ca ngợi là bước đột phá trong lĩnh vực sức khỏe và công nghệ sinh học. Từ những trang
                báo hàng đầu Việt Nam đến các kênh truyền thông quốc tế, Kiềm Saphia được vinh danh nhờ nghiên cứu tiên
                phong về nước kiềm thảo dược pH cao lành tính – độc quyền sáng chế toàn cầu. Các bài viết không chỉ tôn
                vinh công nghệ hoạt hóa thảo dược của đội ngũ nhà khoa học Việt, dẫn đầu bởi bà Nguyễn Phương Dung, mà
                còn nhấn mạnh tác động tích cực của sản phẩm đến người dùng, từ hỗ trợ sức khỏe đến ứng dụng đa ngành
                như nông nghiệp và diệt khuẩn sinh học. Sự công nhận rộng rãi từ báo chí khẳng định uy tín và tầm ảnh
                hưởng của Kiềm Thảo Dược Saphia, đưa trí tuệ Việt vươn xa trên bản đồ quốc tế.
            </div>
            <div class="mt-8 grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 xl:gap-8 gap-5">
                <?php for ($i = 0; $i < 9; $i++): ?>
                    <div class="w-full rounded-[20px] overflow-hidden flex flex-col bg-white shadow-ban-tin">
                        <a href="" class="block relative aspect-[340/226] w-full">
                            <div class="size-full rounded-b-[20px] overflow-hidden relative">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sanpham6.jpg" alt=""
                                    loading="lazy"
                                    class="absolute inset-0 size-full hover:scale-105 transition-transform duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-5 translate-y-1/2 rounded-full py-2.5 px-5 bg-[#E3E3E3] z-[1]">
                                31 May
                            </div>
                        </a>
                        <div class="flex-1 flex flex-col px-6 pb-6 pt-8">
                            <a href="" class="block flex-1 text-xl font-semibold line-clamp-3">
                                Bằng độc quyền sáng chế Kiềm thảo dược - niềm tự hào của trí tuệ Việt
                            </a>
                            <div class="mt-3 text-[#5C5C5C] line-clamp-2">
                                Sau 4 năm nộp hồ sơ, năm 2024 Kiềm Thảo Dược Saphia tự hào nhận...
                            </div>
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