$(document).ready(function () {
	$(window).scroll(function () {
		$(this).scrollTop() > 100 ? $(".scrollup").fadeIn() : $(".scrollup").fadeOut()
		}), $(".scrollup").click(function () {
			return $("html, body").animate({
			scrollTop: 0
		}, 600), !1
	})
});
