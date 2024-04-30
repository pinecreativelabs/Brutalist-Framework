
// SYSTEM INFO WIDGET
function systemInfo(){var systlist = "";systlist+="<h5>Browser</h5><p><b>CodeName:</b> "+navigator.appCodeName+"<br />";systlist+="<b>Name:</b> "+navigator.appName+"<br />";systlist+="<b>Version:</b> "+navigator.appVersion+"<br />";systlist+="<b>Cookies Enabled:</b> "+navigator.cookieEnabled+"<br />";systlist+="<b>Language:</b> "+navigator.language+"<br />";systlist+="<b>Online:</b> "+navigator.onLine+"<br />";systlist+="<b>Platform:</b> "+navigator.platform+"<br />";systlist+="<b>User-agent header:</b> "+navigator.userAgent+"</p>";systlist+="<h5>Screen</h5><p><b>Color / Pixel Depth:</b> "+screen.colorDepth+" / "+screen.pixelDepth+"<br />";systlist+="<b>Width x Height:</b> "+screen.width+" x "+screen.height+"</p>";document.getElementById("systeminfo").innerHTML=systlist;}if(window.addEventListener) {window.addEventListener("load", systemInfo, false);} else if (window.attachEvent) {window.attachEvent("onload", systemInfo);}

// BOS UI
(function($){
	var OpenPanel = function(e, options){
		//Default settings
		var settings = $.extend({}, $.fn.openpanel.defaults, options);
		var $panelid;
		var $pos;
		var $ext;
		var $ajaxtype;
		var $winHeight = $(window).height();
		var $viewWidth;
		var $maxindex = 0;
		var $top;
		var $open = 1;
		var $backopen = 0;
		var $close;
		var $filepath;
		var $paramstring;
		var $curopen;
		var $pscroll;
		// Check Station
		if ( ! $('#op-station').length ) {
			$('body').append("<div id='op-station'></div>");
		}
		// Check Loading Image
		if ( ! $('#op-station').find('#op-loadingholder').length ) {
			$('#op-station').append("<div id='op-loadingholder'><div id='op-loadingicon'></div></div>");
		}
		
		// Set Panel Station Height
		$('#op-station').css({'height':$winHeight+'px'});
		$('#op-station').find('.op-panel').attr('data-open', 0);

		// Set Panel Style
		function setPanelStyle($panelid) {
		
			var $panelHeight;
			var panelObj = {};
			
			// Set Style for HTML
			if ( !$('html').hasClass('op-html') ) {
				$('html').addClass('op-html');
			}
			// Reset Panel Height
			$('#op-station').find('#'+$panelid).css({'height':'auto'});
			// Get the highest z-index of panels
			$('#op-station').find('.op-panel').each(function(){
				var $curindex = parseInt($(this).css("z-index"), 10);
				if( $curindex > $maxindex ) {
					$maxindex = $curindex;
				}
			});
			$maxindex = $maxindex + 1;
			
			$panelHeight = $('#op-station').find('#'+$panelid).height();
			
			if ( $winHeight > $panelHeight ) {
				$panelHeight = $winHeight;
			}
			
			panelObj['height'] = $panelHeight+'px';
			panelObj['z-index'] = $maxindex;
			
			// Set style for the opening panel
			if ( $panelid !== undefined ) {
				$('#op-station').find('#'+$panelid).css(panelObj);
			}
		}
		
		// Open Panel Function
		function OpenPanelFunc($panelid, $pos, $ext, $ajaxtype) {
			
			if ( !$pos ) {$pos = 'none';}
			
			// Set Scroll Position of Current Panel
			if ( $open > 1 ) {
				$curopen = $open -1;
				$pscroll = $('#op-station').scrollTop();
				$('#op-station').find('.op-panel[data-open="'+$curopen+'"]').attr('data-scrollto', $pscroll);
				$('#op-station').find('.op-panel[data-open="'+$curopen+'"]').css({'top':'-'+$pscroll+'px'});
			}

			$('#op-station').removeClass('op-station-overflow');
			$('#op-station').css({'display':'block'});
			
			// Show Loading Image
			$('#op-loadingholder').css({'display':'block'});
			
			// Load Panel Content
			if ( !$('#'+$panelid).length ) { // Load AJAX Content
				
				// Set Ajax File Path
				if ( $ajaxtype == 'dynamic' ) { // For PHP content
					$filepath = 'sat/bos-ui/ajax/ajaxstation.'+$ext;
					$paramstring = 'panelid='+$panelid;
				}
				else { // For Static HTML content
					$filepath = 'sat/bos-ui/ajax/'+$panelid+'.'+$ext;
					$paramstring = '';
				}
				
				// Start AJAX
				$.ajax({
					url: $filepath,
					type:'POST',
					data: $paramstring,
					cache: false,
					success: function(opcontent){
						if (opcontent) {
						
							$('#op-station').append(opcontent);
							if ( $('#op-station').find('#'+$panelid).length > 0 ) {
								
								//$('#op-station').css({'display':'block'});
								
								// Set Panel Style
								setPanelStyle($panelid);
								
								// Set width for Panel Control Bar
								$('#op-station').find('.op-panelctrl').css({'width':'100%', 'display':'none'});
								
								// Position Effect
								PostionEffect($panelid, $pos);

								// Open Panel
								$('#'+$panelid).find('.op-tab').on('click',function(){
									
									$panelid = $(this).attr('data-panelid');
									
									$pos = $(this).attr('data-pos');
									
									// Get File Extension
									$ext = $(this).attr('data-ext');
									if ( $ext === undefined ) {
										$ext=settings.ext;
										$ajaxtype = 'dynamic';
									}
									else {
										$ajaxtype = 'static';
									}
									
									// Open Panel
									OpenPanelFunc($panelid, $pos, $ext. $ajaxtype);
									
								});
								
								// Call Close Panel Function
								$('#'+$panelid).find('.op-bt-close').on('click',function() {
									$close = $(this).attr('data-close');
									ClosePanel($close);
								});
								
								// Call Close All Panels Function
								$('#'+$panelid).find('.op-bt-closeall').on('click',function() {
									CloseAllPanels();
								});
							}
						}
					},
					error: function(opcontent) {
						// Show Error Warning
						alert('Loading Error: Please check the Panel ID or your Server config.');
						// Hide Loading Image
						$('#op-station').css({'display':'none'});
						$('#op-loadingholder').css({'display':'none'});
					}
				});
				// End AJAX
			}
			else { // Load Inline Content
				$('#op-station').css({'display':'block'});
				// Set Panel Style
				setPanelStyle($panelid);
				// Set width for Panel Control Bar
				$('#op-station').find('.op-panelctrl').css({'width':'100%', 'display':'none'});
				// Position Effect
				PostionEffect($panelid, $pos);
			}
		}
		
		// EffectComplete Function
		function EffectComplete($panelid) {
			
			// Hide Loading Image
			$('#op-loadingholder').css({'display':'none'});
			// Hide Old Panel
			$('#op-station').find('.op-panel[data-open="'+$backopen+'"]').css({'display':'none', 'position':'absolute', 'top': 0});
			
			if ( $open == 2 ) {
				$top = $('html').scrollTop() + $('body').scrollTop();
				$('body').css({'position':'fixed', 'top':'-'+$top+'px'});
			}
			// Hide Page Scroll Bar
			$('body').css({'overflow':'hidden'});
			// Reset Panel Content Position
			if ( !$('#op-station').hasClass('op-station-overflow') ) {
				$('#op-station').addClass('op-station-overflow');
			}
			// Display New Panel from The Top Scroll Position
			$('#op-station').scrollTop(0);
			// Set width for Panel Control Bar
			$viewWidth = $('#op-station').find('#'+$panelid).width();
			$('#op-station').find('#'+$panelid).find('.op-panelctrl').css({'width':$viewWidth+'px', 'display':'block'});
			
			// Determine to show Close All Button
			if ( $('#op-station').find('.op-panel:visible').attr('data-open') > 1 ) {
				$('#op-station').find('.op-panelctrl').find('.op-bt-closeall').css({'display':'block'});
			} else {
				$('#op-station').find('.op-panelctrl').find('.op-bt-closeall').css({'display':'none'});
			}
			
		}
		// End EffectComplete Function
		
		// Position Effect
		function PostionEffect($panelid, $pos) {
			var directionObj = {};
			// Set Opened Panel Order
			$('#op-station').find('#'+$panelid).attr('data-open', $open);
			$backopen = $open -1;
			$open++;
			$('#op-station').find('.op-panel[data-open="'+$backopen+'"]').css({'position':'fixed'});
			if ( $pos == 'left' ) {
				directionObj['left'] = '-'+$(window).width()+'px';
				directionObj['top'] = '0px';
				directionObj['display'] = 'block';
				$('#'+$panelid).css(directionObj);
				$('#'+$panelid).animate({'left':'0px'}, settings.animSpeed,'swing',
				function(){
					EffectComplete($panelid);
				});
			}
			else if ( $pos == 'right' ) {
				directionObj['left'] = $(window).width()+'px';
				directionObj['top'] = '0px';
				directionObj['display'] = 'block';
				$('#'+$panelid).css(directionObj);
				$('#'+$panelid).animate({'left':'0px'}, settings.animSpeed,'swing',
				function(){
					EffectComplete($panelid);
				});
			}
			else if ( $pos == 'bottom' ) {
				directionObj['top'] = $(window).height()+'px';
				directionObj['display'] = 'block';
				$('#'+$panelid).css(directionObj);
				$('#'+$panelid).animate({'top':'0px'}, settings.animSpeed,'swing',
				function(){
					EffectComplete($panelid);
				});
			}
			else if ( $pos == 'top' ) {
				directionObj['top'] = '-'+$(window).height()+'px';
				directionObj['display'] = 'block';
				$('#'+$panelid).css(directionObj);
				$('#'+$panelid).animate({'top':'0px'}, settings.animSpeed,'swing',
				function(){
					EffectComplete($panelid);
				});
			}
			else { // fade effect
				directionObj['top'] = '-2000px';
				directionObj['display'] = 'none';
				$('#'+$panelid).css(directionObj);
				
				$('#'+$panelid).animate({'top':'0px'},10, function() {
					$('#'+$panelid).fadeIn(settings.animSpeed, function(){
						EffectComplete($panelid);
					});
				});
			}
			
		} // End PositionEffect
		
		// Close Panel
		function ClosePanel($close) {
			$open--;
			if ( $backopen > 0 ) {
				$('#op-station').find('.op-panel[data-open="'+$backopen+'"]').css({'display':'block'});
				// Set width for Panel Control Bar
				$viewWidth = $('#op-station').find('.op-panel[data-open="'+$backopen+'"]').width();
				$('#op-station').find('.op-panel[data-open="'+$backopen+'"]').find('.op-panelctrl').css({'width':$viewWidth+'px', 'display':'block'});
				// Set Scroll Position for Panel
				$pscroll = $('#op-station').find('.op-panel[data-open="'+$backopen+'"]').attr('data-scrollto');
				$('#op-station').scrollTop($pscroll);
				
			}
			$backopen--;
			
			// Determine to show Close All Button
			if ( $backopen == 0 || $('#op-station').find('.op-panel[data-open="'+$backopen+'"]').length == 0 ) {
				$('#op-station').find('.op-panel').find('.op-panelctrl').find('.op-bt-closeall').css({'display':'none'});
			}

			if ( $('#op-station').find('.op-panel:visible').length == 1 ) {
				$('#op-station').removeClass('op-station-overflow');
				$('body').css({'position':'relative', 'top':0});
				$('html').scrollTop($top);
				$('body').scrollTop($top);
				$open = 1;
			}
			
			$('#'+$close).fadeOut(settings.animSpeed, function(){
				$(this).attr('data-open', 0);
				// Hide Hidden Panel Control Bar
				$(this).find('.op-panelctrl').css({'display':'none'});
				if( $('#op-station').find('.op-panel:visible').length == 0 ){
				
					$('#op-station').css({'display':'none'});
					// Show Page Scroll Bar
					$('body').css({'overflow':'auto'});
					// Remove HTML style
					$('html').removeClass('op-html');
				}
			});
		}
		

		// Close All Panels
		function CloseAllPanels() {	
			$('#op-station').removeClass('op-station-overflow');
			$('body').css({'position':'relative', 'top':0});
			$('html').scrollTop($top);
			$('body').scrollTop($top);
			$('.op-panel').css({'display':'none'});
			$('#op-station').css({'display':'none'});
			$('#op-station').find('.op-panelctrl').css({'display':'none'});
			// Show Page Scroll Bar
			$('body').css({'overflow':'auto'});
			// Remove HTML style
			$('html').removeClass('op-html');
			$('#op-station').find('.op-panel').attr('data-open', 0);
			$open = 1;
		}
		
		// Open Panel
		$(e).find('.op-tab').on('click',function(){
			$panelid = $(this).attr('data-panelid');
			$pos = $(this).attr('data-pos');
			// Get File Extension
			$ext = $(this).attr('data-ext');
			if ( $ext === undefined ) {
				$ext=settings.ext;
				$ajaxtype = 'dynamic';
			}
			else {$ajaxtype = 'static';}
			// Open Panel
			OpenPanelFunc($panelid, $pos, $ext, $ajaxtype);
		});
		
		// Call Close Panel Function
		$('#op-station').find('.op-bt-close').on('click',function() {
			$close = $(this).attr('data-close');
			ClosePanel($close);
		});
		// Close All Panels by Clicking
		$('#op-station').find('.op-bt-closeall').on('click',function() {
			CloseAllPanels();
		});
		
		// Close All Panels by ESC key
		if ( settings.enableKeys == true ) {
			$(document).keydown(function(event) {
				if ( event.keyCode == 27 ) {
					CloseAllPanels()
					return false;
				}
			});
		}

		// Auto Open Panel at the First Load
		if ( settings.autoPanel !== undefined ) {
			// Panel ID will be opened automatically
			$panelid = settings.autoPanel;
			// Get File Extension
			$ext = settings.ext;
			$ajaxtype = 'dynamic';
			// Open Panel
			OpenPanelFunc($panelid, $pos, $ext, $ajaxtype);
		}
		
		// Resize Window
		function debouncer(func, timeout) {
			var timeoutID, timeout = timeout || 200;
			return function() {
				var scope = this , args = arguments;
				clearTimeout( timeoutID );
				timeoutID = setTimeout( function() {
					func.apply( scope , Array.prototype.slice.call(args));
				}, timeout);
			}
		}
		$(window).resize( debouncer( function () {
			var $newPanelHeight;
			$winHeight = $(window).height();
			// Reset Panel Station Height
			$('#op-station').css({'height':$winHeight+'px'});
			// Reset Panel Height
			$('#op-station').find('.op-panel').css({'height':'auto'});
			var $activepanels = $('#op-station').find('.op-panel').length;
			for ( var $j=0; $j<$activepanels; $j++) {
				$newPanelHeight = $('#op-station').find('.op-panel').eq($j).height();
				if ( $winHeight > $newPanelHeight ) {
					$newPanelHeight = $winHeight;
				}
				// Set New Height for Panels
				$('#op-station').find('.op-panel').eq($j).css({'height':$newPanelHeight+'px'});
			}
			$viewWidth = $('#op-station').find('#'+$panelid).width();
			// Set New Width for Panel Control Bars
			$('#op-station').find('.op-panel').find('.op-panelctrl').css({'width':$viewWidth+'px', 'display':'block'});
		}));
		// End Resize
	};
	
	$.fn.openpanel = function(options) {
		return this.each(function(key, value){
			// Return early if this element already has a plugin instance
            if ($(this).data('openpanel')) return $(this).data('openpanel');
			// Pass options to plugin constructor
			var openpanel = new OpenPanel(this, options);
			// Store plugin object in this element's data
            $(this).data('openpanel', openpanel);
		});
	};
	
	//Default settings
	$.fn.openpanel.defaults = {
		ext: 'php', animSpeed: 400, enableKeys: false
	};	
})(jQuery);
$(document).ready(function(){
	$('#submit').prop("disabled", true);
	$("#checkAll").change(function () {
		  $("input:checkbox").prop('checked', $(this).prop("checked"));
		  $('#submit').prop("disabled", false);
		  if ($('.chki').filter(':checked').length < 1){
				$('#submit').attr('disabled',true);}
	});
	$('input:checkbox').click(function() {
			if ($(this).is(':checked')) {
				$('#submit').prop("disabled", false);
			} else {
			if ($('.chki').filter(':checked').length < 1){
				$('#submit').attr('disabled',true);}
			}
	});
});

// mousewheel
(function(e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else if(typeof exports==="object"){module.exports=e}else{e(jQuery)}})(function(e){function a(t){var n=t||window.event,o=r.call(arguments,1),u=0,a=0,c=0,h=0;t=e.event.fix(n);t.type="mousewheel";if("detail"in n){c=n.detail*-1}if("wheelDelta"in n){c=n.wheelDelta}if("wheelDeltaY"in n){c=n.wheelDeltaY}if("wheelDeltaX"in n){a=n.wheelDeltaX*-1}if("axis"in n&&n.axis===n.HORIZONTAL_AXIS){a=c*-1;c=0}u=c===0?a:c;if("deltaY"in n){c=n.deltaY*-1;u=c}if("deltaX"in n){a=n.deltaX;if(c===0){u=a*-1}}if(c===0&&a===0){return}if(n.deltaMode===1){var p=e.data(this,"mousewheel-line-height");u*=p;c*=p;a*=p}else if(n.deltaMode===2){var d=e.data(this,"mousewheel-page-height");u*=d;c*=d;a*=d}h=Math.max(Math.abs(c),Math.abs(a));if(!s||h<s){s=h;if(l(n,h)){s/=40}}if(l(n,h)){u/=40;a/=40;c/=40}u=Math[u>=1?"floor":"ceil"](u/s);a=Math[a>=1?"floor":"ceil"](a/s);c=Math[c>=1?"floor":"ceil"](c/s);t.deltaX=a;t.deltaY=c;t.deltaFactor=s;t.deltaMode=0;o.unshift(t,u,a,c);if(i){clearTimeout(i)}i=setTimeout(f,200);return(e.event.dispatch||e.event.handle).apply(this,o)}function f(){s=null}function l(e,t){return u.settings.adjustOldDeltas&&e.type==="mousewheel"&&t%120===0}var t=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],n="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],r=Array.prototype.slice,i,s;if(e.event.fixHooks){for(var o=t.length;o;){e.event.fixHooks[t[--o]]=e.event.mouseHooks}}var u=e.event.special.mousewheel={version:"3.1.9",setup:function(){if(this.addEventListener){for(var t=n.length;t;){this.addEventListener(n[--t],a,false)}}else{this.onmousewheel=a}e.data(this,"mousewheel-line-height",u.getLineHeight(this));e.data(this,"mousewheel-page-height",u.getPageHeight(this))},teardown:function(){if(this.removeEventListener){for(var e=n.length;e;){this.removeEventListener(n[--e],a,false)}}else{this.onmousewheel=null}},getLineHeight:function(t){return parseInt(e(t)["offsetParent"in e.fn?"offsetParent":"parent"]().css("fontSize"),10)},getPageHeight:function(t){return e(t).height()},settings:{adjustOldDeltas:true}};e.fn.extend({mousewheel:function(e){return e?this.bind("mousewheel",e):this.trigger("mousewheel")},unmousewheel:function(e){return this.unbind("mousewheel",e)}})})