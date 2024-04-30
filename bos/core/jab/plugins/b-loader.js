/* B-Loader */
!function(T){T.fn.simpleLoadMore=function(_){var f=T.extend({count:5,itemsToLoad:5,btnHTML:"",btnText:"View More",item:"",cssClass:"load-more",showCounter:!1,counterText:"Showing {showing} out of {total}"},_);T(this).each(function(t,n){var e,o=f.btnHTML,s=f.btnText,a=f.count,i=(f.itemsToLoad,f.item),l=f.cssClass,c=f.showCounter,d=f.counterText,u=T(this),h=u.find(i),m=T('<p class="slm__counter">'+d+"</p>");c&&u.append(m),o||(o='<a href="#" class="'+l+'__btn">'+s+"</a>"),e=T(o),_.itemsToLoad&&!isNaN(_.itemsToLoad)||(f.itemsToLoad=f.count),u.addClass(l),h.addClass(l+"__item"),!u.find("."+l+"__btn").length&&h.length>f.count&&u.append(e),e.add(m).html(function(t,n){var e=n.replace("{showing}",'<span class="loadcount"><span class="slm__count slm__count--showing">'+a+"</span>");return e=e.replace("{total}",'<span class="slm__count slm__count--total">'+h.length+"</span></span>")});var r=u.find("."+l+"__btn");r.length||(r=e),h.length>f.count&&h.slice(f.count).hide(),r.on("click",function(t){t.preventDefault();var n=T(this),e=h.filter(":hidden"),o=e;-1!==f.itemsToLoad&&0<f.itemsToLoad&&(o=e.slice(0,f.itemsToLoad)),0<o.length&&o.fadeIn(),u.find(".slm__count--showing").text(h.filter(":visible").length),(e.length<=f.itemsToLoad||-1===f.itemsToLoad)&&n.remove()})})}}(jQuery);
/* initialize B-Loader */
$(document).ready(function(){
	$('.b-loader').simpleLoadMore({
		item: 'div, p, li, article', count: 5,
		btnText: '+ Show More {showing} / {total}',
	});
});