import Masonry from 'masonry-layout';
import ApexCharts from 'apexcharts';

(() => {
	// javascript/script.js
	(function ($) {
		$(function () {
			backToTop();
			handleSwiper();
			setSameHeight();
			marqueeSlider();
			cardSlider();
			toggleContent();
			toggleMenuMobile();
			handleMansoryLayout();
			pHSlider();
			pHChart();
			highlightText();
			handlePopup();
			activeItemOnClick();
			switchTab();
			toggleContentBlock();
			scaleOnScroll();
			trackingPh();
		});

		let swiperInstances = [];

		function setSameHeight() {
			if (window.innerWidth >= 768) return;

			$('.block_sameheight').each(function () {
				var h = 0;

				$(this)
					.find('.sameheight-item')
					.each(function () {
						if ($(this).outerHeight() > h) {
							h = $(this).outerHeight();
						}
					});

				$(this).find('.sameheight-item').css({
					height: h,
				});
			});
		}

		function handleSwiper() {
			const isMobile = window.matchMedia('(max-width: 767px)').matches;

			$('.block_slider').each(function (index) {
				const $slider = $(this);
				const swiperId = 'swiper-' + index;
				const $slides = $slider.find('.block_slider-item');
				const slideQty = $slides.length;

				const isMobileOnly = $slider.hasClass('watch_css');

				/* ----- TH1: slider chỉ chạy trên mobile, đang ở desktop → huỷ ----- */
				if (!isMobile && isMobileOnly) {
					if (swiperInstances[index]) {
						swiperInstances[index].destroy(true, true);
						swiperInstances[index] = null;
					}
					return;
				}

				/* ----- TH2: có 0‑1 slide → KHÔNG khởi tạo, ẩn nav/dot, tắt drag ----- */
				if (slideQty <= 1) {
					// Hủy instance cũ (nếu có)
					if (swiperInstances[index]) {
						swiperInstances[index].destroy(true, true);
						swiperInstances[index] = null;
					}
					// Dọn DOM dư thừa từ lần khởi tạo trước (nếu có)
					$slider
						.removeClass(function (_, cls) {
							// gỡ mọi class bắt đầu bằng “swiper”
							return (cls.match(/(^|\s)swiper\S+/g) || []).join(
								' '
							);
						})
						.find(
							'.swiper-button-next, .swiper-button-prev, .swiper-pagination'
						)
						.remove();
					$slides.removeClass('swiper-slide');
					return; // kết thúc xử lý block này
				}

				/* ----- Đã có instance hợp lệ → bỏ qua ----- */
				if (swiperInstances[index]) return;

				/* ----- Khởi tạo Swiper cho block có ≥ 2 slide ----- */
				$slider.addClass(`swiper ${swiperId}`);
				$slides.addClass('swiper-slide');

				// Chỉ wrap 1 lần
				if ($slider.find('.swiper-wrapper').length === 0) {
					$slides.wrapAll('<div class="swiper-wrapper"></div>');
				}

				// Navigation
				let nextBtn = null,
					prevBtn = null;
				if ($slider.hasClass('has_nav')) {
					$slider.append(`
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			`);
					nextBtn = $slider.find('.swiper-button-next')[0];
					prevBtn = $slider.find('.swiper-button-prev')[0];
				}

				// Autoplay
				const autoplayConfig = $slider.hasClass('has_autoplay')
					? { delay: 3000, disableOnInteraction: false }
					: false;

				// Cấu hình cơ bản
				const swiperConfig = {
					slidesPerView: 'auto',
					spaceBetween: 16,
					loop: $slider.hasClass('loop'),
					centeredSlides: $slider.hasClass('center_items'),
					autoplay: autoplayConfig,
				};

				// Pagination (dots)
				if ($slider.hasClass('has_dots')) {
					const $pagination = $(
						'<div class="swiper-pagination"></div>'
					);
					$slider.append($pagination);
					swiperConfig.pagination = {
						el: $pagination[0],
						clickable: true,
					};
				}

				// Navigation
				if (nextBtn && prevBtn) {
					swiperConfig.navigation = {
						nextEl: nextBtn,
						prevEl: prevBtn,
					};
				}

				// Khởi tạo & lưu instance
				swiperInstances[index] = new Swiper(
					`.${swiperId}`,
					swiperConfig
				);
			});
		}

		function marqueeSlider() {
			// COMMON OPTIONS
			const commonOpts = {
				direction: 'vertical',
				slidesPerView: 'auto',
				spaceBetween: 5,
				speed: 10000, // sẽ override bằng data-speed
				freeMode: true,
				freeModeMomentum: false,
				resistance: true,
				resistanceRatio: 0,
				loop: true,
				allowTouchMove: false,
				autoplay: {
					delay: 1,
					disableOnInteraction: false,
					pauseOnMouseEnter: false,
				},
			};

			// MARQUEE
			const marqueeCarouselSpeed =
				$('.marquee-carousel').data('speed') || 10000;
			const marqueeCarousel = new Swiper('.marquee-carousel', {
				...commonOpts,
				speed: marqueeCarouselSpeed,
			});

			// REVERSE MARQUEE
			const reverseMarqueeCarouselSpeed =
				$('.reverse-marquee-carousel').data('speed') || 10000;
			const reverseMarqueeCarousel = new Swiper(
				'.reverse-marquee-carousel',
				{
					...commonOpts,
					speed: reverseMarqueeCarouselSpeed,
					autoplay: {
						...commonOpts.autoplay,
						reverseDirection: true,
					},
				}
			);
		}

		function cardSlider() {
			var navSwiper = new Swiper('.nav-slider', {
				slidesPerView: 1, // Hiển thị 3 thumbnail cùng lúc
				spaceBetween: 10, // Khoảng cách giữa các thumbnail
				watchSlidesProgress: true, // Theo dõi tiến trình của slide
				watchSlidesVisibility: true, // Theo dõi khả năng hiển thị của slide
				allowTouchMove: false,
			});

			var swiper = new Swiper('.main-slider', {
				effect: 'cards',
				grabCursor: true,
				initialSlide: 1,
				cardsEffect: {
					perSlideOffset: 30, // Tăng giá trị này để các thẻ xòe ra xa hơn (mặc định là 8)
					perSlideRotate: 15, // Tăng giá trị này để các thẻ quay nhiều hơn (mặc định là 2)
					rotate: true, // Mặc định là true, có thể giữ nguyên hoặc thay đổi
					slideShadows: true, // Mặc định là true, có thể giữ nguyên hoặc thay đổi
				},
				controller: {
					control: navSwiper,
				},
			});
		}

		function handleMansoryLayout() {
			if ($('#masonry').length) {
				new Masonry('#masonry', {
					itemSelector: '.grid-item',
					percentPosition: true,
					gutter: 8,
				});
			}
		}

		function toggleContent() {
			// Toggle từng cặp nút/box
			$(document).on('click', '[data-open]', function (e) {
				e.preventDefault();
				var $btn = $(this);
				var target = $btn.data('open');
				if (!target) return;

				$btn.toggleClass('active');
				var $box = $(target);
				$box.toggleClass('active');

				// Nếu box có .close-icon thì thêm no-scroll cho body khi mở
				if (
					$box.find('.close-icon').length &&
					$box.hasClass('active')
				) {
					$('body').addClass('no-scroll');
				}
				// Nếu tất cả box đều đã đóng thì bỏ no-scroll
				if ($('[id].active').length === 0) {
					$('body').removeClass('no-scroll');
				}
			});

			// Click ra ngoài: đóng hết
			$(document).on('click', function (e) {
				if ($(e.target).closest('[data-open], .active').length === 0) {
					$('[data-open]').removeClass('active');
					$('[id].active').removeClass('active');
					$('body').removeClass('no-scroll');
				}
			});

			// Click vào nút .close-icon bên trong box
			$(document).on('click', '.close-icon', function (e) {
				e.stopPropagation();
				var $box = $(this).closest('[id]');
				var boxId = '#' + $box.attr('id');
				var $btn = $('[data-open="' + boxId + '"]');
				$btn.removeClass('active');
				$box.removeClass('active');
				// Kiểm tra nếu không còn box nào mở thì bỏ no-scroll
				if ($('[id].active').length === 0) {
					$('body').removeClass('no-scroll');
				}
			});
		}

		function toggleMenuMobile() {
			var $menuItems = $('.main-menu-mobile > li.menu-item-has-children');
			var $allSubMenus = $menuItems.find('ul.sub-menu');
			var $allLinks = $menuItems.children('a');

			// Đảm bảo tất cả submenu đóng khi vừa load
			$allSubMenus.hide();

			// Sự kiện click
			$allLinks.on('click', function (e) {
				e.preventDefault();
				var $link = $(this);
				var $submenu = $link.next('ul.sub-menu');

				if ($submenu.is(':visible')) {
					// Đang mở thì đóng lại
					$submenu.stop(true, true).slideUp(250);
					$link.removeClass('rotated');
				} else {
					// Đóng tất cả submenu khác và gỡ xoay icon
					$allSubMenus.not($submenu).stop(true, true).slideUp(250);
					$allLinks.not($link).removeClass('rotated');

					// Mở submenu này và xoay icon
					$submenu.stop(true, true).slideDown(250);
					$link.addClass('rotated');
				}
			});
		}

		function pHSlider() {
			const $slider = $('#phSlider');
			const $display = $('#valueDisplay');
			const $emojiItems = $('.emoji');
			const $submitBtn = $('.btn-submitPH');

			// Đảm bảo các phần tử tồn tại
			if (
				!$slider.length ||
				!$display.length ||
				!$emojiItems.length ||
				!$submitBtn.length
			)
				return;

			// Cập nhật giá trị pH hiển thị
			$slider.on('input', function () {
				$display.text(parseFloat(this.value).toFixed(1));
			});

			// Toggle emoji
			$emojiItems.on('click', function () {
				const $this = $(this);
				const isActive = $this.hasClass('active');
				$emojiItems.removeClass('active');
				if (!isActive) {
					$this.addClass('active');
				}
			});

			// Xử lý nút submit
			$submitBtn.on('click', function () {
				const phValue = parseFloat($slider.val()).toFixed(1);
				const $selected = $emojiItems.filter('.active');

				if (!$selected.length) {
					alert('Vui lòng chọn tâm trạng của bạn.');
					return;
				}

				const moodText = $selected.find('span').text().trim();

				alert(
					`Giá trị pH bạn chọn là: ${phValue}\nTâm trạng hiện tại: ${moodText}`
				);
			});
		}

		function backToTop() {
			var $backToTop = $('.back-to-top');
			$backToTop.hide();

			$(window).on('scroll', function () {
				if ($(this).scrollTop() > 200) {
					$backToTop.fadeIn();
				} else {
					$backToTop.fadeOut();
				}
			});

			$backToTop.on('click', function (e) {
				$('html, body').animate({ scrollTop: 0 }, 50);
			});
		}

		function pHChart() {
			const el = document.querySelector('#pHChart');
			if (!el) {
				return;
			}
			const options = {
				chart: {
					type: 'area',
					height: 250,
					toolbar: { show: false },
				},
				series: [
					{
						name: 'Giá trị pH',
						data: [7, 1.8, 7.5, 3.6, 2.1, 7.3, 7.2],
					},
				],
				xaxis: {
					categories: [
						'Thứ 2',
						'Thứ 3',
						'Thứ 4',
						'Thứ 5',
						'Thứ 6',
						'Thứ 7',
						'Chủ nhật',
					],
				},
				stroke: {
					curve: 'smooth',
					width: 2,
				},
				markers: {
					size: 6,
					colors: ['#00B0F0'],
					strokeColors: '#fff',
					strokeWidth: 2,
					shape: 'circle', // đảm bảo là hình tròn
				},
				fill: {
					type: 'gradient',
					gradient: {
						shadeIntensity: 1,
						opacityFrom: 0.4,
						opacityTo: 0.05,
						stops: [0, 100],
						colorStops: [
							{
								offset: 0,
								color: '#00B0F0',
								opacity: 0.4,
							},
							{
								offset: 100,
								color: '#00B0F0',
								opacity: 0.05,
							},
						],
					},
				},
				colors: ['#00B0F0'],
				dataLabels: {
					enabled: false,
				},
				grid: {
					borderColor: '#e0e0e0',
				},
				legend: {
					enabled: true,
					position: 'bottom',
				},
				tooltip: {
					enabled: true,
				},
			};

			const chart = new ApexCharts(el, options);
			chart.render();
		}

		function highlightText() {
			const $list = $('#highlight-list');
			const $items = $list.find('.highlight-item');
			const count = $items.length;
			let i = 0;

			// Đảm bảo container cao đúng 1 dòng chữ
			const itemHeight = $items.first().outerHeight();
			$('#highlight-container').height(itemHeight);

			setInterval(function () {
				i = (i + 1) % count;
				$list.css('transform', `translateY(-${i * itemHeight}px)`);
			}, 3000);
		}

		function handlePopup() {
			$(document).on('click', '[data-popup]', function () {
				$('.popup').removeClass('show');

				var targetId = $(this).attr('data-popup');
				$('#' + targetId).addClass('show');
				$('.modal-backdrop').addClass('show');
			});
			$('.modal-backdrop').click(function name(e) {
				$(this).removeClass('show');
				$('.popup').removeClass('show');
			});

			$(document).on('click', '.close-popup', function () {
				$(this).closest('.popup').removeClass('show');
				$('.modal-backdrop').removeClass('show');
			});

			// Handle populating add-cart-popup form
			$('[data-popup="add-cart-popup"]').on('click', function () {
				var productName = $('.product-name').text().trim();
				var productPrice = $('.product-price').text().trim();
				var productPriceMonthly = $('.product-price-monthly')
					.text()
					.trim();
				var form = $('#add-cart-popup');
				form.find('input[name="product-name"]').val(productName);
				form.find('input[name="product-price"]').val(productPrice);
				form.find('input[name="product-monthly"]').val(
					productPriceMonthly
				);
			});
		}

		function activeItemOnClick() {
			$(document)
				.off('click.selectItem', '.selected-item')
				.on('click.selectItem', '.selected-item', function (e) {
					if ($(this).hasClass('active')) {
						return;
					}
					$('.selected-item.active').removeClass('active');
					$(this).addClass('active');
				});

			// Kích hoạt item đầu tiên nếu chưa có cái nào active
			const $firstItem = $('.selected-item').first();
			if ($firstItem.length && !$('.selected-item.active').length) {
				$firstItem.addClass('active');
			}
		}

		function switchTab(selector = '.tab-wrapper', opts = {}) {
			const o = $.extend(
				{
					btn: '.tab-button',
					content: '.tab-content',
					activeClass: 'active',
					fadeOut: 150,
					fadeIn: 200,
					ns: '.tabs', // namespace để tránh chồng sự kiện
				},
				opts
			);

			$(selector).each(function () {
				const $wrap = $(this);
				const $btns = $wrap.find(o.btn);
				const $cts = $wrap.find(o.content);

				if (!$btns.length || !$cts.length) return;

				// Gỡ bind cũ
				$btns.off(o.ns);

				// Trạng thái mặc định
				$cts.hide().eq(0).show();
				$btns.removeClass(o.activeClass).eq(0).addClass(o.activeClass);

				// Click
				$btns.on('click' + o.ns, function (e) {
					e.preventDefault();
					const $b = $(this);
					if ($b.hasClass(o.activeClass)) return;

					const idx = $btns.index($b);

					$btns.removeClass(o.activeClass);
					$b.addClass(o.activeClass);

					$cts.stop(true, true)
						.fadeOut(o.fadeOut)
						.eq(idx)
						.fadeIn(o.fadeIn);
				});
			});
		}

		function toggleContentBlock(selector = '.content-wrapper', opts = {}) {
			const o = $.extend(
				{
					btn: '.content-btn',
					block: '.content-block',
					icon: '.icon',
					activeClass: 'active',
					slideDur: 250,
					accordion: false, // true: đóng các block khác trong cùng wrapper
					ns: '.cnt', // namespace để tránh chồng sự kiện
				},
				opts
			);

			$(selector).each(function () {
				const $wrap = $(this);
				const $btn = $wrap.find(o.btn).first(); // theo cấu trúc mẫu là 1 cặp
				const $block = $wrap.find(o.block).first();

				if (!$btn.length || !$block.length) return; // thiếu gì thì thôi, không crash

				// Ẩn block mặc định
				if (!$block.data('inited')) {
					$block.hide().data('inited', true);
				}

				// Hủy bind cũ
				$btn.off('click' + o.ns);

				$btn.on('click' + o.ns, function (e) {
					e.preventDefault();

					const $thisWrap = $(this).closest(selector);
					const $thisBlock = $thisWrap.find(o.block).first();
					const $thisIcon = $thisWrap.find(o.icon).first();

					// Accordion: đóng những block khác
					if (o.accordion) {
						$(selector)
							.not($thisWrap)
							.each(function () {
								const $b = $(this).find(o.block).first();
								const $i = $(this).find(o.icon).first();
								if ($b.is(':visible'))
									$b.stop(true, true).slideUp(o.slideDur);
								$i.removeClass(o.activeClass);
							});
					}

					// Toggle block
					if ($thisBlock.is(':visible')) {
						$thisBlock.stop(true, true).slideUp(o.slideDur);
						$thisIcon.removeClass(o.activeClass);
					} else {
						$thisBlock.stop(true, true).slideDown(o.slideDur);
						$thisIcon.addClass(o.activeClass);
					}
				});
			});
		}

		function scaleOnScroll() {
			var $items = $('.scroll-scale-item');

			function scaleOnScroll() {
				var winTop = $(window).scrollTop(),
					winHeight = $(window).height(),
					viewportCenter = winTop + winHeight / 2;

				$items.each(function () {
					var $el = $(this),
						elTop = $el.offset().top,
						elBottom = elTop + $el.outerHeight();

					// nếu đường center của viewport nằm giữa top & bottom của element
					if (elTop < viewportCenter && elBottom > viewportCenter) {
						$el.addClass('scale-item');
					} else {
						$el.removeClass('scale-item');
					}
				});
			}

			// binding scroll & resize
			$(window).on('scroll resize', scaleOnScroll);
			// chạy lần đầu
			scaleOnScroll();
		}

		function trackingPh() {
			$('#btn_sign_ph').on('click', function (e) {
				e.preventDefault();

				var name = $('#name_cus').val().trim();
				var phone = $('#phone_cus').val().trim();

				if (!name || !phone) {
					Swal.fire({
						icon: 'warning',
						title: 'Thiếu thông tin',
						text: 'Nhập đầy đủ thông tin',
					});
					return;
				}

				$.ajax({
					url: ajaxurl.ajaxurl,
					method: 'POST',
					dataType: 'json',
					data: {
						action: 'ph_tracking_create',
						security: ajaxurl.security,
						name_customer: name,
						name_phone: phone,
					},
					beforeSend: function () {
						Swal.fire({
							title: 'Vui lòng chờ...',
							allowOutsideClick: false,
							didOpen: () => {
								Swal.showLoading();
							},
						});
					},
					success: function (res) {
						Swal.close();
						if (res.success) {
							Swal.fire({
								icon: 'success',
								title: 'Thành công',
								text: 'Đã lưu thông tin theo dõi!',
							}).then((result) => {
								if (result.isConfirmed) {
									// Lưu phone vào cookie 1 tháng
									document.cookie =
										'ph_phone=' +
										encodeURIComponent(phone) +
										'; max-age=' +
										30 * 24 * 60 * 60 +
										'; path=/';
									// Ẩn và hiển khối tương ứng
									$('.box_tracking').hide();
									$('.tracking_ph_update').removeClass(
										'hidden'
									);
								}
							});
							$('#name_cus, #phone_cus').val('');
						} else {
							Swal.fire({
								icon: 'error',
								title: 'Lỗi',
								text:
									res.data ||
									'Có lỗi khi lưu, vui lòng thử lại.',
							});
						}
					},
					error: function (xhr, status) {
						Swal.close();
						Swal.fire({
							icon: 'error',
							title: 'Lỗi',
							text: 'Không thể kết nối đến server.',
						});
					},
				});
			});
		}
	})(jQuery);
})();
