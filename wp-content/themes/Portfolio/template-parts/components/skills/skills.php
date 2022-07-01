<?php
$args = array(
  'post_type' => 'skill',
  'posts_per_page' => -1,
  'order' => 'ASC',
  'orderby' => 'post_date',
);
$skills = new WP_Query($args);
?>


<!--!__________________ Skills _____________________  -->
<section id="skills" class="skills">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Skills</h2>
    </div>
    <div class="row skills-content m-auto">
      <?php

      if ($skills->have_posts()) {
        foreach ($skills->posts as $item) {

      ?>
          <div class="skill">

            <img src="<?php echo wp_get_attachment_url(get_post_meta($item->ID, '_skill_icon', true)) ?>">
            <h5>
              <?php echo get_post_meta($item->ID, '_skill_name', true) ?>
            </h5>
          </div>
      <?php

        }
      }

      ?>

    </div>
  </div>
</section>