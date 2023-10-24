<style>
    #map {
        height: 180px;
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />





<div id="map"></div>






<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    var map = L.map('map').setView([51.505, -0.09], 13);
    map.locate({ setView: true, maxZoom: 16 });

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);



    function obterCoordenadasGoogleMaps() {
        const inputEndereco = document.getElementById("endereco");
        const endereco = inputEndereco.value;
        const apiUrl = "https://nominatim.openstreetmap.org/search?q="+endereco+"&format=json";

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {

                if (data!=null && data.length>0) {

                    const coordenadas = data[0];
                    console.log(`Latitude: ${coordenadas.lat}, Longitude: ${coordenadas.lng}`);
                    map.flyTo([coordenadas.lat, coordenadas.lon], 12);
                    L.marker([coordenadas.lat, coordenadas.lon]).addTo(map)
    .bindPopup('Empresa')
    .openPopup();
                } else {

                    alert('Não foi possível obter as coordenadas para o endereço fornecido.');
                }
            })
            .catch(error => {
                alert('Erro ao processar a solicitação:', error);
            });
    }




</script>