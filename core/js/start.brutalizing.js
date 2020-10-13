/* Let the Brutalization Begin */
/* NOTE: This script must be UTF-8 encoded, so as to ensure obfuscated character rendering on Baffle */

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

/* STACKS */
$('.stack-auto').each(function(index) { $(this).css("z-index", index); });

/* Equal Heights */
$('.equal-height').matchHeight({ byRow: true, property: 'height', target: null, remove: false });

/* CHOP Text */
$('.chop-32').limitText({length:32, ellipsisText: '[...]'});
$('.chop-64').limitText({length:64, ellipsisText: '[...]'});
$('.chop-128').limitText({length:128, ellipsisText: '[...]'});
$('.chop-256').limitText({length:256, ellipsisText: '[...]'});
$('.chop-512').limitText({length:512, ellipsisText: '[...]'});

/* Blinker Fluid */
$('.blink').blink({delay: 350});
$('.blink-slow').blink({delay: 600});
$('.blink-fast').blink({delay: 100});
$('.blink-182').blink({delay: 182});

/* Draggable */
$('.draggable').tinyDraggable();
$('.draggable-wrap').tinyDraggable({ handle: '.drag-handle' });
$('.draggable-exclude').tinyDraggable({ exclude: '.exclude_me, input' });

/* Trianglify */
$(".triangle-dark").trianglarize({
    triHeight: 50,
    triColor: '#252525', triColorU: '#404040',
    spacingV: 6, spacingH: 8
});
$(".triangle-light").trianglarize({
    triHeight: 50,
    triColor: '#c9c9c9', triColorU: '#ebebeb',
    spacingV: 6, spacingH: 8
});

/* B-Loader (BETA) */
$('.b-loader').simpleLoadMore({
    item: 'div, p',
    count: 5,
    btnText: '+ Load More {showing}/{total}',
});

/* CDP */
$('.cdp-wrap').selectShow({ShowElement: 0});
/* for multiple instances of CDP on a single page, use unique IDs:
$('#cdp1, #cdp2, #cdp3').selectShow({ShowElement: 0});
*/

/* RUMBLER */
$('.rumble, .hrumble, .crumble, .strumble, .sthrumble, .mdrumble, .trumble, .prumble').jrumble();
$('.hrumble').hover(function(){$(this).trigger('startRumble');}, function(){$(this).trigger('stopRumble'); });
$('.crumble').click(function(){$(this).trigger('startRumble');}); /* start rumble when clicked */
$('.strumble').click(function(){$(this).trigger('stopRumble');}); /* stop constant rumble when clicked */
$('.sthrumble').hover(function(){$(this).trigger('stopRumble');}); /* stop constant rumble upon hover */
$('.mdrumble').bind({'mousedown': function(){$(this).trigger('startRumble');},'mouseup': function(){$(this).trigger('stopRumble');}});
$('.caffeinated, .hyper').jrumble({x: 6, y: 6, rotation: 6, speed: 6, opacity: true, opacityMin: .05});
$('.drunk').jrumble({x: 3, y: 3, rotation: 3, speed: 90, opacity: true, opacityMin: .5});
$('.caffeinated').hover(function(){$(this).trigger('startRumble');}, function(){$(this).trigger('stopRumble');});
$('.rumble, .hyper, .drunk').trigger('startRumble');
var demoTimeout;
$('.trumble').click(function(){
	$this = $(this);
	clearTimeout(demoTimeout);
	$this.trigger('startRumble');
	demoTimeout = setTimeout(function(){$this.trigger('stopRumble');}, 1500)
});
var demoStart = function(){$('.prumble').trigger('startRumble'); setTimeout(demoStop, 300);};
var demoStop = function(){$('.prumble').trigger('stopRumble'); setTimeout(demoStart, 300);};
demoStart();

/* BAFFLE */
/* Animation speed value can be increased or decreased. Same with duration */
var b = baffle('.baffle', { characters: '█▓▒░', speed: 150 }).reveal(2500); /* Runs animation only once, upon page load */
var bl = baffle('.baffle-longer', { characters: '█▓▒░', speed: 150, duration: 3000 }).reveal(3000); /* Animation duration set to 3 seconds */
var bp = baffle('.baffle-prolonged', { characters:'█▓▒░', speed: 300, duration: 10000 }).reveal(10000); /* Animation duration set to 10 seconds */
var bf = baffle('.baffle-forever', {characters: '█▓▒░', speed: 150}).start(); /* Animation continues on an endless loop */
});