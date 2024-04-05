@extends('layouts.template')

@section('content')


<div class="flex  w-full h-screen items-center justify-center">
    <div class="flex flex-col items-center justify-center">

        <img src="{{asset('images/logo.png')}}" alt="" class="h-auto w-auto">

        <div class="flex flex-col items-center justify-center">                      

            <p class="text-2xl">
                Bienvenido a Mind U, la plataforma integral para la salud mental.
            </p>
                        
            <div class="flex flex-col items-center justify-center">
                <form action="/prueba">

                    <p class="text-2xl">
                        Ingresa tu usuario y contraseña para ingresar
                    </p>
                                
                            
                    <div class="flex flex-col items-center mt-5">
                        <label for="username" class="mb-1"><b>Usuario</b></label>
                        <input type="text" class="w-52 h-10 border-2 border-black rounded-lg px-2" placeholder="Escribe aquí..." id="username" required>
                    </div>
                            
                    <div class="flex flex-col items-center mt-5">
                        <label for="password" class="mb-1"><b>Contraseña</b></label>
                        <input type="password" class="w-52 h-10 border-2 border-black rounded-lg px-2" placeholder="Escribe aquí..." id="password" required>
                    </div>                                
                                
                    <div class="flex items-center justify-center mt-5">
                        <button type="submit" class="h-10 w-52 bg-fondo text-white rounded-lg">Enviar</button>
                    </div>  
                            
                </form>                                                 
            </div>
        </div>
    </div>
</div>

@endsection