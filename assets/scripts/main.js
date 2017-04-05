(function($) {
  $(document).on('ready', function() {
    $(document).on('click', '.header__menu-toggle', function(event) {
      event.preventDefault();
      $('.header__menu').toggle();
    });
  });
  $(window).on('load', function() {
    //JS
  });
})(jQuery);
