// Main Javascript file

// Make navbar change color when scrolling past the cover page.
$(window).scroll(function() {
    if ($(window).scrollTop() + $("#navbar nav").height() > $("#content-main").offset().top - 29) {
        // If the position of the page in the window (navbar factored in)
        // is greater than the position of the top of the content-main div,
        // the user has scrolled past the cover page.

        // `#content-main height - 29` because of an alignment issue where
        // the cover page would already have been scrolled under the navbar
        // before the color change occured, causing part of the transparent navbar
        // to show through onto the content div.
        $("#navbar nav").removeClass("on-cover");
    } else {
        $("#navbar nav").addClass("on-cover");
    }
});
