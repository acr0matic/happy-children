const map = document.getElementById('map');

if (map) {
  const script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2ee8c0203e8011213a31527b420f11402ed2094b98b1d44e5451baad578b10f3&width=100%25&;height=100%&lang=ru_RU&scroll=true';

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

const headerDropdown = document.querySelector('#header .header__nav .dropdown');
let dropdownTimer = null;

if (window.matchMedia('(min-width: 1200px)').matches) {
  headerDropdown.addEventListener('mouseenter', () => {
    headerDropdown.classList.add('dropdown--show');
    clearTimeout(dropdownTimer);
  });

  headerDropdown.addEventListener('mouseleave', () => {
    dropdownTimer = window.setTimeout(() => headerDropdown.classList.remove('dropdown--show'), 300);
  });
}

else {
  headerDropdown.addEventListener('click', () => {
    headerDropdown.classList.toggle('dropdown--show');
  });

  window.addEventListener('click', (e) => {
    console.log(e.target);
    if (!headerDropdown.contains(e.target)) {
      headerDropdown.classList.remove('dropdown--show');
    }
  });
}
