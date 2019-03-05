(function($) {
  $(function() {
    $('.icon-search').on('click', event => {
      event.preventDefault();
      $('.search-bar').toggleClass('after-select');
      $('.search-field').focus();
    });

    $('.search-field').on('blur', event => {
      if ($('.search-field').val().length > 0) {
        return false;
      }
      $('.search-bar').removeClass('after-select');
    });
  });
})(jQuery);

//If statement if value in field dont close
//Animation smooth
//Use constants
