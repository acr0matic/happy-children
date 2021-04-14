/* global tippy, MicroModal */

const callbackModal = document.getElementById('modal-callback');

const modalTitle = callbackModal.querySelector('.modal__title');
let formType = '';

tippy('.advantages__item', {
  placement: 'bottom',
  allowHTML: true,
  maxWidth: 380,
  theme: 'children',
  arrow: false,
});

MicroModal.init({
  awaitCloseAnimation: true,
  disableFocus: true,
});

const signButtons = document.querySelectorAll('[data-sign-type]');
signButtons.forEach((button) => {
  button.addEventListener('click', () => {
    formType = button.getAttribute('data-sign-type');
    modalTitle.innerHTML = button.getAttribute('data-modal-title');
  });
});

const modalButtons = document.querySelectorAll('[data-micromodal-trigger]:not([data-modal-title])');
modalButtons.forEach((button) => {
  button.addEventListener('click', () => {
    modalTitle.innerHTML = callbackModal.getAttribute('data-modal-title');
  });
});

// eslint-disable-next-line no-restricted-globals
scrollTo();

const headerDropdown = document.querySelector('#header .header__nav .dropdown');
let dropdownTimer = null;

headerDropdown.addEventListener('mouseenter', () => {
  headerDropdown.classList.add('dropdown--show');
  clearTimeout(dropdownTimer);
});

headerDropdown.addEventListener('mouseleave', () => {
  dropdownTimer = window.setTimeout(() => headerDropdown.classList.remove('dropdown--show'), 300);
});
