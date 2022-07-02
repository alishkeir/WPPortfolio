<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
  'order' => 'ASC',
  'orderby' => 'post_date',
);
$projects = new WP_Query($args);
?>


<!--!______________ Portfolio _______________  -->
<?php if ($projects->have_posts()) { ?>
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Portfolio</h2>
        <p>
          From Unreal Engine, Blueprints, C++ and Virtual Reality for Oculus, check out my latest projects
        </p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">
              All
            </li>
            <li data-filter=".filter-cpp">C++</li>
            <li data-filter=".filter-bp">BP</li>
            <li data-filter=".filter-vr">VR</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        <?php
        foreach ($projects->posts as $project) {
        ?>

          <div class="col-lg-4 col-md-6 portfolio-item <?php echo get_post_filter(get_post_meta($project->ID, 'type', true)) ?>">
            <a href="<?php the_permalink($project) ?>" target="_blank">
              <div class="portfolio-wrap">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($project->ID), 'thumbnail') ?>" class="img-fluid" alt="" />
              </div>
            </a>
          </div>

        <?php
        }
        ?>
        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <a href="https://github.com/alishkeir/Weather-API-B06" target="_blank">
            <div class="portfolio-wrap">
              <img src="<?php echo get_stylesheet_directory_uri() . '/src/assets/images/projects/Movie-API.webp' ?>" class="img-fluid" alt="" />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <a href="https://github.com/alishkeir/Indie-Bites-B06" target="_blank">
            <div class="portfolio-wrap">
              <img src="<?php echo get_stylesheet_directory_uri() . '/src/assets/images/projects/IndieBite.webp' ?>" class="img-fluid" alt="" />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <a href="https://github.com/alishkeir/Final-Project-B06" target="_blank">
            <div class="portfolio-wrap">
              <img src="<?php echo get_stylesheet_directory_uri() . '/src/assets/images/projects/HelpMate.webp' ?>" class="img-fluid" alt="" />
            </div>
          </a>
        </div> -->
      </div>
    </div>
  </section>

<?php } ?>