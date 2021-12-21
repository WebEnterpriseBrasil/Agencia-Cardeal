"use strict";

var openMenuMobile = function openMenuMobile() {
  jQuery(".boxes_ .box.left").animate({
    marginLeft: 0
  });
  jQuery('.overlay').show();
};

var openMenuMobileCart = function openMenuMobileCart() {
  console.log('openMenuMobileCart');
  jQuery(".boxes_ .box.right").animate({
    marginRight: 0
  });
  jQuery('.overlay').show();
};

var closeMenuMobile = function closeMenuMobile() {
  console.log('closeMenuMobile');
  jQuery(".boxes_ .box.left").animate({
    marginLeft: '-300px'
  });
  jQuery('.overlay').hide();
};

var closeMenuMobileCart = function closeMenuMobileCart() {
  jQuery(".boxes_ .box.right").animate({
    marginRight: '-300px'
  });
  jQuery('.overlay').hide();
};

var showSearchBar = function showSearchBar() {
  jQuery('header .social .icons .search').on('click', function () {
    jQuery('header .menu-lista').hide();
    jQuery('header .gsearchfield').fadeIn();
  });
};

var closeSearchBar = function closeSearchBar() {
  jQuery('header .gsearchfield .close i').on('click', function () {
    jQuery('header .gsearchfield').hide();
    jQuery('header .menu-lista').fadeIn();
  });
}; // shop


var shop = function shop() {
  jQuery('.woocommerce-shop .woocommerce').each(function () {
    jQuery(this).find('.product').eq(0).after('<li class="line"></li>');
    jQuery(this).find('.product').eq(1).after('<li class="line"></li>');
  });
}; // woocommerce message


var woocommerceMessage = function woocommerceMessage() {
  if (jQuery('body').hasClass('woocommerce-cart')) {
    elem = jQuery(".woocommerce-notices-wrapper")[0];
    var resizeObserver = new ResizeObserver(function () {
      jQuery('.woocommerce .woocommerce-message').each(function () {
        var self = this;
        jQuery(this).find(".close").remove();
        jQuery(this).append("<span class='close'>x</span>");
        jQuery(this).find('.close').on('click', function () {
          jQuery(self).hide();
        });
      });
      jQuery('.woocommerce .woocommerce-info').each(function () {
        var self = this;
        jQuery(this).find(".close").remove();
        jQuery(this).append("<span class='close'>x</span>");
        jQuery(this).find('.close').on('click', function () {
          jQuery(self).hide();
        });
      });
    });
    resizeObserver.observe(elem);
  }
}; // abrir menu mobile


jQuery('.content-mobile .menu-action i').on('click', function () {
  openMenuMobile();
}); // abrir menu mobile cart

/* jQuery('header .content-mobile .cols .icons a').on('click', function() {
    openMenuMobileCart()
})*/
// fechar menu mobile e cart

jQuery('.overlay, .content-mobile .action-bar .close i').on('click', function () {
  closeMenuMobile(); // closeMenuMobileCart();
});
/* pdp */

var pdp = function pdp() {
  var content = jQuery('.product .text-content p');
  var newText = content.text().substring(0, 190);
  jQuery('.product .text-content').append('<br /><a href="javascript:void(0)" class="recolher">Recolher</a>');
  jQuery('.product .text-content-short').html("".concat(newText, "...<br /><a href=\"javascript:void(0)\" class=\"load-more\">Mais...</a>"));
  jQuery('.product .text-content-short .load-more').on('click', function () {
    jQuery('.product .text-content-short').hide();
    jQuery('.product .text-content').show();
  });
  jQuery('.product .recolher').on('click', function () {
    jQuery('.product .text-content').hide();
    jQuery('.product .text-content-short').show();
  });
  /*
   
  jQuery('.product .text-content p').html(`${newText}...<br /><a href="javascript:void(0)" class="load-more">Mais...</a>`);
   jQuery('.product .text-content').show();
   jQuery('.product .text-content .recolher').on('click', function() {
      jQuery('.product .text-content p').html(`${newText}...<br /><a href="javascript:void(0)" class="load-more">Mais...</a>`);
  });
  */
};

window.addEventListener('resize', function (event) {
  closeMenuMobile(); // closeMenuMobileCart();
});
window.addEventListener('load', function (event) {
  shop();
  jQuery('.content-mobile .aws-search-field').on('click', function (e) {
    console.log('foo');
    e.stopPropagation();
    e.preventDefault();
  });

  if (jQuery(window).width() > 570) {
    showSearchBar();
    closeSearchBar();
  }

  pdp();
  woocommerceMessage();
});