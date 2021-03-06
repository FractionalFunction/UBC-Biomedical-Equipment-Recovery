// Main Javascript file

function navbarCheckScroll(className) {
	// Make navbar change color once scrolled
	if ($(window).scrollTop() != 0) {
		$("#navbar nav").removeClass(className);
	} else {
		$("#navbar nav").addClass(className);
	}
}

function navbarCheckDropdown(className) {
	// Make the navbar change color if the dropdown is expanded
	if (!$("#bs-example-navbar-collapse-1").hasClass("collapsing")) {
		if ($("#navbar-mobile-toggle").hasClass("collapsed")) {
			$("#navbar nav").removeClass(className);
		} else {
			navbarCheckScroll(className);
		}
	}
}

function correctNavbarClearence(selector, paddingOriginal) {
	// Change the position of content-main according to
	// the height of the navbar.
	// Set `selector` to be the element affected (normally #content-main)
	// Set `paddingOriginal` to the initial padding of the element
	var paddingNew = "calc(" + paddingOriginal + " + " + $("#navbar nav").height().toString() + "px)";
	$(selector).css("padding-top", paddingNew);
}
function correctFooterHeight() {
	// Allows the site to respond to changes in footer height
	// Used for ensuring the footer stays at the bottom of the page
	var footerHeight = $("#footer").height();
	if (window.innerHeight > $("#content-main").height()) {
		$("#content-main").addClass("footer-stick");
		$("#content-main").css("margin-bottom", footerHeight + "px");
		$("#content-main:after").css("height", footerHeight + "px");
		$("#content-main").css("min-height", "calc(100% - " + (footerHeight * 2 + 10) + "px)");
	} else {
		$("#content-main").removeClass("footer-stick");
		$("#content-main").css("margin-bottom", "0");
		$("#content-main:after").css("height", "0");
		$("#content-main").css("min-height", "100%");
	}
}
