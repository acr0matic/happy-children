/* global tippy, MicroModal, SmoothScroll */

const callbackModal = document.getElementById('modal-callback');

const modalTitle = callbackModal.querySelector('.modal__title');
let formType = '';

tippy('.advantages__item[data-tippy-content]', {
  placement: 'bottom',
  allowHTML: true,
  maxWidth: 380,
  theme: 'children',
  arrow: false,
  zIndex: 10,
});

tippy('img[data-tippy-content]', {
  placement: 'right',
  allowHTML: true,
  maxWidth: 200,
  arrow: false,
  theme: 'children',
});


MicroModal.init({
  awaitCloseAnimation: true,
  disableFocus: true,
});

const forms = document.querySelectorAll('form');
forms.forEach(form => new Form(form));

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
SmoothScroll();

/* Логика для мобильного меню */
const headerMobile = document.querySelector('.header .header__mobile');
const mobileMenuButton = headerMobile.querySelector('.hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const mobileOverlay = mobileMenu.querySelector('.mobile-menu__overlay');

mobileMenuButton.addEventListener('click', () => {
  mobileMenuButton.classList.toggle('is-active');
  mobileMenu.classList.toggle('mobile-menu--open');
});

mobileOverlay.addEventListener('click', () => {
  mobileMenuButton.classList.remove('is-active');
  mobileMenu.classList.remove('mobile-menu--open');
});
