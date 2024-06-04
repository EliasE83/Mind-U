@extends('layouts.template')

@push('head')
@vite('resources/css/registro.css')
<link rel="icon" href="{{asset('images/Logo_Mind_U.jpeg')}}">
<link rel="icon" href="{{asset('images/Perfil.jpg')}}">
@endpush

@section('content')

<div class="flex w-full h-screen items-center justify-center">  

        <form class="container" action="/">
            <div class="texto text-center">
                <h1><strong>REGISTRO</strong></h1>
                <h4><strong>BIENVENIDO</strong></h4>
            </div>
            <div class="mb-3">
            <label for="nombre" class="text form-label"><strong>Nombre Completo</strong></label>
            <input type="text" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
            <label for="contraseña" class="text form-label"><strong>Contraseña</strong></label>
            <input type="password" class="form-control" id="contraseña" required>
            </div>
            <div class="mb-3">
            <label for="usuario" class="text form-label"><strong>Nombre de Usuario</strong></label>
            <input type="text" class="form-control" id="usuario" required>
            </div>
            <div class="mt-3 text-center">
            
            <a href="/login" class="cancelar btn btn-danger btn-block"><strong>Cancelar</strong></a>
            <button type="submit" class="btn btn-success btn-block"><strong>Registrarse</strong></button>
            
        </form>
          </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</div>
@endsection