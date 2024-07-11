@extends('layouts.template')

@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">

{{-- Div del menú --}}
@component('components.newmenu')
@endcomponent
{{-- Fin  Div del menú --}}


    <div class="flex flex-auto items-center justify-center">
        <div class="bg-purple-200 rounded-3xl p-6 w-11/12 max-w-4xl">
            <h2 class="text-2xl font-semibold mb-4 text-center text-purple-800">¿CÓMO TE SIENTES HOY?</h2>
            <div class="bg-purple-400 rounded-3xl p-6 mb-4 min-h-[150px]">
                <p class="text-white">Hoy me siento bastante bien. Esta mañana tuve una reunión importante en el trabajo y, aunque estaba nervioso al principio, logré presentar mis ideas con claridad. Mis colegas fueron muy receptivos y eso me hizo sentir valorado. Por la tarde, salí a caminar al parque y el clima estaba perfecto, lo que me ayudó a relajarme y a reflexionar sobre lo positivo del día.</p>
            </div>
            <button class="bg-purple-400 text-white rounded-3xl py-2 px-4 w-full mb-4" onclick="openModal()">REGISTRAR EMOCIONES</button>
            <div class="flex items-center mb-4">
                <span class="text-sm text-purple-800 mr-2">PROGRESO</span>
                <div class="flex-grow bg-purple-300 rounded-full h-4">
                    <div class="bg-purple-500 h-4 rounded-full" style="width: 50%;"></div>
                </div>
            </div>
            <button class="bg-teal-500 text-white rounded-3xl py-2 px-4 float-right">GUARDAR</button>
        </div>
    </div>

</div>
{{-- Fin de Div principal --}}

{{-- Ventana Emergente --}}
<div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-purple-200 rounded-3xl p-6 w-3/4 max-w-xl">
        <h2 class="text-2xl font-semibold mb-4 text-center text-purple-800">¿CÓMO TE SIENTES HOY?<br>¿Algún momento en el que te enfrentaste a un desafío?</h2>
        <div class="bg-purple-400 rounded-3xl p-6 mb-4">
            <div class="flex justify-around mb-4">
                <button class="bg-red-500 text-white rounded-full w-12 h-12 text-sm">Sí</button>
                <button class="bg-red-500 text-white rounded-full w-12 h-12 text-sm">No</button>
            </div>
            <p class="text-white text-center mb-4">¿Qué emoción sentiste al enfrentarte?</p>
            <div class="flex justify-between">
                <div class="w-10 h-10 bg-red-600 rounded-full"></div>
                <div class="w-10 h-10 bg-orange-400 rounded-full"></div>
                <div class="w-10 h-10 bg-yellow-300 rounded-full"></div>
                <div class="w-10 h-10 bg-blue-300 rounded-full"></div>
                <div class="w-10 h-10 bg-green-400 rounded-full"></div>
            </div>
        </div>
        <button class="bg-purple-400 text-white rounded-3xl py-2 px-4 w-full mb-4" onclick="closeModal()">REGISTRAR EMOCIONES</button>
        <button class="bg-purple-400 text-white rounded-3xl py-2 px-4 w-full mb-4">MÁS PREGUNTAS...</button>
        <div class="flex items-center mb-4">

        </div>
        <div class="flex justify-between">
            <button class="bg-teal-500 text-white rounded-3xl py-2 px-4" onclick="closeModal()">GUARDAR</button>

        </div>
    </div>
</div>
{{-- Fin Ventana Emergente --}}

{{-- Footer --}}
{{-- Fin Footer --}}

<script>
function openModal() {
    document.getElementById('modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('modal').classList.add('hidden');
}
</script>

@endsection
