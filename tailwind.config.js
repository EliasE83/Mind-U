/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        // ... Agregar colores personalizados
        fondo: '#CB6DF0'
      }
    },
  },
  plugins: [
    // ... Plugin para formularios de tailwind
    // ... require('@tailwindcss/forms'),
  ],
}

/* Para importar los estilos a las vistas usar el siguiente código 
@vite('resources/css/estilo.css') */