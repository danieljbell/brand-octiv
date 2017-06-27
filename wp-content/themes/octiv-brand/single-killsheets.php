<?php get_header(); ?>

<section class="hero">
  <div class="site-width">
    <h1><?php echo get_the_title(); ?></h1>
    <div class="two-third-only">
      <div style="margin-bottom: 0;">
        <p class="font-bump"><?php echo get_the_excerpt(); ?></p>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('partials/display', 'breadcrumbs'); ?>

<section>
  <div class="site-width">
    <div class="three-fourth-reversed">
      <div class="sticky-sidebar">
        <h4><?php echo get_the_title(); ?></h4>
        <hr>
        <ul>
          <li><a href="#positioning-statement">Positioning Statement</a></li>
          <li><a href="#talking-points">Talking Points</a></li>
          <li><a href="#fud-points">FUD Points</a></li>
          <li><a href="#key-capabilites">Key Capabilites</a></li>
        </ul>
      </div>
      <div>
        <section style="padding-top: 0;" id="positioning-statement">
          <h3>Positioning Statement</h3>
          <?php echo get_field('positioning_statement'); ?>
        </section>
        <section style="padding-top: 0;" id="talking-points">
          <h3>Talking Points</h3>
          <?php
            if (have_rows('talking_points')) :
              echo '<div class="half">';
              while (have_rows('talking_points')) :
                the_row();
                  echo '<div class="card">';
                    echo '<h4>' . get_sub_field('talking_point_headline') . '</h4>';
                    echo '<p>' . get_sub_field('talking_point_content') . '</p>';
                  echo '</div>';
              endwhile;
              echo '</div>';
            endif;
          ?>
        </section>
        <section style="padding-top: 0;" id="fud-points">
          <h3>FUD Points &nbsp;<span style="font-size: 0.75em; color: rgba(0,0,0,0.5); font-weight: normal;">(Fear, Uncertainty and Doubt)</span></h3>
          <?php
            if (have_rows('FUD_points')) :
              echo '<div class="half">';
              while (have_rows('FUD_points')) :
                the_row();
                  echo '<div class="card">';
                    echo '<h4>' . get_sub_field('fud_point_headline') . '</h4>';
                    echo '<p>' . get_sub_field('fud_point_content') . '</p>';
                  echo '</div>';
              endwhile;
              echo '</div>';
            endif;
          ?>
        </section>
        <section style="padding-top: 0;" id="key-capabilities">
          <h3>Key Capabilities</h3>
          <?php
            if (have_rows('key_capabilities')) :
              echo '<table>';
                echo '<thead>';
                  echo '<tr>';
                    echo '<th>' . $post->post_title . ' Key Capabilities</th>';
                    echo '<th>Octiv Counter/Point of View</th>';
                  echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                  while (have_rows('key_capabilities')) :
                    echo '<tr>';
                    the_row();
                      echo '<td width="50%">';
                        echo '<strong>' . get_sub_field('competitor_key_capability_title') . '</strong><br>';
                        echo get_sub_field('competitor_key_capability_content');
                      echo '</td>';
                      echo '<td width="50%">';
                        if (!get_sub_field('octiv_counter_title')) {
                          echo '<strong>' . get_sub_field('competitor_key_capability_title') . '</strong><br>';
                        } else {
                          echo '<strong>' . get_sub_field('octiv_counter_title') . '</strong><br>';
                        }
                        echo get_sub_field('octiv_counter_content');
                      echo '</td>';
                    echo '</tr>';
                  endwhile;
                echo '</tbody>';
              echo '</table>';
            endif;
          ?>
        </section>
      </div>
    </div>
  </div>
</section>

<div class="site-width no-print">
  <hr>
</div>

<section class="no-print">
  <div class="site-width">
    <div class="two-third-only">
      <div><?php comments_template(); ?> </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>