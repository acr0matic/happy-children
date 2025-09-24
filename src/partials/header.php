<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title>Заголовок</title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатеги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="описание не длиннее 155 символов" />
  <meta name="keywords" content="мета-теги, шаблон, html, css, acr0matic" />

  <!-- Метатеги для ссылок в социальных сетях -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:type" content="">

  <meta property="og:title" content="">
  <meta property="og:description" content="" />
  <meta property="og:image" content="">
  <meta property="og:url" content="">

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow,noodp" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#4285f4" />

  <!-- Для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">

  <!-- Yandex.Metrika counter -->

  <!-- /Yandex.Metrika counter -->

  <!-- Стили -->
  <!-- build:css -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- endbuild -->
</head>

<body>
  <!-- Шапка -->
  <header id="header">
    <div class="container">
      <div class="header">
        <div class="header__logo">
          <a href="">
            <img src="img/logo.svg" alt="" class="logo logo--header">
          </a>
        </div>
        <!-- /.header__logo -->

        <div class="header__nav">
          <nav class="nav nav--header">
            <ul class="nav__list">
              <li class="nav__item"><a href="/#about" class="nav__link">О нас</a></li>
              <li class="nav__item"><a href="/#concept" class="nav__link">Концепция</a></li>
              <li class="nav__item"><a href="/#program" class="nav__link">Расписание</a></li>
              <li class="nav__item"><a href="/#condition" class="nav__link">Условия и цены</a></li>
              <li class="nav__item"><a href="/#educators" class="nav__link">Наша команда</a></li>
              <li class="nav__item"><a href="vacancy.php" class="nav__link">Вакансии</a></li>
              <li class="nav__item dropdown">
                <a href="#" class="nav__link">Доп. услуги</a>

                <div class="dropdown__wrapper">
                  <ul class="nav__list nav__list--vertical">
                    <li class="nav__item mb-3"><a href="#about" class="nav__link">Шахматы</a></li>
                    <li class="nav__item mb-3"><a href="#about" class="nav__link">Логопед</a></li>
                    <li class="nav__item mb-3"><a href="#about" class="nav__link">Музыкальная студия</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">Организация праздников</a></li>
                  </ul>
                </div>
                <!-- /.dropdown__wrapper -->
              </li>
              <li class="nav__item"><a href="#contact" class="nav__link">Контакты</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.header__nav -->


        <div class="header__ally">
          <svg class="bvi-open" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="bvi-svg-eye">
            <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z" class="bvi-svg-eye"></path>
          </svg>
        </div>
        <!-- /.header__ally -->

        <div class="header__action">
          <a href="tel:+74954102300 " class="header__phone">8 (495) 410 23 00 </a>
          <div class="header__excursion" data-micromodal-trigger="modal-callback" data-modal-target="excursion">Записаться <br> на экскурсию</div>
        </div>
        <!-- /.header__action -->

        <div class="header__mobile">
          <button id="mobile-button" class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
        <!-- /.header__mobile -->
      </div>
      <!-- /.header -->
    </div>
    <!-- /.container -->
  </header>

  <div id="mobile-menu" class="mobile-menu">
    <div class="mobile-menu__overlay"></div>

    <div class="mobile-menu__wrapper">
      <nav class="nav nav--mobile">
        <ul class="nav__list nav__list--vertical">
          <li class="nav__item"><a href="#about" class="nav__link">О нас</a></li>
          <li class="nav__item"><a href="#concept" class="nav__link">Концепция</a></li>
          <li class="nav__item"><a href="#program" class="nav__link">Расписание</a></li>
          <li class="nav__item"><a href="#condition" class="nav__link">Условия и цены</a></li>
          <li class="nav__item"><a href="#contact" class="nav__link">Контакты</a></li>
          <li class="nav__item"><a href="#educators" class="nav__link nav__link--main">Наша команда</a></li>
          <li class="nav__item"><a href="vacancy.php" class="nav__link nav__link--main">Вакансии</a></li>
          <li class="nav__item"><a href="#educators" class="nav__link nav__link--main">Дополнительные услуги</a>
          <li class="nav__item"><a href="#about" class="nav__link">Шахматы</a></li>
          <li class="nav__item"><a href="#about" class="nav__link">Логопед</a></li>
          <li class="nav__item"><a href="#about" class="nav__link">Музыкальная студия</a></li>
          <li class="nav__item"><a href="#about" class="nav__link">Организация праздников</a></li>
        </ul>
      </nav>

      <button class="mobile-menu__button button button-outline" data-micromodal-trigger="modal-callback">Записаться на экскурсию</button>
    </div>
    <!-- /.mobile-menu__wrapper -->
  </div>
  <!-- /.mobile-menu -->