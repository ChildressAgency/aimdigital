<?php get_header(); ?>
  <main id="main" class="sidebyside">
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height">
          <div class="contact-form-wrapper">
            <article>
              <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; endif; ?>
            </article>
          </div>
        </div>
        <div class="col-sm-6 col-sm-height map-side">
          <div class="google-map">
            <?php the_field('location', 'option'); ?>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>