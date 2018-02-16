<?php get_header(); ?>
  <?php if(have_rows('main_section_layout')): while(have_rows('main_section_layout')): the_row(); 
    if(get_row_layout() == 'light-blue-background'): ?>

      <main id="main" class="sidebyside">
        <div class="container-fluid container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height">
              <article>
                <?php the_sub_field('row_content'); ?>
              </article>
            </div>
            <div class="col-sm-6 col-sm-height" style="background-image:url(<?php the_sub_field('row_image'); ?>);<?php the_sub_field('row_image_css'); ?> height:550px; background-repeat:no-repeat; background-size:cover;">
            
            </div>
          </div>
        </div>
      </main>

  <?php else if(get_row_layout() == 'side-by-side'): ?>

    <section class="main">
      <div class="container container-sm-height">
        <?php if(have_rows('main_section_rows')): $i=1; while(have_rows('main_section_rows')): the_row(); ?>
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height<?php if($i%2==0){ echo ' col-sm-push-6'; } ?>">
              <div class="split image-side">
                <img src="<?php the_sub_field('row_image'); ?>" class="img-responsive center-block" alt="" />
              </div>
            </div>
            <div class="col-sm-6 col-sm-height<?php if($i%2==0){ echo ' col-sm-pull-6'; } ?>">
              <div class="split text-side">
                <h2><?php the_sub_field('row_title'); ?></h2>
                <h3><?php the_sub_field('row_subtitle'); ?></h3>
                <hr />
                <?php the_sub_field('row_content'); ?>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; endif; ?>
      </div>
    </section>

  <?php else: ?>

    <main id="main">
      <div class="container">
        <article>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </article>
      </div>
    </main>

  <?php endif; ?>
<?php get_footer(); ?>