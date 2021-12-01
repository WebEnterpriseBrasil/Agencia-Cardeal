"use strict";

var section = document.querySelectorAll(".home-page section");

var forEach = function forEach(arr, callback) {
  Array.prototype.forEach.call(arr, callback);
};

var resizeBox = function resizeBox() {
  jQuery('.terceira-sessao .text').addClass('foo');
  /*forEach(section, function (item) {
      const image = item.querySelector('.image');
      const imageHeight = image.clientHeight;
      item.querySelector('.text').style.minHeight = `${imageHeight}px`;
  }); */

  jQuery('section').each(function () {
    var imageHeight = jQuery(this).find('.image img').height();
    console.log('foooo ', imageHeight);
    jQuery(this).find('.text').css('min-height', imageHeight);
  });
  var box3H = jQuery('.terceira-sessao .text').css('min-height').replace('px', '');
  console.log('a ', box3H);
  console.log('b ', box3H * 2);
  jQuery('.g-letter').height(box3H * 2);
};

window.addEventListener('load', function (event) {
  resizeBox();
});
window.addEventListener('resize', function (event) {
  resizeBox();
});