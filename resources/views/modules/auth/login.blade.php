@extends('layouts/main')

@section('titulo_pagina')
    <h1 class="text-center">Login</h1>
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    
                    <div class="car-body">
                        <h5 class="card-title mx-3 my-4">Iniciar sesión</h5>
                        <form action="" method="POST">
                            @csrf
                            
                            <div class="mb-3 mx-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mx-3 my-3">
                                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                                <a href="{{ route('registro')}}" class="btn btn-info">Registrate</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection