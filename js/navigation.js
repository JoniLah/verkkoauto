$('.scrollTop').hide();

$(document).ready(function() {
    var returning = false; // Boolean to check if the return button is pressed

    stickyNav(); // Render the sticky if user is below the page while refreshing

    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
        $(this).scrollTop() > 300 ? $('.scrollTop').fadeIn() : $('.scrollTop').fadeOut();
    });

    //Click event to scroll to top
    $('.scrollTop').click(function() {
        returning = true;
        if (returning) {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        }
    });

    $(document).scroll(function() { 
        if ($(window).scrollTop() === 0) {
            returning = false;
        }
    });
});

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {stickyNav()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop + 10;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyNav() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        $(".mobile-nav-icon").css("color", "black");
    } else {
        navbar.classList.remove("sticky");
        $(".mobile-nav-icon").css("color", "white");
    }
}