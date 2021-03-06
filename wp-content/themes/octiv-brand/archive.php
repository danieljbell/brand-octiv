<?php get_header(); ?>

<section class="hero">
  <div class="site-width">
    <h1><?php echo str_replace('Archives: ', '', get_the_archive_title()); ?></h1>
  </div>
</section>

<?php get_template_part('partials/display', 'breadcrumbs'); ?>

<section>
  <div class="site-width">
    <?php
      if (have_posts()) :
        echo '<div class="third">';
        while (have_posts()) :
          the_post();
          echo '<div class="card">';
            echo '<h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
            // echo '<p>' . the_excerpt() . '</p>';
            echo '<a href="' . get_the_permalink() . '" class="btn-arrow">Learn More</a>';
          echo '</div>';
        endwhile;
        echo '</div>';
      endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>
