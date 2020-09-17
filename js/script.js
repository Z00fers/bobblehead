// $(document).ready(function () {
//     const tag = document.querySelector("#wrapper");
//     tag.addEventListener("transitionend", function () {
//         alert("test");
//         // tag.removeEventListener("transitionend", function () {

//         // });
//     });
// })

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

function gotoTag(id) {
    toggleSidebar();





    // const tag = document.querySelector("#wrapper");
    // tag.addEventListener("transitionend", function () {
    //     alert("test1");
    //     tag.removeEventListener("transitionend", function () {
    //         alert("test2");
    //     });
    // });
    document.querySelector("#" + tag).scrollIntoView({
        behaviour: "smooth"
    });
};
