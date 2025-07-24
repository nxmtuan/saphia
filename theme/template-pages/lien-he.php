<?php

/**
Template Name: Liên hệ
 */

get_header();
?>

<main>
    <section class="lg:py-[100px] py-[60px]">
        <div class="container">
            <div class="max-w-[841px] mx-auto flex flex-col items-center">
                <div class="lg:text-4xl text-xl highlight text-center">
                    Liên hệ với Kiềm Thảo Dược Saphia <br>
                    <span>để được chuyên gia tư vấn</span>
                </div>
                <div class="mt-10 form-lien-he-saphia">
                    <?php echo do_shortcode( '[contact-form-7 id="806e4c4" title="Form liên hệ với saphia"]' ); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();