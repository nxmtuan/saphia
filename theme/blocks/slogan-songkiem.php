    <section class="lg:my-[123px] my-[60px]" data-components="slogan-songkiem">
        <div class="container">
            <div
                class="max-w-[1207px] mx-auto rounded-3xl overflow-hidden bg-primary text-white lg:py-10 py-6 lg:px-20 px-8">
                <?php if( get_field('title') ): ?>
                    <div class="xl:text-[55px] text-xl leading-[1] text-center">
                        <?php the_field('title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_field('desc') ): ?>
                    <div class="lg:mt-8 mt-6 xl:text-[35px] text-lg leading-[1.1] text-center">
                         <?php the_field('desc'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>