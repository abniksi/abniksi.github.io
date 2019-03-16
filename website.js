$(function() {
  // Add background color to nav when user scrolls more than 100px down
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

//JavaScript smooth scroll. jQuery used.
$(".scroll-btn").click(function() {
    $('html,body').animate({
        scrollTop: $("#aboutMe").offset().top},
        'slow');
});

$(".aboutScroll").click(function() {
    $('html,body').animate({
        scrollTop: $("#aboutMe").offset().top},
        'slow');
});

$(".skillsScroll").click(function() {
    $('html,body').animate({
        scrollTop: $("#slantedSkillsPage").offset().top},
        'slow');
});

$(".projectsScroll").click(function() {
    $('html,body').animate({
        scrollTop: $("#projects").offset().top},
        'slow');
});

$(".contactScroll").click(function() {
    $('html,body').animate({
        scrollTop: $("#footerSection").offset().top},
        'slow');
});

$(".nameScroll").click(function() {
    $('html,body').animate({
        scrollTop: $("#splashPage").offset().top},
        'slow');
});
