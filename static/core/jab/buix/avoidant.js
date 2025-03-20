/* avoidant UI hover effect 
 * https://codepen.io/tanishka-2000/pen/KKxOpqM
*/
const avoidant = document.querySelector('.avoidant');
window.onmousemove = e => {
    let xDecimal = e.x / window.innerWidth,   //position of mouse with respect to window
        yDecimal = e.y / window.innerHeight;
    // avoidant is 200px more wider and longer than window
    let panX = 200 * xDecimal * -1, // moving avoidant relative to mouse movement on screen,
        panY = 200 * yDecimal * -1; // max movement allowed is 200px
    avoidant.style.transform = `translate(${panX}px, ${panY}px)`;
}