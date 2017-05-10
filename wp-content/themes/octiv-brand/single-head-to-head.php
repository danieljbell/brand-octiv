<?php get_header(); ?>
  <section class="hero">
    <div class="site-width">
      <h1><?php echo get_the_title(); ?></h1>
      <div class="third-only">
        <div>
          <a href="#0" class="btn-outline brand-light">Download the Head-to-Head</a>
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
            <li>Overview</li>
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

  <?php if (is_single('Standard Grid') || is_single('Centered Grid') || is_single('Stack Order Grid')) {
    echo '
    <style>
      /*
      ==============================
      PAGE STYLES
      ==============================
      */
      .examples-container .half > div,
      .examples-container .half-stack > div,
      .examples-container .half-only > div,
      .examples-container .third > div,
      .examples-container .third-only > div,
      .examples-container .fourth > div,
      .examples-container .two-third > div,
      .examples-container .two-third-reversed > div,
      .examples-container .two-third-stack > div,
      .examples-container .two-third-only > div,
      .examples-container .three-fourth > div,
      .examples-container .three-fourth-reversed > div {
        border-radius: 5px;
        background-color: #42b0d8;
        color: #fff;
        text-align: center;
        padding: 1rem;
      }
      .examples-container .half > div:nth-child(2n),
      .examples-container .half-stack > div:nth-child(2n),
      .examples-container .third > div:nth-child(2n),
      .examples-container .fourth > div:nth-child(2n),
      .examples-container .two-third > div:nth-child(2n),
      .examples-container .two-third-reversed > div:nth-child(2n),
      .examples-container .two-third-stack > div:nth-child(2n),
      .examples-container .three-fourth > div:nth-child(2n),
      .examples-container .three-fourth-reversed > div:nth-child(2n) {
        background-color: #33ab40;
      }
      .examples-container .third > div:nth-child(3n),
      .examples-container .fourth > div:nth-child(3n) {
        background-color: #b949f5;
      }
      .examples-container .fourth > div:nth-child(4n) {
        background-color: #fac500;
      }
    </style>
    ';
  } ?>

<?php get_footer(); ?>
