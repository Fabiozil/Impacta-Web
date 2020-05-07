@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recycler</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container">

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">dias_horas</th>
                                          <th scope="col">sector</th>
                                          <th scope="col">tipo</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                @foreach ($zonas as $zona)
                                    <tr>
                                        <th scope="row">{{$zona->id}}</th>
                                        <td>{{$zona->dias_horas}}</td>
                                        <td>{{$zona->sector->nombre_sect}}</td>
                                        @if ($zona->sector->tipo===1)
                                        <td>Barrio</td>
                                        @else
                                        <td>Vereda</td>
                                        @endif
                                    </tr>
                                @endforeach
                                      </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
