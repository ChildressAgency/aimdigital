<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </article>
      <hr />
      <?php if(have_rows('jobs')): ?>
        <div class="panel-group" id="jobs" role="tablist" aria-multiselectable="true">
          <?php $i=0; while(have_rows('jobs')): the_row(); ?>
            <div class="panel panel-default">
              <div id="job<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="jobtitle<?php echo $i; ?>">
                <h2><?php the_sub_field('job_title'); ?></h2>
                <?php the_sub_field('job_description'); ?>
              </div>
              <div class="panel-heading" role="tab" id="jobtitle<?php echo $i; ?>">
                <a href="#job<?php echo $i; ?>" class="btn-main btn-small" role="button" data-toggle="collapse" data-parent="#jobs" aria-expanded="true" aria-controls="#job<?php echo $i; ?>">Job Details</a>
              </div>
            </div>
            <hr />
          <?php $i++; endwhile; ?>        
        </div>
      <?php endif; ?>
    </div>
  </main>
  <section id="job-application">
    <div class="container">
      <h3>Job Application</h3>
      <?php echo do_shortcode('[job-application]'); ?>
    </div>
  </section>
<?php get_footer(); ?>