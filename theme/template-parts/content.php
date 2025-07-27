<div
						class="w-full rounded-[20px] overflow-hidden flex flex-col bg-white shadow-ban-tin">
						<a href="<?php the_permalink(); ?>" class="block relative aspect-[340/226] w-full">
							<div class="size-full rounded-b-[20px] overflow-hidden relative">
                                <img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>" class="absolute inset-0 size-full hover:scale-105 transition-transform duration-300 object-cover">
								
							</div>
							<div
								class="absolute bottom-0 left-5 translate-y-1/2 rounded-full py-2.5 px-5 bg-[#E3E3E3] z-[1]">
								<?php echo get_the_date( 'j M' ); ?>
							</div>
						</a>
						<div class="flex-1 flex flex-col px-6 pb-6 pt-8">
							<a href="<?php the_permalink(); ?>"
								class="block flex-1 text-xl font-semibold line-clamp-3">
								<?php the_title(); ?>
							</a>
							<div class="mt-3 text-[#5C5C5C] line-clamp-2">
								<?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
							</div>
						</div>
					</div>