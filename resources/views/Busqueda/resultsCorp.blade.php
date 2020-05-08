@extends('layouts.app')
@section('content')
    <div class="py-5 text-center titulo">
        <h1 class="text-primary">Resultados de la búsqueda</h1>
        <p class="lead">Corporaciones encontradas</p>
    </div>
    <div class="row main-r w-100">
        <div class="container cont-rec h-100 main-cr mr-0">    
            <div class="row h-75 overflow-auto">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="lista_corporaciones">
                        <li class="list-group-item" id="item-lista-corporaciones">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Nombre de corporacion</p>
                                        </div>
                                        <div class="row">A 100km de ti</div> 
                                        <br>    
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/perfilu') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            </a>
                                            <a href="{{ url('/perfilc') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-corporaciones">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Nombre de corporacion</p>
                                        </div>
                                        <div class="row">A 100km de ti</div>
                                        <br>
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/perfilu') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            </a>
                                            <a href="{{ url('/perfilc') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                      
                    </ul>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="lista_corporaciones">
                    <li class="list-group-item" id="item-lista-corporaciones">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Nombre de corporacion</p>
                                        </div>
                                        <div class="row">A 100km de ti</div>
                                        <br>
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/perfilu') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            </a>
                                            <a href="{{ url('/perfilc') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-corporaciones">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Nombre de corporacion</p>
                                        </div>
                                        <div class="row">A 100km de ti</div>
                                        <br>
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/perfilu') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            </a>
                                            <a href="{{ url('/perfilc') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="corporaciones">
                    <li class="list-group-item" id="item-lista-corporaciones">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Nombre de corporacion</p>
                                        </div>
                                        <div class="row">A 14km de ti</div>
                                        <br>
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/perfilu') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            </a>
                                            <a href="{{ url('/perfilc') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-corporaciones">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Nombre de corporacion</p>
                                        </div>
                                        <div class="row">A 0km de ti</div>
                                            <br>
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/perfilu') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            </a>
                                            <a href="{{ url('/perfilc') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
    
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
