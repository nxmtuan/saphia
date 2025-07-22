<section class="lg:my-[150px] my-[60px]" data-component="block_core-values">
	<div class="container">
		<div
			class="flex lg:flex-row flex-col xl:items-start lg:items-end 1.5xl:gap-[110px] xl:gap-[60px] gap-5">
			<div class="1.5xl:w-[694px] md:w-1/2 w-full">
				<div class="space-y-5">
					<?php if ( get_field( 'title' ) ) : ?>
						<div
							class="xl:text-[64px] text-4xl xl:leading-[77px] tracking-[-0.96px] highlight">
							<?php the_field( 'title' ); ?>
						</div>
					<?php endif; ?>

				</div>
				<?php if ( get_field( 'img' ) ) : ?>

					<div class="lg:mt-[50px] mt-10 rounded-[35px] overflow-hidden">
						<?php echo wp_get_attachment_image( get_field( 'img' ), 'full', false, [ 'class' => 'aspect-[694/751] w-full object-cover' ] ) ?>
					</div>
				<?php endif; ?>
			</div>
			<?php if ( have_rows( 'list_content' ) ) : ?>
				<div class="flex-1 grid grid-cols-2 xl:gap-7 gap-2.5">
					
						<?php
                        $i=0;
                        while ( have_rows( 'list_content' ) ) :
							the_row(); 
                            $i++;
                            ?>
							<div
							class="xl:px-11 xl:pt-10 xl:pb-8 p-5 bg-[#FFF3E7] lg:rounded-[30px] rounded-[20px] overflow-hidden <?= $i==2 || $i==4 ?'translate-y-[90px]':'' ?>">
                             <?php if( get_sub_field('title') ): ?>
                               
                                <div class="xl:text-[28px] text-xl xl:leading-[36.4px] tracking-[-0.42px]">
                                    <?php the_sub_field('title'); ?>
                                </div>
                             <?php endif; ?>
                              <?php if( get_sub_field('desc') ): ?>
                                 <div
                                     class="xl:mt-8 mt-2.5 xl:text-lg text-xs xl:leading-[32px] text-[#525256]">
                                     <?php the_sub_field('desc'); ?>
                                 </div>
                              <?php endif; ?>
                               <?php if( get_sub_field('link') ): ?>
                                  <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                      class="ml-auto xl:mt-12 mt-4 w-fit xl:text-xl text-sm lg:leading-[34px] text-content flex items-center gap-1">
                                      <?php _e('Xem thêm', 'gnws') ?>
                                      <?php echo svg( 'up-right', '21', '21', 'text-content shrink-0' ) ?>
                                  </a>
                               <?php endif; ?>
						</div>
						<?php endwhile; ?>
					
				</div>
			<?php endif; ?>
			
		</div>
	</div>
</section>