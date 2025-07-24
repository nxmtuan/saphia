<?php

/**
Template Name: Search
 */

get_header();
?>

<main>
    <section class="lg:pt-20 lg:pb-[7.5rem] py-[3.75rem] bg-[#F5F5F5]">
        <div class="md:container max-md:px-2.5">
            <div class="md:space-y-4 space-y-6">
                <div class="flex md:flex-row flex-col md:justify-between md:items-center md:gap-7 gap-4">
                    <form action="" class="flex-1 relative">
                        <input type="text" name="s"
                            class="w-full bg-white rounded-[0.625rem] overflow-hidden py-3 pl-[0.875rem] pr-11 border border-[#1d1d1d1a] focus:outline-none focus:border-primary transition-all duration-300 search_box"
                            value="">
                        <input type="hidden" name="type_search" value="">

                        <?php echo svg('close', '20', '20', 'shrink-0 text-primary absolute right-[0.875rem] top-1/2 -translate-y-1/2 cursor-pointer hover:scale-110 hover:rotate-90 transition-transform duration-300 clear_input') ?>
                    </form>
                </div>
                <div class="">

                    <?php _e('Tìm thấy', 'acbs') ?>

                    <span class="text-primary font-semibold total_result">
                        30
                    </span>

                    <?php _e('kết quả cho từ khóa:', 'acbs') ?>

                    <span class="text-primary font-semibold">
                        Saphia
                    </span>
                </div>
            </div>


            <div class="md:mt-10 mt-6 md:p-10 pt-4 pb-10 px-4 rounded-xl overflow-hidden bg-white">
                            <div
                                class="w-full md:py-6 pt-6 pb-4 border-b border-[#1d1d1a] text-content grid grid-cols-[auto,1fr] gap-6">
                                <a href="<?= $link ?>"
                                    class="block shrink-0 aspect-[16/9] md:w-[10.188rem] w-[8.75rem] rounded-[0.625rem] overflow-hidden">
                                    <img src="" alt=""
                                        class="size-full object-cover hover:scale-110 transition-transform duration-300">
                                </a>
                                <div class="space-y-4">
                                    <div class="md:line-clamp-1 line-clamp-3">
                                        <a href="" class="block md:text-lg font-semibold">
                                            Bằng độc quyền sáng chế Kiềm thảo dược - niềm tự hào của trí tuệ Việt
                                        </a>
                                    </div>
                                    <div class="md:block hidden">
                                        <div class="line-clamp-2">
                                            Sau 4 năm nộp hồ sơ, năm 2024 Kiềm Thảo Dược Saphia tự hào nhận
                                        </div>
                                    </div>
                                </div>
                            </div>

            </div>
        </div>
    </section>
</main>

<?php
get_footer();