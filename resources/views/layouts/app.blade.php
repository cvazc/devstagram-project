<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel - @yield('title')</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">DevStagram</h1>
            <nav class="flex gap-2 item-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="/login">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="/register">Crear Cuenta</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('title')
        </h2>
        @yield('content')
    </main>

    <footer class="mt-10 text-center p-5 text-grey-500 font-bold uppercase">
        DevStagram - Todos los derechos reservador &copy {{ now()->year }}
    </footer>
</body>

</html>