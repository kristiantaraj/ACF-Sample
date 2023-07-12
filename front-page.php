<?php get_header(); ?>


<div class="container-fluid banner">
  <div class="row">
    <div class="col-xs-12 col-md-5">
      <img class="banner-image" src="<?php the_field('banner_image') ?>" alt="">
    </div>
    <div class="col-sm-12 col-md-6 form-section">
      <h3 class="banner-text">
        <?php the_field('banner_text') ?>
      </h3>
      <div class="banner-nav">
        <div class="button1">
          <p class="buttonAct">Zajęcia</p>
        </div>
        <div class="button2">
          <p>Eventy</p>
        </div>
      </div>
      <div class="form">
        <div class="container form-container">
          <div class="row">
            <div class="col-12 col-sm-1"></div>
            <div class="col-6 col-sm-4">
              <p class="city">Miasto</p>
            </div>
            <div class="col-6 col-sm-4">
              <p class="school">Szkoła</p>
            </div>
            <div class="col-12 col-sm-2">
              <p class="search">SZUKAJ</p>
            </div>
          </div>
        </div>
        <div class="tags">
          <div class="tag tag1">Matematyka <span class="cross">&#10006</span></div>
          <div class="tag tag2">Sp.24 <span class="cross">&#10006</span></div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <h2 style="font-size: 36px">
    <?php the_field('cards_title') ?>
  </h2>
  <div class="row row-card">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <!-- Card -->
      <div class="card border-0">

        <!--Card image-->
        <div class="view overlay">
          <img class="card-img-top" src="<?php the_field('card1_image') ?>" alt="Card image cap">
          <a href="#" style="text-decoration: none;">
            <div class="tagline-card">
              <p class="text-uppercase">Zajęcia</p>
            </div>
          </a>
        </div>



        <!--Title-->
        <h4 class="card-title">
          <?php the_field('card1-title') ?>
        </h4>
        <!--Text-->
        <p class="card-text text-grey">
          <?php the_field('card1_description') ?>
        </p>
        <div class="details mt-4">
          <img class="" src="<?php echo get_template_directory_uri() ?>/images/alarm-clock.png" alt="Card image cap">
          <p class="text-uppercase text-bold ">Czas trwania</p>
          <div class="text-uppercase">
            <?php the_field('card1_minutes') ?>MIN
          </div>
        </div>
        <div class="details">
          <img class="" src="<?php echo get_template_directory_uri() ?>/images/wallet.png" alt="Card image cap">
          <p class="text-uppercase text-bold">cena</p>
          <div class="text-uppercase">
            <?php the_field('card1_price') ?> zł/zajęcia
          </div>
        </div>
        <div class="card-buttons">
          <div class="text-uppercase btn1"><a href="#">zapisz się</a></div>
          <div class="text-uppercase btn2"><a href="#">zobacz</a></div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4">
      <!-- Card -->
      <div class="card border-0">

        <!--Card image-->
        <div class="view overlay">
          <img class="card-img-top" src="<?php the_field('card2_image') ?>" alt="Card image cap">
          <a href="#" style="text-decoration: none;">
            <div class="tagline-card">
              <p class="text-uppercase">Zajęcia</p>
            </div>
          </a>
        </div>



        <!--Title-->
        <h4 class="card-title">
          <?php the_field('card2-title') ?>
        </h4>
        <!--Text-->
        <p class="card-text text-grey">
          <?php the_field('card2_description') ?>
        </p>
        <div class="details mt-4">
          <img class="" src="<?php echo get_template_directory_uri() ?>/images/alarm-clock.png" alt="Card image cap">
          <p class="text-uppercase text-bold ">Czas trwania</p>
          <div class="text-uppercase">
            <?php the_field('card2_minutes') ?>MIN
          </div>
        </div>
        <div class="details">
          <img class="" src="<?php echo get_template_directory_uri() ?>/images/wallet.png" alt="Card image cap">
          <p class="text-uppercase text-bold">cena</p>
          <div class="text-uppercase">
            <?php the_field('card2_price') ?> zł/zajęcia
          </div>
        </div>
        <div class="card-buttons">
          <div class="text-uppercase btn1"><a href="#">zapisz się</a></div>
          <div class="text-uppercase btn2"><a href="#">zobacz</a></div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4">
      <!-- Card -->
      <div class="card border-0">

        <!--Card image-->
        <div class="view overlay">
          <img class="card-img-top" src="<?php the_field('card1_image') ?>" alt="Card image cap">
          <a href="#" style="text-decoration: none;">
            <div class="tagline-card">
              <p class="text-uppercase">Zajęcia</p>
            </div>
          </a>
        </div>



        <!--Title-->
        <h4 class="card-title">
          <?php the_field('card3-title') ?>
        </h4>
        <!--Text-->
        <p class="card-text text-grey">
          <?php the_field('card3_description') ?>
        </p>
        <div class="details mt-4">
          <img class="" src="<?php echo get_template_directory_uri() ?>/images/alarm-clock.png" alt="Card image cap">
          <p class="text-uppercase text-bold ">Czas trwania</p>
          <div class="text-uppercase">
            <?php the_field('card3_minutes') ?>MIN
          </div>
        </div>
        <div class="details">
          <img class="" src="<?php echo get_template_directory_uri() ?>/images/wallet.png" alt="Card image cap">
          <p class="text-uppercase text-bold">cena</p>
          <div class="text-uppercase">
            <?php the_field('card3_price') ?> zł/zajęcia
          </div>
        </div>
        <div class="card-buttons">
          <div class="text-uppercase btn1"><a href="#">zapisz się</a></div>
          <div class="text-uppercase btn2"><a href="#">zobacz</a></div>
        </div>
      </div>
    </div>
</div>
</div>

    <div class="container">
      <div class="row event">
        <div class="col-12">
          <div class="card border-0">
            <img src="<?php the_field('event_image') ?>" class="card-img-top" />
            <div class="card-body">
              <!--Title-->
              <p class="card-subtitle text-uppercase">event miesiąca</p>
              <h4 class="card-title">
                <?php the_field('event_title') ?>
              </h4>
              <!--Text-->
              <p class="card-text text-grey">
                <?php the_field('event_description') ?>
              </p>
              <div class="details mt-4">
                <img class="" src="<?php echo get_template_directory_uri() ?>/images/alarm-clock.png"
                  alt="Card image cap">
                <p class="text-uppercase">Czas trwania</p>
                <div class="text-uppercase">
                  <?php the_field('event_minutes') ?>MIN
                </div>
              </div>
              <div class="details">
                <img class="" src="<?php echo get_template_directory_uri() ?>/images/wallet.png" alt="Card image cap">
                <p class="text-uppercase">cena</p>
                <div class="text-uppercase">
                  <?php the_field('event_price') ?> zł/zajęcia
                </div>
              </div>
              <div class="card-buttons">
                <div class="text-uppercase btn1"><a href="#">zapisz się</a></div>
                <div class="text-uppercase btn2"><a href="#">zobacz</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid seperator">
      <div class="row">
        <div class="col-sm-6 col-xs-12  text-1">
          <h2 class="d-flex justify-content-center">
            <?php the_field('seperator-title') ?>
          </h2>
        </div>
        <div class="col-sm-6 col-xs-12 text-2">
          <div class="d-flex justify-content-center">
            <a class="text-uppercase" href="#">zobacz</a>
          </div>

        </div>
      </div>
    </div>


    <div class="container-fluid w-100 info">
      <div class="row">
        <div class="col-md-6 rows-1">
          <img class="img-fluid" src="<?php the_field('about1_image') ?>" alt="Card image cap">
        </div>
        <div class="col-md-6 text-field">
          <h2 style="font-weight: bold;">
            <?php the_field('about1_title') ?>
          </h2>
          <p class="text-grey">
            <?php the_field('about1_description') ?>
          </p>
          <p class="search2 text-uppercase">zobacz więcej</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 text-field align-items-center custom-order">
          <h2 style="font-weight: bold;">
            <?php the_field('about2_title') ?>
          </h2>
          <p class="text-grey">
            <?php the_field('about2_description') ?>
          </p>
          <p class="search2 text-uppercase">zobacz więcej</p>
        </div>
        <div class="col-md-6 w-100 d-flex flex-column rows-2 ">
          <img class="img-fluid align-self-end" src="<?php the_field('about2_image') ?>" alt="Card image cap">
        </div>
      </div>
    </div>

    <div class="container blog">
      <h2>Blog</h2>
      <div class="row mt-5">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <!-- Card -->
          <div class="card border-0">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="<?php the_field('blog1_image') ?>" alt="Card image cap">
            </div>



            <!--Title-->
            <h4 class="card-title mt-5">
              <?php the_field('blog1_title') ?>
            </h4>
            <!--Text-->
            <p class="card-text text-grey">
              <?php the_field('blog1_description') ?>
            </p>
            <div class="card-buttons1">
              <div class="text-uppercase btn3"><a href="#">zobacz</a></div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
          <!-- Card -->
          <div class="card border-0">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="<?php the_field('blog2_image') ?>" alt="Card image cap">
            </div>



            <!--Title-->
            <h4 class="card-title mt-5">
              <?php the_field('blog2_title') ?>
            </h4>
            <!--Text-->
            <p class="card-text text-grey">
              <?php the_field('blog2_description') ?>
            </p>
            <div class="card-buttons1">
              <div class="text-uppercase btn3"><a href="#">zobacz</a></div>
            </div>
          </div>
        </div>


        <div class="col-xs-12 col-sm-6 col-md-4">
          <!-- Card -->
          <div class="card border-0">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="<?php the_field('blog3_image') ?>" alt="Card image cap">
            </div>



            <!--Title-->
            <h4 class="card-title mt-5">
              <?php the_field('blog3_title') ?>
            </h4>
            <!--Text-->
            <p class="card-text text-grey">
              <?php the_field('blog3_description') ?>
            </p>
            <div class="card-buttons1">
              <div class="text-uppercase btn3"><a href="#">zobacz</a></div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <?php get_footer(); ?>