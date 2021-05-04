<?php include_once('partials/header.php') ?>

<!-- Основной контент -->
<main>
  <section id="studios">
    <div class="container">
      <div class="studios">
        <div class="studios__content">
          <h1 class="studios__title page__title">«Детские студии»</h1>
          <h2 class="section__title">В Happy Children</h2>

          <div class="studios__action">
            <button class="studios__button button button-primary me-3" data-micromodal-trigger="modal-callback" data-modal-target="excursion">
              Записаться на экскурсию
            </button>
            <button class="studios__button button button-outline button-outline--white" onclick="window.open('tel:+79653171030', '_self');">Позвонить</button>
          </div>
          <!-- /.studios__action -->
        </div>
        <!-- /.studios__content -->

        <picture class="studios__picture">
          <source srcset="img/page/studios/hero__image.webp" type="image/webp">
          <img src="img/page/studios/hero__image.img" alt="" class="hero__image">
        </picture>
        <!-- /.text-block__picture -->

        <div class="shape">
          <svg>
            <clipPath id="hero-wave" clipPathUnits="objectBoundingBox">
              <path d="M 0 0.837 L 0 0 L 1 0 L 1 0.824 C 0.649 1.01 0.614 0.531 0 0.837" />
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
      <!-- /.team -->
    </div>
    <!-- /.container -->
  </section>

  <section id="service" class="section">
    <div class="container">
      <div class="service">
        <div data-aos="fade-up" data-aos-offset="200" class="service__item text-block__item">
          <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
              <picture class="text-block__picture mx-auto mx-lg-0">
                <source srcset="img/page/studios/service/1.webp" type="image/webp">
                <img class="text-block__image" src="img/page/studios/service/1.jpg" alt="">
              </picture>
              <!-- /.about__picture -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-7 col-xl-6">
              <div class="text-block__content">
                <h2 class="text-block__title">
                  Английский язык
                </h2>

                <div class="text-block__text">
                  <p class="text-block__text section__text">
                    Авторские занятия по изучению английского языка от <strong>Елены Левиной</strong>, педагог-психолог, преподаватель английского языка.
                  </p>

                  <p class="text-block__text section__text">
                    Все занятия проходят в игровой форме. Каждое занятие делится на 4 блока, после каждого блока - музыкальная разминка.
                  </p>

                  <ul class="text-block__list list list--line">
                    <li class="list__item">Круг - садимся в круг, здороваемся и знакомимся с книгой, короткую будем изучать;</li>
                    <li class="list__item">Грамматика - знакомимся с правилами английского языка, буквами;</li>
                    <li class="list__item">Чтение книги;</li>
                    <li class="list__item">Творческая работа - делаем поделку или рисуем героев книги. Этим развивается мелкая моторика, что влияет на развитие умственных способностей, а также на речь.</li>
                  </ul>
                </div>
                <!-- /.about__text -->

                <p class="text-block__text section__text">
                  <strong>Время проведения</strong> <br>
                  Суббота в 10:00 <br>
                  Рекомендуемый возраст – от 4,5 лет
                </p>

                <p class="text-block__text section__text">
                  <strong>Стоимость абонемента</strong> из 4 занятий – 4.000 руб. <br> Группа 5-6 человек
                </p>

                <div class="text-block__action">
                  <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback" data-modal-target="trial" data-modal-additional="english" data-modal-title="Запишитесь <br> на пробное занятие">
                    Записаться на пробное занятие
                  </button>
                </div>
                <!-- /.about__action -->
              </div>
              <!-- /.about__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.text-block__item -->

        <div data-aos="fade-up" data-aos-offset="200" class="service__item text-block__item">
          <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
              <picture class="text-block__picture mx-auto mx-lg-0">
                <source srcset="img/page/studios/service/2.webp" type="image/webp">
                <img class="text-block__image" src="img/page/studios/service/2.jpg" alt="">
              </picture>
              <!-- /.about__picture -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-7 col-xl-6">
              <div class="text-block__content">
                <h2 class="text-block__title">
                  Шахматы
                </h2>

                <div class="text-block__text">
                  <ul class="text-block__list list list--line">
                    <li class="list__item list__item--head">Занятия состоят из 4 элементов:</li>
                    <li class="list__item">Шахматная разминка;</li>
                    <li class="list__item">Прохождение материала;</li>
                    <li class="list__item">Обычная разминка;</li>
                    <li class="list__item">Игровая практика;</li>
                  </ul>
                </div>
                <!-- /.about__text -->

                <p class="text-block__text section__text">
                  <strong>Стоимость абонемента</strong> из 4 занятий – 2.400 руб. <br> Группа 5-6 человек
                </p>

                <div class="text-block__action">
                  <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback" data-modal-target="trial" data-modal-additional="english" data-modal-title="Запишитесь <br> на пробное занятие">
                    Записаться на пробное занятие
                  </button>
                </div>
                <!-- /.about__action -->
              </div>
              <!-- /.about__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.text-block__item -->

        <div data-aos="fade-up" data-aos-offset="200" class="service__item text-block__item">
          <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
              <picture class="text-block__picture mx-auto mx-lg-0">
                <source srcset="img/page/studios/service/3.webp" type="image/webp">
                <img class="text-block__image" src="img/page/studios/service/3.jpg" alt="">
              </picture>
              <!-- /.about__picture -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-7 col-xl-6">
              <div class="text-block__content">
                <h2 class="text-block__title">
                  Логопед
                </h2>

                <p class="text-block__text section__text">
                  Индивидуальные занятия <br>
                  Рекомендуемый возраст – определяется после индивидуальной диагностики
                </p>

                <p class="text-block__text section__text">
                  <strong>Время проведения</strong> <br>
                  обговаривается с педагогом
                </p>

                <p class="text-block__text section__text">
                  <strong>Стоимость абонемента</strong> из 4 занятий – 5.200 руб. <br> Группа 5-6 человек
                </p>

                <div class="text-block__action">
                  <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback" data-modal-target="trial" data-modal-additional="speech" data-modal-title="Запишитесь <br> на пробное занятие">
                    Записаться на пробное занятие
                  </button>
                </div>
                <!-- /.about__action -->
              </div>
              <!-- /.about__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.text-block__item -->

        <div data-aos="fade-up" data-aos-offset="200" class="service__item text-block__item">
          <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
              <picture class="text-block__picture mx-auto mx-lg-0">
                <source srcset="img/page/studios/service/4.webp" type="image/webp">
                <img class="text-block__image" src="img/page/studios/service/4.jpg" alt="">
              </picture>
              <!-- /.about__picture -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-7 col-xl-6">
              <div class="text-block__content">
                <h2 class="text-block__title">
                  Музыкальная студия
                </h2>

                <p class="text-block__text section__text">
                  Индивидуальные занятия <br>
                  Рекомендуемый возраст – от 4 лет
                </p>

                <p class="text-block__text section__text">
                  <strong>Время проведения</strong> <br>
                  Четверг
                </p>

                <p class="text-block__text section__text">
                  <strong>Стоимость абонемента</strong> из 4 занятий – 5.200 руб. <br> Группа 5-6 человек
                </p>

                <div class="text-block__action">
                  <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback" data-modal-target="trial" data-modal-additional="music" data-modal-title="Запишитесь <br> на пробное занятие">
                    Записаться на пробное занятие
                  </button>
                </div>
                <!-- /.about__action -->
              </div>
              <!-- /.about__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.text-block__item -->
      </div>
      <!-- /.service -->
    </div>
    <!-- /.container -->
  </section>

  <section id="holiday" class="section">
    <div class="container">
      <h2 class="section__title text-center">Организация праздников</h2>

      <div class="holiday">
        <div class="swiper-container holiday-slider">
          <div class="swiper-pagination"></div>

          <div class="swiper-wrapper">
            <div class="swiper-slide" data-title="Пакет «Как дома, только лучше»">
              <div class="holiday__item text-block__item">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
                    <picture class="text-block__picture mx-auto mx-lg-0">
                      <source srcset="img/page/studios/holiday/1.webp" type="image/webp">
                      <img class="text-block__image" src="img/page/studios/holiday/1.jpg" alt="">
                    </picture>
                    <!-- /.about__picture -->
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-lg-7 col-xl-6">
                    <div class="text-block__content">
                      <h2 class="text-block__title">
                        Пакет
                        <br>
                        «Как дома, только лучше»
                      </h2>

                      <div class="text-block__text">
                        <p class="text-block__text section__text">
                          Новое пространство, уютная атмосфера, оформленная фотозона.
                        </p>

                        <p class="text-block__text section__text">
                          Администратор на период проведения праздника.
                        </p>
                      </div>
                      <!-- /.about__text -->

                      <p class="text-block__text section__text">
                        <strong>Продолжительность аренды</strong> – 3 часа.
                      </p>

                      <p class="text-block__text section__text">
                        Возможное время аренды – <br>
                        выходные и праздничные дни в 11:00 и в 16:00.
                      </p>

                      <p class="text-block__text section__text">
                        <strong>Стоимость</strong> – 10 000 руб.
                      </p>
                    </div>
                    <!-- /.about__content -->
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.text-block__item -->
            </div>
            <!-- /.swiper-slide -->


            <div class="swiper-slide" data-title="Пакет «Праздничный»">
              <div class="holiday__item text-block__item">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
                    <picture class="text-block__picture mx-auto mx-lg-0">
                      <source srcset="img/page/studios/holiday/1.webp" type="image/webp">
                      <img class="text-block__image" src="img/page/studios/holiday/1.jpg" alt="">
                    </picture>
                    <!-- /.about__picture -->
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-lg-7 col-xl-6">
                    <div class="text-block__content">
                      <h2 class="text-block__title">
                        Пакет «Праздничный»
                      </h2>

                      <div class="text-block__text">
                        <p class="text-block__text section__text">
                          Аренда красивого просторного зала с оформленной фотозоной – <strong>3 часа</strong>
                        </p>

                        <p class="text-block__text section__text">
                          + Муссовый торт с декором на выбор (1 кг) от Территории десертов
                          <br>
                          + Аниматор (1ч)
                          <br>
                          + Украшение шарами
                          <br>
                          + Закуски, напитки, праздничные украшения
                        </p>
                      </div>
                      <!-- /.about__text -->

                      <p class="text-block__text section__text">
                        <strong>Возможное время аренды</strong> – выходные и праздничные дни в 11:00 и в 16:00.
                      </p>

                      <p class="text-block__text section__text">
                        <strong>Стоимость</strong> - 21 000 руб.
                      </p>

                      <div class="text-block__action">
                        <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback">Записаться на пробное занятие</button>
                      </div>
                      <!-- /.about__action -->
                    </div>
                    <!-- /.about__content -->
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.text-block__item -->
            </div>
            <!-- /.swiper-slide -->


            <div class="swiper-slide" data-title="Пакет «Безудержное веселье»">
              <div class="holiday__item text-block__item">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
                    <picture class="text-block__picture mx-auto mx-lg-0">
                      <source srcset="img/page/studios/holiday/1.webp" type="image/webp">
                      <img class="text-block__image" src="img/page/studios/holiday/1.jpg" alt="">
                    </picture>
                    <!-- /.about__picture -->
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-lg-7 col-xl-6">
                    <div class="text-block__content">
                      <h2 class="text-block__title">
                        Английский язык
                      </h2>

                      <div class="text-block__text">
                        <p class="text-block__text section__text">
                          Авторские занятия по изучению английского языка от <strong>Елены Левиной</strong>, педагог-психолог, преподаватель английского языка.
                        </p>

                        <p class="text-block__text section__text">
                          Все занятия проходят в игровой форме. Каждое занятие делится на 4 блока, после каждого блока - музыкальная разминка.
                        </p>
                      </div>
                      <!-- /.about__text -->

                      <p class="text-block__text section__text">
                        <strong>Время проведения</strong> <br>
                        Суббота в 10:00 <br>
                        Рекомендуемый возраст – от 4,5 лет
                      </p>

                      <p class="text-block__text section__text">
                        <strong>Стоимость абонемента</strong> из 4 занятий – 4.000 руб. <br> Группа 5-6 человек
                      </p>

                      <div class="text-block__action">
                        <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback">Записаться на пробное занятие</button>
                      </div>
                      <!-- /.about__action -->
                    </div>
                    <!-- /.about__content -->
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.text-block__item -->
            </div>
            <!-- /.swiper-slide -->

            <div class="swiper-slide" data-title="Пакет «Максимальный»">
              <div class="holiday__item text-block__item">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-5 col-xl-6 mb-4 mb-lg-0">
                    <picture class="text-block__picture mx-auto mx-lg-0">
                      <source srcset="img/page/studios/holiday/1.webp" type="image/webp">
                      <img class="text-block__image" src="img/page/studios/holiday/1.jpg" alt="">
                    </picture>
                    <!-- /.about__picture -->
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-lg-7 col-xl-6">
                    <div class="text-block__content">
                      <h2 class="text-block__title">
                        Английский язык
                      </h2>

                      <div class="text-block__text">
                        <p class="text-block__text section__text">
                          Авторские занятия по изучению английского языка от <strong>Елены Левиной</strong>, педагог-психолог, преподаватель английского языка.
                        </p>

                        <p class="text-block__text section__text">
                          Все занятия проходят в игровой форме. Каждое занятие делится на 4 блока, после каждого блока - музыкальная разминка.
                        </p>
                      </div>
                      <!-- /.about__text -->

                      <p class="text-block__text section__text">
                        <strong>Время проведения</strong> <br>
                        Суббота в 10:00 <br>
                        Рекомендуемый возраст – от 4,5 лет
                      </p>

                      <p class="text-block__text section__text">
                        <strong>Стоимость абонемента</strong> из 4 занятий – 4.000 руб. <br> Группа 5-6 человек
                      </p>

                      <div class="text-block__action">
                        <button class="text-block__button button button-outline" data-micromodal-trigger="modal-callback">Записаться на пробное занятие</button>
                      </div>
                      <!-- /.about__action -->
                    </div>
                    <!-- /.about__content -->
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.text-block__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
        </div>
        <!-- /.swiper-container program-slider -->
      </div>
      <!-- /.program -->
    </div>
    <!-- /.container -->
  </section>

  <section id="callback" class="section">
    <div class="container">
      <div class="callback">
        <div class="row align-items-center">
          <div data-aos="fade-right" data-aos-offset="200" class="col-12 col-lg-7 col-xl-6">
            <div class="callback__wrapper">
              <h2 class="callback__title section__title mb-2">
                Запишите своего малыша
                <br>
                на пробное занятие
              </h2>
              <p class="callback__text section__text">
                Оставьте свои контактные данные, и мы
                <br>
                свяжемся с вами в ближайшее время
              </p>

              <form action="php/test.php" data-redirect="thank.php" class="callback__form form form-callback">
                <div class="input mb-3">
                  <select class="input__select" data-trigger name="user_select">
                    <option value="">Выберите секцию</option>
                    <option value="english">Английский язык</option>
                    <option value="сhess">Шахматы</option>
                    <option value="speech">Логопед</option>
                    <option value="music">Музыкальная студия</option>
                  </select>
                </div>
                <!-- /.input -->

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

          <div data-aos="fade-left" data-aos-offset="200" class="col-12 col-lg-5 col-xl-6">
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