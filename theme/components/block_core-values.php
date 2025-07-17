<section class="lg:my-[150px] my-[60px]" data-component="block_core-values">
    <div class="container">
        <div class="flex lg:flex-row flex-col xl:items-start lg:items-end 1.5xl:gap-[110px] xl:gap-[60px] gap-5">
            <div class="1.5xl:w-[694px] md:w-1/2 w-full">
                <div class="space-y-5">
                    <div class="xl:text-[64px] text-4xl xl:leading-[77px] tracking-[-0.96px] highlight">
                        Tận hưởng giá trị cốt lõi của Kiềm thảo dược Saphia
                    </div>
                    <div class="text-[#525256] lg:text-lg text-sm">
                        Kiềm Saphia mang tinh hoa thảo dược Việt vào mọi lĩnh vực, từ sức khỏe con người đến nông nghiệp
                        và công nghệ sinh học, kiến tạo giá trị bền vững toàn cầu.
                    </div>
                </div>
                <div class="lg:mt-[50px] mt-10 rounded-[35px] overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home3.png" alt=""
                        loading="lazy" class="aspect-[694/751] w-full">
                </div>
            </div>
            <div class="flex-1 flex xl:gap-7 gap-2.5">
                <div class="w-1/2 xl:space-y-7 space-y-2.5">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <div
                            class="xl:px-11 xl:pt-10 xl:pb-8 p-5 bg-[#FFF3E7] lg:rounded-[30px] rounded-[20px] overflow-hidden">
                            <div class="xl:text-[28px] text-xl xl:leading-[36.4px] tracking-[-0.42px]">
                                Ăn kiềm
                            </div>
                            <div class="xl:mt-8 mt-2.5 xl:text-lg text-xs xl:leading-[32px] text-[#525256]">
                                Consequat mauris nunc congue nisi vitae suscipit tellus. Quis eleifend quam adipiscing
                                vitae
                                proin sagittis
                            </div>
                            <a href=""
                                class="ml-auto xl:mt-12 mt-4 w-fit xl:text-xl text-sm lg:leading-[34px] text-content flex items-center gap-1">
                                Xem thêm
                                <?php echo svg('up-right', '21', '21', 'text-content shrink-0') ?>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="mt-[95px] w-1/2 xl:space-y-7 space-y-2.5">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <div
                            class="xl:px-11 xl:pt-10 xl:pb-8 p-5 bg-[#FFF3E7] lg:rounded-[30px] rounded-[20px] overflow-hidden">
                            <div class="xl:text-[28px] text-xl xl:leading-[36.4px] tracking-[-0.42px]">
                                Ăn kiềm
                            </div>
                            <div class="xl:mt-8 mt-2.5 xl:text-lg text-xs xl:leading-[32px] text-[#525256]">
                                Consequat mauris nunc congue nisi vitae suscipit tellus. Quis eleifend quam adipiscing
                                vitae
                                proin sagittis
                            </div>
                            <a href=""
                                class="ml-auto xl:mt-12 mt-4 w-fit xl:text-xl text-sm xl:leading-[34px] text-content flex items-center gap-1">
                                Xem thêm
                                <?php echo svg('up-right', '21', '21', 'text-[#292929] shrink-0') ?>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </div>
</section>