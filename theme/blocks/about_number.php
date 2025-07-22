<section class="lg:my-[192px] my-[60px]" data-components="about_number">
	<div class="container">
		<div class="spave-y-[30px] text-right">
			<?php if ( have_rows( 'main_title' ) ) : ?>
				<div
					class="lg:text-[64px] text-[34px] lg:leading-[77px] leading-[40px] tracking-[-0.96px] highlight">
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

			<?php if ( get_field( 'desc' ) ) : ?>
				<div class="lg:text-lg text-xs text-[#525256]">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<div
			class="lg:mt-[50px] mt-10 relative 3xl:h-[540px] 1.5xl:h-[665px] xl:h-[641px] lg:h-[570px] md:h-[425px] h-[594px] overflow-hidden md:mx-0 -mx-5">
            <?php if( have_rows('list_number') ): ?>
                <div
				class="absolute left-0 md:bottom-0 max-md:top-0 1.5xl:w-[75.61%] xl:w-[77%] md:w-[78%] w-[220px] max-md:h-[465px] flex md:flex-row flex-col justify-between">
                <?php while( have_rows('list_number') ): the_row();?>
                   <div
						class="lg:p-10 p-3 1.5xl:size-[450px] xl:size-[400px] lg:size-[340px] md:size-[250px] size-[220px] rounded-full overflow-hidden border border-[#7ECAEB] bg-white flex flex-col items-center justify-center">
                         <?php if( get_sub_field('number') ): ?>
                            <div
                                class="lg:text-[95px] text-[60px] lg:leading-[104.5px] leading-[1] tracking-[-1.425px] text-content">
                               <?php the_sub_field('number'); ?>
                            </div>
                         <?php endif; ?>
                          <?php if( get_sub_field('desc') ): ?>
                             <div
                                 class="mt-[18px] lg:text-lg text-sm lg:leading-[32.4px] text-[#525256] text-center">
                                 <?php the_sub_field('desc'); ?>
                             </div>
                          <?php endif; ?>
					</div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
			
            <?php if( have_rows('list_number_bg') ): ?>
                <div
				class="absolute right-0 md:top-0 max-md:bottom-0 1.5xl:w-[75.61%] xl:w-[77%] md:w-[78%] w-[220px] max-md:h-[465px] flex md:flex-row flex-col justify-between">
                <?php while( have_rows('list_number_bg') ): the_row();
                $bg_color = get_sub_field('bg_color')?:'#F0BF8C'
                ?>
                   <div
						class="lg:p-10 p-3 1.5xl:size-[450px] xl:size-[400px] lg:size-[340px] md:size-[250px] size-[220px] rounded-full overflow-hidden <?= $i === 0 ? 'bg-[#F0BF8C]' : 'bg-[#5B79A4]' ?> flex flex-col items-center justify-center text-white" style="background-color: <?= $bg_color ?>;">
						<div
							class="lg:text-[95px] text-[60px] lg:leading-[104.5px] leading-[1] tracking-[-1.425px]">
							 <?php the_sub_field('number'); ?>
						</div>
						<div class="mt-[18px] lg:text-lg text-sm lg:leading-[32.4px] text-center">
							<?php the_sub_field('desc'); ?>
						</div>
					</div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
		
		</div>
	</div>
</section>