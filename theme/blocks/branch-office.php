<?php
$video_file = get_field( 'video_file' );
$video_link = get_field( 'link_video' );
$is_link = get_field( 'is_link' );
$video_url = $video_link && $is_link ? $video_link : $video_file;
?>
<section class="lg:my-[164px] my-[60px]" data-component="branch-office">
	<div class="container">
		<?php if ( get_field( 'title' ) ) : ?>
			<div
				class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] text-[#000000E0] text-center">
				<?php the_field( 'title' ); ?>
			</div>
		<?php endif; ?>
		<div class="lg:mt-[94px] mt-10 flex md:flex-row flex-col lg:items-stretch gap-6">
			<div class="relative aspect-square md:w-[40%] w-full lg:rounded-[40px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-center"
				style="background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'img_video' ) ) ?>');">
				<a href="<?= $video_url ?>" data-fancybox>
					<?php echo svg( 'playbtn', '', '', 'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:size-[100px] size-[50px] shrink-0' ) ?>
				</a>
			</div>

			<div
				class="relative flex-1 aspect-[1006/728] w-full lg:rounded-[40px] rounded-[20px] overflow-hidden">
				<?php echo wp_get_attachment_image( get_field( 'img' ), 'full', false, [ 'class' => 'absolute inset-0 size-full object-cover' ] ) ?>

			</div>
		</div>
	</div>
</section>