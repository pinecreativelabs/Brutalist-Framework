//** Ajax Tabs Content script v2.0- © Dynamic Drive DHTML code library (http://www.dynamicdrive.com)
//** Updated Oct 21st, 07 to version 2.0. Contains numerous improvements
//** Updated Feb 18th, 08 to version 2.1: Adds a public "tabinstance.cycleit(dir)" method to cycle forward or backward between tabs dynamically. Only .js file changed from v2.0.
//** Updated April 8th, 08 to version 2.2:
//   -Adds support for expanding a tab using a URL parameter (ie: http://mysite.com/tabcontent.htm?tabinterfaceid=0) 
//   -Modified Ajax routine so testing the script out locally in IE7 now works 

var ddajaxtabssettings={}
ddajaxtabssettings.bustcachevar=1  //bust potential caching of external pages after initial request? (1=yes, 0=no)
ddajaxtabssettings.loadstatustext="<img src='ajaxtabs/loading.gif' /> Requesting content..." 


////NO NEED TO EDIT BELOW////////////////////////

function ddajaxtabs(tabinterfaceid, contentdivid){
	this.tabinterfaceid=tabinterfaceid //ID of Tab Menu main container
	this.tabs=document.getElementById(tabinterfaceid).getElementsByTagName("a") //Get all tab links within container
	this.enabletabpersistence=true
	this.hottabspositions=[] //Array to store position of tabs that have a "rel" attr defined, relative to all tab links, within container
	this.currentTabIndex=0 //Index of currently selected hot tab (tab with sub content) within hottabspositions[] array
	this.contentdivid=contentdivid
	this.defaultHTML=""
	this.defaultIframe='<iframe src="about:blank" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" class="tabcontentiframe" style="width:100%; height:auto; min-height: 100px"></iframe>'
	this.defaultIframe=this.defaultIframe.replace(/<iframe/i, '<iframe name="'+"_ddajaxtabsiframe-"+contentdivid+'" ')
this.revcontentids=[] //Array to store ids of arbitrary contents to expand/contact as well ("rev" attr values)
	this.selectedClassTarget="link" //keyword to indicate which target element to assign "selected" CSS class ("linkparent" or "link")
}

ddajaxtabs.connect=function(pageurl, tabinstance){
	var page_request = false
	var bustcacheparameter=""
	if (window.ActiveXObject){ //Test for support for ActiveXObject in IE first (as XMLHttpRequest in IE7 is broken)
		try {
		page_request = new ActiveXObject("Msxml2.XMLHTTP")
		} 
		catch (e){
			try{
			page_request = new ActiveXObject("Microsoft.XMLHTTP")
			}
			catch (e){}
		}
	}
	else if (window.XMLHttpRequest) // if Mozilla, Safari etc
		page_request = new XMLHttpRequest()
	else
		return false
	var ajaxfriendlyurl=pageurl.replace(/^http:\/\/[^\/]+\//i, "http://"+window.location.hostname+"/") 
	page_request.onreadystatechange=function(){ddajaxtabs.loadpage(page_request, pageurl, tabinstance)}
	if (ddajaxtabssettings.bustcachevar) //if bust caching of external page
		bustcacheparameter=(ajaxfriendlyurl.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime()
	page_request.open('GET', ajaxfriendlyurl+bustcacheparameter, true)
	page_request.send(null)
}

ddajaxtabs.loadpage=function(page_request, pageurl, tabinstance){
	var divId=tabinstance.contentdivid
	document.getElementById(divId).innerHTML=ddajaxtabssettings.loadstatustext //Display "fetching page message"
	if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1)){
		document.getElementById(divId).innerHTML=page_request.responseText
		ddajaxtabs.ajaxpageloadaction(pageurl, tabinstance)
	}
}

ddajaxtabs.ajaxpageloadaction=function(pageurl, tabinstance){
	tabinstance.onajaxpageload(pageurl) //call user customized onajaxpageload() function when an ajax page is fetched/ loaded
}

ddajaxtabs.getCookie=function(Name){ 
	var re=new RegExp(Name+"=[^;]+", "i"); //construct RE to search for target name/value pair
	if (document.cookie.match(re)) //if cookie found
		return document.cookie.match(re)[0].split("=")[1] //return its value
	return ""
}

ddajaxtabs.setCookie=function(name, value){
	document.cookie = name+"="+value+";path=/" //cookie value is domain wide (path=/)
}

ddajaxtabs.prototype={

	expandit:function(tabid_or_position){ //PUBLIC function to select a tab either by its ID or position(int) within its peers
		this.cancelautorun() //stop auto cycling of tabs (if running)
		var tabref=""
		try{
			if (typeof tabid_or_position=="string" && document.getElementById(tabid_or_position).getAttribute("rel")) //if specified tab contains "rel" attr
				tabref=document.getElementById(tabid_or_position)
			else if (parseInt(tabid_or_position)!=NaN && this.tabs[tabid_or_position].getAttribute("rel")) //if specified tab contains "rel" attr
				tabref=this.tabs[tabid_or_position]
		}
		catch(err){alert("Invalid Tab ID or position entered!")}
		if (tabref!="") //if a valid tab is found based on function parameter
			this.expandtab(tabref) //expand this tab
	},

	cycleit:function(dir, autorun){ //PUBLIC function to move foward or backwards through each hot tab (tabinstance.cycleit('foward/back') )
		if (dir=="next"){
			var currentTabIndex=(this.currentTabIndex<this.hottabspositions.length-1)? this.currentTabIndex+1 : 0
		}
		else if (dir=="prev"){
			var currentTabIndex=(this.currentTabIndex>0)? this.currentTabIndex-1 : this.hottabspositions.length-1
		}
		if (typeof autorun=="undefined") //if cycleit() is being called by user, versus autorun() function
			this.cancelautorun() //stop auto cycling of tabs (if running)
		this.expandtab(this.tabs[this.hottabspositions[currentTabIndex]])
	},

	setpersist:function(bool){ //PUBLIC function to toggle persistence feature
			this.enabletabpersistence=bool
	},

	loadajaxpage:function(pageurl){ //PUBLIC function to fetch a page via Ajax and display it within the Tab Content instance's container
		ddajaxtabs.connect(pageurl, this)
	},

	loadiframepage:function(pageurl){ //PUBLIC function to fetch a page and load it into the IFRAME of the Tab Content instance's container
		this.iframedisplay(pageurl, this.contentdivid)
	},

	setselectedClassTarget:function(objstr){ //PUBLIC function to set which target element to assign "selected" CSS class ("linkparent" or "link")
		this.selectedClassTarget=objstr || "link"
	},

	getselectedClassTarget:function(tabref){ //Returns target element to assign "selected" CSS class to
		return (this.selectedClassTarget==("linkparent".toLowerCase()))? tabref.parentNode : tabref
	},

	urlparamselect:function(tabinterfaceid){
		var result=window.location.search.match(new RegExp(tabinterfaceid+"=(\\d+)", "i")) //check for "?tabinterfaceid=2" in URL
		return (result==null)? null : parseInt(RegExp.$1) //returns null or index, where index (int) is the selected tab's index
	},

	onajaxpageload:function(pageurl){ //PUBLIC Event handler that can invoke custom code whenever an Ajax page has been fetched and displayed
		//do nothing by default
	},

	expandtab:function(tabref){
		var relattrvalue=tabref.getAttribute("rel")
		//Get "rev" attr as a string of IDs in the format ",john,george,trey,etc," to easy searching through
		var associatedrevids=(tabref.getAttribute("rev"))? ","+tabref.getAttribute("rev").replace(/\s+/, "")+"," : ""
		if (relattrvalue=="#default")
			document.getElementById(this.contentdivid).innerHTML=this.defaultHTML
		else if (relattrvalue=="#iframe")
			this.iframedisplay(tabref.getAttribute("href"), this.contentdivid)
		else
			ddajaxtabs.connect(tabref.getAttribute("href"), this)
		this.expandrevcontent(associatedrevids)
		for (var i=0; i<this.tabs.length; i++){ //Loop through all tabs, and assign only the selected tab the CSS class "selected"
			this.getselectedClassTarget(this.tabs[i]).className=(this.tabs[i].getAttribute("href")==tabref.getAttribute("href"))? "selected" : ""
		}
		if (this.enabletabpersistence) //if persistence enabled, save selected tab position(int) relative to its peers
			ddajaxtabs.setCookie(this.tabinterfaceid, tabref.tabposition)
		this.setcurrenttabindex(tabref.tabposition) //remember position of selected tab within hottabspositions[] array
	},

	iframedisplay:function(pageurl, contentdivid){
		if (typeof window.frames["_ddajaxtabsiframe-"+contentdivid]!="undefined"){
			try{delete window.frames["_ddajaxtabsiframe-"+contentdivid]} //delete iframe within Tab content container if it exists (due to bug in Firefox)
			catch(err){}
		}
		document.getElementById(contentdivid).innerHTML=this.defaultIframe
		window.frames["_ddajaxtabsiframe-"+contentdivid].location.replace(pageurl) //load desired page into iframe
	},


	expandrevcontent:function(associatedrevids){
		var allrevids=this.revcontentids
		for (var i=0; i<allrevids.length; i++){ //Loop through rev attributes for all tabs in this tab interface
			//if any values stored within associatedrevids matches one within allrevids, expand that DIV, otherwise, contract it
			document.getElementById(allrevids[i]).style.display=(associatedrevids.indexOf(","+allrevids[i]+",")!=-1)? "block" : "none"
		}
	},

	setcurrenttabindex:function(tabposition){ //store current position of tab (within hottabspositions[] array)
		for (var i=0; i<this.hottabspositions.length; i++){
			if (tabposition==this.hottabspositions[i]){
				this.currentTabIndex=i
				break
			}
		}
	},

	autorun:function(){ //function to auto cycle through and select tabs based on a set interval
		this.cycleit('next', true)
	},

	cancelautorun:function(){
		if (typeof this.autoruntimer!="undefined")
			clearInterval(this.autoruntimer)
	},

	init:function(automodeperiod){
		var persistedtab=ddajaxtabs.getCookie(this.tabinterfaceid) //get position of persisted tab (applicable if persistence is enabled)
		var selectedtab=-1 //Currently selected tab index (-1 meaning none)
		var selectedtabfromurl=this.urlparamselect(this.tabinterfaceid) //returns null or index from: tabcontent.htm?tabinterfaceid=index
		this.automodeperiod=automodeperiod || 0
		this.defaultHTML=document.getElementById(this.contentdivid).innerHTML
		for (var i=0; i<this.tabs.length; i++){
			this.tabs[i].tabposition=i //remember position of tab relative to its peers
			if (this.tabs[i].getAttribute("rel")){
				var tabinstance=this
				this.hottabspositions[this.hottabspositions.length]=i //store position of "hot" tab ("rel" attr defined) relative to its peers
				this.tabs[i].onclick=function(){
					tabinstance.expandtab(this)
					tabinstance.cancelautorun() //stop auto cycling of tabs (if running)
					return false
				}
				if (this.tabs[i].getAttribute("rev")){ //if "rev" attr defined, store each value within "rev" as an array element
					this.revcontentids=this.revcontentids.concat(this.tabs[i].getAttribute("rev").split(/\s*,\s*/))
				}
				if (selectedtabfromurl==i || this.enabletabpersistence && selectedtab==-1 && parseInt(persistedtab)==i || !this.enabletabpersistence && selectedtab==-1 && this.getselectedClassTarget(this.tabs[i]).className=="selected"){
					selectedtab=i //Selected tab index, if found
				}
			}
		} //END for loop
		if (selectedtab!=-1) //if a valid default selected tab index is found
			this.expandtab(this.tabs[selectedtab]) //expand selected tab (either from URL parameter, persistent feature, or class="selected" class)
		else //if no valid default selected index found
			this.expandtab(this.tabs[this.hottabspositions[0]]) //Just select first tab that contains a "rel" attr
		if (parseInt(this.automodeperiod)>500 && this.hottabspositions.length>1){
			this.autoruntimer=setInterval(function(){tabinstance.autorun()}, this.automodeperiod)
		}
	} //END int() function

} //END Prototype assignment