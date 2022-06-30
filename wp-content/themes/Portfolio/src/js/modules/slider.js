/*
 * Slider
 */
function initMobileSlider() {
  $(".slider-mobile").each(function () {
    var $this = $(this);
    var rtl = false;
    if ($(window).width() < 768 && !$this.hasClass("slick-initialized")) {
      if ($("html").attr("dir")) {
        if ($("html").attr("dir") == "rtl") {
          rtl = true;
        }
      }
      $this.slick({
        dots: true,
        rtl: rtl,
      });
    } else if ($(window).width() > 768 && $this.hasClass("slick-initialized")) {
      $this.slick("unslick");
    }
  });
}

/*
 * Window Events
 */
$(window).on("load resize", function () {
  initMobileSlider();
});
