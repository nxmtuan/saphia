<?php

/**
Template Name: Tổng quan về sản phẩm
 */

get_header();
?>

<main>
    <section class="lg:my-[192px] my-[60px]">
        <div class="container">
            <div class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-x-7 lg:gap-y-[50px] gap-y-7">
                <?php for ($i = 0; $i < 10; $i++): ?>
                    <div class="space-y-5 w-full flex flex-col items-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home7.png" alt="" loading="lazy"
                            class="aspect-square w-full object-cover rounded-full overflow-hidden">
                        <div class="lg:text-[32px] text-xl leading-[1] tracking-[-0.754px] text-content max-w-[90%] text-center">
                            Nhiều bệnh nền
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <section class=""></section>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();