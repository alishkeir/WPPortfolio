// Hero typed
if ($(".typed").length) {
  var typed_strings = $(".typed").data("typed-items");
  typed_strings = typed_strings.split(",");
  new Typed(".typed", {
    strings: typed_strings,
    loop: true,
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 1000,
  });
}
