//Menu Icon
document.addEventListener("DOMContentLoaded", function () {
	var barsIcon = document.querySelector(".fa-bars");
	var xMarkIcon = document.querySelector(".fa-xmark");
	var navItems = document.querySelector(".nav_items");

	barsIcon.addEventListener("click", function () {
		// Ocultar barsIcon y mostrar xMarkIcon
		barsIcon.style.display = "none";
		xMarkIcon.style.display = "flex";

		// Mostrar navItems
		navItems.style.display = "flex";
	});

	xMarkIcon.addEventListener("click", function () {
		// Ocultar xMarkIcon y mostrar barsIcon
		xMarkIcon.style.display = "none";
		barsIcon.style.display = "flex";

		// Ocultar navItems
		navItems.style.display = "none";
	});
});

//---------
