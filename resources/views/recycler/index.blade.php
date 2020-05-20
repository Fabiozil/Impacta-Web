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
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12">
            <div class="py-5 text-center titulo">
                <h1 class="text-success">Mis recicladores</h1>
                <p class="lead">Aquí podrás encontrar los perfiles de todos los recicladores que hacen parte de tu organización</p>
            </div>
        </div>
    </div>
    <div class="row bg-light justify-content-center">
        @forelse ($recyclers as $recycler)
        <div class="col-md-4">
            <div class="card my-3" >
                <div class="card-body ">
                  <img class="border border-success rounded-circle float-left text-center imgRecycler3 mr-2" src="{{ $recycler->url_path }}" alt="{{ $recycler->nombres }}" srcset="">
                  <h5 class="card-title">{{__('Apodo').': '.$recycler->apodo}} </h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{__('Nombre').': '.$recycler->nombres.' '.$recycler->apellidos}}</h6>
                  <p class="card-text">{{__('Celular').': '.$recycler->celular}}</p>
                 <div class="float-right my-2">
                    <a href="{{route('recyclers.show',$recycler->id)}}" class="btn btn-primary  card-link">
                        <i class="fas fa-user-edit"></i> {{__('Ver')}}</a>
                    <a href="#" class="btn btn-danger card-link">
                        <i class="fas fa-user-minus"></i> {{__('Eliminar')}}</a>
                 </div>
                </div>
              </div>
        </div>
        @empty
        <div class="col-md-8">
            <div class="card my-3" >
                <div class="card-body text-center bold">
                    <h5 class="card-title text-danger">No hay recicladores actualmente en tu corporaci&oacute;n</h5>
                    <h6 class="card-subtitle">Te invitamos a añadir tu primer reciclador</h6>
                    <a class="btn btn-success btn-block my-2" href="{{route('recyclers.create')}}"  data-toggle="tooltip" data-placement="bottom" title="Añadir un nuevo reciclador">
                        <i class="fas fa-user-plus"> </i> {{__('Añadir')}}
                    </a>
                </div>
              </div>
        </div>
        @endforelse
        <div class="col-md-12">
        {{ $recyclers->links()}}
        </div>
    </div>
</div>

@endsection
