<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/src/assets/images/favicon/favicon.png' ?>" type="image/png" sizes="16x16 32x32" />
  <title>Ali Shkeir - Portfolio</title>

  <!--  CSS Files -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo get_stylesheet_directory_uri() . '/src/assets/icofont/icofont.min.css' ?>" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
  <!-- Main CSS File -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/dist/bundle.css' ?>" />
</head>

<body class="dark">
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="<?php echo get_stylesheet_directory_uri() . '/src/assets/images/profile/profile-img.png' ?>" alt="Profile Photo" class="img-fluid rounded-circle" />
        <h1 class="text-light">
          <a href="index.html">Ali Shkeir</a>
        </h1>
        <div class="social-links mt-3 text-center">
          <a href="https://github.com/alishkeir" class="github" title="GitHub" target="_blank"><i class="bx bxl-github"></i></a>
          <a href="https://www.facebook.com/ali.shkeir.180625" class="facebook" title="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/alishkeir_/" class="instagram" title="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/alishkeir/" class="linkedin" title="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
          <a href="mailto:alishkeir_@hotmail.com" class="email" title="Email"><i class="bx bxs-envelope"></i></a>
        </div>
      </div>

      <!--! Nav Menu -->
      <nav class="nav-menu">
        <ul>
          <li class="active">
            <a href="#hero"><i class="bx bx-home"></i><span>Home</span></a>
          </li>
          <li>
            <a href="#about"><i class="bx bx-user"></i><span>About</span></a>
          </li>
          <li>
            <a href="#resume"><i class="bx bx-file"></i><span>Resume</span></a>
          </li>
          <li>
            <a href="#portfolio"><i class="bx bx-book-content"></i><span>Projects</span></a>
          </li>
          <li>
            <a href="#skills"><i class="bx bx-task"></i><span>Skills</span></a>
          </li>
          <li>
            <a href="#services"><i class="bx bx-server"></i><span>Services</span></a>
          </li>
          <li>
            <a href="#contact"><i class="bx bx-envelope"></i><span>Contact</span></a>
          </li>
          <li>
            <a href="assets/pdf/resume.pdf" download="Ali Shkeir - Resume">
              <i class="bx bx-download"></i><span>My CV</span>
            </a>
          </li>
          <!--! Theme Toggle  -->
          <!-- 
                        <li class="theme-toggle-list-item">
                            <input
                                type="checkbox"
                                class="theme-toggle"
                                onclick="toggleTheme()"
                            />
                        </li> -->
        </ul>
      </nav>

      <button type="button" class="mobile-nav-toggle d-xl-none" value="" title="Menu">
        <i class="icofont-navigation-menu"></i>
      </button>
    </div>
  </header>

  <!--! ________ Hero Section ________  -->

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container aos-init" data-aos="fade-down">
      <h1>Ali Shkeir</h1>
      <p>
        <span class="typed" data-typed-items=",Game Programmer, Mobile Developer, Web Developer">
        </span>
      </p>
    </div>
  </section>
  <!--!______________ Main Body _______________  -->
  <main id="main">
    <!--!___________________ About _____________________  -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>About</h2>
          <p>
            A hardworking, detail-oriented and self-motivated
            web developer enthusiastic about learning how to
            program and aiming continuously to learn new skills.
          </p>
          <p>
            Since I was seven years old, I was always willing to
            learn and create computer games. As for now, my main
            goal is to become a professional Gameplay Programmer
            as I am passionate about gaming and the game
            industry.
          </p>
          <p>
            My purpose was to become a self-taught programmer
            since I couldn't get a university degree. So I chose
            the easiest path, and that is to become a web
            developer. And now, as I am working as a web
            developer, I am learning how to code in C++ and
            Unreal Engine to become a successful Gameplay
            Programmer.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4 text-center" data-aos="fade-right">
            <img src="<?php echo get_stylesheet_directory_uri() . '/src/assets/images/profile/profile-img.png' ?>" alt="" class="img-fluid" />
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content mt-5" data-aos="fade-left">
            <h3>Web &amp; Mobile Developer.</h3>
            <p class="font-italic">
              I am a hardworking, detail oriented and
              self-motivated web developer interested in
              developing web applications, passionate about
              programming, aiming continuously to learn new
              skills and always striving for achieving
              ambitions
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li>
                    <i class="icofont-rounded-right"></i><strong class="mr-3">Phone:</strong>+961 71 442 659
                  </li>
                  <li>
                    <i class="icofont-rounded-right"></i><strong class="mr-3">Location:</strong>Beirut, Lebanon
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li>
                    <i class="icofont-rounded-right"></i><strong class="mr-3">Email:</strong>alishkeir_@hotmail.com
                  </li>
                  <li>
                    <i class="icofont-rounded-right"></i><strong class="mr-3">Nationality:</strong>Lebanese
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--!__________________ Resume _________________  -->
    <section id="resume" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4>Ali Shkeir</h4>
              <ul>
                <li>Mreijeh - Beirut, Lebanon</li>
                <li>(+961) 71 442 659</li>
                <li>alishkeir_@hotmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>

            <div class="resume-item">
              <h4>
                Technical Baccalaureate in Information
                Technology
                <sub> (Vocational)</sub>
              </h4>
              <h5>2015 - 2018</h5>
              <p>
                <em>
                  <a>
                    Al Rassoul Al aazam University
                    Institute</a>
                  - Beirut, LB</em>
              </p>
              <ul>
                <li>Computer Technology</li>
                <li>Networking</li>
                <li>Programming - C Language</li>
                <li>DBMS - MS Access</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">
              Professional Experience
            </h3>
            <div class="resume-item">
              <h4>Full Stack Development Training</h4>
              <h5>Sep 2020 - March 2021</h5>
              <p>
                <a href="https://codi.tech/" target="_blank">Codi Tech</a>
                - <em>Beirut, Lebanon </em>
              </p>
              <ul>
                <li>
                  Frontend Development (HTML5, CSS3,
                  JavaScript, React, Bootstrap, SCSS)
                </li>
                <li>
                  Backend Development (NodeJS, PHP,
                  Laravel)
                </li>
                <li>Mobile Development (React Native)</li>
                <li>Database (MySQL, MongoDB)</li>
                <li>Version Control (Git, GitHub)</li>
                <li>
                  Project Management (AGILE Methodologies)
                </li>
                <li>
                  Content Management System (WordPress)
                </li>
                <li>
                  Server Management (Arch Linux, Ubuntu,
                  Apache)
                </li>
                <li>Building REST APIs</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Frontend Developer</h4>
              <h5>Jul 2021 - Present</h5>
              <p>
                <a href="https://www.itxi.net/" target="_blank">ITXI</a>
                -
                <em>Beirut, Lebanon </em>
              </p>
              <ul>
                <li>
                  Frontend Development (HTML5, CSS3,
                  JavaScript, TypeScript)
                </li>
                <li>
                  Frontend Tools (React, Angular,
                  Bootstrap, SCSS)
                </li>
                <li>Mobile Development (React Native)</li>
                <li>Version Control (Git, Bitbucket)</li>
                <li>
                  Project Management (Jira, Confluence)
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

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

    <!--!___________________ Facts _____________________  -->
    <!-- 
      <section id="facts" class="facts">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Facts</h2>
            <p>
              Deserunt enim non reprehenderit aliqua qui esse aliqua anim
              dolore.
            </p>
          </div>
          <div class="row no-gutters">
            <div
              class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"
              data-aos="fade-up"
            >
              <div class="count-box">
                <i class="icofont-simple-smile"></i>
                <span data-toggle="counter-up">232</span>
                <p><strong>Happy Clients</strong> Lorem Ipsum</p>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="count-box">
                <i class="icofont-document-folder"></i>
                <span data-toggle="counter-up">521</span>
                <p><strong>Projects</strong> Lorem Ipsum</p>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="count-box">
                <i class="icofont-live-support"></i>
                <span data-toggle="counter-up">1,456</span>
                <p><strong>Hours of Support</strong> Lorem Ipsum</p>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="count-box">
                <i class="icofont-user-alt-5"></i>
                <span data-toggle="counter-up">15</span>
                <p><strong>Hardworkers</strong> Lorem Ipsum</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->

    <!--!__________________ Skills _____________________  -->

    <section id="skills" class="skills">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Skills</h2>
        </div>
        <div class="row skills-content m-auto">
          <div class="col-lg-5 col-sm-6 aos-item ml-auto mr-auto mb-0 mt-5" data-aos="fade-up">
            <div class="progress">
              <span class="skill">HTML5<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" title="HTML"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS3<i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" title="CSS"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">SCSS<i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" title="SCSS"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-sm-6 aos-item ml-auto mr-auto mb-0 mt-5" data-aos="fade-up" data-aos-mirror="true" data-aos-delay="100">
            <div class="progress">
              <span class="skill">Bootstrap<i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" title="Bootstrap"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript<i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" title="JavaScript"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">React<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" title="React"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-sm-6 aos-item ml-auto mr-auto mb-0 mt-5" data-aos="fade-up" data-aos-mirror="true" data-aos-delay="200">
            <div class="progress">
              <span class="skill">TypeScript<i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" title="TypeScript"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Angular<i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" title="Angular"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">jQuery<i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" title="jQuery"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-sm-6 aos-item ml-auto mr-auto mb-0 mt-5" data-aos="fade-up" data-aos-mirror="true" data-aos-delay="300">
            <div class="progress">
              <span class="skill">Node<i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" title="Node"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Express<i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" title="Express"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">MongoDB<i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" title="MongoDB"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-sm-6 aos-item ml-auto mr-auto mb-0 mt-5" data-aos="fade-up" data-aos-mirror="true" data-aos-delay="400">
            <div class="progress">
              <span class="skill">PHP<i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" title="PHP"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Laravel<i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" title="Laravel"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">MySQL<i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" title="MySQL"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-sm-6 aos-item ml-auto mr-auto mb-0 mt-5" data-aos="fade-up" data-aos-mirror="true" data-aos-delay="500">
            <div class="progress">
              <span class="skill">React Native<i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" title="React Native"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">GraphQL<i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" title="GraphQL"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Git<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" title="Git"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--!_________________ Services ____________________  -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon">
              <i class="icofont-computer"></i>
            </div>
            <h4 class="title" id="title">
              <p>Web Development</p>
            </h4>
            <p class="description">
              Web Development is building out the components
              of a website. Using HTML, CSS , Javascript, PHP
              and their frameworks and libraries. I build
              fast, responsive and interactive web apps.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon">
              <i class="icofont-iphone"></i>
            </div>
            <h4 class="title" id="title">
              <p>Mobile Development</p>
            </h4>
            <p class="description">
              Every business has unique problems that can be
              fixed with the right software solution. I
              believe that software should be intuitive,
              simple, and should solve these business
              problems.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon">
              <i class="icofont-responsive"></i>
            </div>
            <h4 class="title" id="title">
              <p>UI/UX</p>
            </h4>
            <p class="description">
              UI/UX involves planning and iterating a site's
              structure and layout. Once the proper
              information architecture is in place, I design
              the visual layer to create a beautiful user
              experience.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--!________________ Testimonials _________________  -->

    <!-- <section id="testimonials" class="testimonials section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Testimonials</h2>
            <p>
              Id ullamco dolor consequat adipisicing id est aliquip non commodo
              mollit. Lorem adipisicing commodo excepteur cillum occaecat
              reprehenderit laborum laborum Lorem tempor.
            </p>
          </div>
          <div class="owl-carousel testimonials-carousel">
            <div class="testimonials-item" data-aos="fade-up">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Est ut aliqua sit non pariatur est consectetur excepteur non
                minim pariatur qui. Enim laborum pariatur aliqua pariatur nulla
                officia.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img
                src="/assets/img/testimonials/testimonial.png"
                alt="Testimonial"
                class="testimonial-img"
              />
              <h3>Lorem Ipsum</h3>
              <h4>CEO &amp; Founder</h4>
            </div>

            <div
              class="testimonials-item"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Est ut aliqua sit non pariatur est consectetur excepteur non
                minim pariatur qui. Enim laborum pariatur aliqua pariatur nulla
                officia.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img
                src="/assets/img/testimonials/testimonial.png"
                alt="Testimonial"
                class="testimonial-img"
              />
              <h3>Lorem Ipsum</h3>
              <h4>CEO &amp; Founder</h4>
            </div>

            <div
              class="testimonials-item"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Est ut aliqua sit non pariatur est consectetur excepteur non
                minim pariatur qui. Enim laborum pariatur aliqua pariatur nulla
                officia.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img
                src="/assets/img/testimonials/testimonial.png"
                alt="Testimonial"
                class="testimonial-img"
              />
              <h3>Lorem Ipsum</h3>
              <h4>CEO &amp; Founder</h4>
            </div>

            <div
              class="testimonials-item"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Est ut aliqua sit non pariatur est consectetur excepteur non
                minim pariatur qui. Enim laborum pariatur aliqua pariatur nulla
                officia.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img
                src="/assets/img/testimonials/testimonial.png"
                alt="Testimonial"
                class="testimonial-img"
              />
              <h3>Lorem Ipsum</h3>
              <h4>CEO &amp; Founder</h4>
            </div>

            <div
              class="testimonials-item"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Est ut aliqua sit non pariatur est consectetur excepteur non
                minim pariatur qui. Enim laborum pariatur aliqua pariatur nulla
                officia.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img
                src="/assets/img/testimonials/testimonial.png"
                alt="Testimonial"
                class="testimonial-img"
              />
              <h3>Lorem Ipsum</h3>
              <h4>CEO &amp; Founder</h4>
            </div>

            <div
              class="testimonials-item"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Est ut aliqua sit non pariatur est consectetur excepteur non
                minim pariatur qui. Enim laborum pariatur aliqua pariatur nulla
                officia.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img
                src="/assets/img/testimonials/testimonial.png"
                alt="Testimonial"
                class="testimonial-img"
              />
              <h3>Lorem Ipsum</h3>
              <h4>CEO &amp; Founder</h4>
            </div>
          </div>
        </div>
      </section> -->

    <!--! __________________ Contact ___________________  -->

    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Mreijeh - Beirut, Lebanon</p>
              </div>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>alishkeir_@hotmail.com</p>
              </div>
              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Mobile:</h4>
                <p>+961 71 442 659</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d696.6927837355381!2d35.51415384939762!3d33.836871159729924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f19ce46950857%3A0x3de7ac91339e67b8!2zMzPCsDUwJzEyLjkiTiAzNcKwMzAnNTMuMCJF!5e0!3m2!1sen!2sru!4v1650284622655!5m2!1sen!2sru" frameborder="0" style="
                                        border: 0;
                                        width: 100%;
                                        height: 350px;
                                    " allowfullscreen="" loading="lazy" class="map" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <form action="https://formsubmit.co/alishkeir_@hotmail.com" method="POST" class="email-form" enctype="multipart/form-data">
              <input type="hidden" name="_subject" value="Email From Portfolio" />

              <input type="hidden" name="_template" value="box" />
              <input type="hidden" name="_next" value="https://alishkeir.netlify.app/success.html" />
              <input type="hidden" name="_captcha" value="false" />
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Full Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please Enter at Least 4 Characters" required />
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" data-rule="Please Enter a Valid Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="someone@example.com" required />
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please Enter at Least 8 Characters" required />
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please Write Something For Us" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!--!______________ Footer _______________  -->
  <!-- <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Ali Shkeir</span></strong>
                </div>
                <div class="credits">
                    Designed By
                    <a href="#">Ali Shkeir</a>
                </div>
            </div>
        </footer> -->

  <!--!______________ Back To Top Button _______________  -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!--! Vendor JS Files -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  <!-- Template Main JS File -->

  <script src="<?php echo get_stylesheet_directory_uri() . '/dist/index.bundle.js' ?>"></script>
</body>

</html>