<?php
$video_file = get_field( 'video_file' );
$video_link = get_field( 'link_video' );
$is_link = get_field( 'is_link' );
$video_url = $video_link && $is_link ? $video_link : $video_file;
?>
<section class="lg:my-[200px] my-[60px]" data-component="aspiration-video">
	<div class="container">
		<a href="<?= $video_url ?>" data-fancybox>
			<div class="relative aspect-[1632/900] w-full lg:rounded-[35px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
				style="background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'poster_video' ) ) ?>');">
				<div class="absolute inset-0 size-full bg-video-gradient"></div>

				<?php echo svg( 'playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[100px] size-[50px] shrink-0 z-[1]' ) ?>

				<?php if ( get_field( 'title' ) ) : ?>
					<div
						class="relative lg:px-[69px] lg:py-[50px] p-5 lg:text-[32px] text-sm leading-[1.2] text-white z-[1]">
						<?php the_field( 'title' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</a>
		<?php if ( get_field( 'video_desc' ) ) : ?>
			<p class="text-center text-[#525256] lg:text-lg mt-5">
				<?php the_field( 'video_desc' ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>