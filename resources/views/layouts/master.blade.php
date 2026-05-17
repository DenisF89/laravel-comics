<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titolo")</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    
    @include("partials.header")
    

    {{-- contenuto della pagina --}}
    <main>
    @yield("contenuto")
    </main>

    
    @include("partials.footer")
      
</body>
</html>