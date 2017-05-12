<?php get_header(); ?>
<div class="print-only callout-brand-two page-type">
  <p>Datasheet</p>
  <?php echo file_get_contents('./wp-content/themes/octiv-brand/dist/img/Octiv-Mark.svg'); ?>
</div>

  <section class="hero">
    <div class="site-width">
      <h1><?php echo get_the_title(); ?></h1>
      <div class="two-third-only">
        <div style="margin-bottom: 0;">
          <p class="font-bump"><?php echo get_the_excerpt(); ?></p>
          <?php if (get_field('external_datasheet_url')) : ?>
            <div class="half-only no-print">
              <div><a href="<?php echo get_field('external_datasheet_url'); ?>" class="btn-outline brand-light" download>Get the External Datasheet</a></div>
            </div>
          <?php endif; ?>
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
              <li><a href="#problem">Problem</a></li>
              <li><a href="#solution">Solution</a></li>
              <li><a href="#different">How We Are Different</a></li>
              <li><a href="#benefits">Key Benefits</a></li>
              <li><a href="#use-cases">Use Cases</a></li>
              <li><a href="#capabilities">Key Capabilities</a></li>
            </ul>
          </div>
          <div class="examples-container">
            <section id="problem" style="padding-top: 0;" class="no-print">
              <h3>The Problem</h3>
              <?php echo get_field('problem'); ?>
            </section>
            <section id="solution" style="padding-top: 0;">
              <h3>The Solution</h3>
              <?php echo get_field('solution'); ?>
            </section>
            <section id="different" style="padding-top: 0;">
              <h3>How We Are Different</h3>
              <?php echo get_field('how_we_are_different'); ?>
            </section>
            <section id="benefits" style="padding-top: 0;">
              <h3>Key Benefits</h3>
              <?php
                if (have_rows('key_benefits')) :
                  echo '<ul>';
                  while (have_rows('key_benefits')) :
                    echo '<li>';
                    the_row();
                    the_sub_field('key_benefit');
                    echo '</li>';
                  endwhile;
                  echo '</ul>';
                endif;
              ?>
            </section>
            <section id="use-cases" style="padding-top: 0;">
              <h3>Use Cases</h3>
              <?php
                if (have_rows('use_cases')) :
                  echo '<ul>';
                  while (have_rows('use_cases')) :
                    echo '<li>';
                    the_row();
                    the_sub_field('use_case');
                    echo '</li>';
                  endwhile;
                  echo '</ul>';
                endif;
              ?>
            </section>
            <div style="page-break-after: always;" class="page-break"></div>
            <section class="print-only hero">
              <div class="site-width">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="two-third-only">
                  <div style="margin-bottom: 0;">
                    <p class="font-bump"><?php echo get_the_excerpt(); ?></p>
                    <?php if (get_field('external_datasheet_url')) : ?>
                      <div class="half-only no-print">
                        <div><a href="<?php echo get_field('external_datasheet_url'); ?>" class="btn-outline brand-light">Get the External Datasheet</a></div>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </section>
            <div class="print-only callout-brand-two page-type">
              <p>Datasheet</p>
              <?php echo file_get_contents('./wp-content/themes/octiv-brand/dist/img/Octiv-Mark.svg'); ?>
            </div>
            <section id="capabilities" style="padding: 0;">
              <?php
                if (have_rows('key_capabilities')) :
                  echo '<table>';
                    echo '<thead>';
                      echo '<tr>';
                        echo '<th colspan="2" style="text-align: center; border-radius: 5px 5px 0 0;">Key Capabilities</th>';
                      echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                  while (have_rows('key_capabilities')) :
                    the_row();
                    echo '<tr>';
                      echo '<td><strong>';
                        the_sub_field('key_capability_term');
                      echo '</strong></td>';
                      echo '<td>';
                        the_sub_field('key_capability_definition');
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
