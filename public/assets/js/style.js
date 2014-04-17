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

  $('.ui.button').popup({
    on: 'hover'
  });

  $('.ui.checkbox').checkbox();

  var
      changeSides = function() {
        $('.ui.shape')
          .eq(0)
            .shape('flip over')
            .end()
          .eq(1)
            .shape('flip over')
            .end()
          .eq(2)
            .shape('flip back')
            .end()
          .eq(3)
            .shape('flip back')
            .end();
      };

  $('.masthead .information').transition('scale in');

  setInterval(changeSides, 3000);

});