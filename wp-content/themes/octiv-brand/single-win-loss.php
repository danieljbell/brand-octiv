<?php get_header(); ?>
<?php
  $terms = get_terms(
    array(
      'taxonomy' => 'design_example_type',
      'hide_empty' => false,
    )
  );
?>
  <section class="hero">
    <div class="site-width">
      <h1><?php echo get_the_title(); ?></h1>
      <div class="two-third-only">
        <div style="margin-bottom: 0;">
          <p class="font-bump" style="margin-bottom: 0;"><?php echo get_the_excerpt(); ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('partials/display', 'breadcrumbs'); ?>
  
    <section class="win-loss-post">
      <div class="site-width">
        <div class="two-third-only">
          <div class="examples-container">
            <?php
              if (have_rows('page_section')) :
                $my_fields = get_field_object('page_section');
                $count = (count($my_fields["value"]));
                $i = 0;
                while(have_rows('page_section')) :
                  $i++;
                  if ($i >= $count) {
                    echo '<section style="padding: 0;">';
                  } else {
                    echo '<section style="padding-top: 0;">';
                  }
                  the_row();
                  echo '<h3 id="' . strtolower(str_replace(' ','-',get_sub_field('section_title'))) . '">' . get_sub_field('section_title') . '</h3>';
                  echo '<p>' . get_sub_field('section_content') . '</p>';
                  if (get_sub_field('have_code')) {
                    $code = get_sub_field('section_code');
                    echo $code;
                    echo '<pre><code class="language-html">' . str_replace('<','&lt;',$code) . '</code></pre>';
                    echo '<button class="expander btn-arrow">Expand Code</button>';
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
        <div><?php comments_template(); ?> </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
