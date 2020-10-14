$(document).ready(function () {
    var logo = document.querySelector(".logo");
    const EmPxValue = getEmPxValue();
    logo.style.width = EmPxValue * 2;
    logo.style.height = EmPxValue * 2;

});

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
    jumpTo(tag);
}

function jumpTo(tag){
    $("#wrapper").on("transitionend", function (e) {
        $(this).off(e);
        goto(tag);
    });
}

function goto(tag) {
    var element = document.querySelector(tag);
    if (element == null) return;
    var $container = $(".container-fluid"), $scrollTo = $(tag);
    $container.animate({
        scrollTop: $scrollTo.offset().top + $container.scrollTop() - 5 * getEmPxValue()
    }, 1000);
}

function getEmPxValue() {
    var div = document.getElementById("emToPx");
    div.style.height = '1em';
    var pxValue = div.offsetHeight;
    div.style.height = '0';
    return pxValue;
}
