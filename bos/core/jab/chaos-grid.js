/* cHaOs GrId RANDOMIZE */
window.addEventListener("load", function randomize(){
	var m;
	var tr;
	var kx;
    var listm = document.querySelectorAll('.chaos-grid.randomize > *');
	var listtrx = document.querySelectorAll('.chaos-grid.randomize.tilt > *');
    for(var i=0;i<listm.length;i++){
		m = Math.floor(Math.random()*280-140);
        listm[i].style.margin = m + "px";
    }
	for(var i=0;i<listtrx.length;i++){
		tr = Math.floor(Math.random()*70-35);
		kx = Math.floor(Math.random()*45-45);
		listtrx[i].style.transform = "rotate(" + tr + "deg) skew(" + kx + "deg)";
    }
});