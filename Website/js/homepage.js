// Scripts that only apply to the homepage

$(window).scroll(function() {
	// Do these things onscroll
	navbarCheckScroll();
});

$(document).ready(function() {
	// Do these things onload
	correctNavbarClearence("#cover-page .jumbotron", "0");
	correctFooterHeight();
});
window.onresize = function() {
	// Do these things onresize
	if (window.innerWidth >= 768) {
		// Desktop navbar is displayed
		$("#navbar nav").addClass("on-cover");
		navbarCheckScroll();
	} else {
		// Mobile navbar is displayed
		if (!$("#navbar-mobile-toggle").hasClass("collapsed")) {
			$("#navbar nav").removeClass("on-cover");
		} else {
			navbarCheckScroll();
		}
	}
	correctNavbarClearence("#cover-page .jumbotron", "0");
	correctFooterHeight();
}
