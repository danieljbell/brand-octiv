<?php get_header(); ?>

<?php
  $current_user = wp_get_current_user();
?>

<section class="hero">
  <div class="site-width">
    <h1>Welcome <?php if ($current_user->user_firstname) { echo $current_user->user_firstname . ', '; } ?>to the Octiv Design System!</h1>
    <div class="half-only">
      <div>
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="site-width">
    <?php
      if (is_search()) :
        if (have_posts()) :
          echo '<div class="third">';
          while (have_posts()) :
            the_post();
              echo '<div class="card">';
                echo '<h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
                echo '<p>' . get_the_excerpt() . '</p>';
                echo '<a href="' . get_the_permalink() . '" class="btn-arrow">Learn More</a>';
              echo '</div>';
          endwhile;
          echo '</div>';
        else :
          echo 'Sorry, nothing was found for ' . get_search_query() . '.';
        endif;
      endif; // end search test
    ?>
  </div>
</section>




<?php get_footer(); ?>


<?php // GRID
// <section>
//   <div class="site-width">
//     <div class="centered">
//       <h2>Standard Grid</h2>
//       <p>something</p>
//       <br>
//     </div>
//     <div class="has-code-example">
//       <div class="half">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">
//           One of Two
//         </div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">
//           Two of Two
//         </div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="half">
// &lt;div>One of Two&lt;/div>
// &lt;div>Two of Two&lt;/div>
// &lt;/div>
//     </code></pre>
//     <div class="has-code-example">
//       <div class="third">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">
//           One of Three
//         </div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">
//           Two of Three
//         </div>
//         <div style="border-radius: 5px; background-color: #b949f5; color: #fff; text-align: center; padding: 1rem;">
//           Three of Three
//         </div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="third"&gt;
// &lt;div&gt;One of Three&lt;/div&gt;
// &lt;div&gt;Two of Three&lt;/div&gt;
// &lt;div&gt;Three of Three&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//     <div class="has-code-example">
//       <div class="two-third">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">
//           One of Two
//         </div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">
//           Two of Two
//         </div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="two-third"&gt;
// &lt;div&gt;One of Two&lt;/div&gt;
// &lt;div&gt;Two of Two&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//     <div class="has-code-example">
//       <div class="two-third-reversed">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">
//           One of Two
//         </div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">
//           Two of Two
//         </div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="two-third-reversed"&gt;
// &lt;div&gt;One of Two&lt;/div&gt;
// &lt;div&gt;Two of Two&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//     <div class="has-code-example">
//       <div class="fourth">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">
//           One of Four
//         </div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">
//           Two of Four
//         </div>
//         <div style="border-radius: 5px; background-color: #b949f5; color: #fff; text-align: center; padding: 1rem;">
//           Three of Four
//         </div>
//         <div style="border-radius: 5px; background-color: #fac500; color: #fff; text-align: center; padding: 1rem;">
//           Four of Four
//         </div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="fourth"&gt;
// &lt;div&gt;One of Four&lt;/div&gt;
// &lt;div&gt;Two of Four&lt;/div&gt;
// &lt;div&gt;Three of Four&lt;/div&gt;
// &lt;div&gt;Four of Four&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//     <div class="has-code-example">
//       <div class="three-fourth">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">
//           One of Two
//         </div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">
//           Two of Two
//         </div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="three-fourth"&gt;
// &lt;div&gt;One of Two&lt;/div&gt;
// &lt;div&gt;Two of Two&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//     <div class="has-code-example">
//       <div class="three-fourth-reversed">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">
//           One of Two
//         </div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">
//           Two of Two
//         </div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="three-fourth-reversed"&gt;
// &lt;div&gt;One of Two&lt;/div&gt;
// &lt;div&gt;Two of Two&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
// </section>
// <section style="padding-top: 0;">
//   <div class="site-width">
//     <div class="centered">
//       <h2>Stack Order Grid</h2>
//       <p>something</p>
//       <br>
//     </div>
//     <div class="has-code-example">
//       <div class="half-stack">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">
//           One of Two
//         </div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">
//           Two of Two
//         </div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="half-stack"&gt;
// &lt;div&gt;One of Two&lt;/div&gt;
// &lt;div&gt;Two of Two&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//     <div class="has-code-example">
//       <div class="two-third-stack">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">One of Two</div>
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">Two of Two</div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="two-third-stack"&gt;
// &lt;div&gt;One of Two&lt;/div&gt;
// &lt;div&gt;Two of Two&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//   </div>
// </section>
// <section style="padding-top: 0;">
//   <div class="site-width">
//     <div class="centered">
//       <h2>Centered Containers</h2>
//       <p>something</p>
//       <br>
//     </div>
//     <div class="has-code-example">
//       <div class="two-third-only">
//         <div style="border-radius: 5px; background-color: #42b0d8; color: #fff; text-align: center; padding: 1rem;">One of One</div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="two-third-only"&gt;
// &lt;div&gt;One of One&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//     <div class="has-code-example">
//       <div class="half-only">
//         <div style="border-radius: 5px; background-color: #33ab40; color: #fff; text-align: center; padding: 1rem;">One of One</div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="half-only"&gt;
// &lt;div&gt;One of One&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//     <div class="has-code-example">
//       <div class="third-only">
//         <div style="border-radius: 5px; background-color: #b949f5; color: #fff; text-align: center; padding: 1rem;">One of One</div>
//       </div>
//     </div>
//     <pre><code class="language-markup">
// &lt;div class="third-only"&gt;
// &lt;div&gt;One of One&lt;/div&gt;
// &lt;/div&gt;
//     </code></pre>
//   </div>
// </section>
//
// <style>
//   pre {
//     display: none;
//   }
//   .example-is-open + pre {
//     display: block;
//   }
// </style>
//
// <script>
//   (function() {
//     var codeExamples = document.querySelectorAll('.has-code-example');
//     for (var i = 0; i < codeExamples.length; i++) {
//       codeExamples[i].addEventListener('click', function() {
//         this.classList.toggle('example-is-open');
//       });
//     }
//   })();
// </script>
 ?>


<?php // if ( !is_user_logged_in() ) : ?>
  <!-- <div class="login-page"></div>
  <video class="hero-video" src="https://octiv.com/wp-content/themes/octiv2016/dist/video/hero-video.mp4" autoplay loop></video>
  <div class="login-container">
    <div class="login-container-bg"></div>
    <div class="login-container-content">
      <img src="/wp-content/uploads/2017/03/Octiv-Logo.svg" alt="Octiv Logo" class="logo">
      <h1>Design System</h1>
      <?php wp_login_form(); ?>
      <a href="/wp-login.php"><img src="//unsplash.it/75/25" alt=""></a>
    </div>
  </div>
  <style>
    .login-page {
      background-image: url(./wp-content/uploads/2017/03/home-video-hero.jpg);
      background-position: center;
      position: absolute;
      z-index: -1;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      height: 100vh;
    }
    .hero-video {
      height: 100vh;
      display: none;
    }
    .login-container {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 25%;
      padding: 2rem;
      text-align: center;
    }
    .login-container-bg {
      background-color: #000;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      opacity: 0.4;
      filter: blur(20px);
    }
    .login-container-content {
      position: relative;
      z-index: 1;
      color: #fff;
      text-shadow: 2px 2px 3px rgba(0,0,0,0.85);
    }
    .login-container-content .logo {
      width: 100%;
      max-width: 300px;
      filter: drop-shadow(6px 6px 8px rgba(0,0,0,0.9));
    }
    .login-container-content h1 {
      font-weight: normal;
    }
    .login-container-content form {
      text-align: left;
    }
    .login-container-content label {
      display: block;
    }
  </style> -->
<?php // else : ?>
  <!-- <h1>I'm logged in!</h1> -->
<?php // endif; ?>
