<?php get_header(); ?>
<section class="section">
  <div class="shell">
    <div class="section__body">
      <div class="section__inner">
        <div class="section__content">
          <h1 class="title text-center"> <?php the_title() ?> </h1>
          <?php
          the_content();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--form">
  <div class="shell">
    <div class="section__body">
      <?php get_template_part('template-parts/components/newsletter/newsletter', '', []) ?>
    </div><!-- /.section__body -->
  </div><!-- /.shell -->
</section><!-- /.section -->

<?php get_footer();
