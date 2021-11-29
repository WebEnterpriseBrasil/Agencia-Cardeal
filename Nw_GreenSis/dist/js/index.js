"use strict";

var section = document.querySelectorAll(".home-page section");

var forEach = function forEach(arr, callback) {
  Array.prototype.forEach.call(arr, callback);
};

var resizeBox = function resizeBox() {
  forEach(section, function (item) {
    var image = item.querySelector('.image');
    var imageHeight = image.clientHeight;
    item.querySelector('.text').style.minHeight = "".concat(imageHeight, "px");
  });
};

window.addEventListener('load', function (event) {
  resizeBox();
});
window.addEventListener('resize', function (event) {
  resizeBox();
});