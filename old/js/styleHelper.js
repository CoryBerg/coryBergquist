window.addEventListener('load', function() {
	$('.offset').css('height', window.height*2)
				.css('margin-top', -window.height + 250);
	$('.concrete').css('height', Math.floor(window.height/250)*250)
				  .css('margin-top', -window.height + 250);
	$('.transition').css('height', window.height);
	$('section').css('min-height', window.height);
});

window.addEventListener('resize', function() {
	$('.offset').css('height', window.height*2)
				.css('margin-top', -window.height + 125);
	$('.concrete').css('height', Math.floor(window.height/250)*250)
				  .css('margin-top', -window.height + 250);
	$('.transition').css('height', window.height);
	$('section').css('min-height', window.height);
});