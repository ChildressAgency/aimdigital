<?php get_header(); ?>
  <?php get_template_part('partials/rowlayout', 'content'); ?>

  <section id="icon-cards" style="background-image:url(<?php the_field('icon_cards_section_background_image'); ?>); <?php the_field('icon_cards_section_background_image_css'); ?>">
    <div class="container">
      <div class="row">
        <?php if(get_field('icon_card_1_title')): ?>
          <div class="col-sm-4">
            <div id="easy-management" class="icon-card">
              <h2><?php the_field('icon_card_1_title'); ?></h2>
              <?php the_field('icon_card_1_content'); ?>
            </div>
          </div>
        <?php endif; if(get_field('icon_card_2_title')): ?>
          <div class="col-sm-4">
            <div id="targeted-campaigns" class="icon-card">
              <h2><?php the_field('icon_card_2_title'); ?></h2>
              <?php the_field('icon_card_2_content'); ?>
            </div>
          </div>
        <?php endif; if(get_field('icon_card_3_title')): ?>
          <div class="col-sm-4">
            <div id="flexible-campaigns" class="icon-card">
              <h2><?php the_field('icon_card_3_title'); ?></h2>
              <?php the_field('icon_card_3_content'); ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="overlay"></div>
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
  
  <section id="intelligent-triggers">
    <div class="container container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height">
          <div class="split text-side">
            <h2><?php the_field('intelligent_triggers_section_title'); ?></h2>
            <h3><?php the_field('intelligent_triggers_section_subtitle'); ?></h3>
            <hr />
            <?php the_field('intelligent_triggers_section_content'); ?>
          </div>
        </div>
        <div class="col-sm-6 col-sm-height image-side">
          <img src="<?php the_field('intelligent_triggers_section_image'); ?>" class="img-responsive center-block" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section id="meet-the-team">
    <div class="meet-the-team-header">
      <h2>Meet the team</h2>
    </div>
    <div class="meet-the-team-wrapper" style="background-image:url(<?php the_field('meet_the_team_background_image'); ?>); <?php the_field('meet_the_team_background_image_css'); ?>">
      <div class="container">
        <div id="team-carousel" class="carousel slide" data-ride="carousel">
          <?php $team_members = get_field('team_members'); ?>

          <?php if(!empty($team_members)): 
            $team_member_count = count($team_members); ?>
            <ol class="carousel-indicators">
              <?php for($i=0; $i<$team_member_count; $i++): ?>
                <li data-target="#team-carousel" data-slide-to="<?php echo $i; ?>"<?php if($i==0){ echo ' class="active"'; } ?>></li>
              <?php endfor; ?>
            </ol>
          <?php endif; ?>

          <div class="carousel-inner" role="listbox">
            <?php $c=0; foreach($team_members as $team_member): ?>
              <div class="item<?php if($c==0){ echo ' active'; } ?>">
                <div class="carousel-caption">
                  <h2><?php echo $team_member['team_member_name']; ?></h2>
                  <h4><?php echo $team_member['team_member_title']; ?></h4>
                  <p><?php echo $team_member['team_member_description']; ?></p>
                </div>
              </div>
            <?php $c++; endforeach; ?>
          </div>

          <a href="#team-carousel" class="left carousel-control" role="button" data-slide="prev">
            <span class="arrow arrow-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#team-carousel" class="right carousel-control" role="button" data-slide="next">
            <span class="arrow arrow-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php if(get_field('sdvosb_message')): ?>
    <section id="sdvosb">
      <div class="container">
        <h2><?php the_field('sdvosb_message'); ?></h2>
      </div>
    </section>
  <?php endif; ?>

<?php get_footer(); ?>