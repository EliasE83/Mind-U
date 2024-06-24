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
                <textarea id="feelingsText" class="w-full h-full bg-transparent text-white placeholder-white::placeholder focus:outline-none resize-none" placeholder="Escribe cómo te sientes hoy..."></textarea>
            </div>
            <button class="bg-purple-400 text-white rounded-3xl py-2 px-4 w-full mb-4" onclick="openModal()">REGISTRAR EMOCIONES</button>
            <div class="flex items-center mb-4">
                <span class="text-sm text-purple-800 mr-2">PROGRESO</span>
                <div class="flex-grow bg-purple-300 rounded-full h-4 relative">
                    <div id="progressBar" class="bg-purple-500 h-4 rounded-full absolute" style="width: 0%;"></div>
                    <input type="range" id="progressSlider" class="appearance-none w-full h-4 bg-transparent absolute" min="0" max="100" value="0">
                </div>
            </div>
            <button class="bg-teal-500 text-white rounded-3xl py-2 px-4 float-right" onclick="save()">GUARDAR</button>
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
                <button id="btnYes" class="bg-red-500 text-white rounded-full w-12 h-12 text-sm" onclick="selectChallenge(true)">Sí</button>
                <button id="btnNo" class="bg-red-500 text-white rounded-full w-12 h-12 text-sm" onclick="selectChallenge(false)">No</button>
            </div>
            <p class="text-white text-center mb-4">¿Qué emoción sentiste al enfrentarte?</p>
            <div class="flex justify-between">
                <div class="w-10 h-10 bg-red-600 rounded-full cursor-pointer" onclick="selectEmotion('very_sad')"></div>
                <div class="w-10 h-10 bg-orange-400 rounded-full cursor-pointer" onclick="selectEmotion('sad')"></div>
                <div class="w-10 h-10 bg-yellow-300 rounded-full cursor-pointer" onclick="selectEmotion('neutral')"></div>
                <div class="w-10 h-10 bg-blue-300 rounded-full cursor-pointer" onclick="selectEmotion('happy')"></div>
                <div class="w-10 h-10 bg-green-400 rounded-full cursor-pointer" onclick="selectEmotion('very_happy')"></div>
            </div>
        </div>
        <button class="bg-purple-400 text-white rounded-3xl py-2 px-4 w-full mb-4" onclick="closeModal()">REGISTRAR EMOCIONES</button>
        <button class="bg-purple-400 text-white rounded-3xl py-2 px-4 w-full mb-4" onclick="showMoreQuestions()">MÁS PREGUNTAS...</button>
        <div id="moreQuestions" class="hidden mb-4">
            <textarea class="w-full p-2 rounded" placeholder="¿Qué fue lo mejor de tu día?"></textarea>
            <textarea class="w-full p-2 rounded mt-2" placeholder="¿Qué aprendiste hoy?"></textarea>
        </div>
        <div class="flex justify-between">
            <button class="bg-teal-500 text-white rounded-3xl py-2 px-4" onclick="closeModal()">GUARDAR</button>
        </div>
    </div>
</div>
{{-- Fin Ventana Emergente --}}

<script>
let progress = 0;
let challengeFaced = null;
let selectedEmotion = null;

function openModal() {
    document.getElementById('modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('modal').classList.add('hidden');
}

function selectChallenge(faced) {
    challengeFaced = faced;
    document.getElementById('btnYes').classList.toggle('bg-green-500', faced);
    document.getElementById('btnNo').classList.toggle('bg-green-500', !faced);
    updateProgress();
}

function selectEmotion(emotion) {
    selectedEmotion = emotion;
    updateProgress();
}

function updateProgress() {
    progress = parseInt(document.getElementById('progressSlider').value);
    document.getElementById('progressBar').style.width = `${progress}%`;
}

function showMoreQuestions() {
    document.getElementById('moreQuestions').classList.remove('hidden');
    document.getElementById('moreQuestions').classList.add('block');
    updateProgress();
}

function save() {
    // Aquí iría la lógica para guardar los datos
    alert('¡Datos guardados correctamente!');
}

// Actualizar progreso cuando se mueve el slider
document.getElementById('progressSlider').addEventListener('input', updateProgress);

// Inicializar la barra de progreso
updateProgress();
</script>

@endsection