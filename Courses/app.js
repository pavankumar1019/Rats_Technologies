const hamburger_menu = document.querySelector(".hamburger-menu");
const contain = document.querySelector(".contain");
const links = document.querySelector(".links");

hamburger_menu.addEventListener("click", () => {
  contain.classList.toggle("active");
  links.classList.toggle("active");
});
