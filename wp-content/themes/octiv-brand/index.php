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
        <h2>Who</h2>
        <p>Octiv provides document generation and contract management solutions.</p>
      </div>
      <div class="box">
        <h2>What</h2>
        <p>Our software solutions allow customers to create, share, sign and store documents, increasing efficiency, accuracy and saving time.</p>
      </div>
      <div class="box">
        <h2>Why</h2>
        <p>Octiv’s goal is to save customers time, allow them to close deals faster and deliver business results.</p>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>
