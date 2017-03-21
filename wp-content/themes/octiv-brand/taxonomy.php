<?php get_header(); ?>

<section>
  <div class="site-width">
    <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
          echo '<h1><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h1>';
        endwhile;
      endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>
