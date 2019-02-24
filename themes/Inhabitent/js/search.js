(function($) {
  $(function() {
    $('#search').on('hover', () => {
      $('.search-bar').toggleClass('after-select');
    })
    $('#search').on('hover', () => {
        $('.main-navigation').toggleClass('move-over');
      });
  });
})(jQuery);
