@extends('layouts.app')
@section('navbar-left')
<li class="nav-item mx-lg-2 my-2 my-lg-0">
    <a class="btn btn-success btn-block" href="{{route('recyclers.create')}}"  data-toggle="tooltip" data-placement="bottom" title="Añadir un nuevo reciclador">
        <i class="fas fa-user-plus"> </i> {{__('Añadir')}}
    </a>
</li>
<li class="nav-item">
    <form class="my-2 my-lg-0">
    <div class="input-group">
        <input type="text" class="form-control " placeholder="Buscar reciclador" aria-label="Buscador de recicladores" aria-describedby="filtrar">
        <div class="input-group-append">
          <button class="btn btn-outline-success" type="button" id="filtrar">
            <i class="fas fa-search"></i>
            {{__('Buscar')}}</button>
        </div>
      </div>
    </form>
</li>
@endsection
@section('content')
<div class="card shadow w-100">
    <div class="card-header">
        <div class="row ">
            <div class="col-md-12">
                <div class="py-5 text-center titulo">
                    <h1 class="text-success">Mis recicladores</h1>
                    <p class="lead">Aquí podrás encontrar los perfiles de todos los recicladores que hacen parte de tu organización</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 p-1">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 3 meses</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">Avimilé Ribas</p>
                                <p>Apodo: Avi</p>
                                <p>Teléfono: 333 31 42</p>
                                <p>Usuarios asignados: 4</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Editar</button>
                            </a>
                            <a href="{{ url('/comunidad') }}">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 p-1">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 1 mes</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">Kevin Tellez</p>
                                <p>Apodo: Kete</p>
                                <p>Teléfono: 330 21 19</p>
                                <p>Usuarios asignados: 1</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Editar</button>
                            </a>
                            <a href="{{ url('/comunidad') }}">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 p-1">
                                <img src="{{ url('/Cano.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 2 años</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">German Exequiel Cano</p>
                                <p>Apodo: Cano</p>
                                <p>Teléfono: 313 61 72</p>
                                <p>Usuarios asignados: 6</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Editar</button>
                            </a>
                            <a href="{{ url('/comunidad') }}">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 p-1">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 6 meses</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">Stiven Mendoza</p>
                                <p>Apodo: Mendo</p>
                                <p>Teléfono: 313 13 23</p>
                                <p>Usuarios asignados: 4</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Editar</button>
                            </a>
                            <a href="{{ url('/comunidad') }}">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 p-1">
                                <img src="{{ url('/Jeison.jpg') }}" class="border border-success rounded-circle circ-igual" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 1 año</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">Jeison Guzmán</p>
                                <p>Apodo: Jeison</p>
                                <p>Teléfono: 253 19 72</p>
                                <p>Usuarios asignados: 12</p>

                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Editar</button>
                            </a>
                            <a href="{{ url('/comunidad') }}">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>
<div class="container-fluid">
    
    
</div>

@endsection
