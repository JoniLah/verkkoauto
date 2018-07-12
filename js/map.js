function initMap() {
    var loc = {lat: 60.204580, lng: 25.050469};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: loc
    });
    var marker = new google.maps.Marker({
        position: loc,
        map: map
    });
}