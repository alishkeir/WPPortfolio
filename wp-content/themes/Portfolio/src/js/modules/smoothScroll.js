// Activate smooth scroll on page load with hash links in the url
$(document).ready(function () {
  if (window.location.hash) {
    var initial_nav = window.location.hash;
    if ($(initial_nav).length) {
      var scrollto = $(initial_nav).offset().top;
      $("html, body").animate(
        {
          scrollTop: scrollto,
        },
        200,
        "easeInOutExpo"
      );
    }
  }
});
