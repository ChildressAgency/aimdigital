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

  <div id="did-you-know">
    <div class="container">
      <div class="intro">
        <h1><?php the_field('did_you_know_section_intro_title'); ?></h1>
        <?php the_field('did_you_know_section_intro_content'); ?>
      </div>
      <?php if(have_rows('did_you_know_facts')): ?>
        <h1 class="text-center">Did You Know?</h1>
        <div class="row">
          <?php $c=0; while(have_rows('did_you_know_facts')): the_row(); ?>
            <?php if($c%2==0){ echo '<div class="clearfix"></div>'; } ?>
            <div class="col-sm-6">
              <div class="fact-card">
                <img src="<?php the_sub_field('fact_image'); ?>" class="img-responsive center-block" alt="" />
                <h3><?php the_sub_field('fact_title'); ?></h3>
                <?php the_sub_field('fact_content'); ?>
              </div>
            </div>
          <?php $c++; endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <section id="technology">
    <div class="container">
      <div class="intro">
        <h1><?php the_field('technology_section_title'); ?></h1>
        <h3><?php the_field('technology_section_subtitle'); ?></h3>
      </div>
      <div class="row">
        <div class="col-sm-7">
          <?php if(have_rows('technology_tables')): while(have_rows('technology_tables')): the_row(); ?>
            <div class="table-responsive">
              <table class="table table-condensed">
                <caption><?php the_sub_field('technology_table_title'); ?></caption>
                <tbody>
                  <?php if(have_rows('technology_table_fields')): while(have_rows('technology_table_fields')): the_row(); ?>
                    <tr>
                      <th scope="row"><?php the_sub_field('technology_table_field_title'); ?></th>
                      <td><?php the_sub_field('technology_table_field_content'); ?></td>
                    </tr>
                  <?php endwhile; endif; ?>
                </tbody>
              </table>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="col-sm-5">
          <div class="tech-sidebar">
            <h3><?php the_field('misc_technology_items_title'); ?></h3>
            <?php if(have_rows('misc_technology_items')): ?>
              <ul>
                <?php while(have_rows('misc_technology_items')): the_row(); ?>
                  <li><?php the_sub_field('misc_technology_item'); ?></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>