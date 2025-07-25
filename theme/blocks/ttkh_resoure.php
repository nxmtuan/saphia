<section class="lg:my-[164px] my-[60px]" data-components="ttkh_resoure">
	<div class="container">
		<div class="max-w-[1389px] mx-auto">
			<?php if ( get_field( 'title' ) ) : ?>
				<div class="xl:text-[55px] text-2xl text-[#393CA2] text-center">
					<?php the_field( 'title' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'desc' ) ) : ?>
				<div class="lg:mt-9 mt-4 xl:text-4xl text-lg text-center text-content">
					<?php the_field( 'desc' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="lg:mt-[136px] mt-10 flex md:flex-row flex-col items-stretch">
			<?php if ( have_rows( 'content_left' ) ) : ?>

				<?php while ( have_rows( 'content_left' ) ) :
					the_row(); ?>
					<?php if ( get_sub_field( 'content' ) ) : ?>
						<div
							class="md:w-1/2 w-full xl:pr-[103px] pr-5 md:border-r border-primary lg:space-y-20 space-y-10 leading-[1] text-[#221F90] xl:text-[32px] text-xl prose-img:object-cover prose-img:w-full prose-img:h-auto">
							<?php the_sub_field( 'content' ); ?>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>

			<?php endif; ?>

<?php if( have_rows('content_right') ): ?>
    
    <?php while( have_rows('content_right') ): the_row();?>
        <div class="md:w-1/2 w-full">
            <?php if( have_rows('list_content') ): ?>
               
                <?php while( have_rows('list_content') ): the_row();?>
                   <div
                    class="lg:space-y-12 space-y-5 xl:p-[70px] md:p-5 py-8 border-b last:border-b-0 border-primary">
                     <?php if( get_sub_field('title') ): ?>
                        <div class="xl:text-4xl text-lg leading-[1]">
                            <?php the_sub_field('title'); ?>
                        </div>
                     <?php endif; ?>
                      <?php if( get_sub_field('desc') ): ?>
                         <div class="xl:text-[32px] text-xl text-[#221F90]">
                             <?php the_sub_field('desc'); ?>
                         </div>
                      <?php endif; ?>
                </div>
                <?php endwhile; ?>
                
            <?php endif; ?>
           
        </div>
    <?php endwhile; ?>
   
<?php endif; ?>
		</div>
	</div>
</section>