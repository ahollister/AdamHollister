(function($) {
	$(document).ready(function(e) {
		function openModal(event) {
			let modalSelector = '.cv-modal[data-modal="' + $(event.target).data('modal') + '"]';
			$(modalSelector).addClass('cv-modal--active');
			$('body').addClass('cv-modal--active');
		}

		function closeModals() {
			$('.cv-modal').each(function() {
				if ( $(this).hasClass('cv-modal--active') ) {
					$(this).removeClass('cv-modal--active');
				}
			});
			$('body').removeClass('cv-modal--active');
		}

		$('.material-button').click(function(event) {
			// Close modals if close button clicked
			if ( $(event.target).hasClass('material-button--close') ) {
				closeModals();
			} else {
				// Open relevant modal
				openModal(event);
			}
		});
	}); // document.ready
})(jQuery);
