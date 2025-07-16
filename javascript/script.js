(() => {
	// javascript/script.js
	(function ($) {
		window.onload = function () {
			$(document).ready(function () {
				backToTop();
				handleSwiper();
				toggleContent();
				handleMansoryLayout();
			});
		};

		let swiperInstances = [];

		function handleSwiper() {
			const isMobile = window.matchMedia('(max-width: 767px)').matches;

			$('.block_slider').each(function (index) {
				const $slider = $(this);
				const swiperId = 'swiper-' + index;

				// Nếu là TH2: chỉ muốn slider ở mobile
				const isMobileOnly = $slider.hasClass('watch_css');

				// Nếu đang là desktop và slider chỉ dành cho mobile → hủy slider nếu có
				if (!isMobile && isMobileOnly) {
					const existingInstance = swiperInstances[index];
					if (existingInstance) {
						existingInstance.destroy(true, true);
						swiperInstances[index] = null;
					}
					return;
				}

				// Nếu đã khởi tạo rồi thì bỏ qua
				if (swiperInstances[index]) return;

				// Gán class Swiper và chuẩn bị DOM
				$slider.addClass('swiper ' + swiperId);

				const $slides = $slider.find('.block_slider-item');
				$slides.addClass('swiper-slide');

				// Chỉ wrap nếu chưa wrap (tránh bị lồng nhiều lần)
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
					? {
							delay: 3000,
							disableOnInteraction: false,
						}
					: false;

				// Cấu hình
				const swiperConfig = {
					slidesPerView: 'auto',
					spaceBetween: 16,
					loop: $slider.hasClass('loop'),
					centeredSlides: $slider.hasClass('center_items'),
					autoplay: autoplayConfig,
				};

				// Pagination
				if ($slider.hasClass('has_dots')) {
					const paginationEl = $(
						'<div class="swiper-pagination"></div>'
					);
					$slider.append(paginationEl);
					swiperConfig.pagination = {
						el: paginationEl[0],
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

				// Khởi tạo và lưu lại instance
				const swiper = new Swiper('.' + swiperId, swiperConfig);
				swiperInstances[index] = swiper;
			});
		}

		function handleMansoryLayout() {
			new Masonry('#masonry', {
				itemSelector: '.grid-item',
				percentPosition: true,
				gutter: 8,
			});
		}

		function toggleContent() {
			$(document).on('click', '[data-open]', function (e) {
				e.preventDefault();
				var $btn = $(this);
				var target = $btn.data('open');
				if (!target) return;
				$btn.toggleClass('active');
				$(target).toggleClass('active');
			});

			// Click ra ngoài: đóng hết
			$(document).on('click', function (e) {
				// Nếu không phải click vào bất cứ nút hoặc box nào đang mở
				if ($(e.target).closest('[data-open], .active').length === 0) {
					$('[data-open]').removeClass('active');
					$('[id].active').removeClass('active');
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
