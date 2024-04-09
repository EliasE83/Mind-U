@extends('layouts.template')

{{-- Nav --}}
@include('partials.navbar')
{{-- Fin Nav --}}


@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">  

  {{-- Div del menú --}}
    @component('components.menu')      
    @endcomponent    
  {{-- Fin  Div del menú --}}

  {{-- Inicio de Div del personaje  --}}
    <div class="flex items-center justify-center w-1/3">
      <img src="{{ asset('images/neco.png')}}" alt="Neco">
    </div>
  {{-- Fin de Div del personaje --}}

  {{-- Inicio de Div de los colores y chatbot --}}
  <div class="flex flex-col items-center w-1/3 ">
    @component('components.colores')      
    @endcomponent   
    
    @component('components.chatbot')
    @endcomponent
  </div>
  {{-- Fin de Div de los colores y chatbot --}}  

</div>
{{-- Fin de Div principal --}}

{{-- Footer --}}
{{-- Fin Footer --}}

@endsection
