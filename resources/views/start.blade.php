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
                    <div class="flex items-center justify-center mt-5">
                        <a href="/login">
                            <button type="submit" class="h-10 w-52 bg-fondo text-white rounded-lg">Empezar</button>
                        </a>
                    </div>                                      
            </div>

        </div>
    </div>
</div>

@endsection