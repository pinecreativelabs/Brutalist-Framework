/* Let the Brutalization Begin */
/* NOTE: This script is must be UTF-8 encoded, so as to ensure obfuscated character rendering on Baffle */

$(document).ready(function(){
	
/* FITTEXT */
$(".fittext").fitText();
$(".fittext-compress").fitText(2.2); /* Increases compression */
$(".fittext-uncompress").fitText(0.8); /* Reduces compression */
$(".fittext-h1").fitText(1.5, { minFontSize: '50px', maxFontSize: '88px' }); /* Fittext ideal for H1 tag */
$(".fittext-h2").fitText(1.5, { minFontSize: '42px', maxFontSize: '76px' }); /* Fittext ideal for H2 tag */
$(".fittext-h3").fitText(1.5, { minFontSize: '38px', maxFontSize: '64px' }); /* Fittext ideal for H3 tag */
$(".fittext-h4").fitText(1.5, { minFontSize: '24px', maxFontSize: '42px' }); /* Fittext ideal for H4 tag */
$(".fittext-h5").fitText(1.5, { minFontSize: '16px', maxFontSize: '30px' }); /* Fittext ideal for H5 tag */
$(".fittext-h6").fitText(1.5, { minFontSize: '12px', maxFontSize: '24px' }); /* Fittext ideal for H6 tag */

/* STACKS */
$('.stack-auto').each(function(index) {
	$(this).css("z-index", index);
});
	
/* Equal Heights */
$('.equal-height').matchHeight({
	byRow: true,
    property: 'height',
    target: null,
    remove: false
});
	
/* Prideify - rainbow color filter */
$('.pride').prideify({ crossOriginProxy: true });

/* BAFFLE */
/* Animation speed value can be increased or decreased. Same with duration */
let b = baffle('.baffle', { characters: '█▓▒░', speed: 150 }).reveal(2500); /* Runs animation only once, upon page load */
let bl = baffle('.baffle-longer', { characters: '█▓▒░', speed: 150, duration: 3000 }).reveal(3000); /* Animation duration set to 3 seconds */
let bp = baffle('.baffle-prolonged', { characters:'█▓▒░', speed: 300, duration: 10000 }).reveal(10000); /* Animation duration set to 10 seconds */
let bf = baffle('.baffle-forever', {characters: '█▓▒░', speed: 150}).start(); /* Animation continues on an endless loop */

});