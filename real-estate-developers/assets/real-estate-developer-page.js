document.addEventListener("DOMContentLoaded", function () {
	var swiper = new Swiper(".blogSwiper", {
		slidesPerView: 1,
		spaceBetween: 10,
		loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		breakpoints: {
			// when window width is >= 700px
			700: {
				slidesPerView: 2.2,
				spaceBetween: 20,
			},
		},
	});
});



document.addEventListener("DOMContentLoaded", function () {
	var swiper = new Swiper(".developerSwiper", {
		slidesPerView: 1,
		spaceBetween: 20,
		loop: true,
		navigation: {
			nextEl: ".developer-carousel .swiper-button-next",
			prevEl: ".developer-carousel .swiper-button-prev",
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		breakpoints: {
			700: {
				slidesPerView: 3.6,
				spaceBetween: 15,
			},
			0: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
		},
	});
});
