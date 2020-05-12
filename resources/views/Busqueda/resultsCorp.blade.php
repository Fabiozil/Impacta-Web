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
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#detallesModal" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            <a href="{{ url('/') }}">
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
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#detallesModal" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            <a href="{{ url('/') }}">
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
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#detallesModal" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            <a href="{{ url('/') }}">
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
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#detallesModal" style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                            <a href="{{ url('/') }}">
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
    <div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content" >
         <div class="modal-header">
            <h4 class="modal-title" id="favoritesModalLabel">Datos de la corporación</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  
        </div>
        <div class="modal-body">

        <div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                    <div class="row h-100">
                        <div class="container h-80 cont-rec">
                            <div class="row">
                                <div class="col-xl-12 h-100">
                                    <div class="container">
                                        <div class="py-5">    
                                        </div>
                                        <i class="fas fa-user user-icon center-img"></i>  
                                        <div class="py-4 text-center"> 
                                        <h3>Recimed</h3>
                                        <p>Se unió hace 2 meses</p> 
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                    <div class="row h-100">
                        <div class="container cont-rec h-95">
                            <div class="row h-100">
                                <div class="col-xl-10">
                                    <div class="py-5 subtitle">
                                              
                                    </div>
                                    <br>
                                                                
                                    <div class="container cont-rec-nf m-0">
                                        <form>
                                            <div class="form-group w-100">               
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                    <p class="lead">Dirección: Carrera 24 No. 33 - 45</p>     
                                                    </div>
                                                    
                                                    <div class="col-sm-10">
                                                    <p class="lead">Teléfono: 444-44-44</p>
                                                    </div>
                                                    
                                                    <div class="col-sm-10">
                                                    <p class="lead">Municipio de Medellín</p>
                                                    </div>
                                                    
                                                    <div class="col-sm-10">
                                                    <p class="lead">Recicladores agremiados: 11</p>
                                                    
                                                    </div>
                                                    
                                                    <div class="col-sm-10">
                                                    <p class="lead">Usuarios afiliados: 36</p>                                                   
                                                    </div>
                                                    
                                                    <div class="col-sm-10">
                                                    <p class="lead">Emisiones evitadas: 200 ton CO2e</p>
                                                    </div>
                                                </div>                                                         
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <span class="pull-right"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></span>
      </div>
    </div>
  </div>
</div>
   
@endsection
