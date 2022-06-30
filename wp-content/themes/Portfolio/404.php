<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *

 */

use function PHPSTORM_META\type;

/* detecting 'double-encoded' urls
 * if the request uri contains %25 (the urlncoded from of '%' symbol)
 * within the first few characters, we try to decode the url and redirect
 */

$pos = strpos($_SERVER['REQUEST_URI'], '%25');
if ($pos !== false) :
  header("Status: 301 Moved Permanently");
  header("Location:" . urldecode($_SERVER['REQUEST_URI']));
else :
  get_header();
?>
  <div class="page_not_found">
  </div>
<?php
  get_footer();

endif; ?>

<script>
  setTimeout(() => {
    window.location.href = "/"
  }, 3000);
</script>