@extends('layouts.app')

@section('content') 


<div class="container">
    <div class="card border shadow">
        <div class="card-body">
            <h1 class="py-2 text-center text-success">
                Materiales Aprovechados
            </h1>
            <form action="/indicadores">
                <label for="fechacorte">Fecha de Corte</label>
                        <input 
                            class="form-control w-50 mb-3"
                            type="date"
                            id="fechacorte"
                            name="fechacorte"
                            value="1 Enero 2020"
                        />
                <div class="form-row">
                    <div class="col">
                        <label for="organico">KG Orgánicos</label><br />
                        <input
                            class="form-control mb-3"
                            type="number"
                            id="organico"
                            name="organico"
                            value="0"
                        />
                    </div>
                    <div class="col">
                        <label for="vidrio">KG Vidrio</label><br />
                        <input
                            class="form-control mb-3"
                            type="number"
                            id="vidrio"
                            name="vidrio"
                            value="0"
                        />
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="latas">KG Latas</label><br />
                        <input
                            class="form-control mb-3"
                            type="number"
                            id="latas"
                            name="latas"
                            value="0"
                        />
                    </div>
                    <div class="col">
                        <label for="plastico">KG Plástico</label><br />
                        <input
                            class="form-control mb-3"
                            type="number"
                            id="plastico"
                            name="plastico"
                            value="0"
                        />
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="papel">KG Papel</label><br />
                        <input
                            class="form-control mb-3"
                            type="number"
                            id="papel"
                            name="papel"
                            value="0"
                        />
                    </div>
                    <div class="col">
                        <label for="carton">KG Cartón</label><br />
                        <input
                            class="form-control mb-3"
                            type="number"
                            id="carton"
                            name="carton"
                            value="0"
                        />
                    </div>
                </div>
                <input type="submit" class="btn btn-success btn-block w-50"value="Continuar" />
            </form>
        </div>
    </div>
</div>

@endsection