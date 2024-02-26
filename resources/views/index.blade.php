<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mind U</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('images/logo.png')}}">
</head>
<body class="h-full" style="background-color: #FCF4D8;">

  {{-- Nav --}}
  <div class="flex items-center justify-center h-16 border-b border-black">
    <img src="{{asset('images/logo.png')}}" alt="" class="h-12 w-auto">
  </div>
  {{-- Fin Nav --}}

<div class="flex w-full h-screen">  

  {{-- Div del menú --}}
  <div class="flex flex-col mx-24 my-16">
    <div class="input">

      <button class="value"> 
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>              
        Inicio
      </button>

      <button class="value"> 
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>        
        Cuenta
      </button>
  
      <button class="value">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
        </svg>        
        Seguimiento
      </button>
  
      <button class="value">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
        </svg>
        Meditación
      </button>
  
      <button class="value">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
        </svg>
        
        Comunidad y Foros
      </button>
  
      <button class="value">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" />
        </svg>      
          Cerrar sesión
        </button>
        
      </div>
  </div>
    
    {{-- Fin  Div del menú --}}

    {{-- Inicio de Div del personaje  --}}

      <div class="flex items-center justify-center mx-auto my-auto  " >
        
        
        <img src="{{ asset('images/neco.png')}}" class="justify-center w-auto h-auto" alt="Neco">
    
      </div>

    {{-- Fin de Div del personaje --}}

    {{-- Inicio de Div de los colores --}}

    <div class="flex flex-col ">
      
      {{-- Circulo principal --}}
      <div class="mx-auto my-auto">
        <form action="">          
          <div class="wrapper">

            <input type="checkbox" id="toogle" class="hidden-trigger">

            <label for="toogle" class="circle">
              {{-- Este es el simbolo de más --}}
              
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
  </div>
  {{-- Fin de Div de los colores --}}  

</div>

<script>
  function cambiarColor(color){
    var colorFondo = color;
    document.body.style.backgroundColor = colorFondo;
  }
</script>

</body>
</html>