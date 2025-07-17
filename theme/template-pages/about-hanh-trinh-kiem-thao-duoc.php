<?php

/**
Template Name: About - Hành trình kiềm thảo dược
 */

get_header();
?>

<main>
    <section class="lg:my-[200px] my-[60px] overflow-hidden">
        <div class="container">
            <div class="lg:text-[64px] text-4xl lg:leading-[1] bg-clip-text text-transparent bg-text-gradient text-center">
                Hành trình tìm ra Kiềm thảo dược
            </div>
            <div class="pb-[100px] relative flex flex-col items-center">
                <?php echo svg('dash', '3', '81', 'shrink-0') ?>

                <div class="swiper nav-slider lg:max-w-[760px] max-w-full bg-white z-[1]">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <div class="swiper-slide text-center">
                                <div class="text-[#717070] lg:text-[38px] text-xl">
                                    Năm 2020
                                </div>
                                <div class="lg:mt-2.5 mt-1 text-content lg:text-[46px] text-3xl">
                                    Đăng ký bằng độc quyền sáng chế
                                </div>
                                <div class="lg:mt-9 mt-5 lg:text-xl text-sm text-content">
                                    Sau khi thành công thử nghiệm lâm sàng kết quả của Kiềm Thảo Dược với sức khoẻ con
                                    người, bà Phương Dung lập tức đăng ký độc quyền sáng chế cho phát minh của cuộc đời
                                    mình. Bởi bà có niềm tin sản phẩm này rồi sẽ phát triển mạnh mẽ ở Việt Nam và tương lai
                                    là trên toàn thế giới. Việc đăng ký độc quyền sáng chế cũng là cách bà bảo vệ cho thành
                                    quả trí tuệ của người Việt Nam, với ước mơ và khát vọng về một đất nước Việt Nam hùng
                                    cường, và chính người Việt sẽ đưa những sản phẩm Việt đi khắp thế giới.
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>

                <div class="swiper main-slider lg:mt-[120px] mt-7 lg:w-[476px] w-[250px] aspect-[476/522]">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <div
                                class="swiper-slide relative lg:rounded-[55px] rounded-[35px] overflow-hidden lg:border-[15px] border-8 border-white shadow-card size-full">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home2.png" alt=""
                                    loading="lazy" class="absolute inset-0 size-full object-cover">
                            </div>
                        <?php endfor ?>
                    </div>
                </div>

                <?php echo svg('divider', '3', '', 'lg:h-[700px] h-[400px] absolute bottom-0 left-1/2 -translate-x-1/2 shrink-0') ?>
            </div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_brand-intro') ?>

    <!-- Đổi vị trí ảnh và text ở trang này -->
    <?php echo get_template_part('/components/block_mission-statement') ?>

    <!-- Hình ảnh ở trang này là slider -->
    <?php echo get_template_part('/components/block_mission-statement') ?>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer(); ?>