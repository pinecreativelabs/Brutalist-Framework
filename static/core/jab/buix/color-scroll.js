/**
 * Changes the background colour based on the scroll position and section colours.
 * https://codepen.io/karlhorning/pen/QWojGpW
 */
const changeBackgroundColour = () => {
  // Get the current scroll position
  const scrollPosition = window.scrollY || document.documentElement.scrollTop;
  // Get all sections with the class "scroll-section"
  const sections = document.querySelectorAll(".color-scroll");
  // Iterate through each section
  sections.forEach((section) => {
    // Check if the scroll position is greater than or equal to the section's top offset
    if (scrollPosition >= section.offsetTop) {
      // Set the body background colour to the data-color attribute of the current section
      document.body.style.background = document
        .getElementById(section.id)
        .getAttribute("data-color");
    }
  });
};
// Attach the changeBackgroundColour function to the scroll event
document.addEventListener("scroll", changeBackgroundColour);