/* cHaOs GrId RANDOMIZE */
window.addEventListener("load", function randomize(){
	var m;
	var tr;
	var kx;
	var sc;
    var listm = document.querySelectorAll('.chaos-grid.randomize > *');
	var listtrx = document.querySelectorAll('.chaos-grid.randomize.tilt > *');
	var listsc = document.querySelectorAll('.chaos-grid.randomize.scale > *');
    for(var i=0;i<listm.length;i++){
		m = Math.floor(Math.random()*280-140);
        listm[i].style.margin = m + "px";
    }
	for(var i=0;i<listtrx.length;i++){
		tr = Math.floor(Math.random()*70-35);
		kx = Math.floor(Math.random()*45-45);
		listtrx[i].style.transform = "rotate(" + tr + "deg) skew(" + kx + "deg)";
    }
	for(var i=0;i<listsc.length;i++){
		var precision = 100;
		sc = Math.floor(Math.random() * (3 * precision - 1 * precision) + 0.5 * precision) / (1*precision);
        listsc[i].style.scale = sc;
    }
});