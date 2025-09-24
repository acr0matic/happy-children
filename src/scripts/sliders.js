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

const holidaySlider = new Swiper('.holiday-slider', {
  speed: 400,
  simulateTouch: false,
  spaceBetween: 30,

  on: {
    init() {
      const wrapper = document.querySelector('.holiday-slider');
      const slides = wrapper.querySelectorAll('.swiper-slide');
      slides.forEach((slide) => {
        programList.push(slide.getAttribute('data-title'));
      });
    },
  },

  pagination: {
    el: '.holiday-slider .swiper-pagination',
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

const information = document.querySelector('#cp-information');

if (information) {
  const controls = document.querySelectorAll('.information__side li');
  const informationSlider = new Swiper('.information__content .swiper', {
    speed: 400,
    spaceBetween: 30,
    simulateTouch: false,
    effect: 'fade',
    autoHeight: true,
    fadeEffect: {
      crossFade: true,
    }
  });

  // Функция для получения индекса слайда из хэша
  function getSlideIndexFromHash() {
    const hash = window.location.hash;
    if (hash) {
      // Ищем индекс пункта меню, соответствующий хэшу
      for (const [index, control] of controls.entries()) {
        const anchor = control.querySelector('a');
        if (anchor && anchor.getAttribute('href') === hash) {
          return index;
        }
      }
    }
    return 0; // По умолчанию первый слайд
  }

  // Функция для перехода к слайду
  function goToSlideByIndex(index, speed = 400) {
    informationSlider.slideTo(index, speed);
    // Обновляем активный класс на пунктах меню
    controls.forEach((control, i) => {
      if (i === index) {
        control.classList.add('active');
      } else {
        control.classList.remove('active');
      }
    });
  }

  // Обработчик клика по пунктам меню
  for (const [index, control] of controls.entries()) {
    // Добавляем якорные ссылки к пунктам меню
    const anchor = document.createElement('a');
    anchor.setAttribute('href', `#slide-${index}`);
    anchor.style.textDecoration = 'none';
    anchor.style.color = 'inherit';

    // Переносим содержимое span в ссылку
    const span = control.querySelector('span');
    if (span) {
      anchor.innerHTML = span.innerHTML;
      span.replaceWith(anchor);
    } else {
      anchor.textContent = control.textContent;
      control.textContent = '';
      control.appendChild(anchor);
    }

    control.addEventListener('click', (e) => {
      e.preventDefault();
      const targetAnchor = control.querySelector('a');
      if (targetAnchor) {
        // Обновляем URL с якорем
        window.location.hash = targetAnchor.getAttribute('href');
        goToSlideByIndex(index);
      }
    });
  }

  // Обработчик изменения хэша в URL
  window.addEventListener('hashchange', () => {
    const slideIndex = getSlideIndexFromHash();
    goToSlideByIndex(slideIndex);
  });

  // Инициализация при загрузке страницы
  window.addEventListener('load', () => {
    const slideIndex = getSlideIndexFromHash();
    goToSlideByIndex(slideIndex, 0);
  });

  // Также обрабатываем событие popstate для кнопок назад/вперед
  window.addEventListener('popstate', () => {
    const slideIndex = getSlideIndexFromHash();
    goToSlideByIndex(slideIndex);
  });
}