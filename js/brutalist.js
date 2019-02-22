/*!
 * baffle 0.3.6 - A tiny javascript library for obfuscating and revealing text in DOM elements.
 * Copyright (c) 2016 Cam Wiegert <cam@camwiegert.com> - https://camwiegert.github.io/baffle
 * License: MIT
 */
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.baffle=e():t.baffle=e()}(this,function(){return function(t){function e(r){if(n[r])return n[r].exports;var i=n[r]={exports:{},id:r,loaded:!1};return t[r].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var n={};return e.m=t,e.c=n,e.p="",e(0)}([function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}var i=n(2),o=r(i);t.exports=o["default"]},function(t,e){"use strict";function n(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n]);return t}function r(t,e){return t.split("").map(e).join("")}function i(t){return t[Math.floor(Math.random()*t.length)]}function o(t,e){for(var n=0,r=t.length;n<r;n++)e(t[n],n)}function u(t){return t.map(function(t,e){return!!t&&e}).filter(function(t){return t!==!1})}function s(t){return"string"==typeof t?[].slice.call(document.querySelectorAll(t)):[NodeList,HTMLCollection].some(function(e){return t instanceof e})?[].slice.call(t):t.nodeType?[t]:t}Object.defineProperty(e,"__esModule",{value:!0}),e.extend=n,e.mapString=r,e.sample=i,e.each=o,e.getTruthyIndices=u,e.getElements=s},function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}function i(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(e,"__esModule",{value:!0});var o=n(1),u=n(3),s=r(u),c={characters:"AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz~!@#$%^&*()-+=[]{}|;:,./<>?",exclude:[" "],speed:50},a=function(){function t(e,n){i(this,t),this.options=(0,o.extend)(Object.create(c),n),this.elements=(0,o.getElements)(e).map(s["default"]),this.running=!1}return t.prototype.once=function(){var t=this;return(0,o.each)(this.elements,function(e){return e.write(t.options.characters,t.options.exclude)}),this.running=!0,this},t.prototype.start=function(){var t=this;return clearInterval(this.interval),(0,o.each)(this.elements,function(t){return t.init()}),this.interval=setInterval(function(){return t.once()},this.options.speed),this.running=!0,this},t.prototype.stop=function(){return clearInterval(this.interval),this.running=!1,this},t.prototype.set=function(t){return(0,o.extend)(this.options,t),this.running&&this.start(),this},t.prototype.text=function(t){var e=this;return(0,o.each)(this.elements,function(n){n.text(t(n.value)),e.running||n.write()}),this},t.prototype.reveal=function(){var t=this,e=arguments.length<=0||void 0===arguments[0]?0:arguments[0],n=arguments.length<=1||void 0===arguments[1]?0:arguments[1],r=e/this.options.speed||1,i=function(){clearInterval(t.interval),t.running=!0,t.interval=setInterval(function(){var e=t.elements.filter(function(t){return!t.bitmap.every(function(t){return!t})});(0,o.each)(e,function(e){var n=Math.ceil(e.value.length/r);e.decay(n).write(t.options.characters,t.options.exclude)}),e.length||(t.stop(),(0,o.each)(t.elements,function(t){return t.init()}))},t.options.speed)};return setTimeout(i,n),this},t}();e["default"]=function(t,e){return new a(t,e)}},function(t,e,n){"use strict";function r(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}function i(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(e,"__esModule",{value:!0});var u=n(1),s=function(){function t(e){o(this,t),this.value=e,this.init()}return t.prototype.init=function(){return this.bitmap=this.value.split("").map(function(){return 1}),this},t.prototype.render=function(){var t=this,e=arguments.length<=0||void 0===arguments[0]?[]:arguments[0],n=arguments.length<=1||void 0===arguments[1]?[]:arguments[1];return e.length?(0,u.mapString)(this.value,function(r,i){return n.indexOf(r)>-1?r:t.bitmap[i]?(0,u.sample)(e):r}):this.value},t.prototype.decay=function(){for(var t=arguments.length<=0||void 0===arguments[0]?1:arguments[0];t--;){var e=(0,u.getTruthyIndices)(this.bitmap);this.bitmap[(0,u.sample)(e)]=0}return this},t.prototype.text=function(){var t=arguments.length<=0||void 0===arguments[0]?this.value:arguments[0];return this.value=t,this.init(),this},t}(),c=function(t){function e(n){o(this,e);var i=r(this,t.call(this,n.textContent));return i.element=n,i}return i(e,t),e.prototype.write=function(t,e){return this.element.textContent=this.render(t,e),this},e}(s);e["default"]=function(t){return new c(t)}}])});
(function(a){a.fn.limitText=function(b){var c={length:100,ellipsisText:"..."},b=a.extend(c,b);return this.each(function(d,e){if(a(e).text().length>b.length){var f=a(e).text().substr(0,b.length);for(d=f.length;d>0;d--){if(f.charAt(d-1)==" "){a(e).text(f+b.ellipsisText);break}else{f=f.slice(0,f.length-1)}}}})}})(jQuery);
(function($){$.fn.blink=function(options){var defaults={delay:500};var options=$.extend(defaults,options);return $(this).each(function(idx,itm){var handle=setInterval(function(){if($(itm).css("visibility")==="visible"){$(itm).css('visibility','hidden')}else{$(itm).css('visibility','visible')}},options.delay);$(itm).data('handle',handle)})}
$.fn.unblink=function(){return $(this).each(function(idx,itm){var handle=$(itm).data('handle');if(handle){clearInterval(handle);$(itm).data('handle',null);$(itm).css('visibility','inherit')}})}}(jQuery))

/*!
* FitText.js 1.2
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
* Date: Thu May 05 14:23:00 2011 -0600
*/
!function(t){t.fn.fitText=function(n,i){var e=n||1,o=t.extend({minFontSize:Number.NEGATIVE_INFINITY,maxFontSize:Number.POSITIVE_INFINITY},i);return this.each(function(){var n=t(this),i=function(){n.css("font-size",Math.max(Math.min(n.width()/(10*e),parseFloat(o.maxFontSize)),parseFloat(o.minFontSize)))};i(),t(window).on("resize.fittext orientationchange.fittext",i)})}}(jQuery);
/*!
* jquery-match-height 0.7.0 by @liabru
* http://brm.io/jquery-match-height/
* License MIT
*/
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,i=function(t){return parseFloat(t)||0},a=function(e){var o=1,a=t(e),n=null,r=[];return a.each(function(){var e=t(this),a=e.offset().top-i(e.css("margin-top")),s=r.length>0?r[r.length-1]:null;null===s?r.push(e):Math.floor(Math.abs(n-a))<=o?r[r.length-1]=s.add(e):r.push(e),n=a}),r},n=function(e){var o={
byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=n(e);if(o.remove){var i=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(i)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="0.7.0",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,
r._afterUpdate=null,r._rows=a,r._parse=i,r._parseOptions=n,r._apply=function(e,o){var s=n(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),d=h.parents().filter(":hidden");return d.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),d.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0",
"padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=a(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var a=t(o),n=0;if(s.target)n=s.target.outerHeight(!1);else{if(s.byRow&&a.length<=1)return void a.css(s.property,"");a.each(function(){var e=t(this),o=e.attr("style"),i=e.css("display");"inline-block"!==i&&"flex"!==i&&"inline-flex"!==i&&(i="block");var a={
display:i};a[s.property]="",e.css(a),e.outerHeight(!1)>n&&(n=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}a.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=i(e.css("border-top-width"))+i(e.css("border-bottom-width")),o+=i(e.css("padding-top"))+i(e.css("padding-bottom"))),e.css(s.property,n-o+"px"))})}),d.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),
this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),i=o.attr("data-mh")||o.attr("data-match-height");i in e?e[i]=e[i].add(o):e[i]=o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(i,a){if(a&&"resize"===a.type){var n=t(window).width();if(n===e)return;e=n;
}i?-1===o&&(o=setTimeout(function(){s(a),o=-1},r._throttle)):s(a)},t(r._applyDataApi),t(window).bind("load",function(t){r._update(!1,t)}),t(window).bind("resize orientationchange",function(t){r._update(!0,t)})});

/*!
* Draggable
*/
!function(e){e.fn.tinyDraggable=function(n){var t=e.extend({handle:0,exclude:0},n);return this.each(function(){var n,o,u=e(this),a=t.handle?e(t.handle,u):u;a.on({mousedown:function(a){if(!t.exclude||!~e.inArray(a.target,e(t.exclude,u))){a.preventDefault();var f=u.offset();n=a.pageX-f.left,o=a.pageY-f.top,e(document).on("mousemove.drag",function(e){u.offset({top:e.pageY-o,left:e.pageX-n})})}},mouseup:function(){e(document).off("mousemove.drag")}})})}}(jQuery);
/*!
* Text Rotator
*/
"function"!=typeof Object.create&&(Object.create=function(t){function a(){}return a.prototype=t,new a}),function(t){var a={init:function(a,e){var n=this;n.rotatelist=a,n.options=t.extend({},t.fn.rotator.options,e),n.item=new Array;for(var i=0,r=n.rotatelist.length;r>i;i++)n.item[i]=new Array,n.item[i].rotateId=t(n.rotatelist[i]).attr("id"),n.item[i].terms=t("#"+n.item[i].rotateId+" ul li"),n.item[i].animate=n.valid_anim(t("#"+n.item[i].rotateId).attr("data-rotate-animate").split(",")),n.item[i].arena=t("#"+n.item[i].rotateId+" .rotate-arena"),n.item[i].interval=n.valid_interval(t("#"+n.item[i].rotateId).attr("data-rotate-interval")),t("#"+n.item[i].rotateId+" ul").hide(),n.rotatePlay(i)},rotatePlay:function(t){var a=this;setTimeout(function(){var e=a.item[t],n=e.arena.data("term")||0;e.arena.data("term",n===e.terms.length-1?0:n+1).html(e.terms.eq([n]).html()),a.anim(e.arena,e.animate[0]),setTimeout(function(){a.anim(e.arena,e.animate[1]),a.rotatePlay(t)},e.interval)},1e3)},valid_anim:function(a){var e=this;return a?a:t("#"+e.options.interval).attr("data-rotate-animate").split(",")},valid_interval:function(t){var a=this;return isNaN(t)?a.options.interval:t},anim:function(t,a){var e=this;t.removeClass().addClass("rotate-arena "+a+" "+e.options.animateClass).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend")}};t.fn.rotator=function(e){var n=Object.create(a);n.init(this,e),t.data(this,"rotator",a)},t.fn.rotator.options={animateClass:"animated",interval:"5000",animate:"fadeInUp,fadeOutDown"}}(jQuery,window,document);

/**
 * jQuery Throttle
 * Throttled functions.
 * @author Oliver Musebrink
 * @link http://www.olivermusebrink.de/
 * @copyright Licensed under the GPL Version 2 license
 * @version 1.0
 */
(function(a){a.throttle=function(d,e,g){var c=function(){var j=function(){f=window.setTimeout(h,e);d.apply(this,i)};var h=function(){f=0;if(b){b=false;j()}};var i=arguments;if(!f){j()}else{if(g){b=true}}};var f=0;var b=false;if(a.guid){c.guid=c.guid||a.guid++}return(e>0?c:d)}})(jQuery);
/**
 * jQuery Typorize
 * A simple style injector for advanced typography.
 * This plugin was inspired by the "lettering.js" that can be found at
 * http://letteringjs.com/
 * @author Oliver Musebrink
 * @link http://www.olivermusebrink.de/
 * @copyright Licensed under the GPL Version 2 license
 * @version 1.0
 */
(function(a){a.fn.typorize=function(c){var d={type:"letters",className:"",spaceClassName:"space"};var b=a.extend(true,{},d,c);return this.each(function(){var g=a(this);var n;var o,p;switch(b.type){case"lines":n=g.html();n=n.replace(/<\/?[a-zA-Z0-9]+.*?>/g,function(f){return f.toLowerCase()});o="<br>";p="line";break;case"words":n=g.text();o=" ";p="word";break;default:n=g.text();o="";p="letter";break}if(b.className!=""){p=b.className}n=n.replace(/^\s+|\s+$/g,"");n=n.replace(/\s+/g," ");n=n.split(o);var j=n.length,m=(typeof(b.className)==="function"),h,e;g.empty();for(var k=0;k<j;k++){e=n[k];h=(m?b.className(k+1,j):(p+(k+1)));if(e==" "){e="&nbsp;";h+=" "+b.spaceClassName}g.append('<span class="'+h+'">'+e+"</span>")}return g})}})(jQuery);
/**
 * jQuery Curved Text
 * Align text on any curve.
 * @author by Oliver Musebrink
 * @link http://www.olivermusebrink.de/
 * @copyright Dual licensed under the MIT or GPL Version 2 licenses
 * @version 1.4
 */
(function(a){a.fn.curvedText=function(c){var e=a(window);var d={curve:function(f){return{x:f,y:0.5}},domain:[0,1],viewport:{x:0,y:0,width:1,height:1},subdivisions:250,className:"letter",spaceClassName:"empty",baseline:"above",scale:true,rotate:true,animate:true,delay:0,duration:300,easing:"linear",watchResize:true,throttle:200};var b=a.extend(true,{},d,c);return this.each(function(){var g=function(q){return Math.round(1000*q)/1000};var m=function(){var t=f.text();f.empty();var q={position:"relative",overflow:"visible",width:"100%",height:"100%",whiteSpace:"nowrap"};i=a("<div />").css(q).text(t).appendTo(f);i.typorize({type:"letter",className:b.className,spaceClassName:b.spaceClassName});o=i.children("span");o.css({display:"inline-block",position:"relative"});var s=0;o.each(function(){var x=a(this),v=x.position(),w=x.outerWidth(true),u=x.outerHeight(true);var y={x:v.left,y:v.top,width:w,height:u};x.data("curvedText",y);s+=w});textLength=s;var r=f.data("curvedText");r=a.extend(true,r,{},{text:{length:textLength}});f.data("curvedText",r);o.css({display:"inline-block",position:"absolute"})};var n=function(){var r=b.subdivisions;var s={subdivisions:r,points:new Array(r+1),partialLengths:new Array(r+1),length:0,viewport:b.viewport};var q=b.domain,w=(q[1]-q[0])/r;var z,y,x;for(var v=0;v<=r;v++){x=q[0]+v*w;s.points[v]=b.curve(x)}s.partialLengths[0]=0;for(var v=1;v<=r;v++){z=s.points[v].x-s.points[v-1].x;y=s.points[v].y-s.points[v-1].y;s.length+=Math.sqrt(z*z+y*y);s.partialLengths[v]=s.length}var u=f.data("curvedText");u=a.extend(true,u,{},{curve:s});f.data("curvedText",u)};var k=function(){var O,Q,E,I,v,J,B,q,D,K,u,N,C,A,t,R,S,P,r,z,F,y,x,M,L,w,G;Q=f.data("curvedText");E=Q.curve.subdivisions;I=Q.curve.points;v=Q.curve.partialLengths;J=Q.curve.length;B=Q.text.length;q=(b.scale?(J/B):1);R=g(q);if(b.animate){K=["all",b.duration+"ms",b.easing,b.delay+"ms"].join(" ")}else{K="all 0ms linear 0ms"}t=(typeof(b.baseline)==="number");if(t){C=0.5;Q=a(o[0]).data("curvedText");z=Q.y+parseFloat(b.baseline)*Q.height}else{switch(b.baseline){case"below":C=0.5;A=0;break;default:C=0.5;A=1;break}}G=1;for(var H=0;H<o.length;H++){O=a(o[H]);Q=O.data("curvedText");D=q*(Q.x+0.5*Q.width);while(v[G]<D&&G<E){G++}w=(D-v[G-1])/(v[G]-v[G-1]);y=(1-w)*I[G-1].x+w*I[G].x;x=(1-w)*I[G-1].y+w*I[G].y;M=I[G].x-I[G-1].x;L=I[G].y-I[G-1].y;r=(b.rotate?(Math.atan2(L,M)*180/Math.PI):0);if(t){A=(z-Q.y)/Q.height}S=y-C*Q.width;P=x-A*Q.height;C=g(C);A=g(A);S=g(S);P=g(P);r=g(r);N=(100*C)+"% "+(100*A)+"%";u="translateX("+S+"px) translateY("+P+"px) scaleX("+R+") scaleY("+R+") rotate("+r+"deg)";O.css({"-webkit-transform-origin":N,"-moz-transform-origin":N,"-ms-transform-origin":N,"-o-transform-origin":N,"transform-origin":N}).css({"-webkit-transform":u,"-moz-transform":u,"-ms-transform":u,"-o-transform":u,transform:u}).css({"-webkit-transition":K,"-moz-transition":K,"-ms-transition":K,"-o-transition":K,transition:K})}};var h=function(){var z=f.width(),B=f.height();var u=f.data("curvedText");var w=u.curve.viewport;var A=z/w.width;var x="all 0ms linear 0ms";var t=g(A),s=g(A*-w.x),r=g(A*-w.y),y="translateX("+s+"px) translateY("+r+"px) scaleX("+t+") scaleY("+t+") rotate(0.0deg)",q="0% 0%";var v=g(A*w.height)+"px";f.css("height",v);i.css({"-webkit-transform-origin":q,"-moz-transform-origin":q,"-ms-transform-origin":q,"-o-transform-origin":q,"transform-origin":q}).css({"-webkit-transform":y,"-moz-transform":y,"-ms-transform":y,"-o-transform":y,transform:y}).css({"-webkit-transition":x,"-moz-transition":x,"-ms-transition":x,"-o-transition":x,transition:x})};var f=a(this),i,o,j;var p=f.text();if(!p||p.length==0){return}var l=f.data("curvedText");if(!l){m();if(b.watchResize){e.on("resize.curvedText orientationchange.curvedText",(typeof(a.throttle)!=="undefined"?a.throttle(h,b.throttle,true):h))}}else{i=f.children("div");o=i.children("span")}n();k();h();return f})}})(jQuery);
$(document).ready(function(){
	/*** Arc */
    var arc = function (t)
    {
        return {
            x: 500.0 + 300.0 * Math.cos(2.0 * Math.PI * t - 0.5 * Math.PI),
            y: 400.0 + 300.0 * Math.sin(2.0 * Math.PI * t - 0.5 * Math.PI)
        };
    };
    $('.arc-text').curvedText({
        curve: arc, domain:   [-0.2, 0.2],
        viewport: { x: 0.0, y: 0.0, width: 1000.0, height: 400.0 }
    });
	/*** Circle */
    var circle = function (t)
    {
        return {
            x: 500.0 + 300.0 * Math.cos(2.0 * Math.PI * -t + 0.5 * Math.PI),
            y: 500.0 + 300.0 * Math.sin(2.0 * Math.PI * -t + 0.5 * Math.PI)
        };
    };
    $('.circle-text').curvedText({
        curve: circle, domain: [0.0, 1.0],
        viewport: { x: 0.0, y: 0.0, width: 1000.0, height: 1000.0 }
    });
	/*** Bezier */
    var bezier = function (t)
    {
        var px = [100.0, 350.0, 500.0, 900.0],
            py = [400.0,  50.0, 500.0, 200.0],
            ax = [px[0], 3.0 * (px[1] - px[0]), 3.0 * (px[2] - 2.0 * px[1] + px[0]), px[3] - 3.0 * px[2] + 3.0 * px[1] - px[0]],
            ay = [py[0], 3.0 * (py[1] - py[0]), 3.0 * (py[2] - 2.0 * py[1] + py[0]), py[3] - 3.0 * py[2] + 3.0 * py[1] - py[0]],
            cx = ax[0] + ax[1] * t + ax[2] * t * t + ax[3] * t * t * t,
            cy = ay[0] + ay[1] * t + ay[2] * t * t + ay[3] * t * t * t;
        return {
            x: cx, y: cy
        };
    };
    $('.bezier-text').curvedText({
        curve: bezier, domain: [0.0, 1.0],
        viewport: { x: 0.0, y: 0.0, width: 1000.0, height: 500.0 }
    });
	/*** Spiral */
    var spiral = function (t)
    {
        var s = t + 1.0;
        return {
            x: 300.0 + 50.0 * s * Math.cos(2.0 * Math.PI * s - 0.5 * Math.PI),
            y: 300.0 + 50.0 * s * Math.sin(2.0 * Math.PI * s - 0.5 * Math.PI)
        };
    };
    $('.spiral-text').curvedText({
        curve: spiral, domain: [0.0, 3.0],
        viewport: { x: 0.0, y: 0.0, width: 600.0, height: 600.0 }
    });
	var sine = function (t)
    {
        return {
            x:   0.0 + 1000.0 * t,
            y: 250.0 +  100.0 * Math.sin(3.0 * Math.PI * t)
        };
    };
	var domain   = [0.0, 1.0], viewport = { x: 0.0, y: 0.0, width: 1000.0, height: 500.0 };
	$('.wave-text').curvedText({
        curve: sine, domain: domain, viewport: viewport
    });
});