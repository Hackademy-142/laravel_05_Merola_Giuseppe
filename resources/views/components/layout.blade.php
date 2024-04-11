<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Laravel 05'}}</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/css/style.css'])
</head>
<body>
    
    <x-navbar></x-navbar>
    <x-masthead></x-masthead>
    {{$slot}}

    @vite(['resources/js/app.js'])
</body>
</html>