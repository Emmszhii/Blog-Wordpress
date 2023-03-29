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

                <?php
                    $args = array(
                        'post_type' => 'blogPost',
                        'posts_per_page' => 1,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => 'Uncategorized',
                          ),
                        ),
                    );
                    $newQuery = new WP_Query($args);
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                <!-- <picture>
                  <source
                    src="<?php echo get_template_directory_uri(); ?> ./img/img-1-sm.webp"
                    media="(max-width:719px)"
                  />
                  <source src="<?php echo get_template_directory_uri(); ?> ./img/img-1.webp" media="(min-width:720px)" />
                  <img src="<?php echo get_template_directory_uri(); ?> ./img/img-1.webp" alt="blog-img" />
                </picture> -->
                <?php echo get_the_post_thumbnail(); ?>
                <div class="banner__story__content">
                  <small><?php echo get_the_date('M d Y'); ?></small>
                  <h2><?php the_title(); ?></h2>
                  <p>
                  <?php the_excerpt(); ?>
                  </p>
                  <a href="<?php echo get_permalink(); ?>">Read More...</a>
                </div>

                <?php
                    endwhile;
                    else:
                        echo 'no available content';
                    endif;
                    wp_reset_postdata();
                ?>

              </article>
            </div>

            <div class="banner__sidebar">
                <?php
                    $args = array(
                        'post_type' => 'blogPost',
                        'posts_per_page' => 4,
                        'offset' => 1,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => 'Uncategorized',
                          ),
                        ),
                    );
                    $newQuery = new WP_Query($args);
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

              <div class="card__sm">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="card__sm__content">
                  <small><?php echo get_the_date('M d Y'); ?></small>
                  <h3><?php the_title(); ?></h3>
                  <a href="<?php echo get_permalink(); ?>">Read More...</a>
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
          <!-- <div class="card__md">
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
          </div> -->

            <?php
                    $args = array(
                        'post_type' => 'blogPost',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => 'latest-post',
                          ),
                        ),
                    );
                    $newQuery = new WP_Query($args);
                ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

          <div class="card__md">
            <?php echo get_the_post_thumbnail(); ?>
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_the_date('M d Y'); ?></small></li>
                <li><small><?php echo get_field('the_category'); ?> </small></li>
              </ul>
              <h3>
                <?php the_content(); ?>
              </h3>

              <p>
                <?php the_excerpt(); ?>
              </p>
              <a href="<?php echo get_permalink(); ?>">Read More...</a>
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
    </section>

    <section class="feature">
      <div class="feature__content">
        <h2><?php echo get_field('feature_title'); ?></h2>
        <h3 class="block__header">
        <?php echo get_field('feature_h2'); ?>
        </h3>
        <p>
        <?php echo get_field('feature_parag'); ?>
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
          <!-- <picture>
            <source src="<?php echo get_template_directory_uri(); ?> ./img/img-9-sm.webp" media="(max-width:719px)" />
            <source src="<?php echo get_template_directory_uri(); ?> ./img/img-9.webp" media="(min-width:720px)" />
            <img src="<?php echo get_template_directory_uri(); ?> ./img/img-9.webp" alt="blog-img" class="lazy" />
          </picture> -->
          <?php 
            $image = get_field('feature_img');
            $size = 'full';
            if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">
            <?php
                    $args = array(
                        'post_type' => 'blogPost',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => 'featured-post',
                          ),
                        ),
                    );
                    $newQuery = new WP_Query($args);
                ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

            <article class="card__lg">
            <?php echo get_the_post_thumbnail(); ?>
              <div class="card__lg__content">
                <small><?php echo get_the_date('M y D'); ?></small>
                <h3>
                  <?php echo the_title(); ?>
                </h3>
                <p>
                  <?php echo the_excerpt(); ?>
                </p>
                <a href="<?php echo get_permalink(); ?>">Read More...</a>
              </div>
            </article>

            <?php
                    endwhile;
                    else:
                        echo 'no available content';
                    endif;
                    wp_reset_postdata();
                ?>
          </div>
          <div class="feature__sidebar">

          <?php
                    $args = array(
                        'post_type' => 'blogPost',
                        'posts_per_page' => 6,
                        'offset'      => 3,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => 'featured-post',
                          ),
                        ),
                    );
                    $newQuery = new WP_Query($args);
                ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

            <div class="card__mini">
              <small><?php echo get_the_date('M d Y'); ?></small>
              <h4>
                <?php echo the_title(); ?>
              </h4>
              <a href="<?php echo get_permalink(); ?>">Read More ...</a>
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
    </section>

<?php get_footer(); ?>