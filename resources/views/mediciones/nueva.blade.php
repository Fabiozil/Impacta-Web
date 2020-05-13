@extends('layouts.app')

@section('content') 
{{-- include jQuery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        //var fieldHTML = '<div class="form-row"><div class="col"><label for="organico">KG Orgánicos</label><br /><div class="input-group"><input type="number" class="form-control @error('number') is-invalid @enderror"id="organico"name="number"value="0"required/>@error('number')<span class="invalid-feedback" role="alert"><strong>{{ $message}}</strong></span>@enderror</div></div><div class="col"><label for="vidrio">KG Vidrio</label><br /><input class="form-control" type="number" id="vidrio" name="vidrio"value="0"/></div><a href="javascript:void(0);" class="btn btn-danger remove_button">Remover</a></div><br>'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Seleccionar 
            var opciones = $("select.opciones").val()
            var campo = '<div class="form-row"><div class="col"><label for="organico">KG Orgánicos</label><br /><div class="input-group"><input type="number" class="form-control @error('number') is-invalid @enderror"id="organico"name="number"value="0"required/>@error('number')<span class="invalid-feedback" role="alert"><strong>{{ $message}}</strong></span>@enderror</div></div><div class="col"><label for="vidrio">KG Vidrio</label><br /><input class="form-control" type="number" id="vidrio" name="vidrio"value="0"/></div><a href="javascript:void(0);" class="btn btn-danger remove_button">Remover</a></div><br>'; //New input field html 
            console.log(opciones);
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(campo); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    
</script>

<div class="field_wrapper">
    <label for="fechacorte">Fecha de Corte</label><br />
    <div class="form-row">
        <div class="input-group col-6">        
            <input 
            type="date"
            class="form-control @error('date') is-invalid @enderror"
            placeholder="{{ __('date') }}"
            id="fechacorte"
            name="date"
            value="1 Enero 2020"
            required autofocus
            />
            @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>help</strong>
            </span>
            @enderror
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class ="col-4">
            <select class="custom-select opciones">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-2">
            <a href="javascript:void(0);" class="btn btn-success btn-block add_button" title="Add field">Agregar Campo</a>
        </div>
    </div>
    <br>
</div>

{{--<form action="/indicadores">
    @csrf
    <label for="fechacorte">Fecha de Corte</label><br />
    <div class="input-group input-group-lg">        
        <input 
        type="date"
        class="form-control @error('date') is-invalid @enderror"
        placeholder="{{ __('date') }}"
        id="fechacorte"
        name="date"
        value="1 Enero 2020"
        required autofocus
        />
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>help</strong>
        </span>
        @enderror
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <label for="organico">KG Orgánicos</label><br />
            <div class="input-group input-group-lg">    
                <input
                type="number"
                class="form-control @error('number') is-invalid @enderror"
                id="organico"
                name="number"
                value="0"
                required
                />
                @error('number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message}}</strong>
                </span>
                @enderror
            </div>
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
    --}}
</form>
@endsection