<section class="lg:my-[192px] my-[60px]" data-components="about_missions">
	<div class="container">
		<?php if ( get_field( 'main_title' ) ) : ?>
			<div
				class="text-content lg:text-[64px] text-4xl lg:leading-[1] text-center max-md:max-w-[230px] mx-auto">
				<?php the_field( 'main_title' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'list_content' ) ) : ?>
			<div class="lg:mt-12 mt-10  lg:rounded-[35px] rounded-[20px] overflow-hidden">
				<?php
                $i=0;
                while ( have_rows( 'list_content' ) ) :
					the_row();
                    $i++;
					$bg_color = get_sub_field( 'color' ) ?: '#ECF4FE';
					?>
					<div class="grid md:grid-cols-2 grid-cols-1">
						<div class="col-span-1 lg:py-10 lg:px-12 p-6 w-full <?= $i %2 ==0 ?'order-2':'' ?>"
							style="background-color: <?php echo $bg_color; ?>;">
                             <?php if( get_sub_field('title') ): ?>
                                <div class="text-primary lg:text-[48px] text-2xl lg:leading-[60px]">
                                   <?php the_sub_field('title'); ?>
                                </div>
                             <?php endif; ?>
                              <?php if( get_sub_field('content') ): ?>
                                 <div class="mt-8 the_content">
                                     <?php the_sub_field('content'); ?>
                                 </div>
                              <?php endif; ?>
						</div>
						<div class="col-span-1 <?= $i %2 ==0 ?'order-1':'' ?>">
							<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', false, [ 'class' => 'w-full h-full object-cover' ] ) ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>