//loading
$(window).ready(function () {
	$('.loading-page').fadeOut(400);
	$('body').css('overflow', 'auto')
});
$('.slick2').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
  });