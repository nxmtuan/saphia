<section class="lg:my-[190px] my-[60px]" data-components="ttkh_apply">
	<?php if ( get_field( 'title' ) ) : ?>
		<div class="container">
			<div class="xl:text-[55px] text-2xl xl:leading-[1] text-[#393CA2] text-center">
				<?php the_field( 'title' ); ?>
			</div>

		</div>
	<?php endif; ?>
	<div class="bg-no-repeat bg-cover bg-center w-full aspect-[1920/972]"
		style="background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'img' ), 'full' ) ?>');">
	</div>
	<?php if ( have_rows( 'list_content' ) ) : ?>
		<div class="container">
			<div
				class="max-w-[1298px] md:mx-auto -mx-5 md:flex flex-col block_slider watch_css center_items">
				<?php
				$i = 1;
				while ( have_rows( 'list_content' ) ) :
					the_row();
					$i++;
					?>
					<div
						class="block_slider-item md:w-full w-[83%] flex <?= $i % 2 == 0 ? 'md:flex-row flex-col' : 'md:flex-row-reverse flex-col' ?> items-stretch">
						<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'md:mb-0 mb-3 md:w-1/2 w-full aspect-square rounded-[25px] overflow-hidden object-cover' ] ) ?>

						<div
							class="<?= $i % 2 == 0 ? 'lg:pl-[130px] md:pl-10' : 'lg:pr-[60px] pr-10' ?> md:w-1/2 w-full flex flex-col justify-center md:space-y-7 space-y-3 text-primary">
							<?php if ( get_sub_field( 'title' ) ) : ?>

								<div class="xl:text-[55px] text-2xl xl:leading-[1]">
									<?php the_sub_field( 'title' ); ?>
								</div>
							<?php endif; ?>
							<?php if ( get_sub_field( 'desc' ) ) : ?>
								<div class="xl:text-[32px] text-xl">
									<?php the_sub_field( 'desc' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>

</section>

<?php if ( have_rows( 'block_bottom' ) ) : ?>

	<?php while ( have_rows( 'block_bottom' ) ) :
		the_row(); ?>
		<section class="lg:mt-[190px] mt-[60px]">
             <?php if( get_sub_field('title') ): ?>
               
                <div class="xl:text-[55px] text-2xl xl:leading-[1] text-[#393CA2] text-center">
                  <?php the_sub_field('title'); ?>
                </div>
             <?php endif; ?>
			<div class="lg:mt-[134px] mt-10 w-full aspect-[1920/1122] lg:rounded-b-[85px] rounded-b-[20px] bg-no-repeat bg-cover bg-center"
				style="background-image: url('<?php echo wp_get_attachment_image_url(get_sub_field('img_cer_bg')) ?>');">
                <?php echo wp_get_attachment_image(get_sub_field('img_cer'), 'full',false,['class'=>'mx-auto max-w-[80%] aspect-[1128/361] object-contain']) ?>
				
			</div>
		</section>
	<?php endwhile; ?>

<?php endif; ?>