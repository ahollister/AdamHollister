(function($) {
	$(document).ready(function(e) {
		function openMenu() {
			$('.material-navigation').addClass('menu--active');
		}

		function closeMenu() {
			$('.material-navigation').removeClass('menu--active');
		}

		function openModal(event) {
			let modalSelector = '.cv-modal[data-modal="' + $(event.target).data('modal') + '"]';
			$(modalSelector).addClass('cv-modal--active');
			$('body').addClass('cv-modal--active');
			closeMenu();
		}

		function closeModals() {
			$('.cv-modal').each(function() {
				if ( $(this).hasClass('cv-modal--active') ) {
					$(this).removeClass('cv-modal--active');
				}
			});
			$('body').removeClass('cv-modal--active');
		}

		// Handle nav button clicks
		$('.material-button').click(function(event) {
			if ( $(event.target).hasClass('material-button--back') ) {
				closeModals();
			} else if ( $(event.target).hasClass('material-button--menu') ) {
				openMenu();
			} else if ( $(event.target).hasClass('material-button--close-menu') ) {
				closeMenu();
			} else {
				// Open relevant modal
				openModal(event);
			}
		});
	}); // document.ready
})(jQuery);
