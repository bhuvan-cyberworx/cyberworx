$(window).on('scroll', function(event) {
  var scrollValue = $(window).scrollTop();
  if (scrollValue == settings.scrollTopPx || scrollValue > 70) {
       $('.navbar-course-navigation').addClass('fixed-top');
  }
});
