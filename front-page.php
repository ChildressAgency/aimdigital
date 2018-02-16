<?php get_header(); ?>
  <?php get_template_part('partials/rowlayout', 'content'); ?>

  <section id="learn-more" style="background-image:url(<?php the_field('learn_more_callout_background_image'); ?>); <?php the_field('learn_more_callout_background_image_css'); ?>">
    <div class="container">
      <h2><?php the_field('learn_more_callout_text'); ?></h2>
      <a href="<?php the_field('learn_more_callout_link'); ?>" class="btn-main">Learn More</a>
    </div>
    <div class="overlay"></div>
  </section>

  <section id="by-location">
    <div class="container container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height">
          <div class="split text-side">
            <h2><?php the_field('by_location_section_title'); ?></h2>
            <h3><?php the_field('by_location_section_subtitle'); ?></h3>
            <hr />
            <?php the_field('by_location_section_content'); ?>
          </div>
        </div>
        <div class="col-ms-6 col-sm-height">
          <div class="split image-side">
            <img src="<?php the_field('by_location_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if(have_rows('subsection_rows')): $c=1; while(have_rows('subsection_rows')): the_row(); ?>
    <section class="main">
      <div class="container container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-height<?php if($c%2==0){ echo ' col-sm-push-6'; } ?>">
            <div class="split image-side">
              <img src="<?php the_sub_field('subsection_row_image'); ?>" class="img-responsive center-block" alt="" />
            </div>
          </div>
          <div class="col-sm-6 col-sm-height">
            <div class="split text-side">
              <h2><?php the_sub_field('subsection_row_title'); ?></h2>
              <h3><?php the_sub_field('subsection_row_subtitle'); ?></h3>
              <hr />
              <?php the_sub_field('subsection_row_content'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php $c++; endwhile; endif; ?>
<?php get_footer(); ?>