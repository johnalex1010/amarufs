const gallery = document.querySelector(".gallery");
const modal = document.getElementById("myModalGallery");
const modalImg = document.getElementById("modalImage");
const closeBtn = document.querySelector(".close");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

let images = document.querySelectorAll(".gallery img");

images.forEach((image, index) => {
    if (index >= 5) {
        image.style.display = "none";
    }
    image.addEventListener("click", () => {
        modal.style.display = "flex";
        modalImg.src = image.src;
    });
});

closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

prevBtn.addEventListener("click", () => {
    let index = Array.from(images).findIndex((img) => img.src === modalImg.src);
    index = (index - 1 + images.length) % images.length;
    modalImg.src = images[index].src;
});

nextBtn.addEventListener("click", () => {
    images = document.querySelectorAll(".gallery img"); // Actualizar la lista de imágenes
    let index = Array.from(images).findIndex((img) => img.src === modalImg.src);
    index = (index + 1) % images.length;
    modalImg.src = images[index].src;
});

window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

document.addEventListener("keydown", (event) => {
    if (event.key === "ArrowLeft") {
        let index = Array.from(images).findIndex((img) => img.src === modalImg.src);
        index = (index - 1 + images.length) % images.length;
        modalImg.src = images[index].src;
    } else if (event.key === "ArrowRight") {
        images = document.querySelectorAll(".gallery img"); // Actualizar la lista de imágenes
        let index = Array.from(images).findIndex((img) => img.src === modalImg.src);
        index = (index + 1) % images.length;
        modalImg.src = images[index].src;
    } else if (event.key === "Escape") {
        modal.style.display = "none";
    }
});
