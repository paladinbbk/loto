$(document).ready( function() {

	$('.user-avatar img').each(function(){
		userAvatar($(this));
	});

	var tabletd = $('.game-tickets table').width() / 9;
	$('.game-tickets td').width(tabletd).height(tabletd);
});

function userAvatar(image) {
	var parent = image.parent(),
		top = (image.height() - parent.height()) / 2,
		left = (image.width() - parent.width()) / 2;
	image.css({
		position: 'absolute',
		left: -left,
		top: -top
	});

}