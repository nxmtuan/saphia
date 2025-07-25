<section class="lg:my-[183px] my-[60px]" data-component="intro-product">
	<div class="container">
		<div class="lg:text-[76px] text-2xl leading-[1] tracking-[-1.425px] highlight text-black">
			<div id="highlight-container" class="overflow-hidden relative w-full">
				<?php if ( have_rows( 'list_title' ) ) : ?>
					<div id="highlight-list"
						class="flex flex-col leading-[1.5] transition-transform duration-500">
						<?php while ( have_rows( 'list_title' ) ) :
							the_row(); ?>
							<div class="highlight-item text-[#244896]"><?php the_sub_field( 'title' ) ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
			<?php if ( get_field( 'main_title' ) ) : ?>
				<?php the_field( 'main_title' ); ?>
			<?php endif; ?>

		</div>

		<div class="lg:mt-[154px] mt-10 flex flex-col items-center lg:gap-[30px] gap-4">
			<div class="flex md:flex-row flex-col md:items-stretch lg:gap-6 gap-4">
				<div
					class="lg:p-10 p-5 lg:w-[479px] md:w-2/5 w-full lg:rounded-[35px] rounded-[20px] overflow-hidden bg-primary text-white">
					<?php if ( have_rows( 'number_1' ) ) : ?>

						<?php while ( have_rows( 'number_1' ) ) :
							the_row(); ?>

							<div
								class="lg:text-[95px] md:text-[45px] text-[60px] lg:leading-[104.5px] md:leading-[45px] leading-[70px] tracking-[-1.425px]">
								<?php the_sub_field( 'number' ); ?>
							</div>
							<?php if ( get_sub_field( 'desc' ) ) : ?>
								<div class="lg:text-2xl md:text-base text-2xl tracking-[-0.34px]">
									<?php the_sub_field( 'desc' ); ?>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>

					<?php endif; ?>


					<?php if ( have_rows( 'number_2' ) ) : ?>

						<?php while ( have_rows( 'number_2' ) ) :
							the_row(); ?>
							<div
								class="lg:mt-8 mt-5 lg:text-4xl md:text-base text-2xl lg:!leading-[32px] prose-strong:font-semibold lg:prose-strong:text-[56px] prose-strong:text-[40px] prose-strong:leading-[46.8px] prose-strong:tracking-[-0.54px]">
								<?php the_sub_field( 'desc' ); ?>
							</div>
						<?php endwhile; ?>

					<?php endif; ?>
				</div>
				<?php if ( have_rows( 'img_intro' ) ) : ?>

					<?php while ( have_rows( 'img_intro' ) ) :
						the_row(); ?>
						<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
							class="relative lg:rounded-[35px] rounded-[20px] lg:w-fit md:w-3/5 w-fit overflow-hidden">
							<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'aspect-[762/391] lg:w-[762px] w-full md:h-full object-cover' ] ) ?>
							<p
								class="block absolute top-[11px] right-[11px]">
								<?php echo svg( 'btnLink', '47', '47', 'shrink-0' ) ?>
							</p>
						</a>
					<?php endwhile; ?>

				<?php endif; ?>

			</div>
			<div class="w-full flex md:flex-row flex-col md:items-stretch lg:gap-6 gap-4">
				<div class="lg:p-10 p-5 xl:w-[804px] md:w-1/2 w-full xl:h-[496px] lg:h-[400px] h-fit flex flex-col lg:rounded-[35px] rounded-[20px] overflow-hidden bg-no-repeat bg-cover bg-right"
					<?php if ( get_field( 'bg_form' ) ) : ?>
						style="background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'bg_form' ), 'full' ) ?>');"
					<?php endif; ?>>
					<?php if ( get_field( 'title_form' ) ) : ?>
						<div
							class="lg:text-[41px] text-xl lg:leading-[44px] tracking-[-0.72px] text-white max-w-[599px]">
							<?php the_field( 'title_form' ); ?>
						</div>
					<?php endif; ?>
					<div class="lg:mt-auto mt-8 form-nhan-tu-van-mien-phi">
						<?php echo do_shortcode( '[contact-form-7 id="801976b" title="Form nhận tư vấn miễn phí"]' ); ?>
					</div>
				</div>
				<?php if ( have_rows( 'list_product' ) ) : ?>
					<div class="flex-1 flex items-stretch lg:gap-6 gap-4">
						<?php while ( have_rows( 'list_product' ) ) :
							the_row(); ?>
							<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank"
								class="w-1/2 md:h-full h-[212px] relative lg:rounded-[35px] rounded-[20px] overflow-hidden group">

								<?php echo wp_get_attachment_image( get_sub_field( 'main_img' ), 'full', false, [ 'class' => 'absolute inset-0 size-full group-hover:opacity-0 transition-all duration-300' ] ) ?>
								<?php
								$hover_img = get_sub_field( 'hover_img' ) ?: get_sub_field( 'main_img' );
								echo wp_get_attachment_image( $hover_img, 'full', false, [ 'class' => 'absolute inset-0 size-full opacity-0 group-hover:opacity-100 transition-all duration-300' ] ) ?>
								<p
									class="absolute lg:top-2 top-4 lg:right-2 right-4 lg:size-16 size-8 flex justify-center items-center rounded-full overflow-hidden bg-white group-hover:bg-[#cbc9c9] shrink-0 group-hover:rotate-45 transition-all duration-300">
									<?php echo svg( 'up-right', '27', '30', 'shrink-0 text-content' ) ?>
								</p>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>