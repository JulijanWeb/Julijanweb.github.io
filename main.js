const menu_gumb = document.querySelector(".hamburger");
const mobile_menu = document.querySelector(".mob-nav");

menu_gumb.addEventListener("click", () => {
  menu_gumb.classList.toggle("is-active");
  mobile_menu.classList.toggle("is-active");
});

function openLightbox(imagePath) {
  const lightbox = document.getElementById("lightbox");
  const lightboxImage = document.getElementById("lightboxImage");

  lightboxImage.src = imagePath;
  lightbox.style.display = "flex";
}

function closeLightbox() {
  const lightbox = document.getElementById("lightbox");
  lightbox.style.display = "none";
}
