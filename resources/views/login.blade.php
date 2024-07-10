@extends('layouts.template')

@push('head')
@vite('resources/css/login.css')
<link rel="icon" href="{{asset('images/Logo_Mind_U.jpeg')}}">
<link rel="icon" href="{{asset('images/Perfil.jpg')}}">
@endpush

@section('content')

<div class="flex w-full h-screen items-center justify-center">  


    <form class="container" action="{{ route('login.store') }}" method="POST">
        @csrf
        <div class="text-center"><h1><strong>INICIO DE SESIÓN</strong></h1></div>

        <div class="mb-3 flex justify-center">
        <img src="{{asset('images/Perfil.jpg')}}" alt="Imagen de Perfil" class="img-fluid rounded-circle perfil-img">
        </div>

        <div class="mb-3 text-center">
        <label for="nombre" class="texto form-label"><strong>Usuario</strong></label>
        <input type="text" class="form-control" name="nombre" required>
        </div>

        <div class="mb-3 text-center">
        <label for="contraseña" class="texto form-label"><strong>Contraseña</strong></label>
        <input type="password" class="form-control" name="contrasena" required>
        </div>
        
        <div class="mt-3 text-center">
        <button type="submit" class="btn btn-primary btn-block"><strong>Ingresar</strong></button>
        </div>

        <div class="mt-3 text-center">
        <a href="/nuevaContra">¿Olvidé mi contraseña?</a>
        </div>

        <div class="mt-3 text-center">
        <a href="/registro">¿No tienes cuenta?, registrate</a>
        </div>

    </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</div>

@endsection