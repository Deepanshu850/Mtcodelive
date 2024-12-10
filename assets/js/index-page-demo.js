//  JS for hero section form

let activeIndex = -1; // Tracks the active suggestion

function fetchSuggestions(query) {
	const suggestionsBox = document.getElementById("suggestions");

	if (query.trim().length > 0) {
		fetch(`suggest?query=${encodeURIComponent(query)}`)
			.then((response) => response.json())
			.then((data) => {
				suggestionsBox.innerHTML = "";
				if (data.length > 0) {
					data.forEach((keyword, index) => {
						const listItem = document.createElement("li");
						listItem.classList.add("list-group-item");
						listItem.textContent = keyword;

						// Handle click event
						listItem.addEventListener("click", () => {
							document.querySelector("input[name=search]").value = keyword;
							submitForm();
						});

						suggestionsBox.appendChild(listItem);
					});
					suggestionsBox.classList.add("show");
					activeIndex = -1; // Reset active index
				} else {
					suggestionsBox.classList.remove("show");
				}
			})
			.catch((error) => {
				console.error("Error fetching suggestions:", error);
			});
	} else {
		suggestionsBox.classList.remove("show");
	}
}

function handleKeyNavigation(event) {
	const suggestionsBox = document.getElementById("suggestions");
	const suggestions = suggestionsBox.querySelectorAll(".list-group-item");

	if (suggestions.length > 0) {
		if (event.key === "ArrowDown") {
			// Move down
			event.preventDefault();
			activeIndex = (activeIndex + 1) % suggestions.length;
			highlightSuggestion(suggestions, activeIndex);
		} else if (event.key === "ArrowUp") {
			// Move up
			event.preventDefault();
			activeIndex = (activeIndex - 1 + suggestions.length) % suggestions.length;
			highlightSuggestion(suggestions, activeIndex);
		} else if (event.key === "Enter") {
			// Select the highlighted suggestion or submit input value
			event.preventDefault();
			if (activeIndex >= 0) {
				const selectedSuggestion = suggestions[activeIndex].textContent;
				document.querySelector("input[name=search]").value = selectedSuggestion;
			}
			submitForm();
		}
	}
}

function highlightSuggestion(suggestions, index) {
	suggestions.forEach((item, i) => {
		if (i === index) {
			item.classList.add("active");
			// Ensure the active suggestion is in view
			item.scrollIntoView({
				block: "nearest",
				behavior: "smooth",
			});
		} else {
			item.classList.remove("active");
		}
	});
}

function handleFormSubmit(event) {
	event.preventDefault();
	submitForm();
}

function submitForm() {
	const input = document.querySelector("input[name=search]");
	const query = input.value.trim();
	if (query) {
		window.location.href = `search?search=${encodeURIComponent(query)}`;
	} else {
		alert("Please enter a search term.");
	}
}

// Hide suggestions when clicking outside
document.addEventListener("click", function (event) {
	const suggestionsBox = document.getElementById("suggestions");
	if (!event.target.closest(".form-group")) {
		suggestionsBox.classList.remove("show");
	}
});

//  Featured property carasouel js

document.addEventListener("DOMContentLoaded", function () {
	var swiper = new Swiper(".propertySwiper", {
		slidesPerView: 1,
		spaceBetween: 10,
		loop: true,
		centeredSlides: true, // Center the active slide
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		breakpoints: {
			// when window width is >= 700px
			700: {
				slidesPerView: 3, // Show 3 slides
				spaceBetween: 30,
				centeredSlides: true, // Ensure the active slide is centered
			},
		},
	});
});

//  JS used in property grid
function showMoreProperties() {
	const propertyCards = document.querySelectorAll(
		"#propertiesGrid .property-card"
	);
	const readMoreBtn = document.getElementById("readMoreBtn");
	const screenWidth = window.innerWidth;
	const increment = screenWidth > 700 ? 6 : 3; // Show 6 on desktop and 3 on mobile

	// Count currently visible property cards
	let visibleCount = 0;
	propertyCards.forEach((card) => {
		if (card.style.display !== "none" && card.style.display !== "") {
			visibleCount++;
		}
	});

	// Show the next batch of cards
	for (
		let i = visibleCount;
		i < visibleCount + increment && i < propertyCards.length;
		i++
	) {
		propertyCards[i].style.display = "grid"; // Adjust based on your layout (e.g., grid or block)
	}

	// Hide the button if all cards are visible
	if (visibleCount + increment >= propertyCards.length) {
		readMoreBtn.style.display = "none";
	}
}

// Initial setup to ensure only the first batch is shown based on screen size
function initializeProperties() {
	const propertyCards = document.querySelectorAll(
		"#propertiesGrid .property-card"
	);
	const screenWidth = window.innerWidth;
	const increment = screenWidth > 700 ? 6 : 3; // Show 6 on desktop and 3 on mobile

	// Hide all cards initially
	propertyCards.forEach((card) => {
		card.style.display = "none";
	});

	// Show the first batch of cards
	for (let i = 0; i < increment && i < propertyCards.length; i++) {
		propertyCards[i].style.display = "grid"; // Adjust based on your layout (e.g., grid or block)
	}

	// Show the "Read More" button if there are more cards to display
	const readMoreBtn = document.getElementById("readMoreBtn");
	if (propertyCards.length > increment) {
		readMoreBtn.style.display = "flex";
	} else {
		readMoreBtn.style.display = "none";
	}
}

// Run the initialization on page load and on window resize
document.addEventListener("DOMContentLoaded", initializeProperties);
window.addEventListener("resize", initializeProperties);


function nextImage(container) {
	const images = container.getElementsByTagName("img");
	let currentIndex;
	for (let i = 0; i < images.length; i++) {
		if (images[i].style.display !== "none") {
			currentIndex = i;
			images[i].style.display = "none";
			break;
		}
	}
	const nextIndex = (currentIndex + 1) % images.length;
	images[nextIndex].style.display = "block";
}

//  location carasouel js

document.addEventListener("DOMContentLoaded", function () {
	new Swiper(".locationSwiper", {
		slidesPerView: 1,
		spaceBetween: 20,
		loop: true,
		navigation: {
			nextEl: ".locationSwiper .swiper-button-next",
			prevEl: ".locationSwiper .swiper-button-prev",
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		breakpoints: {
			768: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
		},
	});
});

// team member crasouel js

document.addEventListener("DOMContentLoaded", function () {
	new Swiper(".teamSwiper", {
		slidesPerView: 1,
		spaceBetween: 20,
		loop: true,
		navigation: {
			nextEl: ".team-carousel .swiper-button-next",
			prevEl: ".team-carousel .swiper-button-prev",
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			968: {
				slidesPerView: 4,
				spaceBetween: 10,
			},
		},
	});
});

//  testimonial carasouel js
document.addEventListener("DOMContentLoaded", function () {
	new Swiper(".testimonialSwiper", {
		slidesPerView: 1,
		spaceBetween: 20,
		loop: true,
		navigation: {
			nextEl: ".testimonial-carousel .swiper-button-next",
			prevEl: ".testimonial-carousel .swiper-button-prev",
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		breakpoints: {
			768: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
		},
	});
});

// developer carasouel js

document.addEventListener("DOMContentLoaded", function () {
	var swiper = new Swiper(".developerSwiper", {
		slidesPerView: 2,
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
				slidesPerView: 5,
				spaceBetween: 20,
			},
			0: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
		},
	});
});

// Blog carasouel js

document.addEventListener("DOMContentLoaded", function () {
	new Swiper(".blogSwiper", {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		navigation: {
			nextEl: ".blog-carousel .swiper-button-next",
			prevEl: ".blog-carousel .swiper-button-prev",
		},
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		breakpoints: {
			1024: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
		},
	});
});
