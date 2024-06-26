<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mind U</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @stack('head')
</head>
<body class="h-full" style="background-color: #FCF4D8;">

{{-- Nav --}}
@include('partials.navbar')
{{-- Fin Nav --}}

@yield('content')


</body>

</html>