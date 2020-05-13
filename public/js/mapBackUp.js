window.onload = startMap();
function mostrar() {
    const myData = JSON.parse(data);
    console.log(myData.Alex.description);

    Object.keys(data).forEach(key => console.log(key));
}


function startMap() {
    mapboxgl.accessToken = 'pk.eyJ1IjoibmVwaGlsaW0wNzQiLCJhIjoiY2s5dzF3ZWt2MDViYTNocDcwN2p0ZW4wcCJ9.TOVyey4cjq9r0aN2c2C7uw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/nephilim074/ck990xvtk0fib1ipluq2yf9gw',
        center: [-75.582397, 6.160152],
        zoom: 14
    });
    map.addControl(new mapboxgl.NavigationControl());

    map.on('load', function () {
        map.addSource('places', {
            'type': 'geojson',
            'data': {
                'type': 'FeatureCollection',
                'features': [
                    {
                        'type': 'Feature',
                        'properties': {
                            'description':
                                '<strong>Afiliado #1</strong><p>Aquí van mis detalles hehe buscame ;)</p> <a href=#> ver más... </a>',
                            'icon': 'music'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-75.582397, 6.160152]
                        }
                    }
                ]
            }
        });
        // Add a layer showing the places.
        map.addLayer({
            'id': 'places',
            'type': 'symbol',
            'source': 'places',
            'layout': {
                'icon-image': '{icon}-15',
                'icon-allow-overlap': true
            }
        });

        // When a click event occurs on a feature in the places layer, open a popup at the
        // location of the feature, with description HTML from its properties.
        map.on('click', 'places', function (e) {
            var coordinates = e.features[0].geometry.coordinates.slice();
            var description = e.features[0].properties.description;

            // Ensure that if the map is zoomed out such that multiple
            // copies of the feature are visible, the popup appears
            // over the copy being pointed to.
            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }

            new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(description)
                .addTo(map);
        });

        // Change the cursor to a pointer when the mouse is over the places layer.
        map.on('mouseenter', 'places', function () {
            map.getCanvas().style.cursor = 'pointer';
        });

        // Change it back to a pointer when it leaves.
        map.on('mouseleave', 'places', function () {
            map.getCanvas().style.cursor = '';
        });

        map.on('click', function (e) {
            console.log(e.lngLat);
        });

    });
}

function marker() {
    var marker1 = L.marker([-75.58291198412968, 6.1611536195850505]).addTo(map);
}