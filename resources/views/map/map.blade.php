<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapa</title>
    {{-- Mapbox --}}
    <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
   
    <style>
        #map{
            width: 800px;
            height: 500px;
        }
    </style>
</head>
<body>
    <h1>Mi mapa</h1>

    <div id="map"></div>

    <br>
    <input type="text" id="coordenadas">

    <script>
        const data = @json($data);
    </script>

    <script src="js/map.js"></script>

</body>
</html>