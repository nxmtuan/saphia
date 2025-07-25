<section class="lg:mt-[183px] mt-[60px] lg:pb-[183px] pb-[60px] bg-home-gradient"
	data-component="product-featured">
	<div class="container">
		<div class="w-full flex justify-center">
			<div class="w-full lg:h-[361px] md:h-[220px] h-[160px] relative">
				<?php if ( have_rows( 'main_title' ) ) : ?>
					<div
						class="lg:text-[64px] text-[34px] lg:leading-[70px] leading-10 tracking-[-0.96px] highlight text-black lg:text-end w-fit">
						<?php while ( have_rows( 'main_title' ) ) :
							the_row(); ?>
							<?php if ( get_sub_field( 'highlight' ) ) : ?>
								<span>
									<?php the_sub_field( 'title' ) ?>
								</span>
							<?php else : ?>
								<?php the_sub_field( 'title' ) ?>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php echo wp_get_attachment_image( get_field( 'title_img' ), 'full', false, [ 'class' => 'absolute bottom-0 right-0 aspect-[1199/344] lg:w-[1199px] w-full pointer-events-none' ] ) ?>

			</div>
		</div>

		<?php if ( have_rows( 'list_product' ) ) : ?>
			<div class="mt-10 md:mx-0 -mx-5">
				<div class="block_slider watch_css center_items md:grid md:grid-cols-2 md:gap-4">
					<?php
                    $i=0;
                    while ( have_rows( 'list_product' ) ) :
						the_row(); 
                        $img_hover = get_sub_field('hover_img')?:get_sub_field('main_img');
                        $i++;
                        ?>
						 <div class="block_slider-item group relative xl:pt-9 lg:pt-8 pt-6 xl:pl-16 lg:pl-8 pl-6 lg:rounded-[35px] rounded-[20px] overflow-hidden aspect-[814/640] md:w-full w-[83%] bg-no-repeat bg-cover bg-center <?= $i==2 ?'md:mt-[151px]':'' ?> <?= $i==3 ?'md:-mt-[151px]':'' ?>"
                            style="background-image: url('<?php echo wp_get_attachment_image_url(get_sub_field('main_img'), 'full') ?>')">

                            <?php echo wp_get_attachment_image($img_hover, 'full',false,['class'=>'absolute inset-0 size-full lg:opacity-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300']) ?>
                           

                            <div class="relative z-[1]">
                                <?php if( get_sub_field('title') ): ?>
                                    
                                    <div
                                        class=" xl:text-[40px] lg:text-2xl text-xl lg:leading-[1] tracking-[-1px] text-[#000000E0]">
                                        <?php the_sub_field('title'); ?>
                                    </div>
                                <?php endif; ?>
                                 <?php if( get_sub_field('desc') ): ?>
                                   
                                    <div
                                        class="mt-[2px] max-w-[185px] lg:text-[23px] text-sm leading-[1] tracking-[-0.21px] text-[#00000070]">
                                         <?php the_sub_field('desc'); ?>
                                    </div>
                                 <?php endif; ?>
                                 <?php
                                 $button = get_sub_field('button');
                                 $btn_title = (is_array($button) && !empty($button['title'])) ? $button['title'] : '';
                                 $btn_link = (is_array($button) && !empty($button['link'])) ? $button['link'] : '';
                                 
                                 if ($btn_title) : ?>
                                 
                                     <a href="<?php echo check_link($btn_link) ?>" target="_blank"
                                         class="mt-[22px] block lg:py-[15px] py-2 lg:px-[49px] px-7 rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white font-content lg:text-[15px] text-xs leading-[1] tracking-[-0.151px] w-fit transition-colors duration-300">
                                          <?php echo esc_html($btn_title); ?>
                                     </a>
                                 <?php endif; ?>
                                 
                            </div>
                        </div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>


		
	</div>
</section>