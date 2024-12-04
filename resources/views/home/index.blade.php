<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Benvinguts al Projecte' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
<!-- Navbar -->
<header class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
        <h1 class="text-2xl font-bold">Projecte Videojocs i Llibres</h1>
        <nav class="space-x-4">
            <a href="/" class="hover:underline">Inici</a>
            <a href="/videojoc" class="hover:underline">Videojocs</a>
            <a href="/books" class="hover:underline">Llibres</a>
        </nav>
    </div>
</header>

<!-- Main content -->
<main class="py-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-semibold mb-6 text-center">Qué pots fer?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Gestionar Videojocs -->
            <a href="/videojoc" class="flex flex-col items-center justify-center bg-white shadow-lg rounded-lg p-6 hover:shadow-2xl transition-shadow h-64 w-full">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Gestionar Videojocs</h3>
                <p class="text-gray-700 text-center">Crea, edita i elimina informació sobre videojocs de manera fàcil i intuïtiva.</p>
            </a>

            <!-- Gestionar Llibres -->
            <a href="/books" class="flex flex-col items-center justify-center bg-white shadow-lg rounded-lg p-6 hover:shadow-2xl transition-shadow h-64 w-full">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Gestionar Llibres</h3>
                <p class="text-gray-700 text-center">Gestiona i explora informació sobre llibres de manera senzilla.</p>
            </a>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-black text-gray-400 py-6 px-4 rounded-lg">
    <div class="text-center">
        <p>© 2024 Projecte Videojocs i Llibres - Creat per Jean</p>
    </div>
</footer>
</body>
</html>
