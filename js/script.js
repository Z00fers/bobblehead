$(document).ready(function () { });

$("#menu-toggle").click(function (e) {
    e.preventDefault();
    toggleSidebar();
});

$(".backdrop").click(function (e) {
    e.preventDefault();
    toggleSidebar();
});

function toggleSidebar() {
    $("#wrapper").toggleClass("toggled");
    $(".backdrop").toggleClass("backdrop-enabled");
};

function gotoTag(tag) {
    toggleSidebar();
    $("#wrapper").on("transitionend", function (e) {
        $(this).off(e);
        var element = document.querySelector(tag);
        if (element == null) return;
        var $container = $(".container-fluid"), $scrollTo = $(tag);
        // alert($scrollTo.offset().top + " " + 5 * getEmPxValue());
        // bug with viewport, goes after pixel value on viewport and not absolute px
        $container.animate({
            scrollTop: $scrollTo.offset().top - 5 * getEmPxValue()
        }, 1000);
    });
}

function getEmPxValue() {
    var div = document.getElementById("emToPx");
    div.style.height = '1em';
    var pxValue = div.offsetHeight;
    div.style.height = '0';
    return pxValue;
}
