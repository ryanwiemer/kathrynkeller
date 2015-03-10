//Slick JS Settings

$(document).ready(function(){
  $('.carousel').slick({
    infinite: true,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 10000,
    speed: 450,
    cssEase: 'linear',
    slidesToShow: 1,
    //fade: true,
    dots: true,
    dotsClass: 'custom_paging',
    customPaging: function (slider, i) {
        return  (i + 1) + '/' + slider.slideCount;
    }
  });
  $('.slick-list').focus();
});
