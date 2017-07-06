<?php get_header(); ?>

<section class="hero">
  <div class="site-width">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
</section>

<?php get_template_part('partials/display', 'breadcrumbs'); ?>

<section>
  <div class="site-width">
    <?php the_content(); ?>
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
