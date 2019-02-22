/* Let the Brutalization Begin */
/* NOTE: This script is must be UTF-8 encoded, so as to ensure obfuscated character rendering on Baffle */

$(document).ready(function(){
	
/* FITTEXT */
$('.fittext').fitText();
$('.fittext-compress').fitText(2.2); /* Increases compression */
$('.fittext-uncompress').fitText(0.8); /* Reduces compression */
$('.fittext-h1').fitText(0.7, { minFontSize: '50px', maxFontSize: '88px' }); /* Fittext ideal for H1 tag */
$('.fittext-h2').fitText(0.9, { minFontSize: '42px', maxFontSize: '76px' }); /* Fittext ideal for H2 tag */
$('.fittext-h3').fitText(1.0, { minFontSize: '38px', maxFontSize: '64px' }); /* Fittext ideal for H3 tag */
$('.fittext-h4').fitText(1.0, { minFontSize: '24px', maxFontSize: '42px' }); /* Fittext ideal for H4 tag */
$('.fittext-h5').fitText(1.0, { minFontSize: '16px', maxFontSize: '30px' }); /* Fittext ideal for H5 tag */
$('.fittext-h6').fitText(1.0, { minFontSize: '12px', maxFontSize: '24px' }); /* Fittext ideal for H6 tag */

/* STACKS */
$('.stack-auto').each(function(index) { $(this).css("z-index", index); });

/* Equal Heights */
$('.equal-height').matchHeight({ byRow: true, property: 'height', target: null, remove: false });

/* CHOP Text */
$('.chop-64').limitText({length:64, ellipsisText: '[...]'});
$('.chop-128').limitText({length:128, ellipsisText: '[...]'});
$('.chop-256').limitText({length:256, ellipsisText: '[...]'});

/* Blinker Fluid */
$('.blink').blink({delay: 350});
$('.blink-slow').blink({delay: 600});
$('.blink-fast').blink({delay: 100});
$('.blink-182').blink({delay: 182});

/* Draggable */
$('.draggable').tinyDraggable();
$('.draggable-wrap').tinyDraggable({ handle: '.drag-handle' });
$('.draggable-exclude').tinyDraggable({ exclude: '.exclude_me, input' });

/* Rotate Text */
$('.rotator').rotator();

/* BAFFLE */
/* Animation speed value can be increased or decreased. Same with duration */
var b = baffle('.baffle', { characters: '█▓▒░', speed: 150 }).reveal(2500); /* Runs animation only once, upon page load */
var bl = baffle('.baffle-longer', { characters: '█▓▒░', speed: 150, duration: 3000 }).reveal(3000); /* Animation duration set to 3 seconds */
var bp = baffle('.baffle-prolonged', { characters:'█▓▒░', speed: 300, duration: 10000 }).reveal(10000); /* Animation duration set to 10 seconds */
var bf = baffle('.baffle-forever', {characters: '█▓▒░', speed: 150}).start(); /* Animation continues on an endless loop */
});