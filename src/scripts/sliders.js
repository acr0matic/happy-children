/* eslint-disable no-unused-vars */
/* global Swiper */

const programList = [];
const programSlider = new Swiper('.program-slider', {
  speed: 400,
  simulateTouch: false,

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
