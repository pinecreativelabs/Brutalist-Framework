/* POLYGRID */
const elements = document.querySelectorAll(".polygrid .shape");
elements.forEach((element) => {
  element.insertAdjacentHTML('afterbegin', '<div class="shape-left"></div><div class="shape-right"></div>');
});