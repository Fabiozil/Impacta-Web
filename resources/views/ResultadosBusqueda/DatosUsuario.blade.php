@extends('Reciclador.layout_reciclador')




@section('form-1')
<div class="py-5 text-center" style="height: 20%">
    <h1>Datos de la comunidad</h1>
   
</div>
<div class="row" style='height:80%;'>
    <div class="col-3" style="height: 100%">
        <div class="row" style="height: 100%">
            <div class="container" id='contenedor-formulario' style="height: 90%">
                <div class="row " style="height: 100%">
                    <div class="col-12">
                        <div class="py-5 text-center" style="height: 20%">
                           
                        </div>
                        <div class="col-12" style="height:25vh">
                            <img src="/icons/user.png" alt="Imagen perfil" style="height: 100%;;max-width: 100%;">
                        </div>   
                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-9" style="height: 100%">
        <div class="row" style="height: 100%">
            <div class="container" id='contenedor-formulario' style="height: 90%; overflow: auto">
                <div class="row" style="height: 100%">
                    <div class="col-12">
                        <div class="py-5 text-center" style="height: 20%">
                       
                        </div>
                        <section class="mensaje row">
                
                <div class="py-2 col-12  order-first">
                    <p> 
                        <h2>Nombre de la corporación</h1>
                        <br>
                        A 0 km de ti
                        <br>
                        Direccion:
                        <br>
                        Municipio de Medellín
                        <br>
                        Reciclador asignado
                    </p>
                </div>
            </section>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/Resultados">
                            <button type="submit" class="btn btn-light">Atras</button>
                        </a>  
</div>
@endsection