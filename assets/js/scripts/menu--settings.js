//Menu Settings

var nav = responsiveNav(".site-header__nav ul",
{
  animate: true, // Boolean: Use CSS3 transitions, true or false
  transition: 300, // Integer: Speed of the transition, in milliseconds
  label: "&#xe803", // String: Label for the navigation toggle
  insert: "before", // String: Insert the toggle before or after the navigation
  customToggle: "", // Selector: Specify the ID of a custom toggle
  closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
  openPos: "relative", // String: Position of the opened nav, relative or static
  navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
  navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
  jsClass: "js", // String: 'JS enabled' class which is added to  element
});

$( document ).ready(function() {
  $('.page-about .active a').click(function() {
    return false;
  });

  $('.page-contact .active a').click(function() {
    return false;
  });

  $('.blog .active a').click(function() {
    return false;
  });

  $('.blog .current-cat a').click(function() {
    return false;
  });

  $('.category .current-cat a').click(function() {
    return false;
  });

  $('.home .site-header__link').click(function() {
    return false;
  });
});
