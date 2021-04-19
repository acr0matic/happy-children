/* eslint-disable no-unused-vars */
/* global Swiper */

const programList = [];
const programSlider = new Swiper('.program-slider', {
  speed: 400,
  simulateTouch: false,
  spaceBetween: 30,

  on: {
    init() {
      const wrapper = document.querySelector('.program-slider');
      const slides = wrapper.querySelectorAll('.swiper-slide');
      slides.forEach((slide) => {
        programList.push(slide.getAttribute('data-title'));
      });
    },
  },

  pagination: {
    el: '.program-slider .swiper-pagination',
    clickable: true,

    renderBullet(index, className) {
      return `<span class="${className}">${programList[index]}</span>`;
    },
  },
});

const educatorSlider = new Swiper('.educator__slider', {
  slidesPerView: 2,
  spaceBetween: 30,
  speed: 400,

  navigation: {
    nextEl: '.educator__next',
    prevEl: '.educator__prev',
  },

  breakpoints: {
    996: {
      slidesPerView: 3,
    },
  },
});
