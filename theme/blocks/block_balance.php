<section class="lg:my-[200px] my-[60px]" data-components="block_balance">
	<div class="container">
		<?php if ( have_rows( 'desc_top' ) ) : ?>

			<?php while ( have_rows( 'desc_top' ) ) :
				the_row(); ?>
				<div class="lg:space-y-[30px] space-y-6">
					<?php if ( get_sub_field( 'title' ) ) : ?>
						<div
							class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] bg-clip-text text-transparent bg-text-gradient">
							<?php the_sub_field( 'title' ); ?>
						</div>
					<?php endif; ?>
					<?php if ( get_sub_field( 'desc' ) ) : ?>
						<div class="max-w-[836px] lg:text-lg text-sm text-[#525256]">
							<?php the_sub_field( 'desc' ); ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>

		<?php endif; ?>

		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="lg:my-[50px] my-10 grid grid-cols-2 grid-rows-3 lg:gap-x-[30px] lg:gap-y-[10px] gap-2">
				<?php
				$i = 1;
				while ( have_rows( 'list_content' ) ) :
					the_row();
					$i++;
					?>
					<div
						class="<?= $i % 2 == 0 ? 'row-span-2' : 'row-span-1' ?> w-full relative rounded-[35px] overflow-hidden lg:min-h-[291px] min-h-[150px]">
						<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'absolute inset-0 size-full object-cover' ] ) ?>

					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php if ( have_rows( 'desc_bottom' ) ) : ?>

			<?php while ( have_rows( 'desc_bottom' ) ) :
				the_row(); ?>
				<div class="lg:space-y-[30px] space-y-6 text-end">
                     <?php if( get_sub_field('title') ): ?>
                        
                        <div
                            class="lg:text-[64px] text-4xl leading-[1] tracking-[-0.96px] bg-clip-text text-transparent bg-text-gradient">
                           <?php the_sub_field('title'); ?>
                        </div>
                     <?php endif; ?>
                      <?php if( get_sub_field('desc') ): ?>
                         <div class="lg:text-lg text-sm lg:space-y-5 space-y-2 text-[#525256]">
                           <?php the_sub_field('desc'); ?>
                         </div>
                      <?php endif; ?>
				</div>
			<?php endwhile; ?>

		<?php endif; ?>

	</div>
</section>