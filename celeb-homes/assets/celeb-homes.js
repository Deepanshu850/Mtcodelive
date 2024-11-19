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
				slidesPerView: 3,
				spaceBetween: 30,
			},
		},
	});
});
