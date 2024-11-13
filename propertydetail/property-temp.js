/**
 * Image Gallery and Popup Management Scripts
 */

// --------------- Popup Close Button Fade Effects ---------------
let fadeTimeout;
const closeButton = document.querySelector(".close-popup");

/**
 * Fades out the close button and makes it non-interactive
 */
function fadeOut() {
	closeButton.style.transition = "opacity 0.5s";
	closeButton.style.opacity = "0";
	closeButton.style.pointerEvents = "none";
}

/**
 * Fades in the close button and makes it interactive
 * Resets the fade out timer
 */
function fadeIn() {
	closeButton.style.opacity = "1";
	closeButton.style.pointerEvents = "auto";
	clearTimeout(fadeTimeout);
	fadeTimeout = setTimeout(fadeOut, 3000);
}

// Initialize fade effects
document.querySelector(".popup-gallery").addEventListener("mousemove", fadeIn);
closeButton.style.opacity = "1";
fadeTimeout = setTimeout(fadeOut, 3000);

// --------------- Popup Gallery Controls ---------------
/**
 * Initialize click handlers for image containers and close button
 */
document.querySelectorAll(".imageContainer").forEach((container) => {
	container.style.cursor = "pointer";
	container.addEventListener("click", () => {
		document.querySelector(".popup-gallery").style.display = "block";
	});
});

document.querySelector(".close-popup").addEventListener("click", () => {
	document.querySelector(".popup-gallery").style.display = "none";
});

// --------------- Slideshow Controls ---------------
let currentSlide = 0;
const slides = document.querySelectorAll(".popup-image");

/**
 * Displays the slide at the specified index
 * @param {number} n - The slide index to show
 */
function showSlide(n) {
	slides.forEach((slide) => (slide.style.display = "none"));
	currentSlide = (n + slides.length) % slides.length;
	slides[currentSlide].style.display = "block";
}

// Add navigation button handlers
document
	.querySelector(".next-btn")
	.addEventListener("click", () => showSlide(currentSlide + 1));
document
	.querySelector(".prev-btn")
	.addEventListener("click", () => showSlide(currentSlide - 1));

// Initialize first slide
showSlide(0);

// --------------- Image Rotation ---------------
/**
 * Rotates the images in the image containers
 * Creates a carousel effect by moving the last image to the first position
 */
function rotateImages() {
	const images = document.querySelectorAll(".imageContainer img");
	const lastSrc = images[images.length - 1].src;

	for (let i = images.length - 1; i > 0; i--) {
		images[i].src = images[i - 1].src;
	}
	images[0].src = lastSrc;
}

// Start image rotation
setInterval(rotateImages, 10000);
