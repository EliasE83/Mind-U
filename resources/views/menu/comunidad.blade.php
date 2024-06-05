@extends('layouts.template')

@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">  

{{-- Div del menú --}}
    @component('components.newmenu')
    @endcomponent
{{-- Fin  Div del menú --}}


    <div class="flex flex-auto items-center justify-center">

        <h1 class="text-4xl font-bold text-center">AQUÍ VA EL CONTENIDO</h1>

    </div>
   
</div>
{{-- Fin de Div principal --}}

{{-- Footer --}}
{{-- Fin Footer --}}

@endsection