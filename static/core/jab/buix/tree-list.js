// Tree List
var toggler = document.getElementsByClassName("parent"); var i;
for (i = 0; i < toggler.length; i++) {toggler[i].addEventListener("click", function() {this.parentElement.querySelector(".nested").classList.toggle("active");this.classList.toggle("parent-down");});}