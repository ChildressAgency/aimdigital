<?php get_header(); ?>
  <?php get_template_part('partials/rowlayout', 'content'); ?>

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