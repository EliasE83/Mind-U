@extends('layouts.template')

@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">

{{-- Div del menú --}}
@component('components.newmenu')
@endcomponent
{{-- Fin  Div del menú --}}

    <div class="flex flex-auto items-center justify-center">
        <div class="bg-purple-200 rounded-3xl p-8 w-11/12 max-w-5xl">
            <h2 class="text-3xl font-semibold mb-6 text-center text-purple-800">¿CÓMO TE SIENTES HOY?</h2>
            <form action="{{ route('seguimientos.store') }}" method="POST">
                @csrf
                <div class="bg-purple-400 rounded-3xl p-8 mb-6 min-h-[200px]">
                    <textarea name="feelings_text" id="feelingsText" class="w-full h-full bg-transparent text-white placeholder-white::placeholder focus:outline-none resize-none text-lg" placeholder="Escribe cómo te sientes hoy..."></textarea>
                </div>
                <button type="button" class="bg-purple-400 text-white rounded-3xl py-3 px-6 w-full mb-6 text-lg" onclick="openModal()">REGISTRAR EMOCIONES</button>
                <div class="flex items-center mb-6">
                    <span class="text-lg text-purple-800 mr-4">PROGRESO</span>
                    <div class="flex-grow bg-purple-300 rounded-full h-6">
                        <div id="progressBar" class="bg-purple-500 h-6 rounded-full transition-all duration-500" style="width: 0%;"></div>
                    </div>
                </div>

                {{-- Ventana Emergente --}}
                <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-purple-200 rounded-3xl p-8 w-11/12 max-w-6xl">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full md:w-1/2 px-4 mb-6">
                                <h2 class="text-2xl font-semibold mb-4 text-center text-purple-800">¿Algún momento en el que te enfrentaste a un desafío?</h2>
                                <div class="bg-purple-400 rounded-3xl p-6 h-[300px] flex flex-col justify-between">
                                    <div>
                                        <div class="flex justify-around mb-4">
                                            <button type="button" id="btnYes" class="bg-red-500 text-white rounded-full w-16 h-16 text-lg transition-colors duration-300" onclick="selectChallenge(true)">Sí</button>
                                            <button type="button" id="btnNo" class="bg-red-500 text-white rounded-full w-16 h-16 text-lg transition-colors duration-300" onclick="selectChallenge(false)">No</button>
                                            <input type="hidden" name="challenge_faced" id="challengeFaced">
                                        </div>
                                        <p class="text-white text-center mb-4 text-lg">¿Qué emoción sentiste al enfrentarte?</p>
                                    </div>
                                    <div class="flex justify-between">
                                        <div id="emotion_very_sad" class="w-14 h-14 bg-red-600 rounded-full cursor-pointer flex items-center justify-center text-2xl transition-transform duration-300" onclick="selectEmotion('very_sad')">😢</div>
                                        <div id="emotion_sad" class="w-14 h-14 bg-orange-400 rounded-full cursor-pointer flex items-center justify-center text-2xl transition-transform duration-300" onclick="selectEmotion('sad')">😕</div>
                                        <div id="emotion_neutral" class="w-14 h-14 bg-yellow-300 rounded-full cursor-pointer flex items-center justify-center text-2xl transition-transform duration-300" onclick="selectEmotion('neutral')">😐</div>
                                        <div id="emotion_happy" class="w-14 h-14 bg-blue-300 rounded-full cursor-pointer flex items-center justify-center text-2xl transition-transform duration-300" onclick="selectEmotion('happy')">😊</div>
                                        <div id="emotion_very_happy" class="w-14 h-14 bg-green-400 rounded-full cursor-pointer flex items-center justify-center text-2xl transition-transform duration-300" onclick="selectEmotion('very_happy')">😄</div>
                                    </div>
                                    <input type="hidden" name="selected_emotion" id="selectedEmotion">
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 px-4 mb-6">
                                <h2 class="text-2xl font-semibold mb-4 text-center text-purple-800">Más preguntas</h2>
                                <div class="bg-purple-400 rounded-3xl p-6 h-[300px] flex flex-col justify-between">
                                    <textarea name="best_part" class="w-full p-4 rounded text-lg mb-4 flex-grow" placeholder="¿Qué fue lo mejor de tu día?"></textarea>
                                    <textarea name="learned_today" class="w-full p-4 rounded text-lg flex-grow" placeholder="¿Qué aprendiste hoy?"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="bg-purple-400 text-white rounded-3xl py-2 px-4 w-full mb-4" onclick="closeModal()">REGISTRAR EMOCIONES</button>
                        <button type="submit" class="bg-teal-500 text-white rounded-3xl py-2 px-4 w-full mb-4">GUARDAR</button>
                    </div>
                </div>
                {{-- Fin Ventana Emergente --}}
            </form>
        </div>
    </div>
</div>
{{-- Fin de Div principal --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
let challengeFaced = null;
let selectedEmotion = null;

function openModal() {
    document.getElementById('modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('modal').classList.add('hidden');
    updateProgress();
}

function selectChallenge(faced) {
    challengeFaced = faced;
    document.getElementById('challengeFaced').value = faced ? 1 : 0;
    document.getElementById('btnYes').classList.toggle('bg-green-500', faced);
    document.getElementById('btnNo').classList.toggle('bg-green-500', !faced);
    document.getElementById('btnYes').classList.toggle('bg-red-500', !faced);
    document.getElementById('btnNo').classList.toggle('bg-red-500', faced);
    updateProgress();
}

function selectEmotion(emotion) {
    selectedEmotion = emotion;
    document.getElementById('selectedEmotion').value = emotion;
    document.querySelectorAll('[id^="emotion_"]').forEach(el => {
        el.classList.remove('scale-125', 'border-4', 'border-white');
    });
    document.getElementById(`emotion_${emotion}`).classList.add('scale-125', 'border-4', 'border-white');
    updateProgress();
}

function updateProgress() {
    let progress = 0;
    if (document.getElementById('feelingsText').value.trim() !== '') progress += 25;
    if (challengeFaced !== null) progress += 25;
    if (selectedEmotion !== null) progress += 25;
    if (document.querySelectorAll('#modal textarea')[0].value.trim() !== '' ||
        document.querySelectorAll('#modal textarea')[1].value.trim() !== '') progress += 25;
    document.getElementById('progressBar').style.width = `${progress}%`;
}

function save() {
    Swal.fire({
        title: '¡Guardado exitoso!',
        text: 'Tus emociones han sido registradas correctamente.',
        icon: 'success',
        confirmButtonText: 'OK',
        background: '#E9D5FF',
        confirmButtonColor: '#14B8A6',
        iconColor: '#7E22CE'
    }).then((result) => {
        if (result.isConfirmed) {
            // Limpiar formularios
            document.getElementById('feelingsText').value = '';
            document.querySelectorAll('#modal textarea').forEach(textarea => textarea.value = '');
            challengeFaced = null;
            selectedEmotion = null;
            document.getElementById('btnYes').classList.remove('bg-green-500');
            document.getElementById('btnNo').classList.remove('bg-green-500');
            document.getElementById('btnYes').classList.add('bg-red-500');
            document.getElementById('btnNo').classList.add('bg-red-500');
            document.querySelectorAll('[id^="emotion_"]').forEach(el => {
                el.classList.remove('scale-125', 'border-4', 'border-white');
            });
            // Actualizar progreso y cerrar modal
            updateProgress();
            closeModal();
        }
    });
}

// Actualizar progreso cuando se escribe en los textareas
document.getElementById('feelingsText').addEventListener('input', updateProgress);
document.querySelectorAll('#modal textarea').forEach(textarea => {
    textarea.addEventListener('input', updateProgress);
});

// Inicializar la barra de progreso
updateProgress();
</script>

@endsection
