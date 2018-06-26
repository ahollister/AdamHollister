(function($) {
	$(document).ready(function(e) {
		function openModal(event) {
			let modalToActivate = $('.cv-modal[data-modal="' + $(event.target).data('modal') + '"');
			modalToActivate.css('display', 'block');
			$('body').addClass('cv-modal--active');
		}

		function closeModals() {
			$('.cv-modal').each(function() {
				$(this).css('display', 'none');
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
