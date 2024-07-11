<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mind U</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="h-full" style="background-color: #FCF4D8;">
    <div class="flex  w-full h-screen items-center justify-center">
        <div class="flex flex-col items-center justify-center">
    
            <img src="{{asset('images/logo.png')}}" alt="" class="h-auto w-auto">
    
            <div class="flex flex-col items-center justify-center">                      
    
                <p class="text-2xl">
                    Bienvenido a Mind U, la plataforma integral para la salud mental.
                </p>
                            
                <div class="flex flex-col items-center justify-center">                                
                        <div class="flex items-center justify-center mt-5">
                            <a href="{{route('login.index')}}">
                                <button type="submit" class="h-10 w-52 bg-fondo text-white rounded-lg">Empezar</button>
                            </a>
                        </div>                                      
                </div>
    
            </div>
        </div>
    </div>
</body>
</html>
