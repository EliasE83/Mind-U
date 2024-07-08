@extends('layouts.template')

@section('content')

<div class="flex w-full h-screen">
    @component('components.newmenu')
    @endcomponent

    <div class="flex flex-auto items-center justify-center p-4">
        <div class="bg-purple-200 rounded-3xl p-6 w-11/12 max-w-4xl">
            <div class="flex flex-col md:flex-row w-full space-y-4 md:space-y-0 md:space-x-4">
                <div class="w-full md:w-1/3">
                    <div class="bg-purple-400 rounded-3xl p-6">
                        <h2 class="text-2xl font-semibold mb-4 text-center text-purple-800">Grupos</h2>
                        <ul class="list-none p-0 space-y-2">
                            <li class="bg-purple-300 rounded-3xl p-2 flex justify-between items-center cursor-pointer" data-group="1">
                                Group 1
                                <span class="bg-teal-500 text-white rounded-full px-3 py-1 text-sm">Mensaje</span>
                            </li>
                            <li class="bg-purple-300 rounded-3xl p-2 flex justify-between items-center cursor-pointer" data-group="2">
                                Group 2
                                <span class="bg-teal-500 text-white rounded-full px-3 py-1 text-sm">27 nov</span>
                            </li>
                            <li class="bg-purple-300 rounded-3xl p-2 flex justify-between items-center cursor-pointer" data-group="3">
                                Group 3
                                <span class="bg-teal-500 text-white rounded-full px-3 py-1 text-sm">Mensaje</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-2/3">
                    <div class="bg-purple-400 rounded-3xl p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 id="groupName" class="text-2xl font-semibold text-purple-800">Grupo 1</h2>
                            <span id="groupStatus" class="text-purple-600">Activo hace 2 minutos</span>
                        </div>
                        <div id="messages" class="bg-white rounded-3xl p-6 mb-4 h-64 overflow-y-auto">
                            <!-- Messages will be loaded dynamically here -->
                        </div>
                        <form id="messageForm" class="flex">
                            <input type="text" id="messageInput" class="form-control flex-grow rounded-3xl py-2 px-4 mr-2" placeholder="Escribe tu mensaje aquí">
                            <button class="bg-teal-500 text-white rounded-3xl py-2 px-4" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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

    function loadMessages(groupId) {
        const messagesContainer = document.getElementById('messages');
        messagesContainer.innerHTML = '';

        const groupMessages = messages[groupId];
        groupMessages.forEach(message => {
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', 'bg-purple-200', 'rounded-3xl', 'p-2', 'mb-2');
            messageElement.innerHTML = `
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-purple-500 rounded-full mr-2"></div>
                    <div>
                        <strong>${message.user}</strong>
                        <small class="text-purple-600 ml-2">${message.time}</small>
                    </div>
                </div>
                <p class="mt-1">${message.content}</p>
            `;
            messagesContainer.appendChild(messageElement);
        });
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function changeGroup(groupId) {
        const group = groups.find(group => group.id === groupId);
        document.getElementById('groupName').textContent = group.name;
        document.getElementById('groupStatus').textContent = group.status;
        loadMessages(groupId);
    }

    document.querySelectorAll('[data-group]').forEach(item => {
        item.addEventListener('click', () => {
            const groupId = parseInt(item.dataset.group);
            changeGroup(groupId);
        });
    });

    document.getElementById('messageForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const messageInput = document.getElementById('messageInput');
        const message = messageInput.value.trim();
        if (message) {
            sendMessage(message);
            messageInput.value = '';
        }
    });

    function sendMessage(message) {
        // Placeholder for sending message to server
        console.log('Sending message:', message);
        // After sending, you would typically receive a response from the server
        // and then call a function to add the new message to the UI
        addMessageToUI({
            user: 'You',
            content: message,
            time: new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})
        });
    }

    function addMessageToUI(message) {
        const messagesContainer = document.getElementById('messages');
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', 'bg-purple-200', 'rounded-3xl', 'p-2', 'mb-2');
        messageElement.innerHTML = `
            <div class="flex items-center">
                <div class="w-8 h-8 bg-purple-500 rounded-full mr-2"></div>
                <div>
                    <strong>${message.user}</strong>
                    <small class="text-purple-600 ml-2">${message.time}</small>
                </div>
            </div>
            <p class="mt-1">${message.content}</p>
        `;
        messagesContainer.appendChild(messageElement);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    // Function to simulate receiving a new message (for demo purposes)
    function simulateNewMessage() {
        const newMessage = {
            user: 'User ' + Math.floor(Math.random() * 10),
            content: 'This is a simulated new message.',
            time: new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})
        };
        addMessageToUI(newMessage);
    }

    // Simulate receiving a new message every 10 seconds (for demo purposes)
    setInterval(simulateNewMessage, 10000);

    // Load initial group
    changeGroup(1);
</script>

@endsection
