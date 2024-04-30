/* Draggable - requires jQuery */
!function(e){e.fn.tinyDraggable=function(n){var t=e.extend({handle:0,exclude:0},n);return this.each(function(){var n,o,u=e(this),a=t.handle?e(t.handle,u):u;a.on({mousedown:function(a){if(!t.exclude||!~e.inArray(a.target,e(t.exclude,u))){a.preventDefault();var f=u.offset();n=a.pageX-f.left,o=a.pageY-f.top,e(document).on("mousemove.drag",function(e){u.offset({top:e.pageY-o,left:e.pageX-n})})}},mouseup:function(){e(document).off("mousemove.drag")}})})}}(jQuery);
$(document).ready(function(){
	$('.draggable').tinyDraggable();
	$('.draggable-wrap').tinyDraggable({ handle: '.drag-handle' });
	$('.draggable-exclude').tinyDraggable({ exclude: '.exclude_me, input' });
});