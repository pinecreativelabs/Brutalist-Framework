/* StackSwitch */
$.fn.switchinglayers=function(i){var n,t=[],a=$.extend({container:$("[data-switch='container']"),mainLayer:$("[data-switch='main-layer']"),parentSwitch:$("[data-switch='switch-parent']"),activeClassName:"active",switchingTime:3});function e(i,a){for(var e=0,c=0;c<t.length;c++)t[c]+=1;$(i.container).each(function(){n=$(this).find(i.mainLayer),$(n).each(function(){$(this).find(i.parentSwitch).each(function(){e++,a&&t.push(0),0==$(this).children("div").eq(t[e-1]).length&&(t[e-1]=0),$(this).children("div").removeClass(i.activeClassName),$(this).children("div").eq(t[e-1]).addClass(i.activeClassName)})})})}e(a,!0),setInterval(function(){a.container.length>0&&e(a,!1)},1e3*a.switchingTime)};
$(document).ready(function(){
	$().switchinglayers({
		switchingTime: 5
	});
});