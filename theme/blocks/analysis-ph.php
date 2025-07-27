<section class="lg:my-[200px] my-[60px]" data-component="analysis-ph">
		<div class="container">
			<div
				class="flex lg:flex-row flex-col lg:items-stretch xl:gap-11 md:gap-3 md:mx-0 -mx-5">
				<div
					class="p-5 lg:w-2/5 w-full md:rounded-[35px] overflow-hidden border-2 border-[#ECF4FE] shadow-product hidden tracking_ph_update">
					<div class="text-lg">
						<?php _e( 'Cập nhật thông tin hôm nay', 'gnws' ) ?>
					</div>
					<div class="mt-5 w-full">
						<label for="phSlider" class="block text-[15px]">
							<?php _e( 'Giá trị pH của bạn', 'gnws' ) ?>
						</label>

						<input id="phSlider" type="range" min="5.5" max="8.0" step="0.1" value="7.0"
							class="w-full h-[3px] appearance-none cursor-pointer bg-line-gradient">

						<div id="valueDisplay" class="text-center text-[15px]">7.0</div>

						<div class="flex justify-between text-xs -mt-4">
							<span class="text-red-600">Axit (5.5)</span>
							<span class="text-green-600">Kiềm (8.0)</span>
						</div>
					</div>
					<div class="mt-5 text-lg text-content">
						Bạn cảm thấy thế nào hôm nay?
					</div>
					<div class="mt-5 flex justify-between tracking-status">
						<div
							class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300 group">
							<?php echo svg( 'angry-face', '', '', 'xl:size-[60px] size-10 shrink-0' ) ?>
							<span
								class="xl:text-base text-xs text-content text-center tracking-status-label">
								<?php _e( 'Tệ', 'gnws' ) ?>
							</span>
						</div>
						<div
							class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300">
							<?php echo svg( 'downcast-face', '', '', 'xl:size-[60px] size-10 shrink-0' ) ?>
							<span
								class="xl:text-base text-xs text-content text-center tracking-status-label">
								<?php _e( 'Không tốt', 'gnws' ) ?>
							</span>
						</div>
						<div
							class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300 active">
							<?php echo svg( 'kissing-face', '', '', 'xl:size-[60px] size-10 shrink-0' ) ?>
							<span class="xl:text-base text-xs text-content text-center tracking-status-label">
								<?php _e( 'Bình thường', 'gnws' ) ?>
							</span>
						</div>
						<div
							class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300">
							<?php echo svg( 'winking-face', '', '', 'xl:size-[60px] size-10 shrink-0' ) ?>
							<span
								class="xl:text-base text-xs text-content text-center tracking-status-label">
								<?php _e( 'Tốt', 'gnws' ) ?>
							</span>
						</div>
						<div
							class="emoji p-1 flex flex-col items-center gap-[5px] cursor-pointer rounded-lg [&:not(.active)]:bg-transparent bg-[#ababab57] transition-colors duration-300">
							<?php echo svg( 'face-blowing', '', '', 'xl:size-[60px] size-10 shrink-0' ) ?>
							<span
								class="xl:text-base text-xs text-content text-center tracking-status-label">
								<?php _e( 'Rất tốt', 'gnws' ) ?>
							</span>
						</div>
					</div>
					<div
						class="btn-submitPH mt-5 mx-auto lg:p-2.5 p-2 min-w-[263px] w-fit rounded-full overflow-hidden bg-primary hover:bg-[#224393c7] text-white lg:text-xl text-sm text-center cursor-pointer transition-colors duration-300 tracking-update">
						<?php _e( 'Cập nhật giá trị mới', 'gnws' ) ?>
					</div>
				</div>

				<!-- Form điền thông tin cho user lần đầu -->
				<div
					class="md:p-10 p-5 lg:w-2/5 w-full md:rounded-[35px] overflow-hidden flex justify-center bg-[#ECF4FE] box_tracking">
					<div class="max-w-[513px]">
						<div class="md:text-5xl text-2xl tracking-[-0.72px] text-content">
							<?php _e( 'Đăng ký theo dõi pH hàng ngày', 'gnws' ) ?>
						</div>
						<div class="mt-3 md:text-lg text-[#525256]">
							<?php _e( 'Ghi lại pH hàng ngày và đề xuất giải pháp cá nhân hóa cho bạn', 'gnws' ) ?>
						</div>
						<div class="mt-10 w-full space-y-5">
							<input id="name_cus" type="text" placeholder="Họ và tên"
								class="md:p-5 px-5 py-2 w-full bg-white rounded-xl overflow-hidden md:text-lg text-[#525256] border border-transparent focus:outline-none focus:border-primary transition-colors duration-300">

							<input type="tel" id="phone_cus" placeholder="Số điện thoại"
								class="md:p-5 px-5 py-2 w-full bg-white rounded-xl overflow-hidden md:text-lg text-[#525256] border border-transparent focus:outline-none focus:border-primary transition-colors duration-300">
							<button id="btn_sign_ph"
								class="mx-auto w-fit bg-primary hover:bg-[#224393c7] rounded-full overflow-hidden py-5 px-10 text-white text-xl text-center cursor-pointer transition-colors duration-300 block">
								<?php _e( ' Đăng ký', 'gnws' ) ?>
							</button>
						</div>
					</div>
				</div>

				<div
					class="relative p-5 flex-1 md:rounded-[35px] overflow-hidden border-2 border-[#ECF4FE] shadow-product">
					<!-- Blur kết quả cho user lần đầu -->
					<div class="absolute z-[1] inset-0 size-full backdrop-blur-lg tracking-blur">
					</div>
					<div class="flex md:flex-row flex-col md:items-center md:justify-between">
						<div class="text-lg">
							Cập nhật thông tin hôm nay
						</div>
						<div
							class="p-[6px] lg:min-w-[180px] max-lg:w-fit border border-primary text-primary bg-white hover:hover:bg-[#f5f1f1] text-sm cursor-pointer text-center rounded-full overflow-hidden transition-colors duration-300">
							<?php _e( 'Nhận lời khuyên', 'gnws' ) ?>
						</div>
					</div>
					<div id="pHChart"></div>
					<div
						class="px-[30px] py-2 bg-[#ECF4FE] rounded-[35px] overflow-hidden space-y-[5px] hidden">
						<div class="xl:text-2xl text-lg text-content">
							Phân tích:
						</div>
						<div class="xl:text-lg text-sm text-[#525256]">
							Độ pH của bạn đã cải thiện đáng kể trong tuần qua, tăng từ 6.2 lên 7.0.
							Tiếp tục duy trì chế
							độ ăn giàu thực phẩm kiềm và sử dụng sản phẩm Kiềm Thảo Dược Saphia để
							đạt được kết quả tốt
							nhất.
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ( session_id() && ! empty( $_SESSION['ph_phone'] ) && ( time() - $_SESSION['ph_phone_ts'] ) <= 30 * 24 * 60 * 60 ) : ?>
			<script>
				jQuery(function ($) {
					$('.box_tracking').hide();
					$('.tracking_ph_update').removeClass('hidden');
					$('.tracking-blur').addClass('hidden');
				});
			</script>
			<style>
				.emoji.active .tracking-status-label {
					color: #5D9A00;
				}
			</style>
		<?php endif; ?>
	</section>