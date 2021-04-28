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
            <button class="studios__button button button-primary me-3">Записаться на экскурсию</button>
            <button class="studios__button button button-outline">Позвонить</button>
          </div>
          <!-- /.studios__action -->
        </div>
        <!-- /.studios__content -->

        <picture class="studios__picture">
            <source srcset="img/page/studios/hero__image.webp" type="image/webp">
            <img src="img/page/studios/hero__image.img" alt="" class="hero__image">
          </picture>
          <!-- /.team__picture -->

        <div class="shape">
          <svg>
            <clipPath id="hero-wave" clipPathUnits="objectBoundingBox">
              <path d="M 0 0.837 L 0 0 L 1 0 L 1 0.824 C 0.649 1.01 0.614 0.531 0 0.837" />
            </clipPath>
          </svg>
        </div>
      </div>
      <!-- /.team -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('partials/footer.php') ?>