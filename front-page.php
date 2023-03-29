<?php 
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>

    <section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1><?php echo get_field('banner_title') ?></h1>
          <div class="banner__grid">
            <div class="banner__main">
              <article class="banner__story">
                <picture>
                  <source
                    src="<?php echo get_template_directory_uri(); ?> ./img/img-1-sm.webp"
                    media="(max-width:719px)"
                  />
                  <source src="<?php echo get_template_directory_uri(); ?> ./img/img-1.webp" media="(min-width:720px)" />
                  <img src="<?php echo get_template_directory_uri(); ?> ./img/img-1.webp" alt="blog-img" />
                </picture>
                <div class="banner__story__content">
                  <small>Oct 21, 2022</small>
                  <h2>Malesuada Fames Ac Ante Ipsum Primis In Faucibus</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Deserunt, magni numquam! Suscipit at ipsum ducimus molestiae
                    voluptas magni totam repellat?
                  </p>
                  <a href="#">Read More...</a>
                </div>
              </article>
            </div>

            <div class="banner__sidebar">
                <?php
                    $args = array(
                        'post_type' => 'blogPost',
                        'posts_per_page' => -1,
                    );
                    $newQuery = new WP_Query($args);
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

              <div class="card__sm">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="card__sm__content">
                  <small><?php echo get_the_date('M d Y'); ?></small>
                  <h3><?php the_title(); ?></h3>
                  <a href="<?php get_permalink(); ?>">Read More...</a>
                </div>
              </div>

                <?php
                    endwhile;
                    else:
                        echo 'no available content';
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="latest">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__wrapper">
          <div class="card__md">
            <img src="<?php echo get_template_directory_uri(); ?> ./img/img-6.webp" alt="blog-img" class="lazy" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>

          <div class="card__md">
            <img src="<?php echo get_template_directory_uri(); ?> ./img/img-7.webp" alt="blog-img" class="lazy" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>

          <div class="card__md">
            <img src="<?php echo get_template_directory_uri(); ?> ./img/img-8.webp" alt="blog-img" class="lazy" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="feature">
      <div class="feature__content">
        <h2>Feature New</h2>
        <h3 class="block__header">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga id
          perferendis quisquam error culpa non iure blanditiis placeat rem
          itaque autem nihil ducimus
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
          <picture>
            <source src="<?php echo get_template_directory_uri(); ?> ./img/img-9-sm.webp" media="(max-width:719px)" />
            <source src="<?php echo get_template_directory_uri(); ?> ./img/img-9.webp" media="(min-width:720px)" />
            <img src="<?php echo get_template_directory_uri(); ?> ./img/img-9.webp" alt="blog-img" class="lazy" />
          </picture>
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">
            <article class="card__lg">
              <img src="<?php echo get_template_directory_uri(); ?> ./img/img-10.webp" alt="blog-img" class="lazy" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>

            <article class="card__lg">
              <img src="<?php echo get_template_directory_uri(); ?> ./img/img-11.webp" alt="blog-img" class="lazy" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a data-href="#">Read More...</a>
              </div>
            </article>

            <article class="card__lg">
              <img src="<?php echo get_template_directory_uri(); ?> ./img/img-12.webp" alt="blog-img" class="lazy" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>
          </div>
          <div class="feature__sidebar">
            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>
            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>