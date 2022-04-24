"use sctrict";

const menu = document.querySelector(".menu");
const header = document.querySelector(".header");

document
  .querySelector(".header__burger")
  .addEventListener("click", function () {
    menu.classList.toggle("menu-visible");
  });

console.log("changed");
