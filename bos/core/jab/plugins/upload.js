jQuery(document).ready(function($){
	"use strict";
	function roundNumber(num, dec)
	{
		var result = Math.round( Math.round( num * Math.pow( 10, dec + 1 ) ) / Math.pow( 10, 1 ) ) / Math.pow(10,dec);
		return result;
	}
	function updateUploadifySettings(uploader)
	{
		if(typeof(uploader.attr("data"))!="undefined")
		{
			var uploadifySettings = uploader.data('uploadifive').settings.formData;
			var customData = eval('({' + uploader.attr("data") + '})');
			var data="";
			for(var name in customData)
			{
				data += "'" + name + "':";
				if(customData[name].substr(0,9)=="selector:")
					data += "'" + $(customData[name].substr(9).toString()).val() + "',";
				else
					data += "'" + customData[name] + "',";
			}
			data = data.substr(0, data.length-1);
			data = eval('({' + data + '})');
			uploader.data('uploadifive').settings.formData = $.extend(uploadifySettings, data);
		}
	}
	function preventSubmit(event)
	{
		event.preventDefault();
	}
	function submitForm(event)
	{
		event.preventDefault();
		var self = event.data.uploader;
		updateUploadifySettings(self);
		var queue;
		if(typeof(self.attr("queueId"))!="undefined")
			queue = $("#"+self.attr("queueId"));
		else
			queue = $("#uploadifive-" + self.attr("id")+"-queue");
		if(queue.children().length>0)
		{
			var uploadifySettings = self.data('uploadifive').settings.formData;
			var formData = $(this).serializeArray();
			var formDataJSON = {};
			for(var i=0; i<formData.length; i++)
				formDataJSON[formData[i].name] = escape(formData[i].value);
			self.data('uploadifive').settings.formData = $.extend(uploadifySettings, formDataJSON);
			if(typeof(self.attr("ajaxLoaderId"))!="undefined")
				$("#"+self.attr("ajaxLoaderId")).css("display", "inline");
			$(this).on("submit", preventSubmit);
			self.uploadifive('upload');
		}
		else
		{
			if(typeof(self.attr("ajax"))!="undefined" && self.attr("ajax")=="true")
			{
				var data = $(this).serializeArray();
				var url = $(this).attr("action");
				var method = $(this).attr("method");
				var form = $(this);
				if(typeof(self.attr("ajaxLoaderId"))!="undefined")
					$("#"+self.attr("ajaxLoaderId")).css("display", "inline");
				$.ajax({
					url: url,
					data: data,
					type: method,
					async: false,
					success: function(data){
						if(typeof(self.attr("ajaxInfoId"))!="undefined")
						{
							$("#"+self.attr("ajaxInfoId")).html("");
							$("#"+self.attr("ajaxInfoId")).html(data).css("display", "block");
						}
						form[0].reset();
						$("[name='IMUFiles[]']").remove();
						if(typeof(self.attr("queueId"))!="undefined")
							$("#"+self.attr("queueId")).html("");
						else
							$("#uploadifive-" + self.attr("id")+"-queue").html("");
						self.data("uploadifive").queue.count = 0;
						if(typeof(self.attr("ajaxLoaderId"))!="undefined")
							$("#"+self.attr("ajaxLoaderId")).css("display", "none");
						form.one("submit", {'uploader':self}, submitForm);
					}
				});
			}
			else
				$(this).submit();
		}
	}
	$(".FU").each(function(index){
		var self = $(this);
		self.attr("id", "FU"+index);
		if(typeof(self.attr("startOn"))!="undefined")
		{
			if(self.attr("startOn")=="manually")
			{
				self.after("<input type='button' value='" + (typeof(self.attr("buttonCaption"))=="undefined" ? '':self.attr("buttonCaption")) + "' id='FU"+index+"start' class='uploadButton' />");
				$("#FU"+index+"start").on("click", function(){
					updateUploadifySettings(self);
					self.uploadifive('upload');	
				});
			}
			else if(self.attr("startOn").substr(0, 8)=="onSubmit")
				$("#"+self.attr("startOn").substr(9)).one("submit", {'uploader':self}, submitForm);
		}
		var fileType = "";
		if(typeof(self.attr("fileType"))!="undefined")
			fileType = self.attr("fileType");
		var buttonClass = "";
		if(typeof(self.attr("buttonClass"))!="undefined")
			buttonClass = self.attr("buttonClass");
		var bwidth = 120;
		if(typeof(self.attr("bwidth"))!="undefined")
			bwidth = self.attr("bwidth");
		var bheight = 30;
		if(typeof(self.attr("bheight"))!="undefined")
			bheight = self.attr("bheight");
		var buttonText = "SELECT FILES";
		if(typeof(self.attr("buttonText"))!="undefined")
			buttonText = self.attr("buttonText");
		var customQueueId = "";
		if(typeof(self.attr("queueId"))!="undefined")
			customQueueId = self.attr("queueId");
		var maxSize = "";
		if(typeof(self.attr("maxSize"))!="undefined")
			maxSize = self.attr("maxSize");
		var uploadScript = "upload.php";
		if(typeof(self.attr("uploadScript"))!="undefined")
			uploadScript = self.attr("uploadScript");
		var filesLimit = 999;
		if(typeof(self.attr("filesLimit"))!="undefined")
			filesLimit = self.attr("filesLimit");
		var sessionId = "";
		if(typeof(self.attr("sessionId"))!="undefined")
			sessionId = self.attr("sessionId");
		var ajax = "false";
		if(typeof(self.attr("ajax"))!="undefined")
			ajax = self.attr("ajax");
		var method= "post";
		if(typeof(self.attr("method"))!="undefined")
			method = self.attr("method");
			
		var scriptData = "'action':'upload', 'path':'"+self.attr('path')+"', 'PHPSESSID':'"+sessionId+"'";
		if(typeof(self.attr("thumbnails"))!="undefined")
			scriptData += ", 'thumbnails':'" + self.attr("thumbnails") + "'";
		if(typeof(self.attr("thumbnailsFolders"))!="undefined")
			scriptData += ", 'thumbnailsFolders':'" + self.attr("thumbnailsFolders") + "'";
		if(typeof(self.attr("thumbnailsCrop"))!="undefined")
			scriptData += ", 'thumbnailsCrop':'" + self.attr("thumbnailsCrop") + "'";
		self.uploadifive({
			'uploadScript' : uploadScript,
			'formData': eval('({' + scriptData + '})'),
			'queueID'	: customQueueId,
			'cancelImg' : '<i class="bi bi-close"></i>',
			'dnd'		: true,
			'fileType'	: fileType,
			'method'	: method,
			'buttonClass': buttonClass,
			'buttonText': buttonText,
			'width'		: bwidth,
			'height'	: bheight,
			'fileSizeLimit'	: maxSize,
			'auto'      : (self.attr("startOn")=="auto" ? true:false),
			'multi'		: (self.attr("multi")=="true" ? true:false), 
			'queueSizeLimit' : filesLimit,
			'itemTemplate' : '<div class="uploadifive-queue-item"><div class="cancel"><a class="close" href="#"><i class="bi bi-close"></i></a></div><div><span class="filename"></span><span class="fileinfo"></span></div><div class="progress"><div class="progress-bar"></div></div></div>',
			'onSelect' : function(queue){
				var queueId = self.data('uploadifive').settings.queueID;
				if(self.attr("multi")!="true")
					if($("#"+queueId).children().length>1)
						if(customQueueId!="")
							$("#"+customQueueId).children().first().remove();
						else
							$("#"+queueId).children().first().remove();
			},
			'onAddQueueItem' : function(file){
				var file_types;
				if(self.data('uploadifive').settings.fileType)
				{
					file_types = self.data('uploadifive').settings.fileType.split(',');
				}
				if(file_types && file_types.indexOf(file.type)===-1)
				{
					self.data('uploadifive').error('FORBIDDEN_FILE_TYPE', file);
				}
				if(self.attr("startOn")=="auto")
					updateUploadifySettings(self);
			},
			'onUploadComplete' : function(file, response){
				var queueItemId = file.queueItem.attr("id");
				
				response = $.trim(response);
				var indexStart = response.indexOf("imu_start")+9;
				var indexEnd = response.indexOf("imu_end")-indexStart;
				var responseJSON = $.parseJSON(response.substr(indexStart, indexEnd));
				if(typeof(responseJSON.error)!="undefined")
				{
					$("#" + queueItemId).html(responseJSON.error);
					return false;
				}
				else
				{
					if(self.attr("startOn").substr(0, 8)=="onSubmit")
						$("#"+self.attr("startOn").substr(9)).append("<input type='hidden' name='IMUFiles[]' value='"+responseJSON.filename.replace("'", "%27")+"' />");
					if(self.attr("afterUpload")=="link" || self.attr("afterUpload")=="filename" || self.attr("afterUpload")=="image" || self.attr("afterUpload")=="none")
					{
						$("#" + queueItemId + " .progress").animate({opacity: 0}, 500, function(){$(this).remove();});
						$("#" + queueItemId).html((self.attr("allowRemove")=="true" ? "<div class='cancel'><input class='button_cancel' name='removeFile' filename='"+responseJSON.filename.replace("'", "%27")+"' type='button'></div>":"") + (self.attr("afterUpload")=="link" || self.attr("afterUpload")=="image" ? "<a href='" + responseJSON.path + responseJSON.filename.replace("'", "%27") + "' target='_blank'>":"") + (self.attr("afterUpload")=="image" && (responseJSON.extension.toLowerCase()=="jpg" || responseJSON.extension.toLowerCase()=="jpeg" || responseJSON.extension.toLowerCase()=="bmp" || responseJSON.extension.toLowerCase()=="png" || responseJSON.extension.toLowerCase()=="tiff" || responseJSON.extension.toLowerCase()=="gif")  ? "<img class='uploadedImage' src='" + responseJSON.path + responseJSON.filename.replace("'", "%27") +"' />":(self.attr("afterUpload")!="none" ? "<span class='fileName'>"+file.name+"</span>" : "")) + (self.attr("afterUpload")=="link" || self.attr("afterUpload")=="image" ? "</a>":""));
						if(typeof(self.attr("thumbnailsAfterUpload"))!="undefined")
						{
							var thumbnailsAfterUploadSplit = self.attr("thumbnailsAfterUpload").split(",");
							var thumbnailsFoldersSplit = new Array();
							if(typeof(self.attr("thumbnailsFolders"))!="undefined")
								thumbnailsFoldersSplit= self.attr("thumbnailsFolders").split(",");
							var display,folder;
							for(var i=0; i<thumbnailsAfterUploadSplit.length; i++)
							{
								display = $.trim(thumbnailsAfterUploadSplit[i]);
								folder = ($.trim(thumbnailsFoldersSplit[i])=="" ? self.attr("path") : $.trim(thumbnailsFoldersSplit[i]));
								if(display!="filename" && display!="image" && display!="link")
									$("#" + queueItemId).append("<span class='afterUploadThumbnail'>" + display + "</span>");
								else
									$("#" + queueItemId).append("<span class='afterUploadThumbnail'>" + (display=="link" || display=="image" ? "<a href='" + folder + responseJSON.thumbnails[i].replace("'", "%27") + "' target='_blank'>":"") + (display=="image" && (responseJSON.extension.toLowerCase()=="jpg" || responseJSON.extension.toLowerCase()=="jpeg" || responseJSON.extension.toLowerCase()=="bmp" || responseJSON.extension.toLowerCase()=="png" || responseJSON.extension.toLowerCase()=="tiff" || responseJSON.extension.toLowerCase()=="gif")  ? "<img class='uploadedThumbnail' src='" + folder + responseJSON.thumbnails[i].replace("'", "%27") + "' />":"<span class='fileName'>" + "thumb" + i + "_" + file.name + "</span>") + (display=="link" || display=="image" ? "</a>":"") + "</span>");
							}
						}
						return false;
					}
				}
			},
			'onQueueComplete' : function(uploads){
				if(typeof(self.attr("afterUpload"))!="undefined" && self.attr("afterUpload")!="link" && self.attr("afterUpload")!="filename" && self.attr("afterUpload")!="image" && self.attr("afterUpload")!="none")
				{
					var message = self.attr("afterUpload");
					message = message.replace("{attempted}", uploads.attempted);
					message = message.replace("{attempts}", uploads.attempts);
					message = message.replace("{count}", uploads.count);
					message = message.replace("{current}", uploads.current);
					message = message.replace("{errors}", uploads.errors);
					message = message.replace("{successful}", uploads.successful);
					$("#uploadifive-" + self.attr("id")+"-queue").html(message);
				}
				if(self.attr("startOn").substr(0, 8)=="onSubmit")
				{
					var form = $("#"+self.attr("startOn").substr(9));
					form.off("submit", preventSubmit);
					if(ajax=="true")
					{
						var data = form.serializeArray();
						var url = form.attr("action");
						var method = form.attr("method");
						if(typeof(self.attr("ajaxLoaderId"))!="undefined")
							$("#"+self.attr("ajaxLoaderId")).css("display", "inline");
						$.ajax({
							url: url,
							data: data,
							type: method,
							async: false,
							success: function(data){
								if(typeof(self.attr("ajaxInfoId"))!="undefined")
								{
									$("#"+self.attr("ajaxInfoId")).html("");
									$("#"+self.attr("ajaxInfoId")).html(data).css("display", "block");
								}
								form[0].reset();
								$("[name='IMUFiles[]']").remove();
								if(typeof(self.attr("queueId"))!="undefined")
									$("#"+self.attr("queueId")).html("");
								else
									$("#uploadifive-" + self.attr("id")+"-queue").html("");
								self.data("uploadifive").queue.count = 0;
								if(typeof(self.attr("ajaxLoaderId"))!="undefined")
									$("#"+self.attr("ajaxLoaderId")).css("display", "none");
								form.one("submit", {'uploader':self}, submitForm);
							}
						});
					}
					else
						form.submit();
				}
			},
			'onClearQueue': function(queue){
			},
			'onCancel': function(){
			},
			'onError': function(errorType, file){
				console.log(errorType);
				return false;
            }
		});
		if(self.attr("allowRemove")=="true")
		{
			$(document.body).on("click", "#"+(customQueueId!="" ? customQueueId:"uploadifive-" + self.attr("id")+"-queue")+" [name='removeFile']", function(){
				var selfRemove = $(this);
				if(typeof(self.attr("removeData"))!="undefined")
				{
					var customRemoveData = eval('({' + self.attr("removeData") + '})');
					var data="";
					for(var name in customRemoveData)
					{
						data += "'" + name + "':";
						if(customRemoveData[name].substr(0,9)=="selector:")
							data += "'" + $(customRemoveData[name].substr(9).toString()).val() + "',";
						else
							data += "'" + customRemoveData[name] + "',";
					}
					data = data.substr(0, data.length-1);
					data = eval('({' + data + '})');
				}
				$.ajax({
							url: uploadScript,
							data: "action=remove&filename="+selfRemove.attr("fileName")+(typeof(data)!="undefined" ? "&"+$.param(data) : ""),
							type: "POST",
							async: false,
							success: function(data){
									if(data!="")
										alert(data);
									else
										selfRemove.parent().parent().animate({opacity: 0}, 500, function(){$(this).remove(); self.data("uploadifive").queue.count--;});
							}
					});
			});
		}
	});
});

