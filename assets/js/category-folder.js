function togglePanel() {
	const sidePanel = document.getElementById("after-grid-text-sidePanel");
	const overlay = document.getElementById("after-grid-text-overlay");
	const isOpen = sidePanel.classList.contains("open");
	sidePanel.classList.toggle("open", !isOpen);
	overlay.classList.toggle("visible", !isOpen);
}

function closePanel() {
	document.getElementById("after-grid-text-sidePanel").classList.remove("open");
	document
		.getElementById("after-grid-text-overlay")
		.classList.remove("visible");
}

function nextImage(element) {
	const images = element.querySelectorAll("img");
	const totalImages = images.length;
	let currentIndex = [...images].findIndex(
		(img) => img.style.display !== "none"
	);

	images[currentIndex].style.display = "none";
	currentIndex = (currentIndex + 1) % totalImages;
	images[currentIndex].style.display = "block";
}
