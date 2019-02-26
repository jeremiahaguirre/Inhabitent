(function($) {
  $(function() {
    $('.search-submit').on('click', event => {
      if (!$('.search-bar').hasClass('after-select')) {
        event.preventDefault();
      }
      $('.search-bar').addClass('after-select');
      $('.main-navigation').addClass('move-over');
      $('.search-field').focus();
    });
    $('.search-field').on('blur', () => {
      $('.search-bar').removeClass('after-select');
      $('.main-navigation').removeClass('move-over');
    });
  });
})(jQuery);