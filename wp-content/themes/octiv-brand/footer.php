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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11921089-8', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
