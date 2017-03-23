<?php
  $terms = get_terms(
    array(
      'taxonomy' => 'design_example_type',
      'hide_empty' => false,
    )
  );
?>

<?php get_header(); ?>

<section class="hero">
  <div class="site-width">
    <h1><?php echo str_replace('Archives: ', '', get_the_archive_title()); ?></h1>
  </div>
</section>

<?php get_template_part('partials/display', 'breadcrumbs'); ?>

<section>
  <div class="site-width">
    <div class="three-fourth-reversed" style="align-items: flex-start;">
      <div class="sticky-sidebar">
        <h4><?php echo str_replace('Archives: ', '', get_the_archive_title()); ?></h4>
        <hr>
        <ul>
          <?php
            foreach ( $terms as $term ) {
              echo '<li><a href="#' . $term->slug . '">' . $term->name . '</a></li>';
            }
          ?>
        </ul>
      </div>
      <div>
        <?php
          foreach ( $terms as $term ) {
            $local_post_type = str_replace('-type','',str_replace('_','-',$term->taxonomy)) . 's';
            $args = array(
              'post_type' => $local_post_type,
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => $term->taxonomy,
                  'field' => 'slug',
                  'terms' => $term->slug,
                ),
              ),
            );
            $local_query = new WP_Query($args);
            if ($local_query->have_posts()) :
              echo '<section style="padding-top: 0;">';
                echo '<h3>' . $term->name . '</h3>';
                echo '<div class="third">';
                while ($local_query->have_posts()) :
                      $local_query->the_post();
                      echo '<div class="card">';
                        echo '<h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
                        echo '<p>' . the_excerpt() . '</p>';
                        echo '<a href="' . get_the_permalink() . '" class="btn-arrow">Learn More</a>';
                      echo '</div>';
                endwhile;
                echo '</div>';
              echo '</section>';
            endif;
            wp_reset_query();
          }
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
