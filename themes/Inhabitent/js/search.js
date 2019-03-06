(function($) {
  $(function() {
    const $field = $('.search-field');
    const $bar = $('.search-bar');
    $('.icon-search').on('click', event => {
      event.preventDefault();
      $bar.toggleClass('after-select');
      $field.focus();
    });

    $field.on('blur', event => {
      if ($field.val().length > 0) {
        return false;
      }
      $bar.removeClass('after-select');
    });
  });
})(jQuery);

