<section class="lg:my-[123px] my-[60px]" data-components="people-songkiem">
	<div class="container">
		<?php if ( get_field( 'title' ) ) : ?>
			<div class="xl:text-[55px] text-xl leading-[1] text-center">
				<?php the_field( 'title' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="mt-[38px] md:grid grid-cols-2 lg:gap-10 gap-5 block_slider center_items watch_css md:mx-0 -mx-5">
				<?php while ( have_rows( 'list_content' ) ) :
					the_row();
					$video_file = get_sub_field( 'video_file' );
					$video_link = get_sub_field( 'link_video' );
					$is_link = get_sub_field( 'is_link' );
					$video_url = $video_link && $is_link ? $video_link : $video_file;
					?>
					<a href="<?php echo check_link( $video_url ) ?>"
						class="block_slider-item md:w-full w-[83%] space-y-5 block" <?php if ( $video_url )
						{ ?>
							data-fancybox <?php } ?>>
						<div class="relative aspect-[777/437] w-full rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
							style="background-image: url('<?php echo wp_get_attachment_image_url( get_sub_field( 'img' ), 'full' ) ?>');">

							<?php if ( $video_url )
							{ ?>

								<?php echo svg( 'playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[66px] size-8 shrink-0' ) ?>
							<?php } ?>

						</div>
						<div class="space-y-1 text-center">
							<?php if ( get_sub_field( 'pos' ) ) : ?>
								<div class="lg:text-2xl text-lg text-[#00081280]">
									<?php the_sub_field( 'pos' ); ?>
								</div>
							<?php endif; ?>
							<?php if ( get_sub_field( 'name' ) ) : ?>
								<div class="lg:text-3xl text-xl text-[#000812]">
									<?php the_sub_field( 'name' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>