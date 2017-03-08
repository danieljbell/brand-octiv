<?php get_header(); ?>
  <?php if ( !is_user_logged_in() ) : ?>
    <h1>Show Login Form</h1>
    <a href="/wp-login.php?gaautologin=true">Login with Google</a>
  <?php else : ?>
    <h1>I'm logged in!</h1>
  <?php endif; ?>
<?php get_footer(); ?>
