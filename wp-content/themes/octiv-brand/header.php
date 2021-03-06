<?php
  if ( !is_user_logged_in() ) :
    header("Location: /wp-login.php");
    exit;
  endif;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <base href="<?php echo site_url(); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php if( current_user_can('edit_pages') ) :
  echo '<ul style="position: fixed; bottom: 0; z-index: 999;" class="no-print"><li style="display: inline-block;"><a href="' . site_url() . '/wp-admin" class="btn-primary">Admin</a></li>';
  echo '<li style="display: inline-block;"><a href="' . site_url() . '/wp-admin/post.php?post=' . $post->ID . '&action=edit" class="btn-primary">Edit</a></li>';
  echo '</ul>';
  endif; ?>

  <header>
    <div class="site-width">
      <div class="two-third-reversed">
        <div>
          <a href="/" title="Homepage" class="site-logo"></a>
        </div>
        <div class="menu-header-container">
          <ul class="menu">
            <li>
              <a href="/language-styles">Language Styles</a>
              <ul class="sub-menu">
                <?php
                  $args = array(
                    'post_type' => 'language-styles'
                  );
                  $query = new WP_Query($args);
                  if ($query->have_posts()) :
                    while ($query->have_posts()) :
                      $query->the_post();
                      echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                    endwhile;
                  endif;
                  wp_reset_query();
                ?>
              </ul>
            </li>
            <li>
              <a href="/design-principles">Design Principles</a>
              <ul class="sub-menu">
                <?php
                  $args = array(
                    'post_type' => 'design-principles'
                  );
                  $query = new WP_Query($args);
                  if ($query->have_posts()) :
                    while ($query->have_posts()) :
                      $query->the_post();
                      echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                    endwhile;
                  endif;
                  wp_reset_query();
                ?>
              </ul>
            </li>
            <li>
              <a href="/design-examples">Design Examples</a>
              <ul class="sub-menu">
                <?php
                  $post_type_terms = get_terms('design_example_type');
                  foreach ($post_type_terms as $term) {
                    echo '<li><a href="/design-examples/#' . $term->slug . '">' . $term->name . '</a>';
                      $args = array(
                        'post_type' => 'design-examples',
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'design_example_type',
                            'field' => 'name',
                            'terms' => $term->name,
                          )
                        )
                      );
                      $query = new WP_Query($args);
                      if ($query->have_posts()) :
                        echo '<ul class="sub-menu">';
                        while ($query->have_posts()) :
                          $query->the_post();
                            echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                        endwhile;
                        echo '</ul>';
                      endif;
                      wp_reset_query();
                    echo '</li>';
                  }
                ?>
              </ul>
            </li>
            <li>
              <a href="/resources">Resources</a>
              <ul class="sub-menu">
                <li><a href="/killsheets">Killsheets</a></li>
                <?php
                  $post_type_terms = get_terms('resources_type');
                  foreach ($post_type_terms as $term) {
                    echo '<li><a href="/resources/#' . $term->slug . '">' . $term->name . '</a>';
                      $args = array(
                        'post_type' => 'resources',
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'resources_type',
                            'field' => 'name',
                            'terms' => $term->name,
                          )
                        )
                      );
                      $query = new WP_Query($args);
                      if ($query->have_posts()) :
                        echo '<ul class="sub-menu">';
                        if ($term->name == 'Downloads') {
                          echo '<li><a href="/datasheets">Datasheets</a></li>';
                          echo '<li><a href="/head-to-head">Head-to-Heads</a></li>';
                        }
                        while ($query->have_posts()) :
                          $query->the_post();
                            echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                        endwhile;
                        echo '</ul>';
                      endif;
                      wp_reset_query();
                    echo '</li>';
                  }
                ?>
                <li><a href="/win-loss">Win/Loss</a></li>
                <?php
                  if (current_user_can('marketing_user') || current_user_can('administrator')) {
                    echo '<li><a href="/documentation">Documentation</a></li>';
                  }
                ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>
