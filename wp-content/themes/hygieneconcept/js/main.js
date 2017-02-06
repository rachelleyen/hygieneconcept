$(window).scroll(function() {
	var sticky = $('.site-header'),
	scroll = $(window).scrollTop();

	if (scroll >= 35) sticky.addClass('site-headerfixed');
	else sticky.removeClass('site-headerfixed');
});