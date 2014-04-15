$(document).ready(function() {

	$('.ui.dropdown').dropdown({
      on: 'hover'
  });

  $('.ui.sidebar').sidebar('toggle');

	$('.message .close').on('click', function() {
	  $(this).closest('.message').fadeOut();
	});

  $('.ui.item').popup({
    position : 'bottom left',
    on: 'hover'
  });

  $('input').popup({
    on: 'focus'
  });

  $('.ui.checkbox').checkbox();

  $('.ui.selection.dropdown').dropdown();

});