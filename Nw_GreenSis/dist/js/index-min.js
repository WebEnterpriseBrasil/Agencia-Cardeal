const resizeBoxWidth=()=>{jQuery(".page-template-home-template section").each(function(){const e=jQuery(this).find(".image").width();jQuery(this).find(".image .inner").css("width",1.5*e),jQuery(this).find(".image").css("width",e)})},resizeBoxHeight=()=>{if(jQuery(window).width()>570){jQuery(".page-template-home-template section").each(function(){const e=jQuery(this).find(".image img").height();jQuery(this).find(".text .inner").css("min-height",e)});const e=jQuery(".page-template-home-template .terceira-sessao .text .inner").css("min-height").replace("px","");jQuery(".page-template-home-template .g-letter").height(2*e)}else jQuery(this).find(".text .inner").css("min-height","auto")};window.addEventListener("load",function(e){resizeBoxHeight()}),window.addEventListener("resize",function(e){resizeBoxHeight()});