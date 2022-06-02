/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/landing.js ***!
  \*********************************/
var navbar = document.querySelector(".navbar");
navbar.querySelector(".toggle").addEventListener("click", function () {
  navbar.classList.toggle("collapsed");
});
window.addEventListener("scroll", function (e) {
  var windowY = window.pageYOffset;
  var navbarHeight = document.querySelector(".navbar").offsetHeight;
  if (windowY > navbarHeight) navbar.classList.add("sticky");else navbar.classList.remove("sticky");
});
/******/ })()
;