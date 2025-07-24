<section class="lg:my-[200px] my-[60px]">
	<div class="container">
		<div class="lg:space-y-9 space-y-5">
			<?php if ( get_field( 'title' ) ) : ?>
				<div
					class="lg:text-[64px] text-4xl leading-[1] bg-clip-text text-transparent bg-text-gradient text-center">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'desc' ) ) : ?>

				<div class="lg:text-xl text-base text-content text-center max-w-[760px] mx-auto">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div
				class="lg:mt-[50px] mt-10 flex md:flex-col md:gap-0 gap-5 mã-md:items-stretch md:space-y-[50px]">
				<div class="flex md:flex-row flex-col gap-5 md:items-center justify-evenly">
					<?php
					$i = 0;
					while ( have_rows( 'list_content' ) ) :
						the_row();
						$i++;
						?>
						<div class="relative lg:px-[38px]">
							<div
								class="lg:size-[150px] size-[100px] rounded-full bg-primary text-white flex items-center justify-center">
								<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full', false, [ 'class' => 'lg:size-[96px] size-[60px] shrink-0 object-contain' ] ) ?>
								<div
									class="absolute top-0 right-0 lg:size-10 size-5 rounded-full overflow-hidden lg:border-[5px] border-[3px] border-[#26AAE1] flex justify-center items-center lg:text-xl text-sm text-content">
									<?php echo $i; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="md:block hidden w-full h-2.5 rounded-full bg-[#26AAE1]"></div>
				<div class="flex md:flex-row flex-col gap-5 md:items-center justify-evenly">
					<?php
					
					while ( have_rows( 'list_content' ) ) :
						the_row();
						?>
						<div class="max-w-[226px] lg:space-y-5 space-y-3 text-center">
                             <?php if( get_sub_field('title') ): ?>
                                <div
                                    class="lg:text-[28px] text-xl leading-[1] tracking-[-0.754px] text-content">
                                 <?php the_sub_field('title'); ?>
                                </div>
                             <?php endif; ?>
                              <?php if( get_sub_field('desc') ): ?>
                                 <div class="lg:text-xl text-sm leading-[1] text-content">
                                     <?php the_sub_field('desc'); ?>
                                 </div>
                              <?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>

	</div>
</section>