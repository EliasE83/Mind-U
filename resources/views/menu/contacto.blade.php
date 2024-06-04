@extends('layouts.template')


@push('head')
@vite('resources/css/contacto.css')
@vite('resources/js/contacto.js')
@endpush


@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">  

{{-- Div del menú --}}
@component('components.newmenu')
@endcomponent
{{-- Fin  Div del menú --}}


    <div class="flex flex-auto items-center justify-center">

        <div class="container">
        <h1 class="text-4xl font-bold text-center mb-5 ">¿Cómo podemos ayudarte?</h1>
            <h2>Frequently Asked Questions</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we ever discover aliens?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much does the Earth weigh?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do airplanes stay up?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
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

