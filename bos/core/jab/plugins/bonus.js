/* BONUS FUNCTIONS */

/* PicProtect */
(function(a){a.fn.picopyright=function(){a(this).on("contextmenu",function(c){if(c.button==2){a(".picprotect").fadeIn("fast");setTimeout(function(){a(".picprotect").fadeOut("fast")},1000)}return false});var b=0;a(this).on("touchstart",function(c){c.preventDefault();b=setTimeout(function(){a(".picprotect").fadeIn("fast");setTimeout(function(){a(".picprotect").fadeOut("fast")},1000)},400)});a(this).on("touchend",function(c){c.preventDefault();clearTimeout(b)})}})(jQuery);
$(document).ready(function(){$('.guard').picopyright();});

/* Spotlight */
$(document).mousemove(function(e){
  $('.spotlight').attr({  'style':'background:radial-gradient(50px 50px at '+ e.clientX +'px '+ e.clientY +'px, transparent, transparent 100px, rgba(0,0,0,0.6) 150px)'});
});