const openMenuMobile=()=>{jQuery(".boxes_ .box.left").animate({marginLeft:0}),jQuery(".overlay").show()},openMenuMobileCart=()=>{console.log("openMenuMobileCart"),jQuery(".boxes_ .box.right").animate({marginRight:0}),jQuery(".overlay").show()},closeMenuMobile=()=>{console.log("closeMenuMobile"),jQuery(".boxes_ .box.left").animate({marginLeft:"-300px"}),jQuery(".overlay").hide()},closeMenuMobileCart=()=>{jQuery(".boxes_ .box.right").animate({marginRight:"-300px"}),jQuery(".overlay").hide()},showSearchBar=()=>{jQuery("header .social .icons .search").on("click",function(){jQuery("header .menu-lista").hide(),jQuery("header .gsearchfield").fadeIn()})},closeSearchBar=()=>{jQuery("header .gsearchfield .close i").on("click",function(){jQuery("header .gsearchfield").hide(),jQuery("header .menu-lista").fadeIn()})},shop=()=>{jQuery(".woocommerce-shop .woocommerce").each(function(){jQuery(this).find(".product").eq(0).after('<li class="line"></li>'),jQuery(this).find(".product").eq(1).after('<li class="line"></li>')})};jQuery(".content-mobile .menu-action i").on("click",function(){jQuery(".boxes_ .box.left").animate({marginLeft:0}),jQuery(".overlay").show()}),jQuery(".overlay, .content-mobile .action-bar .close i").on("click",function(){closeMenuMobile()}),window.addEventListener("resize",function(e){closeMenuMobile()}),window.addEventListener("load",function(e){shop(),jQuery(".content-mobile .aws-search-field").on("click",function(e){console.log("foo"),e.stopPropagation(),e.preventDefault()}),jQuery(window).width()>570&&(jQuery("header .social .icons .search").on("click",function(){jQuery("header .menu-lista").hide(),jQuery("header .gsearchfield").fadeIn()}),jQuery("header .gsearchfield .close i").on("click",function(){jQuery("header .gsearchfield").hide(),jQuery("header .menu-lista").fadeIn()}))});