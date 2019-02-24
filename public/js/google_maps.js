var google_map;
function initMap()
{
    google_map = new google.maps.Map(document.getElementById('google'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });
}