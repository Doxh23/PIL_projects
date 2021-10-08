$(".check-options").click(function () {
  $(".cookie-configurador").addClass("active");
  $(".cookie-popup").removeClass("active");
});

$(".accept-cookies").click(function () {
  $(".cookie-configurador").removeClass("active");
  $(".cookie-popup").removeClass("active");
});

$(".gobacknow").click(function () {
  $(".cookie-configurador").removeClass("active");
  $(".cookie-popup").addClass("active");
});

$(".cookie-popup_container_link").click(function () {
  $(".cookie-popup").removeClass("active");
});
