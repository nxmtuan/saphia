<section class="lg:my-[200px] my-[60px]" data-components="block_product-video">
	<div class="container">
		<?php if ( have_rows( 'video' ) ) : ?>

			<?php while ( have_rows( 'video' ) ) :
				the_row();
				$video_file = get_sub_field( 'video_file' );
				$video_link = get_sub_field( 'link_video' );
				$is_link = get_sub_field( 'is_link' );
				$video_url = $video_link && $is_link ? $video_link : $video_file;
				?>
				<a href="<?= $video_url ?>" data-fancybox class="block">
					<div class="relative aspect-[1632/900] w-full lg:rounded-[35px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
						style="background-image: url('<?php echo wp_get_attachment_image_url( get_sub_field( 'video_img' ), 'full' ) ?>');">

						<?php echo svg( 'playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[100px] size-[50px] shrink-0' ) ?>
                    </div>
				</a>
		<?php endwhile; ?>

	<?php endif; ?>

	<div class="lg:mt-20 mt-10">
		<?php if ( get_field( 'main_title' ) ) : ?>
			<div class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] max-w-[593px]">
				<?php the_field( 'main_title' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div class="mt-[30px] flex flex-wrap items-center justify-center xl:gap-[100px] gap-6">
				<?php
                $i=1;
                while ( have_rows( 'list_content' ) ) :
					the_row();
                    $i++;
                    ?>
					<div
						class="xl:min-h-[385px] lg:max-w-[200px] max-w-[100px] flex flex-col <?= $i % 2 == 0 ? '' : 'justify-end' ?> lg:gap-[37px] gap-5">
                        <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'w-full aspect-square rounded-full overflow-hidden object-cover']) ?>
						 <?php if( get_sub_field('desc') ): ?>
                            <div class="text-center lg:text-[32px] leading-[1] tracking-[-0.754px]">
                               <?php the_sub_field('desc'); ?>
                            </div>
                         <?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
	</div>
</section>