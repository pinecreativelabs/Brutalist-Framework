const tooltip = document.getElementById('tooltip-reveal');
if (tooltip) {
  let mouseX = 0;
  let mouseY = 0;
  let tooltipX = 0;
  let tooltipY = 0;
  function updateTooltipPosition() {
    tooltipX += (mouseX - tooltipX) * 0.17;
    tooltipY += (mouseY - tooltipY) * 0.17;
    tooltip.style.top = tooltipY + 'px';
    tooltip.style.left = tooltipX + 'px';
    requestAnimationFrame(updateTooltipPosition);
  }
  requestAnimationFrame(updateTooltipPosition);
  document.addEventListener('mouseover', function(e) {
    if (e.target.hasAttribute('data-tooltip')) {
      const title = e.target.getAttribute('data-tooltip');
      e.target.setAttribute('data-original-title', title);
      e.target.removeAttribute('data-tooltip');
    }
  });
  document.addEventListener('mousemove', function(e) {
    mouseX = e.clientX + 12; 
    mouseY = e.clientY + window.scrollY - 37;
    if (e.target.hasAttribute('data-original-title')) {
      const title = e.target.getAttribute('data-original-title');
      tooltip.innerHTML = title;
      tooltip.classList.remove('tooltip-hide');
    } else {
      tooltip.classList.add('tooltip-hide');
    }
  });
  document.addEventListener('mouseout', function(e) {
    if (e.target.hasAttribute('data-original-title')) {
      const title = e.target.getAttribute('data-original-title');
      e.target.setAttribute('data-tooltip', title);
      e.target.removeAttribute('data-original-title');
    }
    tooltip.classList.add('tooltip-hide');
  });
} else {
  console.error('Tooltip does not display outside element.');
}