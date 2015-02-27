//Isotope Settings

$(window).load(function(){

 var $container = $('#gallery').isotope({
masonry: {
   }
});
 // filter items on button click
$('.header--gallery__categories').on( 'click', 'button', function() {
 var filterValue = $(this).attr('data-filter');
 $container.isotope({ filter: filterValue });
});

});
