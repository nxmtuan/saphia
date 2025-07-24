<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?>
<footer class="lg:pt-[93px] pt-[30px] pb-[30px] bg-primary">
	<div class="container">
		<div class="flex lg:flex-row flex-col justify-between lg:gap-[84px] gap-10 text-white">
			<div class="max-w-[334px]">
				<div class="lg:mb-[66px] mb-5 ">
					<?php if ( get_field( 'footer_logo', 'option' ) ) : ?>
						<?php echo wp_get_attachment_image( get_field( 'footer_logo', 'option' ), 'full', false, [ 'class' => 'aspect-[281/105] shrink-0 object-contain max-w-[281px] w-full' ] ) ?>
					<?php else : ?>
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
						if ( $image )
						{
							$site_url = get_bloginfo( 'url' );
							$site_description = get_bloginfo( 'description' );
							$logo_url = $image[0];
							?>
							<img src="<?php echo esc_url( $logo_url ); ?>" alt="Logo"
								class="aspect-[281/105] shrink-0 object-contain max-w-[281px] w-full">

							<?php
						}
						?>
					<?php endif; ?>

				</div>

				<?php if ( get_field( 'footer_f1_desc', 'option' ) ) : ?>
					<div class="space-y-5 text-lg !leading-[30px]">
						<?php the_field( 'footer_f1_desc', 'option' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( have_rows( 'footer_f1_social', 'option' ) ) : ?>
					<div class="mt-10 flex items-center gap-5">
						<?php while ( have_rows( 'footer_f1_social', 'option' ) ) :
							the_row(); ?>
							<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank"
								class="size-11 flex items-center justify-center shrink-0 rounded-full bg-[#f4f4f41a]">
								<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full', false, [ 'class' => 'object-contain shrink-0 text-white' ] ) ?>

							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="flex-1 flex xl:flex-row flex-col xl:justify-between xl:gap-0 gap-10">
				<?php if ( have_rows( 'footer_f2_desc', 'option' ) ) : ?>
					<div class="space-y-[14px] max-w-[413px]">
						<?php while ( have_rows( 'footer_f2_desc', 'option' ) ) :
							the_row(); ?>
							<div class="space-y-2.5">
								<?php if ( get_sub_field( 'title' ) ) : ?>
									<div class="text-lg !leading-[30px] tracking-[-0.72px]">
										<?php the_sub_field( 'title' ); ?>
									</div>
								<?php endif; ?>
								<?php if ( get_sub_field( 'desc' ) ) : ?>
									<div class="text-[#ffffffb3] leading-[30px] tracking-[-0.72px]">
										<?php the_sub_field( 'desc' ); ?>
									</div>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php if ( have_rows( 'footer_f3_list_menu', 'option' ) ) : ?>
					<div class="flex flex-1 xl:justify-evenly xl:gap-0 md:gap-20 gap-10">
						<?php while ( have_rows( 'footer_f3_list_menu', 'option' ) ) :
							the_row(); ?>
							<ul class="md:text-xl text-base tracking-[-0.72px] space-y-3">
								<?php if ( have_rows( 'list_menu' ) ) : ?>

									<?php while ( have_rows( 'list_menu' ) ) :
										the_row(); ?>
										<li>
											<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>">
												<?php the_sub_field( 'title' ) ?>
											</a>
										</li>
									<?php endwhile; ?>

								<?php endif; ?>

							</ul>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if ( get_field( 'copyright', 'option' ) ) : ?>

			<div
				class="lg:mt-[103px] mt-8 text-center text-[#ffffff99] lg:text-lg text-[10px] !leading-[30px]">
				<?php the_field( 'copyright', 'option' ); ?>
			</div>
		<?php endif; ?>
	</div>
</footer>
<div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svg( 'back-top', '20', '20', 'm-auto h-full' ) ?>
</div>


<?php wp_footer(); ?>
<div
	class="modal-backdrop fixed inset-0 top-0 transition-all duration-500 left-0 bg-[#000000d4] w-[100dvw] h-[100dvh] [&:not(.show)]:opacity-0 [&:not(.show)]:pointer-events-none [&:not(.show)]:invisible z-[2] <?= empty( $_SESSION['homepage_layout'] ) ? 'show' : '' ?>">
</div>
</body>

</html>