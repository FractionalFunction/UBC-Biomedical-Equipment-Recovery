// Main Javascript file

function checkNavbarClearence(selector, paddingOriginal) {
    // Change the position of content-main according to
    // the height of the navbar.
    // Set `selector` to be the element affected (normally #content-main)
    // Set `paddingOriginal` to the initial padding of the element
    var paddingNew = "calc(" + paddingOriginal + " + " + $("#navbar nav").height().toString() + "px)"
    $(selector).css("padding-top", paddingNew);
}
