const openMenuMobile=()=>{jQuery(".menu-mobile").animate({marginLeft:0}),jQuery(".overlay").show()},closeMenuMobile=()=>{jQuery(".menu-mobile").animate({marginLeft:"-300px"}),jQuery(".overlay").hide()};jQuery(".menu-action").on("click",function(){jQuery(".menu-mobile").animate({marginLeft:0}),jQuery(".overlay").show()}),jQuery(".overlay").on("click",function(){jQuery(".menu-mobile").animate({marginLeft:"-300px"}),jQuery(".overlay").hide()});