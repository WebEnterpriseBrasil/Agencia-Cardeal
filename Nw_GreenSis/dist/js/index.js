"use strict";

var section = document.querySelectorAll(".home-page section");

var forEach = function forEach(arr, callback) {
  Array.prototype.forEach.call(arr, callback);
};

var resizeBox = function resizeBox() {
  jQuery('.home-page .terceira-sessao .text').addClass('foo');
  jQuery('.home-page section').each(function () {
    var imageHeight = jQuery(this).find('.image img').height();
    jQuery(this).find('.text').css('min-height', imageHeight);
  });
  var box3H = jQuery('.home-page .terceira-sessao .text').css('min-height').replace('px', '');
  jQuery('.home-page .g-letter').height(box3H * 2);
};

window.addEventListener('load', function (event) {
  resizeBox();
});
window.addEventListener('resize', function (event) {
  resizeBox();
});