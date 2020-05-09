@extends('layouts.app')
@section('navbar-left')
<li class="nav-item mx-lg-2 my-2 my-lg-0">
    <a class="btn btn-success btn-block" href="{{route('recyclers.create')}}">
        <i class="fas fa-user-plus"> </i> {{__('Añadir Reciclador')}}
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
    <div class="row cont-rec">
        @foreach ($recyclers as $recycler)
        <div class="col-md-4">
            <div class="card my-3 py-2" >
                <div class="card-body py-2">
                <a href="{{route('recyclers.show',$recycler->id)}}">
                  <img class="float-left w-25 p-5" src="" alt="" srcset="">
                  <h5 class="card-title">{{__('Apodo').': '.$recycler->apodo}} </h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{__('Nombre').': '.$recycler->nombres.' '.$recycler->apellidos}}</h6>
                  <p class="card-text">{{__('Celular'.': '.$recycler->celular)}}</p>
                  </a>
                 <div class="float-right my-2">
                    <a href="{{route('recyclers.edit',['recycler'=>$recycler->id])}}" class="btn btn-primary  card-link">
                        <i class="fas fa-user-edit"></i> {{__('Editar')}}</a>
                    <a href="#" class="btn btn-danger  card-link">
                        <i class="fas fa-user-minus"></i> {{__('Eliminar')}}</a>
                 </div>
                </div>
              </div>
        </div>
        @endforeach
        <div class="col-md-12">
        {{ $recyclers->links() }}
        </div>
    </div>
</div>
@endsection
