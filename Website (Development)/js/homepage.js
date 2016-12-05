// Scripts that only apply to the homepage

// Make navbar change color once scrolled
function navbarCheckScroll() {
    if ($(window).scrollTop() != 0) {
        $("#navbar nav").removeClass("on-cover");
    } else {
        $("#navbar nav").addClass("on-cover");
    }
}
// Make the navbar change color if the dropdown is expanded
function navbarCheckDropdown() {
    if (!$("#bs-example-navbar-collapse-1").hasClass("collapsing")) {
        if ($("#navbar-mobile-toggle").hasClass("collapsed")) {
            $("#navbar nav").removeClass("on-cover");
        } else {
            navbarCheckScroll()
        }
    }
}

$(document).ready(function() {
    // Do these things onload

});
$(window).scroll(function() {
    // Do these things onscroll
    navbarCheckScroll();
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
            navbarCheckScroll()
        }
    }
}
