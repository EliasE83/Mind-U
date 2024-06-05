@extends('layouts.template')
@push('head')
@vite('resources/css/cuenta.css')
@vite('resources/js/script.js')
<link rel="icon" href="{{asset('images/Profile.png')}}">
@endpush
@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">  

{{-- Div del menú --}}
@component('components.newmenu')
@endcomponent
{{-- Fin  Div del menú --}}
<div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3 text-center">
                        <img src="/Profile.png" alt="Imagen de Perfil" class="img-fluid rounded-circle perfil-img" id="perfilImg">
                        <div>
                            <label for="perfilInput" class="form-label" id="perfilLabel">Cambiar foto de Perfil</label>
                            <input type="file" id="perfilInput" accept=".jpg, .png, .img, .gif" style="display: none;">
                        </div>
                        <input type="file" id="perfilInput" style="display: none;" accept="image/*">
                        <div class="input-group mb-3">
                            <span class="input-group-text d-flex justify-content-between" style="min-width: 100px;" id="inputGroup-sizing-default">Nombre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text d-flex justify-content-between" style="min-width: 100px;" id="inputGroup-sizing-default">Usuario</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text d-flex justify-content-between" style="min-width: 100px;" id="inputGroup-sizing-default">Correo</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text d-flex justify-content-between" style="min-width: 100px;" id="inputGroup-sizing-default">Contraseña</span>
                            <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="mt-3 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form>
                    <h5 class="text-center">Datos Adicionales (Opcional)</h5>
                    <div class="mb-3">
                        <textarea class="form-control" id="cajadetextodedatosadicionales" rows="3"></textarea>
                      </div>
                      <h5 class="text-center">Detalles Personales (Opcional)</h5>
                      <div class="mb-3">
                          <textarea class="form-control" id="cajadetextodedetallespersonales" rows="3"></textarea>
                        </div>
                        <h5 class="text-center">Preferencias de Perfil</h5>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked data-letter="A">
                            <label class="form-check-label" for="flexSwitchCheckChecked">
                                Si deseas que tu perfil sea anónimo, activa las preferencias de perfil, de lo contrario se mostrará tu nombre de usuario y tus datos
                            </label>
                        </div>
                        <div class="mt-3 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Guardar Cambios de Datos</button>
                        </div>
                </form>
            </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="/script.js"></script>
{{-- Fin de Div principal --}}

{{-- Footer --}}
{{-- Fin Footer --}}

@endsection