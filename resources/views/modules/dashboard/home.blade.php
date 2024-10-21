@extends ('layouts/main')

@section('titulo_pagina')
    <h1 class="text-center">Home</h1>
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido</h5>
                        <p class="card-text">Bienvenido a la aplicación de prueba</p>
                        <a href="{{route('logout')}}" class="btn btn-danger">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

