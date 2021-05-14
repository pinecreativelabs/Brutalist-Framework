/* Let the Brutalization Begin */
/* NOTE: This script must be UTF-8 encoded, so as to ensure obfuscated character rendering on Baffle */

$(document).ready(function(){

/* CHOP Text */
$('.chop-32').limitText({length:32, ellipsisText: '[...]'});
$('.chop-64').limitText({length:64, ellipsisText: '[...]'});
$('.chop-128').limitText({length:128, ellipsisText: '[...]'});
$('.chop-256').limitText({length:256, ellipsisText: '[...]'});
$('.chop-512').limitText({length:512, ellipsisText: '[...]'});

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

/* B-Loader */
$('.b-loader').simpleLoadMore({
    item: 'div, p, li, article', count: 5,
    btnText: '+ Show More {showing} / {total}',
});

/* CDP: Content Display Picker */
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