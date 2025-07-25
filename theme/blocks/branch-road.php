<section class="lg:my-[164px] my-[60px]">
	<div class="container">
		<?php if ( get_field( 'title' ) ) : ?>
			<div
				class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] text-[#000000E0] text-center">
				<?php the_field( 'title' ); ?>
			</div>
		<?php endif; ?>
		<div
			class="lg:mt-[60px] mt-10 flex 1.5xl:flex-row flex-col items-center gap-[70px] md:mx-0 -mx-5">
			<?php if ( have_rows( 'list_content' ) ) : ?>
				<div
					class="lg:w-[837px] w-full flex items-center justify-center gap-2 block_slider center_items watch_css has_autoplay">
					<?php
					$i = 0;
					while ( have_rows( 'list_content' ) ) :
						the_row();
						$i++;
						?>
						<div
							class="block_slider-item <?= $i === 2 ? 'md:w-1/3 w-[83%]' : 'md:w-[30%] w-[83%]' ?> aspect-[297/430] rounded-[42px] overflow-hidden p-2 flex flex-col lg:gap-6 md:gap-2 gap-6 bg-primary">
							<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'aspect-square w-full object-cover rounded-[34px]' ] ) ?>

							<div class="flex-1 text-white">
								<?php if ( get_sub_field( 'name' ) ) : ?>
									<div
										class="xl:text-[26px] text-xl leading-[1] tracking-[-0.96px] text-center">
										<?php the_sub_field( 'name' ); ?>
									</div>
								<?php endif; ?>
								<div class="mt-3 text-xs text-center">
									<?php _e( 'Doanh thu', 'gnws' ) ?>
								</div>
								<?php if ( get_sub_field( 'doanh_thu' ) ) : ?>

									<div
										class="mt-2 xl:text-[26px] text-xl  leading-[1] tracking-[-0.96px] text-center">
										<?php the_sub_field( 'doanh_thu' ); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<div class="flex-1 rounded-xl overflow-hidden border-2 border-primary">
				<table class="w-full border-collapse text-center">
					<thead>
						<tr class="bg-primary text-white">
							<th
								class="py-3 px-4 md:text-[25px] text-xs leading-[1] border border-primary">
								<?php _e( 'TOP', 'gnws' ) ?></th>
							<th
								class="py-3 px-4 md:text-[25px] text-xs leading-[1] border border-primary"><?php _e( 'NHÀ PHÂN
                                    PHỐI', 'gnws' ) ?></th>
							<th
								class="py-3 px-4 md:text-[25px] text-xs leading-[1] border border-primary"><?php _e( 'DOANH THU
                                    THỰC TẾ', 'gnws' ) ?></th>
						</tr>
					</thead>
					<?php if ( have_rows( 'list_tt' ) ) : ?>
						<tbody class="text-primary bg-white">
							<?php
                            $i=0;
                            while ( have_rows( 'list_tt' ) ) :
								the_row(); 
                                $i++;
                                ?>
								<tr>
									<td
										class="py-2 px-4 md:text-[25px] text-xs leading-[1] border border-primary font-semibold">
										<?= $i ?>
                                    </td>
									<td
										class="py-2 px-4 md:text-[25px] text-xs leading-[1] border border-primary">
										<?php the_sub_field( 'name' )  ?>
                                    </td>
									<td
										class="py-2 px-4 md:text-[25px] text-xs leading-[1] border border-primary">
										<?php the_sub_field( 'doanh_thu' )  ?>
                                    </td>
								</tr>
							<?php endwhile; ?>
						</tbody>
					<?php endif; ?>

				</table>
			</div>
		</div>
	</div>
</section>