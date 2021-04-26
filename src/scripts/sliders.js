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
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 400,

  navigation: {
    nextEl: '.educator__next',
    prevEl: '.educator__prev',
  },

  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    996: {
      slidesPerView: 3,
    },
  },
});

if (window.matchMedia('(max-width: 768px)').matches) {
  const advantageSlider = new Swiper('.slider-advantages', {
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 400,

    navigation: {
      nextEl: '.advantages__next',
      prevEl: '.advantages__prev',
    },
  });

  const conceptSlider = new Swiper('.slider-concept', {
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 400,

    navigation: {
      nextEl: '.concept__next',
      prevEl: '.concept__prev',
    },
  });

  const gallerySlider = new Swiper('.slider-gallery', {
    speed: 400,
    simulateTouch: false,
    spaceBetween: 30,

    navigation: {
      nextEl: '.gallery__next',
      prevEl: '.gallery__prev',
    },
  });
}
