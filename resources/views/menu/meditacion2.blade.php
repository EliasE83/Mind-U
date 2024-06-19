@extends('layouts.template')

@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">  

{{-- Div del menú --}}
    @component('components.newmenu')
    @endcomponent
{{-- Fin  Div del menú --}}


    <div class="flex flex-auto items-center justify-center">

        {{-- <h1 class="text-4xl font-bold text-center">AQUÍ VA EL CONTENIDO</h1> --}}
        
{{-- Div Inicio de botones--}}
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
              <!-- Columna izquierda -->
              <div class="flex flex-col space-y-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Ataque de ansiedad</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Estrés postraumático</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Insomnio</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Alimentación</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Ataque de pánico</button>
              </div>
              <!-- Fin Columna izquierda -->

              <!-- Imagen central -->
              <div class="flex justify-center">
                <img src="https://via.placeholder.com/400" alt="Imagen central" class="rounded-lg shadow-lg">
              </div>
              <!-- Fin Imagen central -->

              <!-- Columna derecha -->
              <div class="flex flex-col space-y-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Estrés</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Ansiedad social</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Ira</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Depresión</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Bipolaridad</button>
              </div>
              <!-- Fin Columna derecha -->

            </div>
        </div>
{{-- Div Fin de botones--}}

    </div>
   
</div>
{{-- Fin de Div principal --}}

{{-- Footer --}}
{{-- Fin Footer --}}

@endsection