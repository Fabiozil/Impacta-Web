@extends('nav.nav')

@section('conteint')
<button style="background-color: #009900;">
    Nueva Medición
</button>
<button style="background-color: #009900;">
    Historial
</button>
<br />
<h1 style="color: #009933; display: inline-block;">
    Materiales Aprovechados
</h1>

<form action="" method="post">
    <label for="fechacorte">Fecha de Corte</label><br />
    <input
        type="date"
        id="fechacorte"
        name="fechacorte"
        value="1 Enero 2020"
    /><br />
    <label for="vidrio">KG Vidrio</label><br />
    <input
        type="number"
        id="vidrio"
        name="vidrio"
        value="0"
    /><br />
    <label for="latas">KG Latas</label><br />
    <input
        type="number"
        id="latas"
        name="latas"
        value="0"
    /><br />
    <label for="plastico">KG Plástico</label><br />
    <input
        type="number"
        id="plastico"
        name="plastico"
        value="0"
    /><br />
    <label for="organico">KG Orgánicos</label><br />
    <input
        type="number"
        id="organico"
        name="organico"
        value="0"
    /><br />
    <label for="papel">KG Papel</label><br />
    <input
        type="number"
        id="papel"
        name="papel"
        value="0"
    /><br />
    <label for="carton">KG Cartón</label><br />
    <input
        type="number"
        id="carton"
        name="carton"
        value="0"
    /><br />
    <br />
    <input type="submit" value="Continuar" />
</form>
@endsection