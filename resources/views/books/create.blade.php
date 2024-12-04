<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Afegir nou llibre</title>
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
<body class="bg-gray-900 text-gray-100">
<main>
    <section class="py-12">
        <div class="max-w-3xl mx-auto bg-gray-800 shadow-lg rounded-lg p-8">
            <h1 class="text-3xl font-bold text-center mb-8 text-gray-50">Afegir nou llibre</h1>
            <form action="/books/store" method="POST" class="space-y-6">
                <!-- Títol -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Títol</label>
                    <input type="text" name="name" id="name"
                           class="w-full px-4 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                           placeholder="Introdueix el títol" required>
                </div>

                <!-- Autor -->
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-300 mb-2">Autor</label>
                    <input type="text" name="author" id="author"
                           class="w-full px-4 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                           placeholder="Introdueix l'autor" required>
                </div>

                <!-- Any -->
                <div>
                    <label for="releaseYear" class="block text-sm font-medium text-gray-300 mb-2">Any</label>
                    <input type="number" name="releaseYear" id="releaseYear"
                           class="w-full px-4 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                           placeholder="Introdueix l'any de publicació" required>
                </div>

                <!-- Botons -->
                <div class="flex justify-between items-center">
                    <a href="/home" class="bg-gray-600 text-gray-100 px-6 py-2 rounded-lg hover:bg-gray-500 transition">
                        Tornar a Home
                    </a>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-500 transition">
                        Crear
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
<footer class="bg-black text-gray-400 py-6 px-4">
    <div class="text-center">
        <p>© 2024 Projecte Videojocs i Llibres - Creat per Jean</p>
    </div>
</footer>
</body>
</html>
