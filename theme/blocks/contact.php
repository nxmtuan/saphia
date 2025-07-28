<section class="lg:py-[100px] py-[60px]" data-component="contact">
	<div class="container">
		<div class="max-w-[841px] mx-auto flex flex-col items-center">
			<?php if ( have_rows( 'main_title' ) ) : ?>
				<div class="lg:text-4xl text-xl highlight text-center">
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

			<div class="mt-10 form-lien-he-saphia">
				<?php echo do_shortcode( '[contact-form-7 id="806e4c4" title="Form liên hệ với saphia"]' ); ?>
				
				<?php
				$button = get_sub_field( 'button' );
				$btn_title = ( is_array( $button ) && ! empty( $button['title'] ) ) ? $button['title'] : '';
				$btn_phone = ( is_array( $button ) && ! empty( $button['phone'] ) ) ? $button['phone'] : '';
				if ( $btn_title ) : ?>
					<a href="<?php echo check_link($btn_phone) ?>" class="call-button">
						<?php echo esc_html($btn_title); ?>
					</a>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>