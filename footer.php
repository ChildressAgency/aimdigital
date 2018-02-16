<?php if(!is_page('careers') && !is_page('contact')): ?>
  <section id="get-started" style="background-image:url(<?php the_field('get_started_section_image', 'option'); ?>);">
    <div class="container">
      <?php the_field('get_started_section_content', 'option'); ?>
      <a href="<?php echo home_url('contact'); ?>" class="btn-main">Let's do this</a>
    </div>
    <div class="overlay"></div>
  </section>
<?php endif; ?>
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
          <a href="<?php echo home_url(); ?>" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png" class="img-responsive" alt="AIM Digital Media Logo" /></a>
        </div>
        <div class="col-sm-8">
          <nav id="footer-nav">
            <?php
              $footer_nav_args = array(
                'theme_location' => 'footer-nav',
                'menu' => '',
                'container' => '',
                'container_id' => '',
                'container_class' => '',
                'menu_class' => 'nav navbar-nav nav-justified',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'aimdigital_footer_fallback_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new wp_bootstrap_navwalker()
              );
              wp_nav_menu($footer_nav_args); ?>

          </nav>
          <div class="clearfix"></div>
          <hr />
          <div class="contact-info">
            <p><?php the_field('address','option'); ?>, <?php the_field('city_state_zip', 'option'); ?></p>
            <p>Phone: <?php the_field('phone', 'option'); ?> | E-Mail: <?php the_field('email', 'option'); ?></p>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="social">
            <?php if(get_field('twitter', 'option')): ?>
              <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <?php endif; if(get_field('facebook', 'option')): ?>
              <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
            <?php endif; if(get_field('google_plus', 'option')): ?>
              <a href="<?php the_field('google_plus', 'option'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
            <?php endif; if(get_field('instagram', 'option')): ?>
              <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>&copy;<?php echo date('Y'); ?> AIM Digital Media, LLC</p>
        <p>website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>