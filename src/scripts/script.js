/* global tippy, MicroModal, SmoothScroll */

const dateFields = document.querySelectorAll('input[name="user_date"]');
dateFields.forEach(field => {
  new Datepicker(field, {
    language: 'ru',
    maxDate: new Date(),
  });
});

const selectList = document.querySelector('[data-trigger]');
if (selectList) new Choices('[data-trigger]', {
  searchEnabled: false,
  itemSelectText: 'Выбрать',
});

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

const forms = document.querySelectorAll('form');
forms.forEach(form => new Form(form));

new SmoothScroll('a[href*="/#"]', {
  speed: 500,
  speedAsDuration: true,
});

AOS.init({
  once: true,
});
