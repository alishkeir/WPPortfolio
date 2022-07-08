<?php

$url_add = "";
if (str_contains($_SERVER['REQUEST_URI'], 'success'))
  $url_add = "/";

?>

<header id="header">
  <div class="d-flex flex-column">
    <div class="profile">
      <img src="<?php echo get_stylesheet_directory_uri() . '/src/assets/images/profile/profile-img.jpg' ?>" alt="Profile Photo" class="img-fluid rounded-circle" />
      <h1 class="text-light">
        <a href="index.html">Ali Shkeir</a>
      </h1>
      <div class="social-links mt-3 text-center">
        <a href="https://github.com/alishkeir" class="github" title="GitHub" target="_blank"><i class="bx bxl-github"></i></a>
        <a href="https://www.facebook.com/alishkeirr/" class="facebook" title="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/alishkeir_/" class="instagram" title="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/alishkeir/" class="linkedin" title="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
        <a href="mailto:alishkeir_@hotmail.com" class="email" title="Email"><i class="bx bxs-envelope"></i></a>
      </div>
    </div>

    <!--! Nav Menu -->
    <nav class="nav-menu">
      <ul>
        <li class="active">
          <a href="<?php echo esc_attr($url_add) ?>#hero"><i class="bx bx-home"></i><span>Home</span></a>
        </li>
        <li>
          <a href="<?php echo esc_attr($url_add) ?>#about"><i class="bx bx-user"></i><span>About</span></a>
        </li>
        <li>
          <a href="<?php echo esc_attr($url_add) ?>#resume"><i class="bx bx-file"></i><span>Resume</span></a>
        </li>
        <li>
          <a href="<?php echo esc_attr($url_add) ?>#portfolio"><i class="bx bx-book-content"></i><span>Projects</span></a>
        </li>
        <li>
          <a href="<?php echo esc_attr($url_add) ?>#skills"><i class="bx bx-task"></i><span>Skills</span></a>
        </li>
        <li>
          <a href="<?php echo esc_attr($url_add) ?>#contact"><i class="bx bx-envelope"></i><span>Contact</span></a>
        </li>
        <li>
          <a href="<?php echo get_stylesheet_directory_uri() . '/src/assets/pdf/Ali_Shkeir_Resume.pdf' ?>" download="Ali Shkeir - Resume">
            <i class="bx bx-download"></i><span>My CV</span>
          </a>
        </li>
      </ul>
    </nav>

    <button type="button" class="mobile-nav-toggle d-xl-none" value="" title="Menu">
      <i class="icofont-navigation-menu"></i>
    </button>
  </div>
</header>