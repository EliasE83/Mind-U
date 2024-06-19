const accordions = document.querySelectorAll('.accordion');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  const currentAccordion = this.closest('.accordion');
  const items = currentAccordion.querySelectorAll('button');

  items.forEach(item => {
    item.setAttribute('aria-expanded', 'false');
  });

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

accordions.forEach(accordion => {
  const items = accordion.querySelectorAll('button');
  items.forEach(item => item.addEventListener('click', toggleAccordion));
});