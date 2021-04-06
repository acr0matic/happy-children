/* global tippy, MicroModal */

const callbackModal = document.getElementById('modal-callback');

let modalTitle = callbackModal.querySelector('.modal__title');
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
