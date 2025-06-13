
// Get the elements with class="gridwrap"
var elements = document.getElementsByClassName("list-grid-view");
// Declare a loop variable
var i;
// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    //elements[i].style.width = "100%";
    elements[i].classList.remove("compacted");
  }
}
// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    //elements[i].style.width = "30%";
    elements[i].classList.add("compacted");
  }
}
/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("ListGridViewToggler");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[1].className = current[1].className.replace(" active", "");
    this.className += " active";
  });
}