/* Let the Brutalization Begin */
/* NOTE: This script is must be UTF-8 encoded, so as to ensure obfuscated character rendering on Baffle */

$(document).ready(function(){
	
/* FITTEXT */
$(".fittext").fitText();
$(".fittext-compress").fitText(2.2); /* Increases compression */
$(".fittext-uncompress").fitText(0.8); /* Reduces compression */
	
/* Equal Heights */
$('.equal-height').matchHeight({
	byRow: true,
    property: 'height',
    target: null,
    remove: false
});
	
/* Prideify - rainbow color filter*/
$('.pride').prideify();
	
/* BAFFLE */
/* Animation speed value can be increased or decreased. Same with duration */
let b = baffle('.baffle', { characters: '█▓▒░', speed: 150 }).reveal(2500); /* Runs animation only once, upon page load */
let bl = baffle('.baffle-longer', { characters: '█▓▒░', speed: 150, duration: 3000 }).reveal(2500); /* Animation duration set to 3 seconds */
let bf = baffle('.baffle-forever', {characters: '█▓▒░', speed: 150}).start(); /* Animation continues on an endless loop */

});