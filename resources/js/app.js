import './bootstrap';

/* Funcion para el menú */
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('boton');
    const menu = document.querySelector('.menu');
    const div = document.querySelector('.menu-btn');

    menuBtn.addEventListener('click', function() {
        menu.classList.toggle('active');
        div.classList.toggle('disactive');
    });

    document.addEventListener('click', function(e) {
        if (!menu.contains(e.target) && !menuBtn.contains(e.target)) {
            menu.classList.remove('active');
            
            div.classList.remove('disactive');
        }
    });
});

/* Funcion para cambiar fondo */

document.addEventListener('DOMContentLoaded', function (){

    function cambiarColor(color) {
        const body = document.querySelector('body');
        const colorFondo = color;
        body.style.backgroundColor = colorFondo;
    }

    // Obtén todos los botones con la clase "sub-circle"
    const botones = document.querySelectorAll('.sub-circle');
    
    // Itera sobre cada botón y agrega un controlador de eventos clic
    botones.forEach(function(boton) {
        boton.addEventListener('click', function() {
            // Obtén el color del botón
            const color = this.querySelector('input').value;
            // Llama a la función cambiarColor con el color obtenido
            cambiarColor(color);
        });
    });
});

