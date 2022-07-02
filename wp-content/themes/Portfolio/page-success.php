<?php
get_header();

?>
<main class="success" id="main">
  <main class="check-container">
    <div class="check">
      <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
      </svg>
    </div>
    <h2>Thanks for reaching out!</h2>
    <p>Your message just showed in my inbox. Talk to you soon !!</p>
    <a href="/" class="landingButton"><span>Back To Portfolio</span></a>
  </main>

</main>

<script>
  setTimeout(() => {
    window.location.href = '/'
  }, 4000);
</script>

<?php

get_footer();

?>