@extends('layouts.app')

@section('content') 
<div class="card" style="width: 18rem;">
  <img class="img-thumbnail" src="" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">{{ $nombre }}</h5>
  <p class="card-text">{{ $descripcion }}</p>
    <a href="#" class="btn btn-primary">Ver mas...</a>
  </div>
</div>
@endsection