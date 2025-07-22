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
            <div class="max-w-[1207px] mx-auto rounded-3xl overflow-hidden bg-primary text-white lg:py-10 py-6 lg:px-20 px-8">
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
            <div class=""></div>
        </div>
    </section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();