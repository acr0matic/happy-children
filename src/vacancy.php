<?php include_once('partials/header.php') ?>

<main id="vacancy-page">
  <section id="vacancy" class="section">
    <div class="container">
      <div class="vacancy">
        <div class="vacancy__header">
          <h1 class="page__title">
            В настоящее время в нашем
            <br>
            детском садике открыты
            <br>
            следующие вакансии:
          </h1>
        </div>
        <!-- /.vacancy__header -->

        <div class="vacancy__content">
          <div class="row gy-3">
            <div class="col-12 col-lg-6">
              <div class="vacancy__item">
                <h3 class="vacancy__title">Помощник воспитателя в младшей группе</h3>

                <strong>Требования</strong>
                <div class="vacancy__text">
                  - Умение обозначать эмоции
                  <br>
                  - Умение обозначать эмоции
                  <br>
                  - Умение обозначать эмоции обозначать эмоции обозначать эмоции
                  <br>
                  эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции
                  эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции
                  эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции
                  эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции
                </div>
                <!-- /.vacancy__text -->

                <div class="vacancy__action">
                  <button class="button button-outline" data-micromodal-trigger="modal-vacancy">Подать резюме</button>
                </div>
                <!-- /.vacancy__action -->
              </div>
              <!-- /.vacancy__item -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-6">
              <div class="vacancy__item">
                <h3 class="vacancy__title">Помощник воспитателя в младшей группе</h3>

                <strong>Требования</strong>
                <div class="vacancy__text">
                  - Умение обозначать эмоции
                  <br>
                  - Умение обозначать эмоции
                  <br>
                  - Умение обозначать эмоции обозначать эмоции обозначать эмоции
                  <br>
                  эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции
                  эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции
                  эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции
                  эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции эмоции обозначать эмоции
                </div>
                <!-- /.vacancy__text -->

                <div class="vacancy__action">
                  <button class="button button-outline" data-micromodal-trigger="modal-vacancy">Подать резюме</button>
                </div>
                <!-- /.vacancy__action -->
              </div>
              <!-- /.vacancy__item -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.vacancy__content -->
      </div>
      <!-- /.vacancy -->
    </div>
    <!-- /.container -->
  </section>
</main>

<div class="modal modal-callback micromodal-slide" id="modal-vacancy" data-modal-title="">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container">
      <div class="modal__header">
        <h2 class="modal__title mb-3">
          Педагог-воспитатель
        </h2>
        <p class="modal__description">
          Оставьте свои контактные данные, и мы
          <br>
          свяжемся с вами в ближайшее время
        </p>

        <button class="modal__close" data-micromodal-close>
          <svg width="100%" height="100%" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.5 0C7.83594 0 0 7.83594 0 17.5C0 27.1641 7.83594 35 17.5 35C27.1641 35 35 27.1641 35 17.5C35 7.83594 27.1641 0 17.5 0ZM17.5 32.0312C9.47656 32.0312 2.96875 25.5234 2.96875 17.5C2.96875 9.47656 9.47656 2.96875 17.5 2.96875C25.5234 2.96875 32.0312 9.47656 32.0312 17.5C32.0312 25.5234 25.5234 32.0312 17.5 32.0312Z"
              fill="#5EC2EB" />
            <path
              d="M24.2891 11.25C24.2891 11.0781 24.1484 10.9375 23.9766 10.9375L21.3984 10.9492L17.5156 15.5781L13.6367 10.9531L11.0547 10.9414C10.8828 10.9414 10.7422 11.0781 10.7422 11.2539C10.7422 11.3281 10.7695 11.3984 10.8164 11.457L15.8984 17.5117L10.8164 23.5625C10.7692 23.6198 10.743 23.6914 10.7422 23.7656C10.7422 23.9375 10.8828 24.0781 11.0547 24.0781L13.6367 24.0664L17.5156 19.4375L21.3945 24.0625L23.9727 24.0742C24.1445 24.0742 24.2852 23.9375 24.2852 23.7617C24.2852 23.6875 24.2578 23.6172 24.2109 23.5586L19.1367 17.5078L24.2188 11.4531C24.2656 11.3984 24.2891 11.3242 24.2891 11.25Z"
              fill="#5EC2EB" />
          </svg>
        </button>
      </div>

      <div class="modal__content">
        <form data-target="vacancy" action="php/test.php" data-redirect="thank.php" class="callback__from form form-callback">
          <div class="input mb-3">
            <input data-required type="text" class="input__field" name="user_name" placeholder="Имя">
            <img data-tippy-content="Поле пустое или содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
          </div>
          <!-- /.input -->

          <div class="input mb-3">
            <input type="text" class="input__field" name="user_lastname" placeholder="Фамилия">
            <img data-tippy-content="Поле содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
          </div>
          <!-- /.input -->

          <div class="input mb-4">
            <input data-required type="tel" class="input__field" name="user_phone" placeholder="+7 (111) 111 11 11">
            <img data-tippy-content="Поле пустое или содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
          </div>
          <!-- /.input -->

          <div class="input mb-3">
            <span class="input__label">Почему Вы хотите именно к нам?</span>
            <textarea class="input__field input__field--box" name="user_message"></textarea>
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
      <!-- /.modal__content -->
    </div>
    <!-- /.modal__container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->


<?php include_once('partials/footer.php') ?>