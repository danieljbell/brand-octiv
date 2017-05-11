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
  <?php if (get_field('is_page_gallery')) : ?>
    <section>
      <div class="site-width">
        <div class="fourth">
          <?php
            if (get_field('gallery_type') == 'photos') {
              $images = get_field('gallery_items');
              if ($images) :
                foreach($images as $image) :
                  echo '<div class="box centered">';
                  echo '<h4>' . $image[title] . '</h4>';
                    echo '<img src="' . $image[url] . '" alt="' . $image[title] . '">';
                    echo '<select>';
                      echo '<option value="non-branded">Non-Branded</option>';
                      echo '<option value="branded">Branded</option>';
                    echo '</select>';
                    echo '<a href="' . $image[url] . '" class="btn-outline" style="width: initial; display: inline-block;" download>Download</a>';
                  echo '</div>';
                endforeach;
              endif;
            }
            if (get_field('gallery_type') == 'icons') {
              $images = get_field('gallery_items');
              if ($images) :
                foreach($images as $image) :
                  echo '<div class="box centered">';
                    echo file_get_contents($image['url']);
                    echo '<select>';
                      echo '<option value="black">Black</option>';
                      echo '<option value="white">White</option>';
                      echo '<option value="orange">Orange</option>';
                      echo '<option value="blue">Blue</option>';
                      echo '<option value="green">Green</option>';
                      echo '<option value="purple">Purple</option>';
                      echo '<option value="yellow">Yellow</option>';
                    echo '</select>';
                    echo '<button class="btn-outline" data-title="' . str_replace(".svg", "", $image['filename']) . '">Download</button>';
                  echo '</div>';
                endforeach;
              endif;
            }
          ?>
          <?php

          ?>
        </div>
      </div>
    </section>
  <?php else : ?>
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
  <?php endif; ?>
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
