/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/landing.js ***!
  \*********************************/
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

// Nav bar css 
var navbar = document.querySelector(".navbar");
navbar.querySelector(".toggle").addEventListener("click", function () {
  navbar.classList.toggle("collapsed");
});
window.addEventListener("scroll", function (e) {
  var windowY = window.pageYOffset;
  var navbarHeight = document.querySelector(".navbar").offsetHeight;
  if (windowY > navbarHeight) navbar.classList.add("sticky");else navbar.classList.remove("sticky");
}); // back ground

var colors = ['electricBlue', 'section1', 'section2', 'section3', 'section4'];

var sections = _toConsumableArray(document.getElementsByTagName('section')); //const navbars = [...document.getElementsByClassName('navbar')]


window.addEventListener('scroll', function () {
  var scrollFromTop = window.pageYOffset;

  for (var i = 0; sections.length > i; i++) {
    if (scrollFromTop <= sections[i].offsetTop) {
      // navbar.className += " "+colors[i] ;
      document.body.className = colors[i];
      break;
    }
  }
});
/******/ })()
;