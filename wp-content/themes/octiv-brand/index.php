<?php get_header(); ?>

<?php
  $current_user = wp_get_current_user();
?>

<section class="hero">
  <div class="site-width">
    <h1>Welcome <?php if ($current_user->user_firstname) { echo $current_user->user_firstname . ', '; } ?>to Octiv's Brand Guidelines!</h1>
  </div>
</section>

<section>
  <div class="site-width">
    <div class="third">
      <div class="box">
        <h2>What</h2>
        <p>We create digital document solutions.</p>
      </div>
      <div class="box">
        <h2>How</h2>
        <p>We connect business professionals with today's customer.</p>
      </div>
      <div class="box">
        <h2>Why</h2>
        <p>We believe in a world where technology makes lives easier.</p>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>
