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
      <h1><?php echo get_the_title(); ?></h1>
      <div class="two-third-only">
        <div style="margin-bottom: 0;">
          <p class="font-bump" style="margin-bottom: 0;"><?php echo get_the_content(); ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('partials/display', 'breadcrumbs'); ?>
  <section>
    <div class="site-width">
      <div class="three-fourth-reversed" style="align-items: flex-start;">
        <div class="sticky-sidebar">
          <h4><?php echo get_the_title(); ?></h4>
          <hr>
          <ul>
            <?php
              if (have_rows('page_section')) :
                while(have_rows('page_section')) :
                  the_row();
                  echo '<li><a href="#' . strtolower(str_replace(' ','-',get_sub_field('section_title'))) . '">' . get_sub_field('section_title') . '</a></li>';
                endwhile;
              endif;
            ?>
          </ul>
        </div>
        <div class="examples-container">
          <?php
            if (have_rows('page_section')) :
              while(have_rows('page_section')) :
                echo '<section style="padding-top: 0;">';
                the_row();
                echo '<h3 id="' . strtolower(str_replace(' ','-',get_sub_field('section_title'))) . '">' . get_sub_field('section_title') . '</h3>';
                echo '<p>' . get_sub_field('section_content') . '</p>';
                if (get_sub_field('have_code')) {
                  $code = get_sub_field('section_code');
                  echo $code;
                  echo '<pre><code class="language-html">' . str_replace('<','&lt;',$code) . '</code></pre>';
                }
                echo '</section>';
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
  </section>
  <div class="site-width">
    <hr>
  </div>
  <section>
    <div class="site-width">
      <div class="two-third-only">
        <h2>Things Similar to <?php echo get_the_title(); ?></h2>
        <br>
        <br>
        <br>
      </div>
      <div class="third">
        <?php
          $args = array(
            'post_type' => $post->post_type,
            'post__not_in' => array($post->ID),
            'tax_query' => array(
              array(
                'taxonomy' => str_replace('-','_',str_replace('examples','example',$post->post_type)) . '_type',
                'field' => 'slug',
                'terms' => $terms[0]->slug,
              ),
            ),
          );
          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) :
              $query->the_post();
              echo '<div class="card">';
                echo '<h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
                echo '<p>' . the_excerpt() . '</p>';
                echo '<a href="' . get_the_permalink() . '" class="btn-arrow">Learn More</a>';
              echo '</div>';
            endwhile;
          endif;
          wp_reset_query();
        ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
