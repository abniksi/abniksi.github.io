$(function() {
  // Add background color to nav when user scrolls more than 50px down
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $("#mainNavbar").removeClass("navbar-dark");
      $("#mainNavbar").addClass("newNavbar navbar-light");
    }
    if ($(this).scrollTop() < 100) {
      $("#mainNavbar").removeClass("newNavbar navbar-light");
      $("#mainNavbar").addClass("navbar-dark");
    }
  });

});
