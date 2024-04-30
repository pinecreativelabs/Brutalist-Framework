/* FITTEXT */
!function(){function r(n,t,e){n.addEventListener?n.addEventListener(t,e,!1):n.attachEvent("on"+t,e)}window.fitText=function(n,i,t){function e(n){function t(){n.style.fontSize=Math.max(Math.min(n.clientWidth/(10*e),parseFloat(o.maxFontSize)),parseFloat(o.minFontSize))+"px"}var e=i||1;t(),r(window,"resize",t),r(window,"orientationchange",t)}var o=function(n,t){for(var e in t)t.hasOwnProperty(e)&&(n[e]=t[e]);return n}({minFontSize:-1/0,maxFontSize:1/0},t);if(n.length)for(var a=0;a<n.length;a++)e(n[a]);else e(n);return n}}();
document.addEventListener('DOMContentLoaded',() => {
	window.fitText( document.getElementsByClassName("fittext"), 1.0 );
	window.fitText( document.getElementsByClassName("fittext-c"), 1.5 );
	window.fitText( document.getElementsByClassName("fittext-cc"), 2.0 );
	window.fitText( document.getElementsByClassName("fittext-x"), 0.75 );
	window.fitText( document.getElementsByClassName("fittext-xx"), 0.5 );
});