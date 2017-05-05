</main>
<footer class="site-width">
  <div class="three-fourth-reversed">
    <div>
      <a href="/" title="Homepage" class="site-logo"></a>
    </div>
    <div>
      <?php wp_nav_menu( array( 'menu' => 'Footer' ) ); ?>
    </div>
  </div>
  <div class="sub-footer">
    &copy; <?php echo get_the_date('Y'); ?> Octiv, Inc. All Rights Reserved.
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
