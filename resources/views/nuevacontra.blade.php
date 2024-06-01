@extends('layouts.template')

@push('head')
@vite('resources/css/nuevacontra.css')
<link rel="icon" href="{{asset('images/Logo_Mind_U.jpeg')}}">
<link rel="icon" href="{{asset('images/Perfil.jpg')}}">
@endpush

@section('content')

<div class="flex w-full h-screen items-center justify-center">  

        <form class="container ">
            <div class="texto text-center">
                <h1><strong>¿Olvidaste tu Contraseña?</strong></h1>
            </div>
        <div class="input">
            <h4 class="text-center"><strong>Por favor ingresa los datos que se te piden</strong></h4>
            <div class="mb-3">
            <label for="nombre" class="text form-label"><strong>Correo Electrónico</strong></label>
            <input type="text" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
            <label for="contraseña" class="text form-label"><strong>Ingresa tu contraseña nueva</strong></label>
            <input type="password" class="form-control" id="contraseña" required>
            </div>
            <div class="mb-3">
            <label for="contraseñanueva" class="text form-label"><strong>Vuelve a escribir tu contraseña nueva</strong></label>
            <input type="password" class="form-control" id="contraseñanueva" required>
            </div>
        </div>
            <div class="mt-3 text-center">
            <a href="/login" class="cancelar btn btn-danger btn-block"><strong>Cancelar</strong></a>
            <button type="submit" class="btn btn-success btn-block"><strong>Confirmar</strong></button>
            </div>
            </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</div>
@endsection