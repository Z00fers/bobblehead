$("#menu-toggle").click(function (e) {
    e.preventDefault();
    toggleSidebar();
});

$(".backdrop").click(function (e) {
    e.preventDefault();
    if ($(".backdrop").hasClass("backdrop-enabled")) {
        toggleSidebar();
    }
});

function toggleSidebar() {
    $("#wrapper").toggleClass("toggled");
    $("body").toggleClass("scroll-disabled");
    $(".backdrop").toggleClass("backdrop-enabled");
};

function gotoTag(tag) {
    toggleSidebar();
    // document.querySelector("#" + tag).scrollIntoView({
    //     behaviour: "smooth"
    // });
};
