// Scripts that only apply to the homepage

// Make navbar change color once scrolled
$(window).scroll(function() {
    // Do these things onscroll
    if ($(window).scrollTop() != 0) {
        $("#navbar nav").removeClass("on-cover");
    } else {
        $("#navbar nav").addClass("on-cover");
    }
});

$(document).ready(function(){
    // Do these things onload

});
window.onresize = function() {
    // Do these things onresize

}
