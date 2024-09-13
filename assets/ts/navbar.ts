const openButton = document.getElementById('js__open-nav');
const closeButton = document.getElementById('js__close-nav');
const navBar = document.getElementById('js__nav');

openButton?.addEventListener('click', (event) => {
  event.preventDefault();
  navBar.classList.add('open');
});

closeButton?.addEventListener('click', (event) => {
  event.preventDefault();
  navBar.classList.remove('open');
});

/**
 * Toggle the items of the navbar dropdown
 *
 * @returns {void}
 */

const navBarDropdownLinks = document.querySelectorAll('.menu-item-has-children > a');

const SHOW_CLASSNAME = 'show-sub-menu';

navBarDropdownLinks.forEach((navBarDropdownLink) => {
  navBarDropdownLink?.addEventListener('click', (event) => {
    event.preventDefault();

    if (!navBarDropdownLink.parentElement.classList.contains(SHOW_CLASSNAME)) {
      navBarDropdownLinks.forEach((otherLink) => {
        otherLink.classList.remove(SHOW_CLASSNAME);
      });
      navBarDropdownLink.parentElement.classList.add(SHOW_CLASSNAME);
    } else {
      navBarDropdownLink.parentElement.classList.remove(SHOW_CLASSNAME);
    }
  });
});

export {};
