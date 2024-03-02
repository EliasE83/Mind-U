@extends('layouts.template')

@section('content')

{{-- Nav --}}
@include('partials.navbar')
{{-- Fin Nav --}}

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">  

  {{-- Div del menú --}}
    @component('components.menu')      
    @endcomponent    
  {{-- Fin  Div del menú --}}

  {{-- Inicio de Div del personaje  --}}
    <div class="flex items-center justify-center mx-auto my-auto">
      <img src="{{ asset('images/neco.png')}}" class="justify-center w-auto h-auto" alt="Neco">
    </div>
  {{-- Fin de Div del personaje --}}

  {{-- Inicio de Div de los colores y chatbot --}}
      <div class="flex flex-col ">
        {{-- Circulo principal --}}
        <div class="mx-auto my-auto">
          <form action="">          
            <div class="wrapper">

              <input type="checkbox" id="toogle" class="hidden-trigger">

              <label for="toogle" class="circle">

              </label>

              <div class="subs">
                <button class="sub-circle" onclick="cambiarColor('#fa7b79')">
                  <input value="#fa7b79" name="sub-circle" type="radio" id="sub" class="hidden-sub-trigger">
                  <label for="sub1" style="background-color:#fa7b79"></label>
                </button>

                <button class="sub-circle" onclick="cambiarColor('#FFA500')">
                  <input value="1" name="sub-circle" type="radio" id="sub" class="hidden-sub-trigger">
                  <label for="sub2" style="background-color:#FFA500"></label>
                </button>

                <button class="sub-circle" onclick="cambiarColor('#FCF4D8')">
                  <input value="1" name="sub-circle" type="radio" id="sub" class="hidden-sub-trigger">
                  <label for="sub3" style="background-color:#FFFF00"></label>
                </button>

                <button class="sub-circle" onclick="cambiarColor('#00d6a0')">
                  <input value="1" name="sub-circle" type="radio" id="sub" class="hidden-sub-trigger">
                  <label for="sub4" style="background-color:#00d6a0"></label>
                </button>

                <button class="sub-circle" onclick="cambiarColor('#00e5db')">
                  <input value="1" name="sub-circle" type="radio" id="sub" class="hidden-sub-trigger">
                  <label for="sub5" style="background-color:#00e5db"></label>
                </button>

                <button class="sub-circle" onclick="cambiarColor('#b37b92')">
                  <input value="1" name="sub-circle" type="radio" id="sub" class="hidden-sub-trigger">
                  <label for="sub6" style="background-color:#b37b92"></label>
                </button>

                <button class="sub-circle" onclick="cambiarColor('#EE82EE')">
                  <input value="1" name="sub-circle" type="radio" id="sub" class="hidden-sub-trigger">
                  <label for="sub7" style="background-color:#EE82EE"></label>
                </button>

                <button class="sub-circle" onclick="cambiarColor('brown')">
                  <input value="1" name="sub-circle" type="radio" id="sub" class="hidden-sub-trigger">
                  <label for="sub8" style="background-color:brown"></label>
                </button>
              </div>
            </div>
          </form>
        </div>
        {{-- Circulo principal --}}
        {{-- Chat Bot --}}
        <div class="bg-white border border-slate-200 grid grid-cols-6 gap-2 rounded-xl p-2 text-sm mx-12 my-auto">
            <h1 class="text-center text-slate-200 text-xl font-bold col-span-6">Enviar Mensaje</h1>
            <textarea placeholder="Tus sentimientos..." class="bg-slate-100 text-slate-600 h-28 placeholder:text-slate-600 placeholder:opacity-50 border border-slate-200 col-span-6 resize-none outline-none rounded-lg p-2 duration-300 focus:border-slate-600"></textarea>
            <button class="fill-slate-600 col-span-1 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-100 hover:border-slate-600 focus:fill-blue-200 focus:bg-blue-400 border border-slate-200">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
              <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
              </svg>
            </button>

            <button class="fill-slate-600 col-span-1 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-100 hover:border-slate-600 focus:fill-blue-200 focus:bg-blue-400 border border-slate-200">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
              <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM174.6 384.1c-4.5 12.5-18.2 18.9-30.7 14.4s-18.9-18.2-14.4-30.7C146.9 319.4 198.9 288 256 288s109.1 31.4 126.6 79.9c4.5 12.5-2 26.2-14.4 30.7s-26.2-2-30.7-14.4C328.2 358.5 297.2 336 256 336s-72.2 22.5-81.4 48.1zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
              </svg>
            </button>

            <span class="col-span-2"></span>

            <button class="bg-slate-100 stroke-slate-600 border border-slate-200 col-span-2 flex justify-center rounded-lg p-2 duration-300 hover:border-slate-600 hover:text-white focus:stroke-blue-200 focus:bg-blue-400">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
              </svg>                
            </button>    
        </div>
        {{-- Chat Bot --}} 
      </div>       
  {{-- Fin de Div de los colores y chatbot --}}  

</div>
{{-- Fin de Div principal --}}

<script>
  function cambiarColor(color){
    var colorFondo = color;
    document.body.style.backgroundColor = colorFondo;
  }
</script>

{{-- Footer --}}
{{-- Fin Footer --}}

@endsection
