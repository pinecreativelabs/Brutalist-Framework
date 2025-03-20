/* Video Player */
function browserSniff(){var e,n,t,o=(navigator.appVersion,navigator.userAgent),r=navigator.appName,i=""+parseFloat(navigator.appVersion),s=parseInt(navigator.appVersion,10);return navigator.appVersion.indexOf("Windows NT")!==-1&&navigator.appVersion.indexOf("rv:11")!==-1?(r="IE",i="11;"):(n=o.indexOf("MSIE"))!==-1?(r="IE",i=o.substring(n+5)):(n=o.indexOf("Chrome"))!==-1?(r="Chrome",i=o.substring(n+7)):(n=o.indexOf("Safari"))!==-1?(r="Safari",i=o.substring(n+7),(n=o.indexOf("Version"))!==-1&&(i=o.substring(n+8))):(n=o.indexOf("Firefox"))!==-1?(r="Firefox",i=o.substring(n+8)):(e=o.lastIndexOf(" ")+1)<(n=o.lastIndexOf("/"))&&(r=o.substring(e,n),i=o.substring(n+1),r.toLowerCase()==r.toUpperCase()&&(r=navigator.appName)),(t=i.indexOf(";"))!==-1&&(i=i.substring(0,t)),(t=i.indexOf(" "))!==-1&&(i=i.substring(0,t)),s=parseInt(""+i,10),isNaN(s)&&(i=""+parseFloat(navigator.appVersion),s=parseInt(navigator.appVersion,10)),[r,s]}function showControls(e){e.setAttribute("controls","controls")}function togglePlay(e,n){e[e.paused?"play":"pause"](),e.paused?n.classList.remove("is-playing"):n.classList.add("is-playing")}function updateButton(e,n){var t=e.paused?iconPlay:iconPause;n.forEach(function(e){return e.innerHTML=t})}function skip(){video.currentTime+=parseFloat(this.dataset.skip)}function toggleVolume(e,n){var t=e.volume,o=iconVolumeMedium;1==t?(t=0,o=iconVolumeMute):.5==t?(t=1,o=iconVolumeMedium):(t=.5,o=iconVolumeLow),e.volume=t,n.innerHTML=o}function handleRangeUpdate(){video[this.name]=this.value}function handleProgress(e,n){var t=e.currentTime/e.duration*100;n.style.flexBasis=t+"%"}function scrub(e,n,t){var o=e.offsetX/t.offsetWidth*n.duration;n.currentTime=o}function wrapPlayers(){document.querySelectorAll("video").forEach(function(e){var n=document.createElement("div");n.classList.add("vplay__player"),e.parentNode.insertBefore(n,e),n.appendChild(e)})}function buildControls(e){var n=[];return n.push('<button class="'+e+'__button--big toggle" title="Toggle Play">'+iconPlay+"</button>"),n.push('<div class="'+e+'__controls vplay__controls">'),n.push('<button class="'+e+'__button toggle" title="Toggle Video">'+iconPlay+"</button>",'<div class="progress">','<div class="progress__filled"></div>',"</div>",'<button class="'+e+'__button volume" title="Volume">'+iconVolumeMedium+"</button>",'<button class="'+e+'__button fullscreen" title="Full Screen">'+iconExpand+"</button>"),n.push("</div>"),n.join("")}function attachSkin(e){return void 0!==e&&""!=e?e:"default"}function showTitle(e,n){return void 0!==n&&""!=n&&'<div class="'+e+'__title">'+n+"</div>"}function addOverlay(e,n){if(1==n)e.classList.add("vplay__overlay");else{if(2!=n)return;e.classList.add("vplay__overlay--2")}}function addColor(e,n){if(void 0!==n&&""!=n){var t=e.querySelectorAll("button");e.querySelector(".progress__filled").style.background=n,t.forEach(function(e){return e.style.color=n})}}function toggleFullScreen(e,n){document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement||document.msFullscreenElement?(e.classList.remove("vplay__fullscreen"),document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen?document.webkitCancelFullScreen():document.msExitFullscreen&&document.msExitFullscreen(),isFullscreen=!1,n.innerHTML=iconExpand):(e.classList.add("vplay__fullscreen"),e.requestFullscreen?e.requestFullscreen():e.mozRequestFullScreen?e.mozRequestFullScreen():e.webkitRequestFullscreen?e.webkitRequestFullscreen():e.msRequestFullscreen&&e.msRequestFullscreen(),isFullscreen=!0,n.innerHTML=iconCompress)}function onFullScreen(e,n){null!==document.webkitFullscreenElement||(n.classList.remove("vplay__fullscreen"),n.querySelector(".fullscreen").innerHTML=iconExpand)}function addListenerMulti(e,n,t){for(var o=n.split(" "),r=0,i=o.length;r<i;r++)e.addEventListener(o[r],t,!1)}!function(){function e(e){this.element=e}var n=function(e){return new RegExp("(^| )"+e+"( |$)")},t=function(e,n,t){for(var o=0;o<e.length;o++)n.call(t,e[o])};e.prototype={add:function(){t(arguments,function(e){this.contains(e)||(this.element.className+=" "+e)},this)},remove:function(){t(arguments,function(e){this.element.className=this.element.className.replace(n(e),"")},this)},toggle:function(e){return this.contains(e)?(this.remove(e),!1):(this.add(e),!0)},contains:function(e){return n(e).test(this.element.className)},replace:function(e,n){this.remove(e),this.add(n)}},"classList"in Element.prototype||Object.defineProperty(Element.prototype,"classList",{get:function(){return new e(this)}}),window.DOMTokenList&&null==DOMTokenList.prototype.replace&&(DOMTokenList.prototype.replace=e.prototype.replace)}(),function(){if("function"==typeof NodeList.prototype.forEach)return!1;NodeList.prototype.forEach=Array.prototype.forEach}();var obj={};obj.browserInfo=browserSniff(),obj.browserName=obj.browserInfo[0],obj.browserVersion=obj.browserInfo[1],wrapPlayers();var players=document.querySelectorAll(".vplay__player"),iconPlay='<i class="vplay-play"></i>',iconPause='<i class="vplay-pause"></i>',iconVolumeMute='<i class="vplay-volume-mute"></i>',iconVolumeMedium='<i class="vplay-volume-medium"></i>',iconVolumeLow='<i class="vplay-volume-low"></i>',iconExpand='<i class="vplay-expand"></i>',iconCompress='<i class="vplay-compress"></i>';players.forEach(function(e){var n=e.querySelector("video"),t=attachSkin(n.dataset.skin);e.classList.add(t),addOverlay(e,n.dataset.overlay);var o=showTitle(t,n.dataset.title);o&&e.insertAdjacentHTML("beforeend",o);var r=buildControls(t);e.insertAdjacentHTML("beforeend",r),addColor(e,n.dataset.color);var i=e.querySelector("."+t+"__controls"),s=e.querySelector(".progress"),l=e.querySelector(".progress__filled"),c=e.querySelectorAll(".toggle"),a=(e.querySelectorAll("[data-skip]"),e.querySelectorAll("."+t+"__slider"),e.querySelector(".volume")),u=e.querySelector(".fullscreen");"IE"!==obj.browserName||8!==obj.browserVersion&&9!==obj.browserVersion||(showControls(n),i.style.display="none"),n.addEventListener("click",function(){togglePlay(this,e)}),n.addEventListener("play",function(){updateButton(this,c)}),n.addEventListener("pause",function(){updateButton(this,c)}),n.addEventListener("timeupdate",function(){handleProgress(this,l)}),c.forEach(function(t){return t.addEventListener("click",function(){togglePlay(n,e)})}),a.addEventListener("click",function(){toggleVolume(n,a)});var d=!1;s.addEventListener("click",function(e){scrub(e,n,s)}),s.addEventListener("mousemove",function(e){return d&&scrub(e,n,s)}),s.addEventListener("mousedown",function(){return d=!0}),s.addEventListener("mouseup",function(){return d=!1}),u.addEventListener("click",function(n){return toggleFullScreen(e,u)}),addListenerMulti(e,"webkitfullscreenchange mozfullscreenchange fullscreenchange MSFullscreenChange",function(n){return onFullScreen(n,e)})});