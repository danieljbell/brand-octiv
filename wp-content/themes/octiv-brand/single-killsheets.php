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
        <?php print_r(count(get_field('killsheet'))); ?>
      </div>
      <div>
        <?php echo get_field('positioning_statement'); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>