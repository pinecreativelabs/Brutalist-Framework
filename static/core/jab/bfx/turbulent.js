// TuRbUlEnT FILTER
// https://codepen.io/simoncoudeville/pen/zYRygaV

function turbulentFilter() {
    // create svg filter div element
	var telem = document.createElement('div');
	telem.id = "turbulent-filter-list";
	document.body.append(telem);
	// add SVG filters to new element
	var turbsvg = "";
    turbsvg += "<svg class=\"t-filter\" style=\"display:none;\">";
	turbsvg += "<defs>";
	turbsvg += "<filter id=\"turbulence-mild\">";
	turbsvg += "<feTurbulence id=\"turbulent-mild\" type=\"fractalNoise\" baseFrequency=\"0.0012\" numOctaves=\"4\" result=\"NOISE\"></feTurbulence>";
	turbsvg += "<feGaussianBlur in=\"SourceGraphic\" result=\"BLURRED\" stdDeviation=\"0\"></feGaussianBlur>";
	turbsvg += "<feDisplacementMap id=\"displacer\" in2=\"NOISE\" in=\"BLURRED\" scale=\"24\" xChannelSelector=\"R\" yChannelSelector=\"R\" result=\"DISPLACED\"></feDisplacementMap>";
	turbsvg += "</filter>";
	turbsvg += "<filter id=\"turbulence\">";
	turbsvg += "<feTurbulence id=\"turbulent\" type=\"fractalNoise\" baseFrequency=\"0.0015\" numOctaves=\"5\" result=\"NOISE\"></feTurbulence>";
	turbsvg += "<feGaussianBlur in=\"SourceGraphic\" result=\"BLURRED\" stdDeviation=\"0\"></feGaussianBlur>";
	turbsvg += "<feDisplacementMap id=\"displacer\" in2=\"NOISE\" in=\"BLURRED\" scale=\"50\" xChannelSelector=\"R\" yChannelSelector=\"R\" result=\"DISPLACED\"></feDisplacementMap>";
	turbsvg += "</filter>";
	turbsvg += "<filter id=\"turbulence-severe\">";
	turbsvg += "<feTurbulence id=\"turbulent-severe\" type=\"fractalNoise\" baseFrequency=\"0.002\" numOctaves=\"9\" result=\"NOISE\"></feTurbulence>";
	turbsvg += "<feGaussianBlur in=\"SourceGraphic\" result=\"BLURRED\" stdDeviation=\"0\"></feGaussianBlur>";
	turbsvg += "<feDisplacementMap id=\"displacer\" in2=\"NOISE\" in=\"BLURRED\" scale=\"100\" xChannelSelector=\"R\" yChannelSelector=\"R\" result=\"DISPLACED\"></feDisplacementMap>";
	turbsvg += "</filter>";
	turbsvg += "</defs></svg>";
    document.getElementById("turbulent-filter-list").innerHTML = turbsvg;
}
if (window.addEventListener) {
    window.addEventListener("load", turbulentFilter, false);
} else if (window.attachEvent) {
    window.attachEvent("onload", turbulentFilter);
}