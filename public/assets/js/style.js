$(document).ready(function() {

	$('.ui.dropdown')
    .dropdown({
      on: 'hover'
    });

  $('.ui.sidebar').sidebar('toggle');

	$('.message .close').on('click', function() {
	  $(this).closest('.message').fadeOut();
	});

});