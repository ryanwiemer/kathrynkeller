//Mixitup Settings


$(function(){
  $('#Container').mixItUp({
    layout: {
		  display: 'block'
	  },
    animation: {
      animateResizeContainer: false,
		  effects: 'fade translateZ(-360px) stagger(0ms)',
		  easing: 'ease'
    }
  });
});
