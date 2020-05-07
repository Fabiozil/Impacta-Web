
L.mapbox.accessToken = 'pk.eyJ1IjoibmVwaGlsaW0wNzQiLCJhIjoiY2s5dzF3ZWt2MDViYTNocDcwN2p0ZW4wcCJ9.TOVyey4cjq9r0aN2c2C7uw';

var map = L.mapbox.map('map')
    .setView([6.160152, -75.582397], 14)
    .addLayer(L.mapbox.styleLayer('mapbox://styles/nephilim074/ck990xvtk0fib1ipluq2yf9gw'));

// var marker1 = L.marker([6.1611536195850505, -75.58291198412968])
//     .addTo(map).bindPopup("<strong>Afiliado #1</strong><p>Aquí van mis detalles hehe buscame ;)</p> <a href=#> ver más... </a>'");
const myData = JSON.parse(data);
const users = myData.Users;
// console.log(users);

for (let i = 0, len = users.length; i < len; i++) {
    const marker = L.marker(users[i].coords).addTo(map)
        .bindPopup(`<strong>${users[i].name}</strong><p>${users[i].description}</p> <a href=#> ver más... </a>`);
    console.log(users[i].coords);
}




function mostrar() {
    const myData = JSON.parse(data);
    console.log(myData);
}

function ciclo() {
    const myData = JSON.parse(data);
    const users = myData.Users;
    // console.log(users);
    for (let i = 0, len = users.length; i < len; i++) {
        var marker = L.marker(users[i].coords).addTo(map);
    }
}