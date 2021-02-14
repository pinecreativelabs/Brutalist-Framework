/* Brutalist.js Deprecated Code Library */

/* Blinker Fluid */
(function($){$.fn.blink=function(options){var defaults={delay:500};var options=$.extend(defaults,options);return $(this).each(function(idx,itm){var handle=setInterval(function(){if($(itm).css("visibility")==="visible"){$(itm).css('visibility','hidden')}else{$(itm).css('visibility','visible')}},options.delay);$(itm).data('handle',handle)})}
$.fn.unblink=function(){return $(this).each(function(idx,itm){var handle=$(itm).data('handle');if(handle){clearInterval(handle);$(itm).data('handle',null);$(itm).css('visibility','inherit')}})}}(jQuery));
$(document).ready(function(){
$('.blink').blink({delay: 350});
$('.blink-slow').blink({delay: 600});
$('.blink-fast').blink({delay: 100});
$('.blink-182').blink({delay: 182});
});

/* FitText (DEPRACATED) */
!function(t){t.fn.fitText=function(n,i){var e=n||1,o=t.extend({minFontSize:Number.NEGATIVE_INFINITY,maxFontSize:Number.POSITIVE_INFINITY},i);return this.each(function(){var n=t(this),i=function(){n.css("font-size",Math.max(Math.min(n.width()/(10*e),parseFloat(o.maxFontSize)),parseFloat(o.minFontSize)))};i(),t(window).on("resize.fittext orientationchange.fittext",i)})}}(jQuery);
$(document).ready(function(){
/* FITTEXT */
$('.fittext').fitText();
$('.fittext-compress').fitText(2.2); /* Increases compression */
$('.fittext-uncompress').fitText(0.75); /* Reduces compression */
$('.fittext-h1').fitText(0.5, { minFontSize: '50px', maxFontSize: '90px' }); /* Fittext for H1 tag */
$('.fittext-h2').fitText(0.7, { minFontSize: '42px', maxFontSize: '72px' }); /* Fittext for H2 tag */
$('.fittext-h3').fitText(0.8, { minFontSize: '34px', maxFontSize: '64px' }); /* Fittext for H3 tag */
$('.fittext-h4').fitText(0.9, { minFontSize: '26px', maxFontSize: '46px' }); /* Fittext for H4 tag */
$('.fittext-h5').fitText(1.0, { minFontSize: '18px', maxFontSize: '28px' }); /* Fittext for H5 tag */
$('.fittext-h6').fitText(1.1, { minFontSize: '14px', maxFontSize: '24px' }); /* Fittext for H6 tag */
});
