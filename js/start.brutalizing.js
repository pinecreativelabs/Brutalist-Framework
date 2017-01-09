/* Let the Brutalization Begin */
/* NOTE: This script is must be UTF-8 encoded, so as to ensure character rendering on Baffle */

/* FitText */
$(".fittext").fitText();
$(".fittext-compress").fitText(2.2); /* Increases compression */
$(".fittext-uncompress").fitText(0.7); /* Reduces compression */
	
/* Baffle */
let b = baffle('.baffle', {
	characters: '█▓▒░', speed: 150
}).reveal(2500);
let bf = baffle('.baffle-forever', {characters: '█▓▒░'}).start();
someAsyncFunction(result => {
    bf.text(currentText => result.text).reveal(2500);
});
