const headerNav = document.querySelector(".header__nav");
const toggleMenu = document.querySelector(".toggle__menu");
const backDrop = document.querySelector(".transparent");

toggleMenu.addEventListener("click", () => {
  headerNav.classList.toggle("open");
  toggleMenu.classList.toggle("open");
  backDrop.classList.toggle("open");
});
