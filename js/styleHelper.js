window.addEventListener('load', function() {
	$('.transition').css('height', window.height*2)
					.css('margin-top', -window.height + 125);
	$('#ground').css('height', window.height);
});

window.addEventListener('resize', function() {
	$('.transition').css('height', window.height*2)
					.css('margin-top', -window.height + 125);
	$('#ground').css('height', window.height);
});