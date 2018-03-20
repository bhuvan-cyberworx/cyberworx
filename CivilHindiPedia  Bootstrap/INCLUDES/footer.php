</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<scrip src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></scrip>
<!-- Slick Carousel JS -->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<!--Loading Moment.js minified script -->
<script src='fullcalendar/moment.min.js'></script>
<!-- Loading fulcalendar minified script -->
<script src='fullcalendar/fullcalendar.js'></script>
<!-- Loading zabuto calendar minified script -->
<script src="zabutocalendar/zabuto_calendar.min.js"></script>
<script src="News Ticker/jquery.easy-ticker.min.js"></script>



<script >
console.log("Slick Working");
$(document).ready(function(){
  $('.course-card-slider').slick({
    infinite: true,
    slidesToShow: 4,
    autoplay:true,
    slidesToScroll: 3,
    prevArrow:"<img class='a-left control-c prev slick-prev' src='IMAGES/ICONS/left-arrow.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='IMAGES/ICONS/right-arrow.png'>"

  });

  $('.testimonial-card-slider').slick({
    infinite: false,
    slidesToShow: 4,
    autoplay:true,
    dots:true,
    slidesToScroll: 3,
    prevArrow:"<img class='a-left control-c prev slick-prev' src='IMAGES/ICONS/left-arrow.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='IMAGES/ICONS/right-arrow.png'>"
  });


  $('#event-calendar').zabuto_calendar({
    ajax: {
      url: "zabutocalendar/show_data.php",
      modal:true
    }
  });

  $('#information-section').easyTicker({
	direction: 'up',
	easing: 'swing',
	speed: 'slow',
	interval: 2000,
	height: '268px',
	visible: 0,
	mousePause: 1,
	controls: {
		up: '',
		down: '',
		toggle: '',
		playText: 'Play',
		stopText: 'Stop'
	}
});

});

</script>

<script type="text/javascript">
$(window).on('scroll', function() {
  var scrollValue = $(window).scrollTop();
  var elementOffset = $('.navbar-course-navigation').offset().top;
  var distance  = (elementOffset - scrollValue);
  console.log(scrollValue);
  if (scrollValue>distance) {
       $('.navbar-course-navigation').addClass('fixed-top');
  }
  else {
    $('.navbar-course-navigation').removeClass('fixed-top');
  }
});

</script>

</body>
</html>
