<?php get_header(); ?>
  <section class="hero">
    <div class="site-width">
      <h1><?php echo get_the_title(); ?></h1>
      <div class="third-only">
        <div>
          <a href="<?php echo get_field('pdf_url'); ?>" class="btn-outline brand-light">Download the Head-to-Head</a>
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
            <li><a href="#overview">Overview</a></li>
            <li><a href="#why-octiv">Why Octiv</a></li>
            <li><a href="#key-capabilities">Key Capabilities</a></li>
          </ul>
        </div>
        <div class="examples-container">
          <section style="padding-top: 0;">
            <h3 id="overview">Overview</h3>
            <blockquote class="font-bump">
              <strong><?php echo get_field('head_to_head_highlight'); ?></strong>
            </blockquote>
            <?php the_content(); ?>
          </section>
          <?php
            if (have_rows('why_octiv')) :
              echo '<h3 id="why-octiv">Why Choose Octiv Over Conga</h3>';
              while(have_rows('why_octiv')) :
                echo '<section style="padding: 0;">';
                the_row(); ?>
                <div style="display: flex;">
                  <div class="why-octiv-icon" style="width: 100%; max-width: 50px; margin-right: 1rem;"><?php echo file_get_contents(get_sub_field('why_octiv_icon')); ?></div>
                  <div>
                    <h4><?php echo get_sub_field('why_octiv_title'); ?></h4>
                    <p><?php echo get_sub_field('why_octiv_description'); ?></p>
                  </div>
                </div>
          <?php  echo '</section>';
              endwhile;
            endif;
          ?>
          <section style="padding-top: 0;">
            <h3 id="key-capabilities">Key Capabilities</h3>
            <table class="table-data-cells">
              <thead>
                <tr>
                  <th style="width: 70%;">Key Capability</th>
                  <th style="width: 15%;">Octiv</th>
                  <th style="width: 15%;"><?php echo get_the_title(); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if (have_rows('key_capabilities')) :
                    while(have_rows('key_capabilities')) :
                      echo '<tr>';
                      the_row();
                      echo '<td><strong>' . get_sub_field('key_capability_title') . '</strong><br>' . get_sub_field('key_capability_description') . '</td>';
                      echo '<td>';
                        if (get_sub_field('octiv_functionality') == 'full') {
                          echo '<div class="full-functionality"></div>';
                        }
                        if (get_sub_field('octiv_functionality') == 'limited') {
                          echo '<div class="limited-functionality"></div>';
                        }
                        if (get_sub_field('octiv_functionality') == 'no') {
                          echo '<div class="no-functionality"></div>';
                        }
                        if (get_sub_field('octiv_functionality_note')) {
                          echo '<em style="font-size: 0.75em;">* ' . get_sub_field('octiv_functionality_details') . '</em>';
                        }
                      echo '</td>';
                      echo '<td>';
                        if (get_sub_field('competitor_functionality') == 'full') {
                          echo '<div class="full-functionality"></div>';
                        }
                        if (get_sub_field('competitor_functionality') == 'limited') {
                          echo '<div class="limited-functionality"></div>';
                        }
                        if (get_sub_field('competitor_functionality') == 'no') {
                          echo '<div class="no-functionality"></div>';
                        }
                        if (get_sub_field('competitor_functionality_note')) {
                          echo '<em style="font-size: 0.75em;">* ' . get_sub_field('competitor_functionality_details') . '</em>';
                        }
                      echo '</td>';
                      echo '</tr>';
                    endwhile;
                  endif;
                ?>
                <!-- <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                </tr> -->
              </tbody>
            </table>
          </section>
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


  <style>
    .why-octiv-icon {
      fill: #ed4c06;
    }
    [class*='functionality'] {
      width: 25px;
      height: 25px;
      border-radius: 50%;
      margin: 0 auto;
    }
    .full-functionality {
      background-color: #33ab40;
    }
    .limited-functionality {
      background-color: #fac500;
    }
    .no-functionality {
      background-color: #ed4c06;
    }
  </style>

<?php get_footer(); ?>
