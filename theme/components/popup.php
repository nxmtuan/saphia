<!-- Form pop-up nhận tư vấn -->
<div
    class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 1.5xl:w-[1348px] lg:w-[60%] w-[95%] rounded-[35px] overflow-hidden flex items-stretch z-[52]">
    <div class="1.5xl:block hidden w-[630px] aspect-[717/519] relative bg-form-gradient">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-form.png" alt="" loading="lazy"
        class="absolute inset-0 object-cover size-full">
        <div class="absolute inset-0 object-cover size-full bg-form-gradient"></div>
    </div>
    <div class="flex-1 1.5xl:pt-[51px] 1.5xl:pb-[30px] 1.5xl:pr-[54px] 1.5xl:pl-0 px-5 py-8 bg-[#EBF3FD]">
        <div class="lg:text-5xl text-2xl text-content">
            Để lại thông tin để nhận tư vấn!
        </div>
        <div class="mt-8 form-de-lai-thong-tin-tu-van">
            <?php echo do_shortcode( '[contact-form-7 id="2b83a3a" title="Form để lại thông tin tư vấn"]' ); ?>
        </div>
    </div>
</div>