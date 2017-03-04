// Scripts that only apply to subpages

$(document).ready(function(){
	// Do these things onload
	correctNavbarClearence("#content-main", "0px");
	correctFooterHeight();
});
window.onresize = function() {
	// Do these things onresize
	correctNavbarClearence("#content-main", "0px");
	correctFooterHeight();
}

function toggleSection(button, section) {
	if ($(button).html() === "Show") {
		$(button).html("Hide")
		$(section).slideDown();
	} else {
		$(button).html("Show")
		$(section).slideUp();
	}
}
