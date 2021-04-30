<?php include_once('partials/header.php') ?>

<!-- Основной контент -->
<main>
  <section id="thank">
    <div class="container">
      <div class="thank">
        <div class="row flex-column-reverse flex-lg-row">
          <div class="col-12 col-lg-7">
            <picture class="thank__picture">
              <source srcset="img/page/thank/hero__image.webp" type="image/webp">
              <img src="img/page/thank/hero__image.img" alt="" class="thank__image">
            </picture>
            <!-- /.text-block__picture -->
          </div>
          <!-- /.col-7 -->

          <div class="col-12 col-md-8 col-lg-5 col-xl-4">
            <div class="thank__content">
              <div class="thank__wrapper">
                <h1 class="thank__title">
                  Спасибо!
                  <br>
                  Данные успешно отправлены!
                </h1>

                <h2 class="thank__subtitle">Мы перезвоним в течение 10 минут</h2>

                <button class="thank__button button button-outline button-outline--white">Вернуться на главную</button>
              </div>
              <!-- /.thank__wrapper -->

              <img class="thank__background" src="img/page/thank/background.svg" alt="">
            </div>
            <!-- /.thank__content -->
          </div>
          <!-- /.col-4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.thank -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('partials/footer.php') ?>