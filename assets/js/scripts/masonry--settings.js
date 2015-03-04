//Salvattore Settings

$('#grid').infinitescroll({
  navSelector  : ".gallery__pagination",
  nextSelector : ".gallery__pagination .btn-pagination--next",
  itemSelector : ".project",
  appendCallback: false,
  loading: {
    finished: undefined,
    finishedMsg: null,
    img: null,
    msg: null,
    msgText: ""
  }
  },
  function(newElements) {
    salvattore['append_elements'](document.getElementById('gallery'), newElements);
});
