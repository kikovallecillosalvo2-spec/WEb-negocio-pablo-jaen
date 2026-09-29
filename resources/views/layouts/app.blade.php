<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'NEXUS Café & Gaming | Tu partida empieza aquí' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Cybercafé moderno y vanguardista en Sevilla. Ordenadores gaming de alto rendimiento, café de especialidad, torneos y espacio para estudiar y trabajar.' }}">
    
    <!-- Tipografías de alta tecnología y legibilidad -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS propio del proyecto -->
    <link rel="stylesheet" href="{{ asset('css/nexus.css') }}">
    
    <!-- Favicon SVG con isotipo neón -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%23070a0f'/><polygon points='50,15 85,35 85,75 50,95 15,75 15,35' fill='none' stroke='%2310f576' stroke-width='8'/><path d='M36,65 L36,35 L64,65 L64,35' fill='none' stroke='%2310f576' stroke-width='8' stroke-linecap='round' stroke-linejoin='round'/></svg>">
</head>
<body class="site-body">
    <!-- Encabezado compartido mediante Blade -->
    @include('partials.header')

    <!-- Contenido dinámico de cada página -->
    <main class="main-content" id="main-content">
        @yield('content')
    </main>

    <!-- Pie de página compartido mediante Blade -->
    @include('partials.footer')

    <!-- Script de interactividad básica (menú móvil, interactividad ligera) -->
    <script src="{{ asset('js/nexus.js') }}"></script>
</body>
</html>
