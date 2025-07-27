<section class="lg:my-[164px] my-[60px]" data-component="branch-system">
	<div class="container">
		<?php if (get_field('title')): ?>
			<div class="lg:text-[64px] text-4xl lg:leading-[77px] tracking-[-0.96px] text-[#000000E0] text-center">
				<?php the_field('title'); ?>
			</div>
		<?php endif; ?>
		<div class="md:mt-20 mt-5 list_transaction">
			<div
				class="mt-6 flex md:flex-row flex-col-reverse items-stretch xl:gap-20 md:gap-8 gap-6 md:mx-0 -mx-[1.375rem]">
				<div class="md:w-[33%] w-full">
					<div class="w-full flex items-end gap-5 max-md:px-5">
						<div class="w-1/2">
							<span class="font-medium text-content"><?php _e('Tỉnh/thành', 'acbs') ?></span>
							<div class="w-full relative">
								<select
									class="appearance-none bg-white w-full py-2 pl-5 pr-7 rounded-full border border-[#EAEEF4] text-sm text-[#151515] focus:outline-none focus:border-primary cursor-pointer transition-colors duration-300"
									name="province">
									<option value="all" selected><?php _e('Tất cả', 'acbs') ?></option>
									<?php
									$terms = get_terms([
										'taxonomy' => 'province',
										'hide_empty' => true,
										'parent' => 0,
									]);

									if (!is_wp_error($terms) && !empty($terms)):
										foreach ($terms as $term):
											?>
											<option value="<?php echo esc_attr($term->term_id); ?>">
												<?php echo esc_html($term->name); ?>
											</option>
											<?php
										endforeach;
									endif;
									?>
								</select>
								<?php echo svg('chevron-down', '', '', 'icon w-5 h-5 absolute top-1/2 right-2.5 -translate-y-1/2 [&:not(.active)]:rotate-0 rotate-180 transition-transform duration-300 pointer-events-none') ?>
							</div>
						</div>
						<div class="w-1/2">
							<span class="font-medium text-content"><?php _e('Phường/Xã', 'acbs') ?></span>
							<div class="w-full relative">
								<select
									class="appearance-none bg-white w-full py-2 pl-5 pr-7 rounded-full border border-[#EAEEF4] text-sm text-[#151515] focus:outline-none focus:border-primary cursor-pointer transition-colors duration-300"
									name="wards">
									<option value="" selected><?php _e('Tất cả', 'acbs') ?></option>

								</select>
								<?php echo svg('chevron-down', '', '', 'icon w-5 h-5 absolute top-1/2 right-2.5 -translate-y-1/2 [&:not(.active)]:rotate-0 rotate-180 transition-transform duration-300 pointer-events-none') ?>
							</div>
						</div>
					</div>
					<div
						class="mt-6 w-full md:shadow-location shadow-contentCard bg-white rounded-[0.625rem] overflow-hidden md:py-4 py-3">
						<div class="md:block flex items-center gap-2.5 md:px-0 px-2.5 pb-2.5">
							<div class="w-full md:px-4">
								<div class="relative">
									<?php echo svg('search', '', '', 'size-6 size-[1.125rem] shrink-0 absolute left-4 top-1/2 -translate-y-1/2') ?>
									<input id="search-transaction" type="text"
										placeholder="<?php _e('Tìm kiếm', 'acbs') ?>"
										class="w-full rounded-full overflow-hidden bg-white border border-[#DDE2EA] pl-12 md:pr-4 pr-2.5 md:py-3 py-2 md:text-base text-sm focus:outline-none focus:border-primary transition-colors duration-300">
								</div>
							</div>
						</div>
						<div class="lg:h-[34.75rem] md:h-[21.75rem] h-[21.75rem] list_location overflow-y-auto">
							<?php
							$args = array(
								'post_type' => 'branch',
								'posts_per_page' => -1,
								'post_status' => 'publish',
							);

							$query = new WP_Query($args);

							$first_iframe = '';

							if ($query->have_posts()):
								while ($query->have_posts()):
									$query->the_post();

									if ($query->current_post === 0) {
										$first_iframe = get_field('branch_iframe', get_the_ID());
									}

									get_template_part('template-parts/content', get_post_type());
								endwhile;
								wp_reset_postdata();
							endif;
							?>
						</div>

					</div>
				</div>

				<div class="md:flex-1 max-md:h-[14.375rem]">
					<div class="rounded-[0.625rem] overflow-hidden w-full h-full block_iframe">
						<?php echo $first_iframe; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function ($) {
		const $provinceSelect = $('[name="province"]');
		const $wardsSelect = $('[name="wards"]');
		const $listContainer = $('.list_location');

		$provinceSelect.on('change', function () {
			const provinceId = $(this).val();

			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				dataType: 'json',
				data: {
					action: 'load_wards_and_posts',
					province_id: provinceId,
					security: ajaxurl.security
				},
				success: function (response) {
					// Load danh sách quận/huyện (wards)
					$wardsSelect.html('<option value=""><?php _e('Tất cả', 'acbs'); ?></option>');
					if (response.data && Array.isArray(response.data.wards)) {
						response.data.wards.forEach(function (term) {
							$wardsSelect.append('<option value="' + term.id + '">' + term.name + '</option>');
						});
					}

					// Hiển thị bài viết
					if (response.data && response.data.html) {
						$listContainer.html(response.data.html);
					}
				}
			});
		});

		$wardsSelect.on('change', function () {
			const wardId = $(this).val();

			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				data: {
					action: 'load_posts_by_ward',
					ward_id: wardId,
					security: ajaxurl.security
				},
				success: function (html) {
					$listContainer.html(html);
				}
			});
		});

		// Xử lý khi click .selected-item, lấy data-map và gán vào .block_iframe
		$('.selected-item').on('click', function () {
			const mapValue = $(this).data('map');
			if (mapValue) {
				$('.block_iframe').html(mapValue);
			}
		});
	});



</script>