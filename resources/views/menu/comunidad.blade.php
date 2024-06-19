@extends('layouts.template')

@section('content')

{{-- Inicio de Div principal --}}
<div class="flex w-full h-screen">

{{-- Div del menú --}}
    @component('components.newmenu')
    @endcomponent
{{-- Fin  Div del menú --}}


    <div class="flex flex-auto items-center justify-center">

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Grupos</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center" data-group="1">
                        Group 1
                        <span class="badge badge-primary badge-pill">Mensaje</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center" data-group="2">
                        Group 2
                        <span class="badge badge-secondary badge-pill">27 nov</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center" data-group="3">
                        Group 3
                        <span class="badge badge-secondary badge-pill">Mensaje</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="groupName">Grupo 1</span>
                    <span id="groupStatus">Activo hace 2 minutos</span>
                </div>
                <div class="card-body">
                    <div id="messages" class="messages">
                        <!-- Los mensajes se cargarán dinámicamente aquí -->
                    </div>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Escribe tu mensaje aquí">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Datos de ejemplo para los grupos y mensajes
    const groups = [
        { id: 1, name: 'Group 1', status: 'Activo hace 2 minutos' },
        { id: 2, name: 'Group 2', status: 'Activo hace 15 minutos' },
        { id: 3, name: 'Group 3', status: 'Activo hace 30 minutos' }
    ];

    const messages = {
        1: [
            { user: 'User 1', content: 'Hola a todos!', time: '7:00 pm' },
            { user: 'User 2', content: 'Hola, ¿cómo están?', time: '7:10 pm' },
            { user: 'User 3', content: 'Todo bien, gracias por preguntar.', time: '7:20 pm' }
        ],
        2: [
            { user: 'User 4', content: '¿Alguien tiene novedades sobre el proyecto?', time: '10:00 am' },
            { user: 'User 5', content: 'Sí, ya casi está terminado.', time: '10:15 am' }
        ],
        3: [
            { user: 'User 6', content: '¿Cuándo es la próxima reunión?', time: '3:00 pm' },
            { user: 'User 7', content: 'Creo que es el próximo lunes.', time: '3:10 pm' }
        ]
    };

    // Función para cargar los mensajes de un grupo
    function loadMessages(groupId) {
        const messagesContainer = document.getElementById('messages');
        messagesContainer.innerHTML = '';

        const groupMessages = messages[groupId];
        groupMessages.forEach(message => {
            const messageElement = document.createElement('div');
            messageElement.classList.add('message');
            messageElement.innerHTML = `
                <strong>${message.user}:</strong>
                <span>${message.content}</span>
                <small class="text-muted">${message.time}</small>
            `;
            messagesContainer.appendChild(messageElement);
        });
    }

    // Función para cambiar de grupo
    function changeGroup(groupId) {
        const group = groups.find(group => group.id === groupId);
        document.getElementById('groupName').textContent = group.name;
        document.getElementById('groupStatus').textContent = group.status;
        loadMessages(groupId);
    }

    // Agregar evento de clic a los elementos de la lista de grupos
    const groupItems = document.querySelectorAll('.list-group-item');
    groupItems.forEach(item => {
        item.addEventListener('click', () => {
            const groupId = parseInt(item.dataset.group);
            changeGroup(groupId);
        });
    });

    // Cargar los mensajes del primer grupo al cargar la página
    changeGroup(1);
</script>
    </div>

</div>
{{-- Fin de Div principal --}}

{{-- Footer --}}
{{-- Fin Footer --}}

@endsection
