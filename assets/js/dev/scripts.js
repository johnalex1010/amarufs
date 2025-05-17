AOS.init();
// ------

// EFECTO PARA MENU
window.addEventListener("scroll", function () {
	var header = document.getElementById("header");
	if (window.scrollY > 30) {
		header.classList.add("header_bg");
	} else {
		header.classList.remove("header_bg");
	}
});

//Menu Icon
document.addEventListener("DOMContentLoaded", function () {
	var barsIcon = document.querySelector(".fa-bars");
	var xMarkIcon = document.querySelector(".fa-xmark");
	var navItems = document.querySelector(".nav_items");

	barsIcon.addEventListener("click", function () {
		// Ocultar barsIcon y mostrar xMarkIcon
		barsIcon.style.display = "none";
		xMarkIcon.style.display = "block";

		// Mostrar navItems
		navItems.style.display = "block";
	});

	xMarkIcon.addEventListener("click", function () {
		// Ocultar xMarkIcon y mostrar barsIcon
		xMarkIcon.style.display = "none";
		barsIcon.style.display = "block";

		// Ocultar navItems
		navItems.style.display = "none";
	});
});

//---------
