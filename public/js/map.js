
L.mapbox.accessToken = 'pk.eyJ1IjoibmVwaGlsaW0wNzQiLCJhIjoiY2s5dzF3ZWt2MDViYTNocDcwN2p0ZW4wcCJ9.TOVyey4cjq9r0aN2c2C7uw';

var map = L.mapbox.map('map')
    .setView([6.160152, -75.582397], 14)
    .addLayer(L.mapbox.styleLayer('mapbox://styles/nephilim074/ck990xvtk0fib1ipluq2yf9gw'));

const myData = JSON.parse(data);
const users = myData.Users;
// console.log(users);
window.onload = ciclo(data);
window.onload = map.on('click', onMapClick);

function mostrar() {
    const myData = JSON.parse(data);
    console.log(myData);
}

function ciclo(data) {
    const myData = JSON.parse(data);
    const users = myData.Users;
    // console.log(users);
    for (let i = 0, len = users.length; i < len; i++) {
        const marker = L.marker(users[i].coords).addTo(map)
            .bindPopup(`<strong>${users[i].name}</strong><p>${users[i].description}</p> <a href=#> ver más... </a>`);
        console.log(users[i].coords);
    }
}

// const { users } = myData;
// dest(myData);
// function dest({ users }) {
//     for (key in obj) {

//     }
// }
//iterable puede ser numerable pero no al revés
function onMapClick(e) {
    const popup = L.popup();
    popup
        .setLatLng(e.latlng)
        .setContent(`<h1>¿Está seguro que es su ubicación? Si es así, presione en continuar</h1>`)
        .openOn(map);
    const coordenadas = [e.latlng.lat, e.latlng.lng];
    console.log(coordenadas);
    const s = document.getElementById("coordenadas");
    s.value = coordenadas;
}