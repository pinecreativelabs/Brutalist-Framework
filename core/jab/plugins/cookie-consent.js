!function(r){r.fn.grtCookie=function(t){var o,e,c,n=r.extend({textcolor:"#333",background:"#fff",buttonbackground:"#333",buttontextcolor:"#fff",duration:365},t);return-1<document.cookie.indexOf("acceptgrt=0")?this.remove():(this.css({color:n.textcolor,background:n.background}),r("span.cookie-btn").css({background:n.buttonbackground,color:n.buttontextcolor}),this.addClass("cookie-active"),o=new Date,e=n.duration,o.setTime(o.getTime()+24*e*60*60*1e3),c="expires="+o.toUTCString(),document.cookie="acceptgrt=1;"+c+";path=/",r(".cookie-btn").on("click",function(){r(this).parent().remove(),document.cookie="acceptgrt=0;"+c+";path=/"})),this}}(jQuery);
/* Start the plugin
$(document).ready(function(){
	$(".cookie-consent").grtCookie({
		// Main text and background color, or apply core classes to HTML elements
		//textcolor: "#333",
		//background: "#FFCD69",
		// Button colors
		//buttonbackground: "#c40b14",
		//buttontextcolor: "#fff",
		// Duration in days
		duration: 365,
	});
});
*/