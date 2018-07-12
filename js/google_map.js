function initMap() {
    var herttoniemi = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: herttoniemi
    });
        var marker = new google.maps.Marker({
        position: herttoniemi,
        map: map
    });
}

//AIzaSyC9I9u_nJiTHtJ1KUc4qWq4olDyTcudUTc