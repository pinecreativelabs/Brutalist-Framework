/* TRIANGLIFY: Triangle Pattern */
$.fn.trianglarize=function(t){var r=$.extend({triHeight:100,spacingV:0,spacingH:0,triColor:"#00DDFF",triColorU:"#DD00FF",startUpsdwn:!1},t),s=r.triHeight,n=r.startUpsdwn,e=r.spacingV,o=r.spacingH,a=r.triColor,p=(r.triColorU,s/Math.sqrt(3)*2);for(triCountH=this.width()/p+1,triCountV=this.height()/s,i=0;i<triCountV;i++){var l=n,d=0-p/2;for(j=0;j<2*triCountH;j++){if(l){var g=i*s+e*i;this.append('<div class="upsdwn-triangle" style="top: '+g+"px; left: "+(j*(p/2)+d+o*j)+'px;"></div>')}else{g=i*s+e*i;this.append('<div class="triangle-pattern" style="top: '+g+"px; left: "+(j*(p/2)+d+o*j)+'px;"></div>')}l=!l}n=!n}return $(".triangle-pattern").css("border-left",p/2+"px solid transparent"),$(".triangle-pattern").css("border-right",p/2+"px solid transparent"),$(".triangle-pattern").css("border-bottom",s+"px solid "+a),$(".upsdwn-triangle").css("border-left",p/2+"px solid transparent"),$(".upsdwn-triangle").css("border-right",p/2+"px solid transparent"),$(".upsdwn-triangle").css("border-top",s+"px solid "+r.triColorU),this};
$(document).ready(function(){
	$(".triangle-dark").trianglarize({
		triHeight: 50,
		triColor: '#c9c9c9', triColorU: '#ebebeb',
		spacingV: 6, spacingH: 8
	});
});