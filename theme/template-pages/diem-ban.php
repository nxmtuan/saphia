<?php

/**
Template Name: Điểm bán
 */

get_header();
?>

<main>
    <section class="lg:my-[7.5rem] my-[3.75rem]" <?= $section_id ? ' id="' . esc_attr( $section_id ) . '"' : '' ?> data-component="block_list_transaction">
		<div class="container">
			<div class="w-full flex flex-col items-center md:gap-6 gap-4">

                <?php if( get_sub_field('title') ): ?>
                    <h3 class="font-medium text-center">
                         <?php the_sub_field('title'); ?>
                    </h3>
                <?php else : ?>
                    <h3 class="font-medium text-center">
                        <?php the_field( 'opt_f4_title','option' ); ?>
                    </h3>
                <?php endif; ?>

                 <?php if( get_sub_field('desc') ): ?>
                    <p class="text-content max-w-[42.813rem] text-center">
						<?php the_sub_field('desc'); ?>
					</p>
                    <?php else : ?>
                        <p class="text-content max-w-[42.813rem] text-center">
						<?php the_field( 'opt_f4_desc','option' ); ?>
					</p>
                 <?php endif; ?>

				
			</div>
			<div class="md:mt-20 mt-5 list_transaction">
				<div class="md:flex hidden items-center gap-4 ">
					<span class="font-medium text-content"><?php _e( 'Tỉnh thành:', 'acbs' ) ?></span>
					<div class="custom-dropdown relative">
						<div
							class="dropdown-selected appearance-none bg-white lg:w-36 w-full py-2 pl-5 pr-7 rounded-full border border-[#EAEEF4] text-sm text-[#151515] cursor-pointer">
							<?php _e( 'Tất cả', 'acbs' ) ?>
						</div>

						<ul
							class="dropdown-options absolute left-0 right-0 mt-2 bg-white rounded-[0.313rem] hidden z-[1] border border-[#EAEEF4] overflow-hidden box_select_province">
							<li
								class="py-3 px-5 text-sm text-[#151515] hover:bg-[#F9FCEA] cursor-pointer" data-province="all">
								<?php _e( 'Tất cả', 'acbs' ) ?>
							</li>
							<?php if ( have_rows( 'opt_f4_list_content','option' ) ) : ?>
								<?php
                                $i=0;
                                while ( have_rows( 'opt_f4_list_content','option' ) ) :
									the_row(); 
                                    $i++;
                                    ?>
									<li
										class="py-3 px-5 text-sm text-[#151515] hover:bg-[#F9FCEA] cursor-pointer" data-province="province-<?php echo $i; ?>">
										<?php the_sub_field( 'province' ) ?>
									</li>
								<?php endwhile; ?>

							<?php endif; ?>
						</ul>

						<?php echo svg( 'chevron-down', '', '', 'icon w-5 h-5 absolute top-1/2 right-2.5 -translate-y-1/2 [&:not(.active)]:rotate-0 rotate-180 transition-transform duration-300 pointer-events-none' ) ?>
					</div>
				</div>
				<div
					class="mt-6 flex md:flex-row flex-col-reverse items-stretch xl:gap-20 md:gap-8 gap-6 md:mx-0 -mx-[1.375rem]">
					<div
						class="md:w-[33%] w-full md:shadow-location shadow-contentCard bg-white rounded-[0.625rem] overflow-hidden md:py-4 py-3">
						<div class="md:block flex items-center gap-2.5 md:px-0 px-2.5 pb-2.5">
							<div class="md:w-full w-[calc(50%-0.313rem)] md:px-4">
								<div class="relative">
									<?php echo svg( 'magnifer', '', '', 'size-6 size-[1.125rem] shrink-0 absolute left-4 top-1/2 -translate-y-1/2' ) ?>
									<input id="search-transaction" type="text" placeholder="<?php _e( 'Tìm kiếm', 'acbs' ) ?>"
										class="w-full rounded-full overflow-hidden bg-white border border-[#DDE2EA] pl-12 md:pr-4 pr-2.5 md:py-3 py-2 md:text-base text-sm focus:outline-none focus:border-primary transition-colors duration-300">
								</div>
							</div>
							<div class="md:hidden flex-1 custom-dropdown relative ">
								<div
									class="dropdown-selected appearance-none bg-white w-full py-2 pl-5 pr-7 rounded-full border border-[#EAEEF4] text-sm text-[#151515] cursor-pointer">
									<?php _e( 'Tất cả', 'acbs' ) ?>
								</div>

								<ul
									class="dropdown-options absolute left-0 right-0 mt-2 bg-white rounded-[0.625rem] hidden z-[1] border border-[#EAEEF4] max-md:max-h-[9.063rem] overflow-y-auto scroll-bar-custom box_select_province">
									<li
										class="py-3 px-5 text-sm text-[#151515] hover:bg-[#F9FCEA] cursor-pointer" data-province="all">
										<?php _e( 'Tất cả', 'acbs' ) ?>
									</li>
									<?php if ( have_rows( 'opt_f4_list_content','option' ) ) : ?>
										<?php
                                        $i=0;
                                        while ( have_rows( 'opt_f4_list_content','option' ) ) :
											the_row(); 
                                            $i++;
                                            ?>
											<li
												class="py-3 px-5 text-sm text-[#151515] hover:bg-[#F9FCEA] cursor-pointer" data-province="province-<?php echo $i; ?>">
												<?php the_sub_field( 'province' ) ?>
											</li>
										<?php endwhile; ?>

									<?php endif; ?>
								</ul>

								<?php echo svg( 'chevron-down', '', '', 'icon size-5 size-[1.125rem] absolute top-1/2 right-2.5 -translate-y-1/2 [&:not(.active)]:rotate-0 rotate-180 transition-transform duration-300 pointer-events-none' ) ?>
							</div>
						</div>
                        <?php
                       
                        if( have_rows('opt_f4_list_content','option') ):
                      
                        ?>
                          <div class="lg:h-[34.75rem] md:h-[21.75rem] h-[21.75rem] list_location"
                                    data-simplebar>
                            <?php 
                             $i=0;
                            while( have_rows('opt_f4_list_content','option') ): the_row();
                              $i++;
                            ?>
                            <?php if ( have_rows( 'list_branch' ) ) : ?>
                                
                                    <?php while ( have_rows( 'list_branch' ) ) :
                                        the_row();
                                        $iframe = get_sub_field('iframe_map');
                                        ?>
                                        <div
                                            class="transaction-bg group md:p-4 px-4 py-3 md:border-b-0 border-b last:border-b-0 border-[#1d1d1d1a] bg-white hover:bg-[#DDEBCE80] [&.active]:bg-[#DDEBCE] transition-colors duration-300 cursor-pointer branch_item" data-iframe="<?=esc_html($iframe) ?>" data-province="province-<?php echo $i; ?>">

                                            
                                            <?php if ( get_sub_field( 'name' ) ) : ?>
                                                <div class="font-semibold text-secondary name_transaction">
                                                    <?php the_sub_field( 'name' ); ?>
                                                </div>
    
                                            <?php endif; ?>
                                            <?php if ( get_sub_field( 'desc' ) ) : ?>
    
                                                <div class="mt-2 text-content text-sm address_transaction">
                                                    <?php the_sub_field( 'desc' ); ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ( get_sub_field( 'phone' ) ) : ?>
    
                                                <div class="mt-2 text-content text-sm flex gap-1 items-center">
                                                    <span><?php _e( 'Số điện thoại:', 'acbs' ) ?></span>
                                                    <a
                                                        href="tel:<?php echo preg_replace( '/\D+/', '', get_sub_field( 'phone' ) ); ?>">
                                                        <?php the_sub_field( 'phone' ); ?>
                                                    </a>
    
                                                </div>
                                            <?php endif; ?>
                                            <div class="transaction-btn mt-4 hidden [&.active]:block">
                                                <a href="<?php echo check_link(get_sub_field('map_link')) ?>" target="_blank"
                                                    class="group/inner flex items-center gap-1 text-sm font-medium text-secondary w-fit">
                                                    <?php _e( 'Chỉ đường', 'acbs' ) ?>
                                                    <i
                                                        class="text-secondary group-hover/inner:translate-x-1 transition-transform duration-300">
                                                        <?php echo svg( 'chevron-right-primary', '16', '16' ) ?>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                
                            <?php endif; ?>
                               
                            <?php endwhile; ?>
                           </div>
                        <?php endif; ?>

					</div>

					<div class="md:flex-1 max-md:h-[14.375rem]">
                        <?php if (have_rows('opt_f4_list_content','option')): ?>
                        <?php
                        $first_1 = true;
                        while (have_rows('opt_f4_list_content','option')): the_row();
                            if ($first_1):
                                if (have_rows('list_branch')): ?>
                                    <div class="rounded-[0.625rem] overflow-hidden w-full h-full block_iframe">
                                        <?php
                                        $first = true;
                                        while (have_rows('list_branch')): the_row();
                                            if ($first) {
                                                echo get_sub_field('iframe_map');
                                                $first = false;
                                            }
                                        endwhile;
                                        ?>
                                    </div>
                                <?php endif;

                                
                                $first_1 = false;
                            endif;
                        endwhile;
                        ?>
                    <?php endif; ?>


						
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();