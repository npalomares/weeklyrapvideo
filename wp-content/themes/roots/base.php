<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  <div class="header-wrap">
    <div class="inner-header-wrap container">
      
    </div>
  </div>


  <div class="video-wrap">
  <?php if( is_front_page() ) { ?>
    <div class="video_group-wrap">
      <div class="videos container">
        <h3 class="top-header"><span>Recent Videos</span></h3>
        <?php echo do_shortcode('[gm_videos]'); ?>
      </div>
    </div>

  <?php } ?>
  </div>


  <div class="main-wrap">
    <div class="wrap container" role="document">
      <div class="row">

        <div class="main <?php echo roots_main_class(); ?>" role="main">
          <?php include roots_template_path(); ?>
        </div><!-- /.main -->
        <?php if (roots_display_sidebar()) : ?>
          <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </div>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
