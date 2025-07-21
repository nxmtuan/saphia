<?php

/**
Template Name: Hỗ trợ khách hàng
 */

get_header();
?>

<main>
    <section class="lg:my-[120px] my-[60px]">
        <div class="container">
            <div class="lg:space-y-10 space-y-4">
                <div class="xl:text-[85px] lg:text-[55px] text-4xl text-primary leading-[1] text-center">
                    HỖ TRỢ KHÁCH HÀNG
                </div>
                <div class="lg:text-[40px] text-base leading-[1.1] text-center">
                    Cảm ơn bạn đã lựa chọn chúng tôi giữa vô vàn thương hiệu khác ngoài kia Chúng tôi luôn ở đây với đội
                    ngũ tinh anh - đồng hành cùng bạn giải quyết mọi vấn đề!
                </div>
            </div>
            <div class="xl:mt-[152px] lg:mt-[60px] mt-10 flex flex-wrap justify-center xl:gap-[60px] gap-6">
                <?php for ($i = 0; $i < 8; $i++): ?>
                    <div class="lg:w-[30%] md:w-[48%] w-full lg:space-y-8 space-y-3">
                        <div class="relative rounded-[28px] overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home8.png" alt=""
                                loading="lazy" class="aspect-square w-full object-cover">
                            <div class="absolute top-[14px] right-[14px] size-16 flex justify-center items-center bg-white rounded-full overflow-hidden cursor-pointer"
                                data-open="#popupHoTro">
                                <?php echo svg('up-right', '', '', 'size-7 shrink-0') ?>
                            </div>
                        </div>
                        <div class="xl:text-[35px] lg:text-2xl text-lg leading-[1] text-center">
                            Phương thức vận chuyển
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <div id="popupHoTro"
        class="fixed top-0 left-0 w-full h-[100dvh] overflow-y-auto bg-[#d3d3d359] backdrop-blur-[10px] [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none pointer-events-auto [&:not(.active)]:-z-10 z-[53] transition-all duration-300">
        <div class="container py-20 flex justify-center items-center">
            <div class="relative max-w-[1000px] lg:p-20 py-10 px-5 lg:rounded-[35px] rounded-xl overflow-hidden border border-[#ffffff2b] bg-white">
                <?php echo svg('close', '20', '20', 'close-icon absolute lg:top-10 top-[15px] lg:right-10 right-[15px] cursor-pointer') ?>
                <div class="the_content">
                    <p>
                        The standard Lorem Ipsum passage, used since the 1500s
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <p>
                        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                        fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                        quisquam
                        est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                        eius
                        modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                        veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                        commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                        nihil
                        molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                    </p>

                    <p>
                        1914 translation by H. Rackham
                        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was
                        born and I will give you a complete account of the system, and expound the actual teachings of
                        the
                        great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
                        avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue
                        pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone
                        who
                        loves or pursues or desires to obtain pain of itself, because it is pain, but because
                        occasionally
                        circumstances occur in which toil and pain can procure him some great pleasure. To take a
                        trivial
                        example, which of us ever undertakes laborious physical exercise, except to obtain some
                        advantage
                        from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                        no
                        annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
                    </p>

                    <p>
                        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                        dolorum
                        fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                        nobis
                        est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
                        voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis
                        debitis
                        aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                        recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
                        maiores alias consequatur aut perferendis doloribus asperiores repellat."
                    </p>

                    <p>
                        1914 translation by H. Rackham
                        "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                        and
                        demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                        foresee
                        the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their
                        duty through weakness of will, which is the same as saying through shrinking from toil and pain.
                        These cases are perfectly simple and easy to distinguish. In a free hour, when our power of
                        choice
                        is untrammelled and when nothing prevents our being able to do what we like best, every pleasure
                        is
                        to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of
                        duty
                        or the obligations of business it will frequently occur that pleasures have to be repudiated and
                        annoyances accepted. The wise man therefore always holds in these matters to this principle of
                        selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to
                        avoid
                        worse pains."
                    </p>

                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();