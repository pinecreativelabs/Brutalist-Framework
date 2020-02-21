(function(a){a.throttle=function(d,e,g){var c=function(){var j=function(){f=window.setTimeout(h,e);d.apply(this,i)};var h=function(){f=0;if(b){b=false;j()}};var i=arguments;if(!f){j()}else{if(g){b=true}}};var f=0;var b=false;if(a.guid){c.guid=c.guid||a.guid++}return(e>0?c:d)}})(jQuery);
(function(a){a.fn.typorize=function(c){var d={type:"letters",className:"",spaceClassName:"space"};var b=a.extend(true,{},d,c);return this.each(function(){var g=a(this);var n;var o,p;switch(b.type){case"lines":n=g.html();n=n.replace(/<\/?[a-zA-Z0-9]+.*?>/g,function(f){return f.toLowerCase()});o="<br>";p="line";break;case"words":n=g.text();o=" ";p="word";break;default:n=g.text();o="";p="letter";break}if(b.className!=""){p=b.className}n=n.replace(/^\s+|\s+$/g,"");n=n.replace(/\s+/g," ");n=n.split(o);var j=n.length,m=(typeof(b.className)==="function"),h,e;g.empty();for(var k=0;k<j;k++){e=n[k];h=(m?b.className(k+1,j):(p+(k+1)));if(e==" "){e="&nbsp;";h+=" "+b.spaceClassName}g.append('<span class="'+h+'">'+e+"</span>")}return g})}})(jQuery);
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