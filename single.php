<?php get_header(); ?>

<section class="thePost">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php echo get_the_post_thumbnail() ?>
        <p>
            <small><?php echo get_the_date('M d Y') ?></small>
        </p>
        <?php echo the_category(); ?>
        <?php echo the_content(); ?>
        <div class="thePost__wrapper">
           
        </div>
    </div>
</section>

<?php get_footer(); ?>