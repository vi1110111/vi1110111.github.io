"use sctrict";

const menu = document.querySelector(".menu");
const header = document.querySelector(".header");
const footer = document.querySelector(".footer");

document
  .querySelector(".header__burger")
  .addEventListener("click", function () {
    menu.classList.toggle("menu-visible");
  });

console.log("changed");

let lastScroll = 0;
const defaultOffset = 200;

const scrollPosition = () =>
  window.pageYOffset || document.documentElement.scrollTop;
const containsHide = () => header.classList.contains("header-hide");

window.addEventListener("scroll", function () {
  if (
    scrollPosition() > lastScroll &&
    !containsHide() &&
    scrollPosition() > defaultOffset
  ) {
    header.classList.add("header-hide");
    menu.classList.add("menu-hide");
    footer.classList.add("footer-hide");
    // scroll down
  } else if (scrollPosition() < lastScroll && containsHide()) {
    // scroll up

    header.classList.remove("header-hide");
    menu.classList.remove("menu-hide");
    footer.classList.remove("footer-hide");
  }
  lastScroll = scrollPosition();
});
