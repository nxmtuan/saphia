<section class="mt-[100px] mb-[150px]" data-components="saphia-conquer">
	<div class="container">
		<div class="space-y-5">
			<?php if ( get_field( 'title' ) ) : ?>
				<div class="text-[48px] leading-[1.1] text-center highlight">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'desc' ) ) : ?>
				<div class="text-[26px] leading-[1.1] text-center">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="mt-[110px] flex xl:flex-row flex-col xl:items-stretch gap-8">
			<div class="xl:w-[42%] w-full">
				<?php if ( have_rows( 'main_title' ) ) : ?>
					<div class="xl:text-4xl text-xl highlight">
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
				<?php if ( get_field( 'content' ) ) : ?>

					<div class="mt-4 xl:text-[26px] leading-[1.1]">
						<?php the_field( 'content' ); ?>
					</div>
				<?php endif; ?>
				<?php
				$button = get_field( 'button' );
				$btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
				$btn_link = ( is_array( $button ) && ! empty( $button['link'] ) ) ? $button['link'] : '';

				if ( $btn_title ) : ?>
					
                    <a href="<?php echo check_link($btn_link) ?>"
                        class="xl:mt-20 mt-4 block p-3 max-w-[161px] rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white text-center transition-colors duration-300">
                       <?php echo esc_html( $btn_title ); ?>
                    </a>
				<?php endif; ?>

			</div>
            <?php if( have_rows('list_content') ): ?>
               <div class="flex-1 flex gap-2">
                <?php
                $i=0;
                while( have_rows('list_content') ): the_row();
                $i++;
                $video_file = get_sub_field( 'video_file' );
				$video_link = get_sub_field( 'link_video' );
				$is_link = get_sub_field( 'is_link' );
				$video_url = $video_link && $is_link ? $video_link : $video_file;
                $mtClass = match ( $i )
					{
						1 => 'translate-y-[104px]',
						2 => 'translate-y-[52px]',
						3 => 'mt-0',
					};
                ?>
                    <a href="<?php echo check_link($video_url) ?>" 
                    <?php if ( $video_url) { ?> 
                        data-fancybox
                    <?php } ?>
						class="relative w-1/3 aspect-[306/544] lg:rounded-[32px] rounded-xl overflow-hidden <?php echo $mtClass; ?>">
                        <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'absolute inset-0 size-full object-cover']) ?>
						
						<?php if ($video_url ) { ?> 
                            
							<?php echo svg( 'playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[66px] size-8 shrink-0 z-[1]' ) ?>
                        <?php } ?>
						
						<div
							class="absolute lg:left-5 left-3 lg:top-10 top-3 lg:text-[64px] text-[25px] leading-[1] text-[#F7F7F7] z-[1]">
							0<?php echo $i + 1; ?></div>
					</a>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
			
		</div>
	</div>
</section>