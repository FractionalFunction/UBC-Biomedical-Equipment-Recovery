// Main Javascript file


$(window).scroll(function() {
    if ($(window).scrollTop() > $("#content-main").offset().top - $("#navbar nav").height()) {
        $("#navbar nav").removeClass("on-cover");
    } else {
        $("#navbar nav").addClass("on-cover");
    }
});
