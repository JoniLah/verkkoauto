$(document).ready(function() {
    $(".mobile-nav-icon").click(function() {
        var nav = $(".navbar-ul");
        var icon = $(".mobile-nav-icon i");

        nav.slideToggle(175);
        (icon.hasClass("fas fa-bars"))?
            icon.removeClass("fas fa-bars").addClass("fas fa-times"):
            icon.removeClass("fas fa-times").addClass("fas fa-bars");
    });
});

function queryCheck(x) {
    if (x.matches) { // If media query matches
        $("#wrap").addClass("wrap-column");
    } else {
        $("#wrap").removeClass("wrap-column");
    }
}

var w980 = window.matchMedia("(max-width: 980px)")
queryCheck(w980) // Call listener function at run time
w980.addListener(queryCheck) // Attach listener function on state changes