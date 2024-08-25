<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bem vindo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="p-32">
        <h1 class="text-6xl w-full text-center drop-shadow-lg">
            @yield('title')
        </h1>
        <div class="flex items-center justify-center">
            <div class="m-10 rounded-xl border p-14 shadow-2xl w-fit">
                @yield('content')
            </div>
        </div>
    </body>
</html>
