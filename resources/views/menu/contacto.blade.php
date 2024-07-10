
@push('head')
@vite('resources/css/contacto.css')
@vite('resources/js/contacto.js')
@endpush


@section('content')
@extends('layouts.template')



<div class="flex w-full h-screen">  

@component('components.newmenu')
@endcomponent

    <div class="flex flex-auto items-center justify-center">
        <div class="container">
            <h2>PREGUNTAS FRECUENTES</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">Why is the moon sometimes out during the day?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">Why is the moon sometimes out during the day?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">Why is the moon sometimes out during the day?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <!-- Agrega más elementos de acordeón aquí -->
            </div>

            <div class="bottom-section">
                <div class="nueva-pregunta">
                    <h3>NUEVA PREGUNTA</h3>
                    <form>
                        <input type="text" placeholder="PREGUNTA">
                        <button type="submit">ENVIAR</button>
                    </form>
                </div>

                <div class="contactanos">
                    <h3>CONTACTANOS</h3>
                    <div class="franja"></div>
                    <div class="contacto-contenido">
                        <p>CORREO ELECTRONICO</p>
                        <p>MINDU@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Fin de Div principal --}}

{{-- Footer --}}    
{{-- Fin Footer --}}

@endsection

