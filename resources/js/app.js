import './bootstrap';

/* Funcion para el menú */
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('boton');
    const menu = document.querySelector('.cards');
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

document.addEventListener('DOMContentLoaded', function () {

    // Función para cambiar el color de fondo
    function cambiarColor(color) {
        const body = document.querySelector('body');
        body.style.backgroundColor = color;
    }

    // Recuperar el color almacenado en localStorage cuando la página se carga
    const colorAlmacenado = localStorage.getItem('colorFondo');
    if (colorAlmacenado) {
        cambiarColor(colorAlmacenado);
    }

    // Obtener todos los botones con la clase "sub-circle"
    const botones = document.querySelectorAll('.sub-circle');
    
    // Iterar sobre cada botón y agregar un controlador de eventos clic
    botones.forEach(function(boton) {
        boton.addEventListener('click', function() {
            // Obtener el color del botón
            const color = this.querySelector('input').value;
            // Llamar a la función cambiarColor con el color obtenido
            cambiarColor(color);
            // Guardar el color seleccionado en localStorage
            localStorage.setItem('colorFondo', color);
        });
    });
});

document.getElementById("inicio").addEventListener("click", function() {
    window.location.href = "/index";
});

document.getElementById("cuenta").addEventListener("click", function() {
    window.location.href = "/cuenta";
});

document.getElementById("seguimiento").addEventListener("click", function() {
    window.location.href = "/seguimiento";
});

document.getElementById("meditacion").addEventListener("click", function() {
    window.location.href = "/meditacion";
});

document.getElementById("comunidad").addEventListener("click", function() {
    window.location.href = "/comunidad";
});
document.getElementById("contacto").addEventListener("click", function() {
    window.location.href = "/contacto";
});

document.getElementById("cerrar").addEventListener("click", function() {
    window.location.href = "/";
});

