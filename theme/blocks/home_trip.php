<section class="lg:my-[183px] my-[60px]" data-component="home_trip">
	<div class="container">
		<div
			class="relative py-[103px] bg-primary lg:rounded-[35px] rounded-[20px] overflow-hidden w-full">
			<?php echo wp_get_attachment_image( get_field( 'img' ), 'full', false, [ 'class' => 'absolute top-0 right-0 w-[818px] object-contain pointer-events-none slide-cloud' ] ) ?>

			<div class="lg:space-y-[30px] space-y-5 text-white xl:px-[266px] px-6">
				<?php if ( get_field( 'main_title' ) ) : ?>
					<div class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px]">
						<?php the_field( 'main_title' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( get_field( 'desc' ) ) : ?>
					<div class="lg:text-[28px] text-base lg:leading-[32px]">
						<?php the_field( 'desc' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="tab-wrapper lg:mt-[110px] mt-10">
				<div class="flex gap-2 items-center justify-center">
					<?php
					$button = get_field( 'content_tab_1' );
					$btn_title = ( is_array( $button ) && ! empty( $button['title_tab'] ) ) ? $button['title_tab'] : '';
					if ( $btn_title ) : ?>
						<div
							class="tab-button font-content p-[14px] md:text-base text-xs leading-[18px] tracking-[-0.16px] rounded-full overflow-hidden border [&:not(.active)]:bg-[#ffffff12] bg-white [&:not(.active)]:border-[#ffffff2b] border-transparent [&:not(.active)]:backdrop-blur-[10px] backdrop-blur-0 [&:not(.active)]:text-white text-black cursor-pointer transition-all duration-300 active">
							<?php echo esc_html( $btn_title ); ?>
						</div>
					<?php endif; ?>

					<?php
					$button = get_field( 'content_tab_2' );
					$btn_title = ( is_array( $button ) && ! empty( $button['title_tab'] ) ) ? $button['title_tab'] : '';
					if ( $btn_title ) : ?>
						<div
							class="tab-button font-content p-[14px] md:text-base text-xs leading-[18px] tracking-[-0.16px] rounded-full overflow-hidden border [&:not(.active)]:bg-[#ffffff12] bg-white [&:not(.active)]:border-[#ffffff2b] border-transparent [&:not(.active)]:backdrop-blur-[10px] backdrop-blur-0 [&:not(.active)]:text-white text-black cursor-pointer transition-all duration-300">
							<?php echo esc_html( $btn_title ); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="mt-[3px]">
					<?php if ( have_rows( 'content_tab_1' ) ) : ?>
						<?php while ( have_rows( 'content_tab_1' ) ) :
							the_row(); ?>
                            
							<div class="tab-content xl:px-[266px] px-6">
								<?php if ( have_rows( 'block_img' ) ) : ?>

									<?php while ( have_rows( 'block_img' ) ) :
										the_row(); ?>
                                         <?php if( get_sub_field('title') ): ?>
                                            <div
                                                class="text-[#D9EAFD] lg:text-[30px] text-xl lg:leading-[37px] tracking-[-0.96px] max-w-[370px]">
                                               <?php the_sub_field('title'); ?>
                                            </div>
                                         <?php endif; ?>
                                         <?php if( have_rows('list_content') ): ?>
                                             <div
											class="mt-[23px] lg:h-[808px] h-[400px] md:grid grid-cols-2 grid-rows-2 gap-2 block_slider center_items watch_css md:mx-0 -mx-6">
                                             <?php
                                             $i=0;
                                             while( have_rows('list_content') ): the_row();
                                             $i++;
                                            
                                             ?>
                                                <div class="block_slider-item <?= $i==2 ?'md:row-span-2':'' ?> lg:p-[50px] p-6 flex flex-col md:w-full w-[83%] h-full rounded-3xl overflow-hidden bg-no-repeat bg-cover bg-center"
												style="background-image: url('<?php echo wp_get_attachment_image_url(get_sub_field('img'), 'large') ?>');">
                                                 <?php if( get_sub_field('title') ): ?>
                                                    <div
                                                        class="mt-[15px] text-white text-[29px] leading-[32.63px] tracking-[-0.844px] max-w-[273px]">
                                                        <?php the_sub_field('title'); ?>
                                                    </div>
                                                 <?php endif; ?>
                                                  <?php if( get_sub_field('title_btn') ): ?>
                                                     
                                                     <a href="<?php echo check_link(get_sub_field('link_btn')) ?>"
                                                         class="font-content mt-auto ml-auto py-[14px] px-[26px] rounded-full overflow-hidden bg-[#ffffff2b] hover:bg-white text-white hover:text-[#3A566A] backdrop-blur-[10px] transition-colors duration-300">
                                                        <?php the_sub_field('title_btn'); ?>
                                                     </a>
                                                  <?php endif; ?>
											</div>
                                             <?php endwhile; ?>
                                             </div>
                                         <?php endif; ?>
										

									<?php endwhile; ?>

								<?php endif; ?>
								<?php if ( have_rows( 'staff' ) ) : ?>

									<?php while ( have_rows( 'staff' ) ) :
										the_row(); ?>
										<div class="lg:mt-[126px] mt-10 flex flex-col items-center">
                                             <?php if( get_sub_field('title') ): ?>
                                                <div
                                                    class="text-white lg:text-[64px] text-[28px] tracking-[-0.96px] max-w-[759px] text-center">
                                                   <?php the_sub_field('title'); ?>
                                                </div>
                                             <?php endif; ?>
                                             <?php if( have_rows('list_content') ): ?>
                                                 <div
												class="mt-11 w-full md:flex flex-wrap justify-center gap-5 text-white block_slider center_items watch_css has_autoplay">
                                                 <?php while( have_rows('list_content') ): the_row();?>
                                                     <div
														class="block_slider-item md:w-[31%] w-full flex flex-col items-center gap-[9px]">
														<div
															class="lg:size-[223px] size-[180px] rounded-full overflow-hidden bg-[#ECF4FE] flex items-end">
                                                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'']) ?>
															
														</div>
														<div>
                                                             <?php if( get_sub_field('pos') ): ?>
                                                                <div
                                                                    class="lg:text-xl text-base lg:leading-[24px] text-center">
                                                                    <?php the_sub_field('pos'); ?>
                                                                </div>
                                                             <?php endif; ?>
                                                              <?php if( get_sub_field('name') ): ?>
                                                                 <div
                                                                     class="lg:text-[26px] text-xl lg:leading-[25px] text-center">
                                                                    <?php the_sub_field('name'); ?>
                                                                 </div>
                                                              <?php endif; ?>
                                                               <?php if( get_sub_field('desc') ): ?>
                                                                  
                                                                  <div
                                                                      class="mt-[15px] lg:text-xl text-base leading-[24px] text-center">
                                                                     <?php the_sub_field('desc'); ?>
                                                                  </div>
                                                               <?php endif; ?>
														</div>
													</div>
                                                 <?php endwhile; ?>
                                                 </div>
                                             <?php endif; ?>
											
										</div>

									<?php endwhile; ?>

								<?php endif; ?>
							</div>

						<?php endwhile; ?>

					<?php endif; ?>

                    <?php if( have_rows('content_tab_2') ): ?>
                        <?php while( have_rows('content_tab_2') ): the_row();?>
                            <div class="tab-content">
                                <?php if( have_rows('founder_block') ): ?>
                                    <?php while( have_rows('founder_block') ): the_row();?>
                                        <div
                                            class="relative py-[50px] aspect-[1632/1020] w-full flex items-end justify-center">
                                           <?php echo wp_get_attachment_image(get_sub_field('bg'), 'full',false,['class'=>'absolute inset-0 size-full object-cover']) ?>
                                           
                                            <div>
                                                <?php if( have_rows('list_img') ): ?>
                                                   <div
                                                    class="max-lg:mt-[400px] max-md:mt-[377px] relative md:flex items-stretch gap-2.5 max-w-[1093px] z-[1] block_slider watch_css center_items">
                                                    <?php while( have_rows('list_img') ): the_row();?>
                                                       <div
                                                            class="block_slider-item aspect-[358/262] md:w-1/3 w-[83%] rounded-[24px] overflow-hidden backdrop-blur-[10px]">
                                                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'size-full object-cover']) ?>
                                                        </div>
                                                    <?php endwhile; ?>
                                                    </div>
                                                <?php endif; ?>
                                                

                                                 <?php if( get_sub_field('svg_animation') ): ?>
                                                    <div
                                                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 xl:size-[765px] md:size-[400px] size-[300px] aspect-square">
                                                        <?php echo wp_get_attachment_image(get_sub_field('svg_animation'), 'full',false,['class'=>'size-full object-contain']) ?>
                                                    </div>
                                                 <?php endif; ?>
                                                 <?php if( get_sub_field('main_img') ): ?>
                                                    <div
                                                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 aspect-[708/854] xl:w-[708px] md:w-[364px] w-[220px]">
                                                        <?php echo wp_get_attachment_image(get_sub_field('main_img'), 'full',false,['class'=>'size-full object-contain']) ?>
                                                    </div>
                                                 <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    
                                <?php endif; ?>
                                <?php if( have_rows('time_line') ): ?>
                                    <?php while( have_rows('time_line') ): the_row();?>
                                        <div
                                            class="flex lg:flex-row flex-col justify-between gap-[46px] xl:px-[266px] px-6 text-white">
                                            <?php if( have_rows('content_left') ): ?>
                                                <div class="mt-16 flex flex-col gap-[30px] lg:max-w-[448px] max-w-full">
                                                <?php
                                                $i=0;
                                                while( have_rows('content_left') ): the_row();
                                                $i++;
                                                ?>
                                                   <div
                                                        class="<?= $i % 2 == 0 ? '' : 'max-lg:ml-auto' ?> space-y-[14px] max-w-[448px]">
                                                         <?php if( get_sub_field('year') ): ?>
                                                            <div
                                                                class="timeline_marker <?= $i % 2 == 0 ? '' : 'max-lg:ml-auto' ?> lg:ml-auto relative w-fit py-3 px-5 rounded-full border border-[#FFFFFF2B] bg-[#FFFFFF2B] backdrop-blur-[10px] text-white lg:after:block after:hidden after:absolute after:top-1/2 after:-translate-y-1/2 2xl:after:-right-[63px] after:-right-[56px] after:size-[18px] after:bg-no-repeat after:bg-cover after:bg-center">
                                                               <?php the_sub_field('year'); ?>
                                                            </div>
                                                         <?php endif; ?>
                                                          <?php if( get_sub_field('desc') ): ?>
                                                             <div class="xl:text-xl">
                                                                <?php the_sub_field('desc'); ?>
                                                             </div>
                                                          <?php endif; ?>
                                                    </div>
                                                <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                           
                                            <div class="lg:block hidden h-auto">
                                                <svg height="100%" viewBox="0 0 102 839"
                                                    class="lg:w-[102px] w-[50px]" preserveAspectRatio="none"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_901_23228)">
                                                        <path
                                                            d="M93.45 2.17188V792.212C93.45 818.012 72.53 838.932 46.73 838.932C20.93 838.932 0 818.022 0 792.212V63.1919"
                                                            stroke="white" stroke-width="2"
                                                            stroke-miterlimit="10" />
                                                        <path
                                                            d="M85.2695 8.8L86.7295 10.16L93.4395 2.94L100.16 10.16L101.62 8.8L93.4395 0L85.2695 8.8Z"
                                                            fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_901_23228">
                                                            <rect width="101.62" height="838.932" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <?php if( have_rows('content_right') ): ?>
                                                <div class="flex flex-col gap-[30px] lg:max-w-[448px] max-w-full">
                                                <?php
                                                $i=0;
                                                while( have_rows('content_right') ): the_row();
                                                
                                                $i++;
                                                ?>
                                                   <div
                                                        class="<?= $i % 2 == 0 ? '' : 'max-lg:ml-auto' ?> space-y-[14px] max-w-[448px]">
                                                         <?php if( get_sub_field('year') ): ?>
                                                            
                                                            <div
                                                                class="timeline_marker <?= $i % 2 == 0 ? '' : 'max-lg:ml-auto' ?> relative w-fit py-3 px-5 rounded-full border border-[#FFFFFF2B] bg-[#FFFFFF2B] backdrop-blur-[10px] text-white lg:after:block after:hidden after:absolute after:top-1/2 after:-translate-y-1/2 2xl:after:-left-[71px] after:-left-[65px] after:size-[18px] after:bg-no-repeat after:bg-cover after:bg-center">
                                                               <?php the_sub_field('year'); ?>
                                                            </div>
                                                         <?php endif; ?>
                                                          <?php if( get_sub_field('desc') ): ?>
                                                             
                                                             <div class="xl:text-xl">
                                                                <?php the_sub_field('desc'); ?>
                                                             </div>
                                                          <?php endif; ?>
                                                    </div>
                                                <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                           
                                        </div>
                                    <?php endwhile; ?>
                                   
                                <?php endif; ?>
                                <?php
                                $button = get_sub_field('button');
                                $btn_title = (is_array($button) && !empty($button['title'])) ? $button['title'] : '';
                                $btn_link = (is_array($button) && !empty($button['link'])) ? $button['link'] : '';
                                if ($btn_title) : ?>
                                    <a href="<?php echo check_link($btn_link) ?>"
                                        class="mt-[57px] block w-fit mx-auto font-content py-[14px] px-[26px] rounded-full overflow-hidden bg-white hover:bg-[#cbc9c9] text-[#3A566A] transition-colors duration-300">
                                        <?php echo esc_html($btn_title); ?>
                                    </a>
                                <?php endif; ?>
                                
                            </div>
                        <?php endwhile; ?>
                       
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>