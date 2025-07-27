<section class="max-lg:my-[60px]" data-component="go-global-whyus">
	<div class="container">
		<div class="flex lg:flex-row flex-col lg:justify-between items-center lg:gap-10 gap-6">
			<div class="max-w-[710px]">
				<?php if ( have_rows( 'main_title' ) ) : ?>
					<div class="lg:text-4xl text-2xl highlight">
						<?php while ( have_rows( 'main_title' ) ) :
							the_row(); ?>
							<?php if ( get_sub_field( 'highlight' ) ) : ?>
								<p>
									<span>
										<?php the_sub_field( 'title' ) ?>
									</span>
								</p>
							<?php else : ?>
								<p>
									<?php the_sub_field( 'title' ) ?>
								</p>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php if ( have_rows( 'list_content' ) ) : ?>
					<ul class="mt-8 pl-5 space-y-4">
						<?php while ( have_rows( 'list_content' ) ) :
							the_row(); ?>
							<li class="flex items-center gap-2 lg:text-xl">
								<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full', false, [ 'class' => 'w-[30px] h-[30px] object-contain' ] ) ?>
								<p><?php the_sub_field( 'content' ); ?></p>
							</li>
						<?php endwhile; ?>
				</div>
			<?php endif; ?>

            <div class="flex items-stretch gap-[5px] max-lg:w-full">
                <?php
                $slider_left = get_field( 'slider_left' );
                if ( $slider_left ) : ?>
                    <div class="swiper marquee-carousel md:h-[946px] h-[558px] overflow-hidden pointer-events-none"
                        data-speed="10000">
                        <div class="swiper-wrapper">
                            <?php foreach ( $slider_left as $image_id ) : ?>
                                <div
                                    class="swiper-slide relative aspect-[354/473] xl:h-[473px] lg:h-[350px] md:h-[473px] h-[279px] rounded-[32px] overflow-hidden">
                                    <?php
                                    echo wp_get_attachment_image(
                                        $image_id,
                                        'full',
                                        false,
                                        array(
                                            'class' => 'absolute inset-0 size-full hover:scale-105 transition-transform duration-300 object-cover'
                                        )
                                    );
                                    ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                $slider_right = get_field( 'slider_right' ); 
                if ( $slider_right ) : ?>
                    <div class="swiper reverse-marquee-carousel md:h-[946px] h-[558px] overflow-hidden pointer-events-none"
                        data-speed="10000">
                        <div class="swiper-wrapper">
                            <?php foreach ( $slider_right as $image_id ) : ?>
                                <div
                                    class="swiper-slide relative aspect-[354/473]  xl:h-[473px] lg:h-[350px] md:h-[473px] h-[279px] rounded-[32px] overflow-hidden">
                                    <?php
                                    echo wp_get_attachment_image(
                                        $image_id,
                                        'full',
                                        false,
                                        array(
                                            'class' => 'absolute inset-0 size-full hover:scale-105 transition-transform duration-300 object-cover'
                                        )
                                    );
                                    ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
		</div>
	</div>

</section>