$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();  // Toggles the Bootstrap tooltips

    $(".feature-text").mouseover(function() {
        $(this).closest("figure").find("img").addClass("photo-hover");
    });

    $(".feature-text").mouseleave(function() {
        $(this).closest("figure").find("img").removeClass("photo-hover");
    });

    // Remove the loader background under the iframe
    $("#car-frame").on("load", function() {
        $(".container-box").removeClass("frame-holder");
    });
});

$(".text_big15").click(function() {
    var url = $(".tricky_link").attr("href");
    window.open(url, "_self");
});

//var car_index = Math.floor(Math.random() * 10);
setInterval(function() {
    //car_index < 9 ? car_index++ : car_index = 0;

    $.ajax({
        url: 'php/car_list.php',
        dataType: 'json'
    });
    //$("#car-showcase").load("php/car_list.php", {"url_int": car_index});
    $("#car-showcase").load("php/car_list.php");
}, 10000);
//$("#car-showcase").load("php/car_list.php", {"url_int": car_index});
$("#car-showcase").load("php/car_list.php");