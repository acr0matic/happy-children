<?php include_once('partials/header.php') ?>

<!-- Основной контент -->
<main>
  <section id="hero">
    <div class="container">
      <div class="hero">
        <div class="hero__content">
          <h1 class="hero__title page__title page__title--main order-0">Happy Children</h1>
          <h2 class="hero__subtitle page__subtitle order-1">Детский сад для современного <br> поколения </h2>

          <ul class="hero__advantages list list--checkmark order-3">
            <li class="list__item">Развитие эмоционального интеллекта</li>
            <li class="list__item">Английский язык по методикам Oxford</li>
            <li class="list__item">Развивающие занятия</li>
          </ul>

          <div class="hero__important">
            Участник Московского инновационного кластера
          </div>
          <!-- /.hero__important -->

          <div class="hero__action order-4">
            <button class="hero__button button button-primary me-sm-3 mb-3 mb-md-0" data-micromodal-trigger="modal-callback">Записаться на экскурсию</button>
            <button class="hero__button button button-outline">Позвонить</button>
          </div>
          <!-- /.hero__action -->
        </div>
        <!-- /.hero__content -->

        <div class="hero__picture">
          <picture>
            <source srcset="img/page/main/hero/hero__boy.webp" type="image/webp">
            <img class="hero__image" src="img/page/main/hero/hero__boy.png" alt="">
          </picture>
        </div>
        <!-- /.hero__picture -->

        <div class="shape">
          <svg>
            <clipPath id="hero-wave" clipPathUnits="objectBoundingBox">
              <path d="M 0 1 L 0 0 L 1 0 L 1 0.593 C 0.644 0.515 0.59 1.083 0 0.894" />
            </clipPath>
          </svg>
        </div>

        <div class="shape">
          <svg>
            <clipPath id="hero-wave--mobile" clipPathUnits="objectBoundingBox">
              <path d="M 0 1 L 0 0 L 1 0 L 1 0.783 C 0.688 0.767 0.391 0.867 0 0.856" />
            </clipPath>
          </svg>
        </div>
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="about" class="section">
    <div class="container">
      <div class="about">
        <div class="row">
          <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
            <div class="text-block__picture mx-auto mx-lg-0">
              <picture>
                <source srcset="img/page/main/about/photo.webp" type="image/webp">
                <img class="text-block__image" src="img/page/main/about/photo.jpg" alt="">
              </picture>
            </div>
            <!-- /.text-block__picture -->
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-lg-7 col-xl-6">
            <div class="text-block__content">
              <h2 class="text-block__title section__title">
                Здесь начинается
                <br>
                жизненная уверенность
              </h2>

              <div class="text-block__wrapper">
                <p class="text-block__text text-block__text--small section__text">
                  Все мы когда-то были детьми. Помочь ребенку не потерять детство, но при этом правильно подготовиться к современным и будущим требованиям успешной жизни – вот совместная задача родителей и детского садика нового поколения.
                </p>

                <p class="text-block__text text-block__text--small section__text">
                  Мы узнавали мир на ощупь, кормили голубей, лепили снеговиков, устраивали бои в снежной крепости, повторяли за мамой с папой новые слова, задавали тысячи разных «Почему?», мечтали и открывали для себя этот мир. Мы учились любить, сопереживать, поддерживать.
                </p>

                <p class="text-block__text text-block__text--small section__text">
                  Лучшее вложение в своего ребенка - счастливое детство. Поэтому, выбирая для малыша детский сад, вы выбираете не только его настоящее, но и будущее!
                </p>
              </div>
              <!-- /.text-block__text -->

              <div class="text-block__action">
                <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback">Записаться на экскурсию</button>
              </div>
              <!-- /.text-block__wrapper -->
            </div>
            <!-- /.text-block__content -->
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.about -->
    </div>
    <!-- /.container -->
  </section>

  <section id="advantages" class="section">
    <div class="container">
      <h2 class="section__title text-center">
        Наши ценности
      </h2>

      <div class="advantages">
        <div class="swiper-container swiper-container--mobile slider-advantages">
          <div class="row swiper-wrapper swiper-wrapper--mobile">
            <div class="swiper-slide col-12 col-md-6 col-lg-4">
              <div class="advantages__item" data-tippy-content="
                - Маленькие группы (до 12 человек)
                <br>
                - Противопожарная и охранная системы
                <br>
                - Под видеонаблюдением находятся все помещения детского сада
                <br>
                - Ежедневные прогулки на свежем воздухе
                <br>
                - Современная система приточно-вытяжной вентиляции
                <br>
                - Просторные игровые и много дневного света">

                <div class="advantages__number">1</div>

                <h3 class="advantages__title">
                  Безопасность и здоровье детей- приоритет нашей работы
                </h3>
              </div>
              <!-- /.advantages__item -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-md-6 col-lg-4">
              <div class="advantages__item" data-tippy-content="
                  Готовим из продуктов ВкусВилл.
                  <br> <br>
                  Пятиразовое сбалансированное и вкусное питание. Мы разрабатываем индивидуальное меню для деток с пищевой аллергией.">

                <div class="advantages__number">2</div>

                <h3 class="advantages__title">
                  Вкусное и здоровое <br> Питание
                </h3>
              </div>
              <!-- /.advantages__item -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-md-6 col-lg-4">
              <div class="advantages__item" data-tippy-content="
                  На наших занятиях дети играют, поют, рисуют, танцуют и создают проекты на английском языке.">

                <div class="advantages__number">3</div>

                <h3 class="advantages__title">
                  Ежедневный английский язык по методикам Oxford
                </h3>
              </div>
              <!-- /.advantages__item -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-md-6 col-lg-4">
              <div class="advantages__item" data-tippy-content="
                С помощью синтеза государственного образовательного стандарта дошкольного образования «Школа-2100» и методик развития эмоционального интеллекта мы формируем в наших детях уверенность в себе, способность думать и планировать, умение распознавать, понимать свои эмоции и управлять ими.">
                <div class="advantages__number">4</div>

                <h3 class="advantages__title">
                  Уникальная образовательная программа
                </h3>
              </div>
              <!-- /.advantages__item -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-md-6 col-lg-4">
              <div class="advantages__item" data-tippy-content="
                Балет, футбол, детский фитнес, танцы, музыкальные занятия, игры по Бахотскому, кулинарные мастер-классы, художественные мастерские, Лего-конструирование, подготовка к школе и многое-многое другое.
                <br> <br>
                Многообразие занятий освобождает родителей от необходимости дополнительно возить детей на занятия.">
                <div class="advantages__number">5</div>

                <h3 class="advantages__title">
                  Разнообразные <br> дополнительные занятия
                </h3>
              </div>
              <!-- /.advantages__item -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-md-6 col-lg-4">
              <div class="advantages__item" data-tippy-content="
                Большое внимание мы уделяем профессиональным и личным качествам педагогов. Наши специалисты обеспечат психологический комфорт и защищенность для каждого малыша.">
                <div class="advantages__number">6</div>

                <h3 class="advantages__title">
                  Наши педагоги – любящие детей профессионалы своего дела
                </h3>
              </div>
              <!-- /.advantages__item -->
            </div>
            <!-- /.col-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.swiper-container slider-advantages -->

        <div class="swiper-controls swiper-controls--mobile">
          <div class="swiper-button-prev advantages__prev"></div>
          <div class="swiper-button-next advantages__next"></div>
        </div>
        <!-- /.swiper-controls -->
      </div>
      <!-- /.advantages -->
    </div>
    <!-- /.container -->
  </section>

  <section id="gallery" class="section">
    <div class="container">
      <h2 class="section__title text-center mb-4 fw-bolder">
        И всё это в красивом
        <br>
        трансформируемом пространстве
      </h2>

      <h3 class="section__subtitle text-center mb-5">
        Happy children - детский сад нового формата
      </h3>

      <div class="gallery">
        <div class="swiper-container swiper-container--mobile slider-gallery">
          <div class="row swiper-wrapper swiper-wrapper--mobile">
            <div class="swiper-slide col-7 mb-3">
              <div class="gallery__picture">
                <a href="img/page/main/gallery/1.jpg" data-fslightbox>
                  <picture>
                    <source srcset="img/page/main/gallery/1.webp" type="image/webp">
                    <img class="gallery__image" src="img/page/main/gallery/1.jpg" alt="">
                  </picture>
                </a>
              </div>
              <!-- /.gallery__picture -->
            </div>
            <!-- /.col-7 -->

            <div class="swiper-slide col-5 mb-3">
              <div class="gallery__picture">
                <a href="img/page/main/gallery/2.jpg" data-fslightbox>
                  <picture>
                    <source srcset="img/page/main/gallery/2.webp" type="image/webp">
                    <img class="gallery__image" src="img/page/main/gallery/2.jpg" alt="">
                  </picture>
                </a>
              </div>
              <!-- /.gallery__picture -->
            </div>
            <!-- /.col-5 -->

            <div class="swiper-slide col-4 mb-3">
              <div class="gallery__picture">
                <a href="img/page/main/gallery/3.jpg" data-fslightbox>
                  <picture>
                    <source srcset="img/page/main/gallery/3.webp" type="image/webp">
                    <img class="gallery__image" src="img/page/main/gallery/3.jpg" alt="">
                  </picture>
                </a>
              </div>
              <!-- /.gallery__picture -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-4 mb-3">
              <div class="gallery__picture">
                <a href="img/page/main/gallery/4.jpg" data-fslightbox>
                  <picture>
                    <source srcset="img/page/main/gallery/4.webp" type="image/webp">
                    <img class="gallery__image" src="img/page/main/gallery/4.jpg" alt="">
                  </picture>
                </a>
              </div>
              <!-- /.gallery__picture -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-4">
              <div class="gallery__picture">
                <a href="img/page/main/gallery/5.jpg" data-fslightbox>
                  <picture>
                    <source srcset="img/page/main/gallery/5.webp" type="image/webp">
                    <img class="gallery__image" src="img/page/main/gallery/5.jpg" alt="">
                  </picture>
                </a>
              </div>
              <!-- /.gallery__picture -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-6 mb-5">
              <div class="gallery__picture">
                <a href="img/page/main/gallery/6.jpg" data-fslightbox>
                  <picture>
                    <source srcset="img/page/main/gallery/6.webp" type="image/webp">
                    <img class="gallery__image" src="img/page/main/gallery/6.jpg" alt="">
                  </picture>
                </a>
              </div>
              <!-- /.gallery__picture -->
            </div>
            <!-- /.col-6 -->

            <div class="swiper-slide col-6">
              <div class="gallery__picture">
                <a href="img/page/main/gallery/7.jpg" data-fslightbox>
                  <picture>
                    <source srcset="img/page/main/gallery/7.webp" type="image/webp">
                    <img class="gallery__image" src="img/page/main/gallery/7.jpg" alt="">
                  </picture>
                </a>
              </div>
              <!-- /.gallery__picture -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.swiper-container -->

        <div class="swiper-controls swiper-controls--mobile">
          <div class="swiper-button-prev gallery__prev"></div>
          <div class="swiper-button-next gallery__next"></div>
        </div>
        <!-- /.swiper-controls -->

        <button class="button button-primary button-primary--inverted d-block mx-auto" data-micromodal-trigger="modal-callback">Записаться на экскурсию</button>
      </div>
      <!-- /.gallery -->
    </div>
    <!-- /.container -->
  </section>

  <section id="concept" class="section">
    <div class="container">
      <h2 class="section__title text-center">Концепция Happy Children</h2>

      <div class="concept">
        <div class="concept__cards concept-cards">
          <div class="swiper-container swiper-container--mobile slider-concept">
            <div class="swiper-wrapper row">
              <div class="swiper-slide col-12 col-md-6 col-xl-4 mb-0 mb-md-4">
                <div class="concept-cards__item">
                  <img class="concept-cards__icon" src="img/page/main/concept/1.svg" alt="">

                  <div class="concept-cards__wrapper">
                    <h3 class="concept-cards__title">Сюжетно-ролевые игры </h3>
                    <p class="concept-cards__description">Проигрывая ситуации из реальной жизни, малыш учится воспринимать другого человека, вставать на его позицию, видеть альтернативную точку зрения. Игровая деятельность тянет за собой развитие мышления, памяти, воображения.</p>
                  </div>
                  <!-- /.concept-cards__wrapper -->
                </div>
                <!-- /.concept-cards__item -->
              </div>
              <!-- /.col-4 -->

              <div class="swiper-slide col-12 col-md-6 col-xl-4 mb-0 mb-md-4">
                <div class="concept-cards__item">
                  <img class="concept-cards__icon" src="img/page/main/concept/2.svg" alt="">

                  <div class="concept-cards__wrapper">
                    <h3 class="concept-cards__title">Формирование Soft skills</h3>
                    <p class="concept-cards__description">Развиваем ответственность, инициативность, креативность, умение работать в команде, коммуникабельность, уравновешенность, способность к самоорганизации.</p>
                  </div>
                  <!-- /.concept-cards__wrapper -->
                </div>
                <!-- /.concept-cards__item -->
              </div>
              <!-- /.col-4 -->

              <div class="swiper-slide col-12 col-md-6 col-xl-4 mb-0 mb-md-4">
                <div class="concept-cards__item">
                  <img class="concept-cards__icon" src="img/page/main/concept/3.svg" alt="">

                  <div class="concept-cards__wrapper">
                    <h3 class="concept-cards__title">Уважение</h3>
                    <p class="concept-cards__description">Ребёнку важно оставаться ребёнком, при этом взрослые должны относиться к нему с уважением. Педагог всегда находится на одном уровне со своими подопечными, в одном кругу. Смотрит глаза в глаза, а не сверху.</p>
                  </div>
                  <!-- /.concept-cards__wrapper -->
                </div>
                <!-- /.concept-cards__item -->
              </div>
              <!-- /.col-4 -->

              <div class="swiper-slide col-12 col-md-6 col-xl-4 mb-0 mb-md-4 mb-4 mb-xl-0">
                <div class="concept-cards__item">
                  <img class="concept-cards__icon" src="img/page/main/concept/4.svg" alt="">

                  <div class="concept-cards__wrapper">
                    <h3 class="concept-cards__title">Активизация детского мышления</h3>
                    <p class="concept-cards__description">
                      Вместо чётких заданий с правильными ответами даем исследовательские задачи. Их задача в том, чтобы дети самостоятельно искали ответ на поставленный вопрос, изобретали разные пути решения задачи. </p>
                  </div>
                  <!-- /.concept-cards__wrapper -->
                </div>
                <!-- /.concept-cards__item -->
              </div>
              <!-- /.col-4 -->

              <div class="swiper-slide col-12 col-md-6 col-xl-4 mb-0 mb-md-4 mb-4 mb-xl-0">
                <div class="concept-cards__item">
                  <img class="concept-cards__icon" src="img/page/main/concept/5.svg" alt="">

                  <div class="concept-cards__wrapper">
                    <h3 class="concept-cards__title">Общение за рамками <br> группы, но внутри сада</h3>
                    <p class="concept-cards__description">
                      Многочисленные исследования показывают, что детям важно и полезно быть всем вместе, малышам со старшими и наоборот. Жизнь в разновозрастных группах полезна и для эмоционального развития детей, и для естественного саморазвития.
                    </p>
                  </div>
                  <!-- /.concept-cards__wrapper -->
                </div>
                <!-- /.concept-cards__item -->
              </div>
              <!-- /.col-4 -->

              <div class="swiper-slide col-12 col-md-6 col-xl-4 mb-0 mb-md-4 mb-4 mb-xl-0">
                <div class="concept-cards__item">
                  <img class="concept-cards__icon" src="img/page/main/concept/6.svg" alt="">

                  <div class="concept-cards__wrapper">
                    <h3 class="concept-cards__title">Развитие личностного потенциала ребенка</h3>
                    <p class="concept-cards__description">
                      Учим ребёнка задавать вопросы и искать решение задач, у которых нет единственно верного ответа. Следим за траекторией развития каждого ребенка.
                    </p>
                  </div>
                  <!-- /.concept-cards__wrapper -->
                </div>
                <!-- /.concept-cards__item -->
              </div>
              <!-- /.col-4 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.swiper-container swiper-container--mobile slider-concept -->

          <div class="swiper-controls swiper-controls--mobile">
            <div class="swiper-button-prev concept__prev"></div>
            <div class="swiper-button-next concept__next"></div>
          </div>
          <!-- /.swiper-controls -->
        </div>
        <!-- /.concept__cards concept-cards -->

        <div class="concept__information concept-information text-block">
          <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-xl-6">
              <div class="text-block__picture mx-auto mx-lg-0 mb-4 mb-lg-0">
                <picture>
                  <source srcset="img/page/main/concept/photos/1.webp" type="image/webp">
                  <img class="text-block__image" src="img/page/main/concept/photos/1.jpg" alt="">
                </picture>
              </div>
              <!-- /.about__picture -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-7 col-xl-6">
              <div class="text-block__content">
                <h2 class="text-block__title section__title">
                  Инновации в нашем
                  <br>
                  детском саду
                </h2>

                <div class="text-block__wrapper">
                  <p class="text-block__text section__text">
                    Частный детский сад Happy Children использует уникальные методики, благодаря которым дети смогут развить свои исключительные способности и коммуникативные навыки, а также научатся:
                  </p>

                  <ul class="text-block__list list list--line">
                    <li class="list__item">Знать свои эмоции</li>
                    <li class="list__item">Управлять эмоциями</li>
                    <li class="list__item">Мотивировать самого себя</li>
                    <li class="list__item">Распознавать эмоции других людей</li>
                    <li class="list__item">Поддерживать взаимоотношения</li>
                  </ul>

                  <br>
                </div>
                <!-- /.about__text -->

                <div class="text-block__action">
                  <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback">Записаться на экскурсию</button>
                </div>
                <!-- /.about__action -->
              </div>
              <!-- /.about__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->

          <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-xl-6">
              <div class="text-block__picture mx-auto mx-lg-0 mb-4 mb-lg-0">
                <picture>
                  <source srcset="img/page/main/concept/photos/2.webp" type="image/webp">
                  <img class="text-block__image" src="img/page/main/concept/photos/2.jpg" alt="">
                </picture>
              </div>
              <!-- /.about__picture -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-7 col-xl-6">
              <div class="text-block__content">
                <h2 class="text-block__title section__title">
                  Индивидуальный подход
                  <br>
                  и комфорт
                </h2>

                <div class="text-block__wrapper">
                  <p class="text-block__text section__text">
                    Питание составляет детский диетолог с учётом особенностей здоровья и образа жизни ребёнка.
                    Возможность поменять меню:
                  </p>

                  <ul class="text-block__list list list--line">
                    <li class="list__item">Выбрать веганские и вегетарианские позиции, исключить блюда с возможными аллергенами</li>
                    <li class="list__item">Распланированный режим игры и отдыха</li>
                    <li class="list__item">Постоянная доступность педагогов и воспитателей</li>
                  </ul>
                  <br>
                </div>
                <!-- /.about__text -->

                <div class="text-block__action">
                  <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback">Записаться на экскурсию</button>
                </div>
                <!-- /.about__action -->
              </div>
              <!-- /.about__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->

          <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-xl-6">
              <div class="text-block__picture mx-auto mx-lg-0 mb-4 mb-lg-0">
                <picture>
                  <source srcset="img/page/main/concept/photos/3.webp" type="image/webp">
                  <img class="text-block__image" src="img/page/concept/photos/3.jpg" alt="">
                </picture>
              </div>
              <!-- /.about__picture -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-7 col-xl-6">
              <div class="text-block__content">
                <h2 class="text-block__title section__title">
                  Атмосфера
                </h2>

                <div class="text-block__wrapper">
                  <p class="text-block__text section__text">
                    Дети с большим удовольствием ходят в Happy Children, ждут общения друг с другом, с восторгом рассказывают родителям, как прошел день.
                  </p>

                  <p class="text-block__text section__text">
                    Мы создали в нашем детском саду теплую семейную атмосферу, которой очень дорожим. Happy Children — это тематические праздники, костюмированные представления, выездные экскурсии.
                  </p>

                  <p class="text-block__text section__text">
                    Одна из важных целей команды Happy Children — наполнить жизнь малышей яркими эмоциями и событиями, подарить им незабываемое детство.
                  </p>
                </div>
                <!-- /.about__text -->

                <div class="text-block__action">
                  <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback">Записаться на экскурсию</button>
                </div>
                <!-- /.about__action -->
              </div>
              <!-- /.about__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.concept__information concept-information -->
      </div>
      <!-- /.concept -->
    </div>
    <!-- /.container -->
  </section>

  <section id="what-get" class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 offset-0 offset-lg-4 text-center text-lg-start">
          <h2 class="section__title fw-bolder">
            Что получит ваш малыш?
          </h2>
        </div>
        <!-- /.col-8 offset-4 -->
      </div>
      <!-- /.row -->

      <div class="what-get">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3 offset-0 offset-lg-1">
            <div class="what-get__item">
              <div class="what-get__ballon">
                <img src="img/page/main/what-get/ballon.svg" alt="" class="what-get__icon">
                <div class="what-get__number">1</div>
              </div>
              <!-- /.what-get__ballon -->

              <h3 class="what-get__title">
                Развитие
                <br>
                эмоционального
                <br>
                интеллекта
              </h3>
            </div>
            <!-- /.what-get__item -->
          </div>
          <!-- /.col-3 -->

          <div class="flex-row-reverse col-12 col-sm-6 col-lg-4">
            <div class="what-get__item flex-row-reverse flex-sm-row">
              <div class="what-get__ballon">
                <img src="img/page/main/what-get/ballon.svg" alt="" class="what-get__icon">
                <div class="what-get__number">2</div>
              </div>
              <!-- /.what-get__ballon -->

              <h3 class="what-get__title text-end text-sm-start me-3 me-sm-0">
                Ежедневный английский язык
                <br>
                по методикам
                <br>
                Оксфордских программ
              </h3>
            </div>
            <!-- /.what-get__item -->
          </div>
          <!-- /.col-3 -->

          <div class="col-12 col-sm-6 col-lg-4">
            <div class="what-get__item">
              <div class="what-get__ballon">
                <img src="img/page/main/what-get/ballon.svg" alt="" class="what-get__icon">
                <div class="what-get__number">3</div>
              </div>
              <!-- /.what-get__ballon -->

              <h3 class="what-get__title">
                Профессиональные
                <br>
                педагоги
              </h3>
            </div>
            <!-- /.what-get__item -->
          </div>
          <!-- /.col-3 -->

          <div class="col-12 col-sm-6 col-lg-3 offset-0 offset-lg-1">
            <div class="what-get__item flex-row-reverse flex-sm-row">
              <div class="what-get__ballon">
                <img src="img/page/main/what-get/ballon.svg" alt="" class="what-get__icon">
                <div class="what-get__number">4</div>
              </div>
              <!-- /.what-get__ballon -->

              <h3 class="what-get__title text-end text-sm-start me-3 me-sm-0">
                Видеонаблюдение
              </h3>
            </div>
            <!-- /.what-get__item -->
          </div>
          <!-- /.col-3 -->

          <div class="col-12 col-sm-6 col-lg-4 offset-0 offset-lg-1">
            <div class="what-get__item">
              <div class="what-get__ballon">
                <img src="img/page/main/what-get/ballon.svg" alt="" class="what-get__icon">
                <div class="what-get__number">5</div>
              </div>
              <!-- /.what-get__ballon -->

              <h3 class="what-get__title">
                Здоровое адаптивное
                <br>
                5-ти разовое питание
              </h3>
            </div>
            <!-- /.what-get__item -->
          </div>
          <!-- /.col-3 -->

          <div class="flex-row-reverse col-12 col-sm-6 col-lg-3">
            <div class="what-get__item flex-row-reverse flex-sm-row">
              <div class="what-get__ballon">
                <img src="img/page/main/what-get/ballon.svg" alt="" class="what-get__icon">
                <div class="what-get__number">6</div>
              </div>
              <!-- /.what-get__ballon -->

              <h3 class="what-get__title text-end text-sm-start me-3 me-sm-0">
                Страхование
                <br>
                каждого малыша
              </h3>
            </div>
            <!-- /.what-get__item -->
          </div>
          <!-- /.col-3 -->

          <div class="col-12 col-sm-6 col-lg-4 offset-0 offset-lg-2">
            <div class="what-get__item">
              <div class="what-get__ballon">
                <img src="img/page/main/what-get/ballon.svg" alt="" class="what-get__icon">
                <div class="what-get__number">7</div>
              </div>
              <!-- /.what-get__ballon -->

              <h3 class="what-get__title">
                Комфортное, уютное
                <br>
                и красивое пространство
              </h3>
            </div>
            <!-- /.what-get__item -->
          </div>
          <!-- /.col-4 -->

          <div class="col-12 col-sm-6 col-lg-4">
            <div class="what-get__item flex-row-reverse flex-sm-row">
              <div class="what-get__ballon">
                <img src="img/page/main/what-get/ballon.svg" alt="" class="what-get__icon">
                <div class="what-get__number">8</div>
              </div>
              <!-- /.what-get__ballon -->

              <h3 class="what-get__title text-end text-sm-start me-3 me-sm-0">
                Внимательное отношение
                <br>
                к каждому ребенку
              </h3>
            </div>
            <!-- /.what-get__item -->
          </div>
          <!-- /.col-4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.what-get -->
    </div>
    <!-- /.container -->

    <div class="shape">
      <svg>
        <clipPath id="what-get-wave" clipPathUnits="objectBoundingBox">
          <path d="M 0 0 L 0 0.9 C 0.06 1.14 0.9 0.66 1.08 0.96 L 1.08 0.12 C 0.72 -0.18 0.3 0.3 0 0.06" />
        </clipPath>
      </svg>
    </div>

    <div class="shape">
      <svg>
        <clipPath id="what-get-wave--mobile" clipPathUnits="objectBoundingBox">
          <path d="M 0 0 L 0 0.9 C 0.447 0.954 0.891 0.85 1.072 0.891 L 1.081 0.081 C 0.745 0.009 0.28 0.092 0 0.06" />
        </clipPath>
      </svg>
    </div>
  </section>

  <section id="program" class="section">
    <div class="container">
      <h2 class="section__title text-center">Программа занятий</h2>

      <div class="program">
        <div class="swiper-container program-slider">
          <div class="swiper-pagination"></div>

          <div class="swiper-wrapper">
            <div class="swiper-slide" data-title="2 - 3 года">
              <div class="program__item">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-6">
                    <div class="program__picture">
                      <picture>
                        <source srcset="img/page/main/program/1.webp" type="image/webp">
                        <img class="program__image" src="img/page/main/program/1.jpg" alt="">
                      </picture>
                    </div>
                    <!-- /.program__picture -->
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-lg-6">
                    <div class="program__content">
                      <div class="program__text">
                        <div class="row">
                          <div class="col-12 col-sm-6">
                            <ul class="list list--small">
                              <li class="list__item">- Умение обозначать эмоции</li>
                              <li class="list__item">- Английский язык</li>
                              <li class="list__item">- Развитие речи</li>
                              <li class="list__item">- Сенсорная интеграция</li>
                              <li class="list__item">- Развивающая гимнастика</li>
                              <li class="list__item">- Сказкотерапия</li>
                            </ul>
                          </div>
                          <!-- /.col-6 -->

                          <div class="col-12 col-sm-6">
                            <ul class="list list--small">
                              <li class="list__item">- Окружающий мир</li>
                              <li class="list__item">- Система Монтессори</li>
                              <li class="list__item">- Музыкальное развитие</li>
                              <li class="list__item">- Футбол</li>
                              <li class="list__item">- Балет</li>
                              <li class="list__item">- Творчество</li>
                              <li class="list__item">- Кулинарные мастер-классы</li>
                            </ul>
                          </div>
                          <!-- /.col-6 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.program__text -->

                      <div class="program__action">
                        <button class="button button-outline">Расписание группы</button>
                      </div>
                      <!-- /.program__action -->
                    </div>
                    <!-- /.program__content -->
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.program__item -->
            </div>

            <div class="swiper-slide" data-title="3,5 - 4,5 года">
              <div class="program__item">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-6">
                    <div class="program__picture">
                      <picture>
                        <source srcset="img/page/main/program/1.webp" type="image/webp">
                        <img class="program__image" src="img/page/main/program/1.jpg" alt="">
                      </picture>
                    </div>
                    <!-- /.program__picture -->
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-lg-6">
                    <div class="program__content">
                      <div class="program__text">
                        <div class="row">
                          <div class="col-12 col-sm-6">
                            <ul class="list list--small">
                              <li class="list__item">- Умение обозначать эмоции</li>
                              <li class="list__item">- Английский язык</li>
                              <li class="list__item">- Развитие речи</li>
                            </ul>
                          </div>
                          <!-- /.col-6 -->

                          <div class="col-12 col-sm-6">
                            <ul class="list list--small">
                              <li class="list__item">- Окружающий мир</li>
                              <li class="list__item">- Система Монтессори</li>
                              <li class="list__item">- Творчество</li>
                              <li class="list__item">- Кулинарные мастер-классы</li>
                            </ul>
                          </div>
                          <!-- /.col-6 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.program__text -->

                      <div class="program__action">
                        <button class="button button-outline">Расписание группы</button>
                      </div>
                      <!-- /.program__action -->
                    </div>
                    <!-- /.program__content -->
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.program__item -->
            </div>

            <div class="swiper-slide" data-title="5 - 7 лет">
              <div class="program__item">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-6">
                    <div class="program__picture">
                      <picture>
                        <source srcset="img/page/main/program/1.webp" type="image/webp">
                        <img class="program__image" src="img/page/main/program/1.jpg" alt="">
                      </picture>
                    </div>
                    <!-- /.program__picture -->
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-lg-6">
                    <div class="program__content">
                      <div class="program__text">
                        <div class="row">
                          <div class="col-12 col-sm-6">
                            <ul class="list list--small">
                              <li class="list__item">- Умение обозначать эмоции</li>
                              <li class="list__item">- Английский язык</li>
                              <li class="list__item">- Развитие речи</li>
                              <li class="list__item">- Сенсорная интеграция</li>
                              <li class="list__item">- Развивающая гимнастика</li>
                              <li class="list__item">- Сказкотерапия</li>
                            </ul>
                          </div>
                          <!-- /.col-6 -->

                          <div class="col-12 col-sm-6">
                            <ul class="list list--small">
                              <li class="list__item">- Окружающий мир</li>
                              <li class="list__item">- Система Монтессори</li>
                              <li class="list__item">- Музыкальное развитие</li>
                              <li class="list__item">- Футбол</li>
                              <li class="list__item">- Балет</li>
                              <li class="list__item">- Творчество</li>
                              <li class="list__item">- Кулинарные мастер-классы</li>
                            </ul>
                          </div>
                          <!-- /.col-6 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.program__text -->

                      <div class="program__action">
                        <button class="button button-outline">Расписание группы</button>
                      </div>
                      <!-- /.program__action -->
                    </div>
                    <!-- /.program__content -->
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.program__item -->
            </div>
          </div>
          <!-- /.swiper-wrapper -->
        </div>
        <!-- /.swiper-container program-slider -->
      </div>
      <!-- /.program -->
    </div>
    <!-- /.container -->
  </section>

  <section id="condition" class="section">
    <div class="container">
      <h2 class="section__title text-center">Условия и цены</h2>

      <div class="condition">
        <div class="row align-items-start">
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="condition__card condition-card">
              <div class="condition-card__header condition-card__header--yellow">
                <h3 class="condition-card__title">Утро / вечер</h3>
              </div>
              <!-- /.condition-card__header -->

              <div class="condition-card__content">
                <div class="condition-card__wrapper">
                  <h4 class="condition-card__subtitle">Утро 08:00 - 12:30</h4>
                  <p class="condition-card__description">
                    Включено в стоимость:
                    <br>
                    Завтрак, второй завтрак и все занятия по
                    <br>
                    расписанию до обеда.
                    <br>
                    Обед может быть дополнительным - <strong>250 руб.</strong>
                  </p>
                </div>
                <!-- /.condition-card__wrapper -->

                <div class="condition-card__wrapper">
                  <h4 class="condition-card__subtitle">Вечер 15:30 - 20:00</h4>
                  <p class="condition-card__description">
                    Включено в стоимость:
                    <br>
                    полдник, ужин и все занятия
                    <br>
                    по расписанию после обеда
                  </p>
                </div>
                <!-- /.condition-card__wrapper -->

                <div class="condition-card__wrapper">
                  <h4 class="condition-card__subtitle">Стоимость:</h4>
                  <p class="condition-card__description">
                  <ul class="list list--small">
                    <li class="list__item">- 3 раза в неделю (пн, ср, пт) - <strong>18 000 руб.</strong></li>
                    <li class="list__item">- 2 раза в неделю (вт, чт) - <strong>15 000 руб.</strong></li>
                    <li class="list__item">- 5 раз в неделю - <strong>23 000 руб.</strong></li>
                  </ul>
                  </p>
                </div>
                <!-- /.condition-card__wrapper -->

                <button data-micromodal-trigger="modal-callback" data-modal-title="Запись на <br> утро/вечер" data-sign-type="morning-evening" class="condition-card__button button button-outline">Записаться</button>
              </div>
              <!-- /.condition-card__content -->
            </div>
            <!-- /.condition__card condition-card -->
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-lg-6">
            <div class="condition__card condition-card">
              <div class="condition-card__header condition-card__header--darkblue">
                <h3 class="condition-card__title">Весь день</h3>
              </div>
              <!-- /.condition-card__header -->

              <div class="condition-card__content">
                <div class="condition-card__wrapper">
                  <h4 class="condition-card__subtitle">08:00 - 20:00</h4>
                  <p class="condition-card__description">
                    Включено в стоимость:
                    <br>
                    завтрак, второй завтрак, обед, полдник,
                    <br>
                    ужин и все занятия по расписанию.
                  </p>
                </div>
                <!-- /.condition-card__wrapper -->

                <div class="condition-card__wrapper">
                  <h4 class="condition-card__subtitle">Стоимость:</h4>
                  <p class="condition-card__description">
                  <ul class="list list--small">
                    <li class="list__item">- 3 раза в неделю (пн, ср, пт) - <strong>27 000 руб.</strong></li>
                    <li class="list__item">- 2 раза в неделю (вт, чт) - <strong>22 000 руб.</strong></li>
                    <li class="list__item">- 5 раз в неделю - <strong>37 000 руб.</strong></li>
                  </ul>
                  </p>
                </div>
                <!-- /.condition-card__wrapper -->

                <button data-micromodal-trigger="modal-callback" data-modal-title="Запись на <br> весь день" data-sign-type="all-day" class="condition-card__button button button-outline">Записаться</button>
              </div>
              <!-- /.condition-card__content -->
            </div>
            <!-- /.condition__card condition-card -->
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.condition -->
    </div>
    <!-- /.container -->
  </section>

  <section id="educators" class="section">
    <div class="container">
      <h2 class="section__title text-center">Наши педагоги</h2>

      <div class="educators">
        <div class="swiper-container educator__slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="educators__item">
                <div class="educators__photo">
                  <picture>
                    <source srcset="img/page/main/educators/1.webp" type="image/webp">
                    <img src="img/page/main/educators/1.jpg" alt="" class="educators__image">
                  </picture>
                </div>
                <!-- /.educators__photo -->

                <div class="educators__content">
                  <h3 class="educators__name">Елена</h3>
                  <div class="educators__role">Педагог - психолог</div>
                  <a href="" class="educators__more">
                    Подробнее о педагоге

                    <svg class="educators__icon" width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M25.7827 8.5035C26.1732 8.11297 26.1732 7.47981 25.7827 7.08928L19.4187 0.725321C19.0282 0.334796 18.3951 0.334796 18.0045 0.72532C17.614 1.11584 17.614 1.74901 18.0045 2.13953L23.6614 7.79639L18.0045 13.4532C17.614 13.8438 17.614 14.4769 18.0045 14.8675C18.3951 15.258 19.0282 15.258 19.4187 14.8675L25.7827 8.5035ZM0.37793 8.79639L25.0756 8.79639L25.0756 6.79639L0.37793 6.79639L0.37793 8.79639Z" fill="#5EC2EB" />
                    </svg>
                  </a>
                </div>
                <!-- /.educators__content -->
              </div>
              <!-- /.educators__item -->
            </div>
            <!-- /.swiper-slide -->

            <div class="swiper-slide">
              <div class="educators__item">
                <div class="educators__photo">
                  <picture>
                    <source srcset="img/page/main/educators/2.webp" type="image/webp">
                    <img src="img/page/main/educators/2.jpg" alt="" class="educators__image">
                  </picture>
                </div>
                <!-- /.educators__photo -->

                <div class="educators__content">
                  <h3 class="educators__name">Ульяна</h3>
                  <div class="educators__role">Педагог</div>
                  <a href="" class="educators__more">
                    Подробнее о педагоге

                    <svg class="educators__icon" width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M25.7827 8.5035C26.1732 8.11297 26.1732 7.47981 25.7827 7.08928L19.4187 0.725321C19.0282 0.334796 18.3951 0.334796 18.0045 0.72532C17.614 1.11584 17.614 1.74901 18.0045 2.13953L23.6614 7.79639L18.0045 13.4532C17.614 13.8438 17.614 14.4769 18.0045 14.8675C18.3951 15.258 19.0282 15.258 19.4187 14.8675L25.7827 8.5035ZM0.37793 8.79639L25.0756 8.79639L25.0756 6.79639L0.37793 6.79639L0.37793 8.79639Z" fill="#5EC2EB" />
                    </svg>
                  </a>
                </div>
                <!-- /.educators__content -->
              </div>
              <!-- /.educators__item -->
            </div>
            <!-- /.swiper-slide -->

            <div class="swiper-slide">
              <div class="educators__item">
                <div class="educators__photo">
                  <picture>
                    <source srcset="img/page/main/educators/3.webp" type="image/webp">
                    <img src="img/page/main/educators/3.jpg" alt="" class="educators__image">
                  </picture>
                </div>
                <!-- /.educators__photo -->

                <div class="educators__content">
                  <h3 class="educators__name">Тамара</h3>
                  <div class="educators__role">Логопед</div>
                  <a href="" class="educators__more">
                    Подробнее о педагоге

                    <svg class="educators__icon" width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M25.7827 8.5035C26.1732 8.11297 26.1732 7.47981 25.7827 7.08928L19.4187 0.725321C19.0282 0.334796 18.3951 0.334796 18.0045 0.72532C17.614 1.11584 17.614 1.74901 18.0045 2.13953L23.6614 7.79639L18.0045 13.4532C17.614 13.8438 17.614 14.4769 18.0045 14.8675C18.3951 15.258 19.0282 15.258 19.4187 14.8675L25.7827 8.5035ZM0.37793 8.79639L25.0756 8.79639L25.0756 6.79639L0.37793 6.79639L0.37793 8.79639Z" fill="#5EC2EB" />
                    </svg>
                  </a>
                </div>
                <!-- /.educators__content -->
              </div>
              <!-- /.educators__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
        </div>
        <!-- /.swiper-container -->

        <div class="swiper-controls">
          <div class="swiper-button-prev educator__prev"></div>
          <div class="swiper-button-next educator__next"></div>
        </div>
        <!-- /.swiper-controls -->
      </div>
      <!-- /.educators -->
    </div>
    <!-- /.container -->
  </section>

  <section id="contact" class="section">
    <div class="container">
      <div class="contact">
        <div class="row">
          <div class="col-12 col-lg-5 mb-4 mb-lg-0">
            <div class="contact__info">
              <h2 class="contact__title section__title">Контакты</h2>
              <div class="contact__wrapper">
                <div class="contact__item">
                  <h3 class="contact__subtitle">Для связи</h3>
                  <a class="contact__link" href="tel:+74952222222">+7 (495) 222-22-22</a>
                </div>
                <!-- /.contact__item -->

                <div class="contact__item">
                  <h3 class="contact__subtitle">Почта</h3>
                  <a class="contact__link" href="mailto:my-happychildren@gmail.com">My-happychildren@gmail.com</a>
                </div>
                <!-- /.contact__item -->

                <div class="contact__item">
                  <h3 class="contact__subtitle">Адрес</h3>
                  <a class="contact__link" href="https://yandex.ru/maps/-/CCQozHVKxB" target="_blank">Москва, Коммунарка, <br> ул. Александры Монаховой, 23 </a>
                </div>
                <!-- /.contact__item -->

                <div class="contact__item">
                  <h3 class="contact__subtitle">Instagram</h3>
                  <a class="contact__link" href="https://yandex.ru/maps/-/CCQozHVKxB" target="_blank">@happychildren</a>
                </div>
                <!-- /.contact__item -->
              </div>
              <!-- /.contact__wrapper -->
            </div>
            <!-- /.contact__info -->
          </div>
          <!-- /.col-5 -->

          <div class="col-12 col-lg-7">
            <div class="contact__map" id="map">
              <!--- ДИНАМИЧЕСКАЯ КАРТА --->
            </div>
          </div>
          <!-- /.col-7 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.contact -->
    </div>
    <!-- /.container -->

    <div class="shape">
      <svg>
        <clipPath id="contact-wave" clipPathUnits="objectBoundingBox">
          <path d="M 0 0.2 L 0 0.9 C 0.501 1.111 0.434 0.8 1 0.928 L 1 0.1 C 0.7 0 0.3 0 0 0.1" />
        </clipPath>
      </svg>
    </div>

    <div class="shape">
      <svg>
        <clipPath id="contact-wave--mobile" clipPathUnits="objectBoundingBox">
          <path d="M 0 0.2 L 0 0.975 C 0.459 1.015 0.462 0.94 1 0.974 L 1 0.03 C 0.7 0 0.3 0 0 0.033" />
        </clipPath>
      </svg>
    </div>
  </section>

  <section id="callback" class="section">
    <div class="container">
      <div class="callback">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 col-xl-6">
            <div class="callback__wrapper">
              <h2 class="callback__title section__title mb-2">
                Запишитесь
                <br>
                на бесплатную экскурсию
              </h2>
              <p class="callback__text section__text">
                Оставьте свои контактные данные, и мы
                <br>
                свяжемся с вами в ближайшее время для
                <br>
                уточнения даты посещения детского садика
              </p>

              <form action="" class="callback__from form form-callback">
                <div class="input mb-3">
                  <input data-required type="text" class="input__field" name="user_name" placeholder="Ваше ФИО">
                  <img data-tippy-content="Поле пустое или содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <div class="input mb-3">
                  <input type="text" class="input__field" name="user_child" placeholder="Имя ребенка">
                  <img data-tippy-content="Поле содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <div class="input mb-3">
                  <input type="text" class="input__field" name="user_date" placeholder="Дата рождения ребенка">
                  <img data-tippy-content="Поле содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <div class="input mb-5">
                  <input data-required type="tel" class="input__field" name="user_phone" placeholder="+7 (111) 111 11 11">
                  <img data-tippy-content="Поле пустое или содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <div class="form__action">
                  <button data-sending="Отправляем..." type="submit" class="form__button button button-outline d-flex mx-auto">Записаться</button>
                  <img class="form__loader preloader--mini" src="img/loader.svg" alt="">
                </div>
                <!-- /.form__action -->
              </form>
            </div>
            <!-- /.callback__wrapper -->
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-lg-5 col-xl-6">
            <div class="callback__picture">
              <picture>
                <source srcset="img/page/main/callback/photo.webp" type="image/webp">
                <img class="callback__image" src="img/page/main/callback/photo.jpg" alt="">
              </picture>
            </div>
            <!-- /.program__picture -->
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.callback -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /#callback.section -->
</main>

<?php include_once('partials/footer.php') ?>