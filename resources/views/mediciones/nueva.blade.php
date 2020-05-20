@extends('layouts.app')

@section('content') 
<a href="/indicadores/nuevo">
    <button class="btn btn-secondary">Nueva Medición</button>
</a>
<a href="/indicadores/historial">
    <button class="btn btn-secondary">Historial</button>
</a>
<a href="/indicadores">
    <button class="btn btn-secondary">Emisiones</button>
</a>
<br />
<h1>
    Materiales Aprovechados
</h1>


<form action="/indicadores">
    <label for="fechacorte">Fecha de Corte</label><br />
            <input 
                class="form-control"
                type="date"
                id="fechacorte"
                name="fechacorte"
                value="1 Enero 2020"
            />
    <br>
    <div class="form-row">
        <div class="col">
            <label for="organico">KG Orgánicos</label><br />
            <input
                class="form-control"
                type="number"
                id="organico"
                name="organico"
                value="0"
            />
        </div>
        <div class="col">
            <label for="vidrio">KG Vidrio</label><br />
            <input
                class="form-control"
                type="number"
                id="vidrio"
                name="vidrio"
                value="0"
            />
        </div>
      </div>
      <br>
      <div class="form-row">
        <div class="col">
            <label for="latas">KG Latas</label><br />
            <input
                class="form-control"
                type="number"
                id="latas"
                name="latas"
                value="0"
            />
        </div>
        <div class="col">
            <label for="plastico">KG Plástico</label><br />
            <input
                class="form-control"
                type="number"
                id="plastico"
                name="plastico"
                value="0"
            />
        </div>
      </div>
      <br>
      <div class="form-row">
        <div class="col">
            <label for="papel">KG Papel</label><br />
            <input
                class="form-control"
                type="number"
                id="papel"
                name="papel"
                value="0"
            />
        </div>
        <div class="col">
            <label for="carton">KG Cartón</label><br />
            <input
                class="form-control"
                type="number"
                id="carton"
                name="carton"
                value="0"
            />
        </div>
      </div>
    <br>
    <input type="submit" class="btn btn-primary btn-block"value="Continuar" />
</form>
@endsection