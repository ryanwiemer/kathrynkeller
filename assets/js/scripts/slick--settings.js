//Settings for the Slick JS Carousel on the Homepage

$(document).ready(function(){
  $('.carousel').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 300,
    slidesToShow: 1
  });
  $('.slick-list').focus();
});
