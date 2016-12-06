// Scripts that only apply to subpages

$(document).ready(function(){
    // Do these things onload
    checkNavbarClearence("#content-main", "0px");
});
window.onresize = function() {
    // Do these things onresize
    checkNavbarClearence("#content-main", "0px");
}
