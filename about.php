<?php
// Template Name: About
?>

<?php get_header() ?>

<section class="page__banner banner__about">
      <div class="container">
        <div class="page__banner__content">
          <h1>
            Fresh <br />
            Comprehensive <br />
            Trending
          </h1>
        </div>
      </div>
    </section>

    <section class="about__info">
      <div class="container">
        <div class="about__info__wrapper">
          <div class="about__info__img">
            <img src="https://via.placeholder.com/150x150" alt="" />
          </div>
          <div class="about__info__content">
            <h2>About</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
              quae ea sit magni, cumque delectus eos blanditiis numquam
              temporibus vitae sint harum fugit sed earum pariatur eveniet nam
              cum soluta maxime non nisi! Assumenda atque placeat laudantium in
              deserunt neque.
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Temporibus fugiat eveniet laboriosam numquam nemo dignissimos
              sequi autem natus nihil veritatis.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="about__team">
      <div class="container">
        <h2 class="block__header">Meet The Team</h2>
        <div class="about__team__wrapper">
          <div class="card__team">
            <img src="https://via.placeholder.com/150x150" alt="" />
            <div class="card__team__content">
              <h4>Lorem Ipsum</h4>
              <p>Writer</p>
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card__team">
            <img src="https://via.placeholder.com/150x150" alt="" />
            <div class="card__team__content">
              <h4>Lorem Ipsum</h4>
              <p>Writer</p>
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card__team">
            <img src="https://via.placeholder.com/150x150" alt="" />
            <div class="card__team__content">
              <h4>Lorem Ipsum</h4>
              <p>Writer</p>
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card__team">
            <img src="https://via.placeholder.com/150x150" alt="" />
            <div class="card__team__content">
              <h4>Lorem Ipsum</h4>
              <p>Writer</p>
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card__team">
            <img src="https://via.placeholder.com/150x150" alt="" />
            <div class="card__team__content">
              <h4>Lorem Ipsum</h4>
              <p>Writer</p>
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card__team">
            <img src="https://via.placeholder.com/150x150" alt="" />
            <div class="card__team__content">
              <h4>Lorem Ipsum</h4>
              <p>Writer</p>
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card__team">
            <img src="https://via.placeholder.com/150x150" alt="" />
            <div class="card__team__content">
              <h4>Lorem Ipsum</h4>
              <p>Writer</p>
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card__team">
            <img src="https://via.placeholder.com/150x150" alt="" />
            <div class="card__team__content">
              <h4>Lorem Ipsum</h4>
              <p>Writer</p>
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer() ?>

            <?php 
            $image = get_sub_field('feature_img');
            if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>