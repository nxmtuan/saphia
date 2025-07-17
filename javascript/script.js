(() => {
	// javascript/script.js
	(function ($) {
		$(document).ready(function () {
			backToTop();
			handleSwiper();
			cardSlider();
			toggleContent();
			toggleMenuMobile();
			//handleMansoryLayout();
		});

		let swiperInstances = [];

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

		// function handleMansoryLayout() {
		// 	new Masonry('#masonry', {
		// 		itemSelector: '.grid-item',
		// 		percentPosition: true,
		// 		gutter: 8,
		// 	});
		// }

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
	})(jQuery);
})();
