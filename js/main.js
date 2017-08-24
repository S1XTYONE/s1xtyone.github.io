$(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
    (function($) {
        $(function() {

          $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
            $(this)
              .addClass('active').siblings().removeClass('active')
              .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
          });

        });
        })(jQuery);
});