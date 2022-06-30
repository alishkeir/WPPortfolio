var winST = $(window).scrollTop();

/*
 * Stuck Header
 */
function stuckHeader(winST) {
  if ($("#wpadminbar").length == 0) {
    $(".header").toggleClass(
      "is-fixed",
      winST > $(".header .header__bar").offset().top
    );
  } else {
    $(".header").toggleClass(
      "is-fixed is-admin-panel-visible",
      winST > $(".header .header__bar").offset().top
    );
  }
}

/*
 * Windiow Events
 */
$(window).on("load scroll", function () {
  winST = $(window).scrollTop();
  stuckHeader(winST);
});
