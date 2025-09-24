const map = document.getElementById('map');

if (map) {
  const script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af5e5bd026bd49cfa86955f4c3d83364d92c289087eb1d7c29e9a752b2558834e&amp;width=100%25&amp;height=532&amp;lang=ru_RU&amp;scroll=false';

  window.addEventListener('scroll', () => {
    if (window.pageYOffset >= map.offsetTop - 2000) map.append(script);
  });
}

const scrollTopArrow = document.getElementById('scrollTop');
if (scrollTopArrow) {
  scrollTopArrow.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
}

const headerDropdown = document.querySelectorAll('#header .header__nav .dropdown');

for (const dropdown of headerDropdown) {
  let dropdownTimer = null;

  if (window.matchMedia('(min-width: 1200px)').matches) {
    dropdown.addEventListener('mouseenter', () => {
      dropdown.classList.add('dropdown--show');
      clearTimeout(dropdownTimer);
    });

    dropdown.addEventListener('mouseleave', () => {
      dropdownTimer = window.setTimeout(() => dropdown.classList.remove('dropdown--show'), 300);
    });
  }

  else {
    dropdown.addEventListener('click', () => {
      dropdown.classList.toggle('dropdown--show');
    });

    window.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('dropdown--show');
      }
    });
  }
}

const social = document.getElementById('social');
const socialIcons = document.querySelectorAll('.social__link--hide')

social.addEventListener('click', () => {
  socialIcons.forEach(icon => {
    icon.classList.toggle('social__link--hide');
  });
});

['click', 'touchstart'].forEach(evt =>
  window.addEventListener(evt, (e) => {
    if (!social.contains(e.target))
      socialIcons.forEach(icon => icon.classList.add('social__link--hide'));
  })
);
