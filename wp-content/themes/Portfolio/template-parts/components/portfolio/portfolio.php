  <!--!______________ Portfolio _______________  -->

  <section id="portfolio" class="portfolio section-bg">
    <div class="container">
      <div class="section-title">
        <h2>Portfolio</h2>
        <p>
          From Web Components & UI/UX Design to ReactJS and
          React Native, check out my latest projects
        </p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">
              All
            </li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
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
        </div>
      </div>
    </div>
  </section>