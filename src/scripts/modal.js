MicroModal.init({
  awaitCloseAnimation: true,
  disableFocus: true,
});

const modalCallback = document.getElementById('modal-callback');
const modalCallbackTarget = modalCallback.querySelector('form');
const modalCallbackTitle = modalCallback.querySelector('.modal__title');

const targetModalButton = document.querySelectorAll('[data-modal-target]');

const modalDefault = {
  'callback': {
    'title': modalCallbackTitle.innerHTML,
  }
}

targetModalButton.forEach(button => {
  const target = button.getAttribute('data-modal-target');
  const addtional = button.getAttribute('data-modal-additional');

  button.addEventListener('click', () => {
    modalCallbackTarget.setAttribute('data-target', target);

    if (target === 'sign-up' || target === 'trial' || target === 'order') modalCallbackTitle.innerHTML = button.getAttribute('data-modal-title');
    else modalCallbackTitle.innerHTML = modalDefault.callback.title;

    if (addtional) modalCallbackTarget.setAttribute('data-additional', addtional);
    else modalCallbackTarget.removeAttribute('data-additional');
  });
});

const modalInfo = document.getElementById('modal-info');
if (modalInfo) {
  const modalInfoTitle = modalInfo.querySelector('.modal__title');
  const modalInfoContent = modalInfo.querySelector('.modal__content');
  const modalInfoButton = document.querySelectorAll('[data-micromodal-trigger=modal-info]');

  modalInfoButton.forEach(button => {
    button.addEventListener('click', () => {
      const title = button.getAttribute('data-title');
      const description = button.getAttribute('data-description');

      modalInfoTitle.innerHTML = title;
      modalInfoContent.innerHTML = description;
    });
  });
}