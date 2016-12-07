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
