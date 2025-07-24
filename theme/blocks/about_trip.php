<section class="lg:my-[200px] my-[60px] overflow-hidden" data-components="about_trip">
    <div class="container">
        <?php if ( get_field( 'main_title' ) ) : ?>
        <h2
            class="lg:text-[64px] text-4xl lg:leading-[1] bg-clip-text text-transparent bg-text-gradient text-center">
            <?php the_field( 'main_title' ); ?>
        </h2>
        <?php endif; ?>
        <div class="pb-[100px] relative flex flex-col items-center">
            <?php if ( have_rows( 'list_content' ) ) : ?>
            <?php echo svg( 'dash', '3', '81', 'shrink-0' ) ?>
            <div class="swiper nav-slider lg:max-w-[760px] max-w-full bg-white z-[1]">
                <div class="swiper-wrapper">
                    <?php while ( have_rows( 'list_content' ) ) :
							the_row(); ?>
                    <div class="swiper-slide text-center">
                        <?php if( get_sub_field('year') ): ?>

                        <div class="text-[#717070] lg:text-[38px] text-xl !leading-normal">
                            <?php the_sub_field('year'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if( get_sub_field('title') ): ?>

                        <div class="lg:mt-2.5 mt-1 text-content lg:text-[46px] text-3xl">
                            <?php the_sub_field('title'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if( get_sub_field('desc') ): ?>

                        <div class="lg:mt-9 mt-5 lg:text-xl text-sm text-content">
                            <?php the_sub_field('desc'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>


            <?php if( have_rows('list_content') ): ?>
            <div
                class="swiper main-slider lg:mt-[120px] mt-7 lg:w-[476px] w-[250px] aspect-[476/522]">
                <div class="swiper-wrapper">
                    <?php while( have_rows('list_content') ): the_row();?>
                    <div
                        class="swiper-slide relative lg:rounded-[55px] rounded-[35px] overflow-hidden lg:border-[15px] border-8 border-white shadow-card size-full">

                        <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'absolute inset-0 size-full object-cover']) ?>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php echo svg( 'divider', '3', '', 'lg:h-[700px] h-[400px] absolute bottom-0 left-1/2 -translate-x-1/2 shrink-0' ) ?>
            <?php endif; ?>

        </div>
    </div>
</section>