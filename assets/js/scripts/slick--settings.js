//Slick JS Settings

$(document).ready(function(){
  $('.carousel').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 300,
    cssEase: 'linear',
    slidesToShow: 1,
  });
  $('.slick-list').focus();
});
