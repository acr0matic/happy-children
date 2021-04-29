MicroModal.init({
  awaitCloseAnimation: true,
  disableFocus: true,
});

const modalCallback = document.getElementById('modal-callback');
const modalTarget = modalCallback.querySelector('form');
const modalTitle = modalCallback.querySelector('.modal__title');

const targetModalButton = document.querySelectorAll('[data-modal-target]');

const modalDefault = {
  'callback': {
    'title': modalTitle.innerHTML,
  }
}

targetModalButton.forEach(button => {
  const target = button.getAttribute('data-modal-target');
  const addtional = button.getAttribute('data-modal-additional');

  button.addEventListener('click', () => {
    modalTarget.setAttribute('data-target', target);

    if (target === 'sign-up' || target === 'trial') modalTitle.innerHTML = button.getAttribute('data-modal-title');
    else modalTitle.innerHTML = modalDefault.callback.title;

    if (addtional) modalTarget.setAttribute('data-additional', addtional);
    else modalTarget.removeAttribute('data-additional');
  });
});