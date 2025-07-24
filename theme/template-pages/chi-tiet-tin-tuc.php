<?php

/**
Template Name: Chi tiết tin tức
 */

get_header();
?>

<main>
    <section class="lg:my-[120px] my-[60px]">
        <div class="container">
            <div class="space-y-8">
                <!-- Title -->
                <div class="lg:text-[55px] text-2xl leading-[1.1] tracking-[-0.96px] font-semibold">
                    Bằng độc quyền sáng chế Kiềm thảo dược - niềm tự hào của trí tuệ Việt
                </div>
                <div class="flex md:flex-row flex-col md:items-center md:gap-10 gap-3">
                    <!-- Update time -->
                    <div class="lg:text-lg text-sm text-[#5C5C5C] font-semibold">
                        <?php _e('Ngày cập nhật:','gnws') ?> 31/06/2025
                    </div>

                    <!-- social share -->
                    <div class="flex items-center gap-[6px]">
                        <span class="lg:text-lg text-sm text-[#5C5C5C] font-semibold">
                            Share:
                        </span>
                        <a href="" class="block size-8 rounded-full">
                            <?php echo svg('facebook-1', '32', '32','shrink-0') ?>
                        </a>
                        <a href="" class="block size-8 rounded-full">
                            <?php echo svg('in-1', '32', '32','shrink-0') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:mt-[60px] mt-10 the_content"></div>
        </div>
    </section>
</main>

<?php
get_footer();