$(document).on("click", ".mobile-nav-toggle", function (e) {
  $("body").toggleClass("mobile-nav-active");
  $(".mobile-nav-toggle i").toggleClass(
    "icofont-navigation-menu icofont-close"
  );
});

//close navbar when clicking anywhere
$(document).click(function (e) {
  var container = $(".mobile-nav-toggle");
  if (
    !container.is(e.target) &&
    container.has(e.target).length === 0 &&
    e.target.className !== "theme-toggle" &&
    e.target.className !== "theme-toggle-list-item"
  ) {
    if ($("body").hasClass("mobile-nav-active")) {
      $("body").removeClass("mobile-nav-active");
      $(".mobile-nav-toggle i").toggleClass(
        "icofont-navigation-menu icofont-close"
      );
    }
  }
});
