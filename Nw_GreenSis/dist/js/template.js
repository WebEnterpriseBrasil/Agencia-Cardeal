"use strict";

var openMenuMobile = function openMenuMobile() {
  jQuery(".menu-mobile").animate({
    marginLeft: 0
  });
  jQuery('.overlay').show();
};

var closeMenuMobile = function closeMenuMobile() {
  jQuery(".menu-mobile").animate({
    marginLeft: '-300px'
  });
  jQuery('.overlay').hide();
};

jQuery('.menu-action').on('click', function () {
  openMenuMobile();
});
jQuery('.overlay').on('click', function () {
  closeMenuMobile();
});