/* General Form Functions */

// remove default values and formatting from selection lists 
function removeSelectDefaults(){var emptyBoxes=document.querySelectorAll("select.no-default");for(var i=0;i<emptyBoxes.length;i++){emptyBoxes[i].selectedIndex = -1;}}

// copy all input and select fields from one fieldset to another
function copyFields(){
	var copyInputElements=document.querySelectorAll("#copyFrom input");
	var pasteInputElements=document.querySelectorAll("#pasteTo input");
	if(document.getElementById("field-copy").checked){
		for(var i=0;i<copyInputElements.length; i++){
			pasteInputElements[i+1].value=copyInputElements[i].value;
		}
		document.querySelector("#pasteTo select").value=document.querySelector("#copyFrom select").value;
	}else{
		for(var i=0;i<copyInputElements.length; i++){
			pasteInputElements[i+1].value="";
		}
		document.querySelector("#copyFrom select").selectedIndex=1;
	}
}
function createEventListeners(){
	var same = document.getElementById("field-copy");
	if(same.addEventListener){
		same.addEventListener("click",copyFields,false);
	} else if(same.attachEvent){same.attachEvent("onclick",copyFields);}
}
function setUpValidator(){removeSelectDefaults();createEventListeners();}
// run setup function when page finishes loading 
if(window.addEventListener){
	window.addEventListener("load",setUpValidator,false);
} else if(window.attachEvent){window.attachEvent("onload",setUpValidator);}

// SELECT ALL CHECKBOXES
function checkAll(o) {
  var boxes = document.getElementsByTagName("input");
  for (var x = 0; x < boxes.length; x++) {
    var obj = boxes[x];
    if (obj.type == "checkbox") {
      if (obj.name != "check")
        obj.checked = o.checked;
    }
  }
}