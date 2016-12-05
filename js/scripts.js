// Main Javascript file

// Make navbar change color once scrolled
$(window).scroll(function() {
    if ($(window).scrollTop() != 0) {
        $("#navbar nav").removeClass("on-cover");
    } else {
        $("#navbar nav").addClass("on-cover");
    }
});
