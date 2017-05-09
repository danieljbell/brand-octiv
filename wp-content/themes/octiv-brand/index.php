<?php get_header(); ?>

<?php
  $current_user = wp_get_current_user();
?>

<section class="hero">
  <div class="site-width">
    <h1>Welcome <?php if ($current_user->user_firstname) { echo $current_user->user_firstname . ', '; } ?>to Octiv's Brand Guidelines!</h1>
    <div class="half-only">
      <div>
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="site-width">
    <?php
      if (is_search()) :
        if (have_posts()) :
          echo '<div class="third">';
          while (have_posts()) :
            the_post();
              echo '<div class="card">';
                echo '<h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
                echo '<p>' . get_the_excerpt() . '</p>';
                echo '<a href="' . get_the_permalink() . '" class="btn-arrow">Learn More</a>';
              echo '</div>';
          endwhile;
          echo '</div>';
        else :
          echo 'Sorry, nothing was found for ' . get_search_query() . '.';
        endif;
      endif; // end search test
    ?>
  </div>
</section>




<?php get_footer(); ?>
