<?php 
/* 
  Template Name: Home
*/
?>

<?php get_header(); ?>

    <section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1><?php echo get_field('the_title'); ?> </h1>
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
                            'field' => 'slug',
                            'terms' => 'Uncategorized'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                ?>
    
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                
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
                            'field' => 'slug',
                            'terms' => 'Uncategorized'
                          )
                        )
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

        <?php
          $args = array(
            'post_type' => 'blogPost',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'post_tag',
                            'field' => 'slug',
                            'terms' => 'City'
                          )
                        )
                          );
        
            $newQuery = new WP_Query($args);
        ?>
        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

          <div class="card__md">
            <?php echo get_the_post_thumbnail(); ?> 
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_the_date('M d Y'); ?></small></li>
                <li><small><?php the_tags('') ?></small></li>
              </ul>
              <h3>
                <?php the_title(); ?>
              </h3>

              <p>
              <?php the_content(); ?>
              </p>
              <a href="<?php the_permalink(); ?>">Read More...</a>
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
        <h2><?php echo get_field('features_title');?></h2>
        <h3 class="block__header">
        <?php echo get_field('features_content');?>
        </h3>
        <p>
        <?php echo get_field('features_excerpt');?>
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>./img/img-9-sm.jpeg" media="(max-width:719px)" />
            <source srcset="<?php echo get_template_directory_uri() ?>./img/img-9.jpeg" media="(min-width:720px)" />
            <img src="<?php echo get_template_directory_uri() ?>./img/img-9.jpeg" alt="blog-img" class="lazy" />
          </picture>
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
                            'field' => 'slug',
                            'terms' => 'new-features'
                          )
                        )
            );
        
            $newQuery = new WP_Query($args);
        ?>
        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

        <article class="card__lg">
              <?php echo get_the_post_thumbnail(); ?>
              <div class="card__lg__content">
                <small><?php echo get_the_date('M d Y'); ?></small>
                <h3>
                  <?php the_title(); ?>
                </h3>
                <p>
                  <?php the_content(); ?>
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

            <?php if(get_field('features_repeater')) : while(the_repeater_field('features_repeater')) : ?>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                <?php echo get_sub_field('features_title'); ?>
              </h4>
              <a href="#">Read More ...</a>
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