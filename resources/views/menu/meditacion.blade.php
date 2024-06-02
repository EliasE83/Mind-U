@extends('layouts.template')

@push('head')
@vite('resources/css/tarjeta.css')
@endpush

@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">  

{{-- Div del menú --}}
  @component('components.newmenu')
  @endcomponent
{{-- Fin  Div del menú --}}


    <div class="flex flex-auto items-center justify-center">

        {{-- <h1 class="text-4xl font-bold ">AQUÍ VA EL CONTENIDO</h1> --}}

        <div class="flex flex-col w-1/3">

            <div class="card" style="background-color: #FF97D9">
                <div class="header">
                  {{-- <span class="icon">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path clip-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" fill-rule="evenodd"></path>
                    </svg>
                  </span> --}}
                  <h1>VIDEOS GUIADOS</h1>
                </div>
              
                <p class="message">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                  vel adipisci blanditiis voluptates eum. Nam, cum minima?
                </p>

                <p class="message">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                    vel adipisci blanditiis voluptates eum. Nam, cum minima?
                  </p>

                  <p class="message">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                    vel adipisci blanditiis voluptates eum. Nam, cum minima?
                  </p>

                  <p class="message">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                    vel adipisci blanditiis voluptates eum. Nam, cum minima?
                  </p>
                
                  
                <div class="actions">
                  <a class="read" style="background-color: #FF35C2" href="">
                    VER MÁS
                  </a>
                </div>

            </div>   

        </div>

        <div class="flex flex-col w-1/3">
            <div class="card" style="background-color: #D290ED">
                <div class="header">
                    {{-- <span class="icon">
                      <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" fill-rule="evenodd"></path>
                      </svg>
                    </span> --}}
                    <h1>VIDEOS</h1>
                    
                  </div>
                
                  <p class="message">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                    vel adipisci blanditiis voluptates eum. Nam, cum minima?
                  </p>
  
                  <p class="message">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                      vel adipisci blanditiis voluptates eum. Nam, cum minima?
                    </p>
  
                    <p class="message">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                      vel adipisci blanditiis voluptates eum. Nam, cum minima?
                    </p>
  
                    <p class="message">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                      vel adipisci blanditiis voluptates eum. Nam, cum minima?
                    </p>
                  
                    
                  <div class="actions">
                    <a class="read" style="background-color: #7F4CA5" href="">
                      VER MÁS
                    </a>
                  </div>
  
              </div>
        </div>

        <div class="flex flex-col w-1/3">
            <div class="card" style="background-color: #FF8243">
                <div class="header">
                  {{-- <span class="icon">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path clip-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" fill-rule="evenodd"></path>
                    </svg>
                  </span> --}}
                  <h1>TALLERES</h1>
                </div>
              
                <p class="message">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                  vel adipisci blanditiis voluptates eum. Nam, cum minima?
                </p>

                <p class="message">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                    vel adipisci blanditiis voluptates eum. Nam, cum minima?
                  </p>

                  <p class="message">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                    vel adipisci blanditiis voluptates eum. Nam, cum minima?
                  </p>

                  <p class="message">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
                    vel adipisci blanditiis voluptates eum. Nam, cum minima?
                  </p>
                
                  
                <div class="actions">
                  <a class="read" style="background-color: #FCB48C" href="">
                    VER MÁS
                  </a>
                </div>

            </div> 
        </div>
        
        

    </div>
   
</div>
{{-- Fin de Div principal --}}

{{-- Footer --}}
{{-- Fin Footer --}}

@endsection